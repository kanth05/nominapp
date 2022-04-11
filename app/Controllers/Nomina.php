<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;
use CodeIgniter\API\ResponseTrait;

use App\Models\Persona;
use App\Models\Tabulador;
use App\Models\PrimaAntiguedad;
use App\Models\PrimaProf;
use App\Models\Complemento;
use App\Models\NominaM;
use App\Models\NominaDetal;

class Nomina extends BaseController
{

    use ResponseTrait; //Para formatear la respuesta de salida para consumo del frontend

    public function index()
    {

        $nomina = new NominaM;
        $nominas = $nomina->findAll();

        $data = [
            'nominas' => $nominas
        ];

        return view('nominas/nominas', $data);
    }

    public function nueva(){

        $hoy    =  Time::now();
        
        $numQuincena = ( $hoy->day <= 15) ? 'I' : 'II';

        $data = $this->generarNomina();

        $data['mes'] = $hoy->toLocalizedString('MMMM');
        $data['quincena'] = $numQuincena;

        return view('nominas/nominaDetalle', $data);
 
    }

    public function nominaTotal($id){

        $data = [
            'id' => $id
        ];

        return view('nominas/nominaTotal', $data);

    }

    public function nominaDetal($idNomina){

        $hoy =  Time::now();
        $numQuincena = ( $hoy->day <= 15) ? 'I' : 'II';

        $db = db_connect();
        $nonimaDetal   = new NominaDetal;
        $empleados = $nonimaDetal->where('idNomina', $idNomina)->findAll();

        $arrEmpleados = [];

        foreach ($empleados as $empleado) {
            
            $sql = 'SELECT p.*, d.descripcion as departamento, c.descripcion as cargo, n.descripcion as tiponomina, b.descripcion as banco '.
               'FROM persona p '.
               'INNER JOIN departamento d '.
               'ON p.codDepartamento = d.codDepartamento '.
               'INNER JOIN denominacioncargo c '.
               'ON p.codCargoDen = c.codCargoDen '.
               'INNER JOIN tiponomina n '.
               'ON p.codTipoNomina = n.codTipoNomina '.
               'INNER JOIN banco b '.
               'ON p.codInstBanca = b.codInstBanca '.
               "WHERE p.status = 'ACT' ".
               "AND cedula = {$empleado->cedula}";             
        
            $arrEmpleado = $db->query($sql)->getResult();
            
            $empleado->tiponomina   = $arrEmpleado[0]->tiponomina;
            $empleado->nombres      = $arrEmpleado[0]->nombres;
            $empleado->apellidos    = $arrEmpleado[0]->apellidos;
            $empleado->cargo        = $arrEmpleado[0]->cargo;
            $empleado->departamento = $arrEmpleado[0]->departamento;
            $empleado->numCuenta    = $arrEmpleado[0]->numCuenta;
            $empleado->codInstBanca = $arrEmpleado[0]->codInstBanca;
            $empleado->banco        = $arrEmpleado[0]->banco;

            $arrEmpleados[] = $empleado;

        }

        $data = [
            'id'        => $idNomina,
            'mes'       => $hoy->toLocalizedString('MMMM'),
            'quincena'  => $numQuincena,
            'empleados' => $arrEmpleados
        ];

        return view('nominas/nominaDetalle', $data);

    }

    public function generarNomina(){

        $db = db_connect();

        $sql = 'SELECT p.*, d.descripcion as departamento, c.descripcion as cargo, n.descripcion as tiponomina, b.descripcion as banco '.
               'FROM persona p '.
               'INNER JOIN departamento d '.
               'ON p.codDepartamento = d.codDepartamento '.
               'INNER JOIN denominacioncargo c '.
               'ON p.codCargoDen = c.codCargoDen '.
               'INNER JOIN tiponomina n '.
               'ON p.codTipoNomina = n.codTipoNomina '.
               'INNER JOIN banco b '.
               'ON p.codInstBanca = b.codInstBanca '.
               "WHERE p.status = 'ACT' ".
               "AND p.cedula != '00001' ";             
        
        $arrEmpleados = $db->query($sql)->getResult();

        $arrNomina = [];

        foreach( $arrEmpleados as $empleado){
            
            $salario           = $this->buscaSalario( $empleado->codCargoDen );
            $anioFMLA          = $this->calculaAnios( $empleado->fecIngreso );
            $totalAntiguedad   = intval(  $anioFMLA ) + intval( $empleado->aniosAPN );                  
            $primaAntiguedad   = $this->buscaPrimaAnt( $totalAntiguedad );
            $primaProf         = $this->buscaPrimaProf( $empleado->codNivelAcademico );
            $diasLaborales     = $this->buscaDiasLaborales ( $empleado->fecIngreso );
            $sueldoBase        = $this->calculaSueldoBase( $salario, $diasLaborales );
            $primaProfAsig     = $this->calculaPrimaProf( $sueldoBase, $primaProf);
            $primaAntAsig      = $this->calculaPrimaAnt( $sueldoBase, $primaAntiguedad);
            $encargaduria      = ( !empty( $empleado->encargaduria) ) ? $empleado->encargaduria : 0;
            $primaHijos        = $this->calculaPrimaHijos( $empleado->numHijos );
            $primaBeca         = ( $empleado->indBecaEscolar  == 'S' ) ? $this->calculaPrimaBeca( $empleado->numHijos ) : 0;
            $primaDis          = ( $empleado->indDiscapacidad == 'S' ) ? $this->calculaPrimaDis( $empleado->numHijos ) : 0;
            $totalRemuneracion = $sueldoBase + $primaProfAsig + $primaAntAsig + $primaHijos + $encargaduria;
            $bonoVacacional    = ( $empleado->indVacaciones == 'S' ) ? $this->calcularVacaciones($sueldoBase, $primaProfAsig, $primaAntAsig, $encargaduria) : 0;
            $complementoSueldo = $this->buscaComplementoSueldo();
            $complementoEspecial    = $this->buscaComplementoesp();

            
            $empleado->salario         = $salario;
            $empleado->aniosFMA        = $anioFMLA;
            $empleado->antiguedad      = $totalAntiguedad;
            $empleado->primaAnt        = $primaAntiguedad;
            $empleado->primaProf       = $primaProf;
            $empleado->beca            = ( $empleado->indBecaEscolar == 'S' ) ? $empleado->numHijos : 0;
            $empleado->diasLaborales   = $diasLaborales;
            $empleado->sueldoBase      = $sueldoBase;
            $empleado->primaProfAsig   = $primaProfAsig;
            $empleado->primaAntAsig    = $primaAntAsig;
            $empleado->encargaduria    = 0;
            $empleado->primaHijos      = $primaHijos;
            $empleado->primaBeca       = $primaBeca;
            $empleado->primaDis        = $primaDis;
            $empleado->totRemuneracion = $totalRemuneracion;
            $empleado->bonoVacc        = $bonoVacacional;
            $empleado->complementoSueldo = $complementoSueldo;
            $empleado->complementoEspecial    = $complementoEspecial;
            
            $arrNomina[] = $empleado;

        }

        $data = [
            'empleados' => $arrNomina
        ];

        return $data;

    }

    public function crearNuevaNomina(){

        $hoy =  Time::now();

        $numQuincena = ( $hoy->day <= 15) ? 'I' : 'II';
        $mes         = $hoy->toLocalizedString('MMMM');
        $anio        = $hoy->toLocalizedString('yyyy');

        $nomina = new NominaM;

        // $where = [
        //     'mes'  => $mes,
        //     'anio' => $anio
        // ];

        // $existNomina = $nomina->where($where)->findAll();

        // if( $existNomina >= 2){

        //     $data = [ 'err' => 'Ya se han generado dos nominas para el mes que está transcurriendo' ];
        //     return $this->respond($data, 403);

        // }

        $insert = [
            'numQuincena' => $numQuincena,
            'anio'        => $anio,
            'mes'         => $mes
        ];

        $p = $nomina->insert($insert);

        $nomina->orderBy('idNomina', 'DESC');
        $idNomina = $nomina->first();

        $empleados = $this->generarNomina();

        foreach($empleados['empleados'] as $empleado){

            $nominaDetal = new NominaDetal;

            $insert = [ 
                'idNomina'            => $idNomina['idNomina'],
                'cedula'              => $empleado->cedula,
                'salario'             => $empleado->salario,
                'aniosFMA'            => $empleado->aniosFMA,
                'aniosAPN'            => $empleado->aniosAPN,
                'antiguedad'          => $empleado->antiguedad,
                'primaAnt'            => $empleado->primaAnt,
                'primaProf'           => $empleado->primaProf,
                'beca'                => $empleado->beca,
                'numHijos'            => $empleado->numHijos,
                'diasLaborales'       => $empleado->diasLaborales,
                'sueldoBase'          => $empleado->sueldoBase,
                'primaAntAsig'        => $empleado->primaProfAsig,
                'primaProfAsig'       => $empleado->primaAntAsig,
                'encargaduria'        => $empleado->encargaduria,
                'primaHijos'          => $empleado->primaHijos,
                'primaBeca'           => $empleado->primaBeca,
                'primaDis'            => $empleado->primaDis,
                'totRemuneracion'     => $empleado->totRemuneracion,
                'bonoVacc'            => $empleado->bonoVacc,
                'complementoSueldo'   => $empleado->complementoSueldo,
                'complementoEspecial' => $empleado->complementoEspecial,
                'bonoProteico'        => 0,
                'retroActivo'         => 0,
                'seguroSocial'        => 0,
                'faov'                => 0,
                'rpe'                 => 0,
                'tesoreriaSs'         => 0,
                'appSeguroSocial'     => 0,
                'appFaov'             => 0,
                'appRpe'              => 0,
                'appTesoreria'        => 0,
                'totAsignacion'       => 0,
                'toodeduccion'        => 0,
                'totApp'              => 0,
                'netoCobrar'          => 0
             ];

             $nominaDetal->insert($insert);

        };

        $data = [ 'msg' => 'La nomina ha sido creada', 'res' => $insert];
        return $this->respond($data, 200); //La funcion respond se usa gracias a ResponseTrait
        

    }

    public function buscaSalario($codCargoDen){

        $tabulador = new Tabulador();
        $where = "codCargoDen = '{$codCargoDen}' AND ( rango1 IS NULL OR (rango1 >= 0 AND rango1 <= 4) )";
        $salario = $tabulador->where($where)->findAll();

        return $salario[0]['mtomin'];

    }

    public function calculaAnios($anios){

        $ingreso    = Time::parse($anios, 'America/Chicago');
        $antiguedad = $ingreso->difference( Time::now() );
        
        return $antiguedad->years;

    }

    public function buscaPrimaAnt( $totalAnios ){

        $primaAnt = new PrimaAntiguedad;
        $prima = $primaAnt->where('anioAntiguedad', $totalAnios )->findAll();

        return $prima[0]['prima'];

    }

    public function buscaPrimaProf( $codNivelAcademico ){

        $primaProf = new PrimaProf;
        $prima = $primaProf->where('codNivelAcademico', $codNivelAcademico )->findAll();

        return $prima[0]['prima'];

    }

    public function buscaDiasLaborales( $fecIngreso){

        $complemento = new Complemento();
        $diasLaborales = $complemento->where('codTipoComplemento', '009')->findAll();
        return $diasLaborales[0]['monto'];
    }

    public function calculaSueldoBase( $salario, $diasLaborales ){

        $sueldoBase = ( $salario/30 )*$diasLaborales;

        return round( $sueldoBase, 2 );
    }

    public function calculaPrimaProf( $sueldoBase, $prima ){

        $primaProf = $sueldoBase*( intval( $prima )/100 );

        return round( $primaProf, 2 );
    }

    public function calculaPrimaAnt( $sueldoBase, $prima ){

        $primaAnt = $sueldoBase*( intval( $prima )/100 );

        return round( $primaAnt, 2 );
    }

    public function calculaPrimaHijos( $numHijos ){

        $complemento = new Complemento();
        $primaHijos = $complemento->where('codTipoComplemento', '003')->findAll();
        $totalPrimaHijos = $primaHijos[0]['monto']*$numHijos;
        return round( $totalPrimaHijos , 2 );
    }

    public function calculaPrimaBeca( $numHijos ){

        $complemento = new Complemento();
        $primaBeca = $complemento->where('codTipoComplemento', '005')->findAll();
        $totalPrimaBeca = $primaBeca[0]['monto']*$numHijos;
        return round( $totalPrimaBeca , 2 );
    }

    public function calculaPrimaDis( $numHijos ){

        $complemento = new Complemento();
        $primaDis = $complemento->where('codTipoComplemento', '004')->findAll();
        $totalPrimaDis = $primaDis[0]['monto']*$numHijos;
        return round( $totalPrimaDis , 2 );
    }

    public function calcularVacaciones($sueldoBase, $primaProfAsig, $primaAntAsig, $encargaduria){

        $vacaciones = ( ( ( ( $sueldoBase + $primaProfAsig + $primaAntAsig + $encargaduria ) * 2 ) / 30 ) * 50 );

        return round( $vacaciones , 2 );

    }

    public function buscaComplementoSueldo(){

        $complemento = new Complemento();
        $complementoSueldo = $complemento->where('codTipoComplemento', '008')->findAll();
        return round( $complementoSueldo[0]['monto'] , 2 );

    }

    public function buscaComplementoEsp(){

        $complemento = new Complemento();
        $complementoEsp = $complemento->where('codTipoComplemento', '006')->findAll();
        return round( $complementoEsp[0]['monto'] , 2 );

    }

}