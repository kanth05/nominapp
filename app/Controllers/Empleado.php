<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\I18n\Time;

use App\Models\EstadoCivil;
use App\Models\NivelAcademico;
use App\Models\Departamento;
use App\Models\Cargo;
use App\Models\CargoDen;
use App\Models\Banco;
use App\Models\TipoNomina;
use App\Models\Persona;
use App\Models\Estado;



class Empleado extends BaseController
{

    use ResponseTrait; //Para formatear la respuesta de salida para consumo del frontend

    public function index(){

        // $persona    = new Persona();
        // $personaRes = $persona->findAll();
        // $data       = [
        //     'empleados' => $personaRes
        // ];

        $db = db_connect();

        $sql = 'SELECT p.*, d.descripcion as departamento, c.descripcion as cargo '.
               'FROM persona p '.
               'INNER JOIN departamento d '.
               'ON p.codDepartamento = d.codDepartamento '.
               'INNER JOIN cargo c '.
               'ON p.codCargo = c.codCargo '.
               "WHERE p.cedula != '00001'";            
        
        $arrEmpleados = $db->query($sql)->getResult();

        $data = [
            'empleados' => $arrEmpleados
        ];

        return view('empleados/empleados', $data);
    }

    public function empleado($cedula = ''){

        $edoCivil     = new EstadoCivil();
        $nvlAcademico = new NivelAcademico();
        $departamento = new Departamento();
        $cargo        = new Cargo();
        $cargoDen     = new CargoDen();
        $banco        = new Banco();
        $tipoNomina   = new TipoNomina();
        $estado       = new Estado();
        $persona      = new Persona();
        //
        $arrEdoCivil      = $edoCivil->findAll();
        $arrNvlAcademico  = $nvlAcademico->findAll();
        $arrDepartamento  = $departamento->orderBy('descripcion', 'ASC')->findAll();
        $arrCargo         = $cargo->orderBy('descripcion', 'ASC')->findAll();
        $arrCargoDen      = $cargoDen->orderBy('tipoCargo', 'ASC')->findAll();
        $arrBanco         = $banco->orderBy('descripcion', 'ASC')->findAll();
        $arrTipoNomina    = $tipoNomina->orderBy('descripcion', 'ASC')->findAll();
        $arrEstado        = $estado->orderBy('descripcion', 'ASC')->findAll();
        //


        if(!empty($cedula)){

            $arrPersona = $persona->where('cedula', $cedula)->findAll();
            $data = [ 'cedula'          => $cedula,
                  'edoCivilSel'     => $arrEdoCivil,
                  'nvlAcademicoSel' => $arrNvlAcademico,
                  'departamentoSel' => $arrDepartamento,
                  'cargoSel'        => $arrCargo,
                  'cargoDenSel'     => $arrCargoDen,
                  'bancoSel'        => $arrBanco,
                  'tipoNominaSel'   => $arrTipoNomina,
                  'estadosSel'      => $arrEstado,
                  //
                  'status'          => $arrPersona[0]['status'],
                  'apellidos'       => $arrPersona[0]['apellidos'],
                  'nombres'         => $arrPersona[0]['nombres'],
                  'sexo'            => $arrPersona[0]['sexo'],
                  'fecNac'          => $arrPersona[0]['fecNac'],
                  'lugarNac'        => $arrPersona[0]['lugarNacimiento'],
                  'edoCivil'        => $arrPersona[0]['codEdoCivil'],
                  'tipoSangre'      => $arrPersona[0]['tipoSangre'],
                  'telefLocal'      => $arrPersona[0]['telefLocal'],
                  'telefCel'        => $arrPersona[0]['telefMovil'],
                  'email'           => $arrPersona[0]['email'],
                  'direccion'       => $arrPersona[0]['direccion'],
                  'sufragio'        => $arrPersona[0]['lugarSufraga'],
                  'emerNombre'      => $arrPersona[0]['nombrePersonaEmergencia'],
                  'telefEmer'       => $arrPersona[0]['telefPersonaEmergencia'],
                  'nlvAcademico'    => $arrPersona[0]['codNivelAcademico'],
                  'titulo'          => $arrPersona[0]['tituloAcademico'],
                  'aniosapn'        => $arrPersona[0]['aniosAPN'],
                  'ultTrabajo'      => $arrPersona[0]['ultimoTrabajoPublico'],
                  'fecIni'          => $arrPersona[0]['fecIngreso'],
                  'departamento'    => $arrPersona[0]['codDepartamento'],
                  'cargo'           => $arrPersona[0]['codCargo'],
                  'cargoDen'        => $arrPersona[0]['codCargoDen'],
                  'banco'           => $arrPersona[0]['codInstBanca'],
                  'tipoCuenta'      => $arrPersona[0]['tipoCuenta'],
                  'numCuenta'       => $arrPersona[0]['numCuenta'],
                  'tipoNomina'      => $arrPersona[0]['codTipoNomina'],
                  'numHijos'        => $arrPersona[0]['numHijos'],
                  'incapacidad'     => $arrPersona[0]['indDiscapacidad'],
                  'indVacaciones'   => $arrPersona[0]['indVacaciones'],
                  'becaEscolar'     => $arrPersona[0]['indBecaEscolar'],
                  'codEstado'       => $arrPersona[0]['codEstado'],
                  'encargaduria'    => $arrPersona[0]['encargaduria'],
                  'observaciones'   => $arrPersona[0]['observaciones']
                ];
        }else{
            
            $data = [ 'cedula'          => $cedula,
                  'edoCivilSel'     => $arrEdoCivil,
                  'nvlAcademicoSel' => $arrNvlAcademico,
                  'departamentoSel' => $arrDepartamento,
                  'cargoSel'        => $arrCargo,
                  'cargoDenSel'     => $arrCargoDen,
                  'bancoSel'        => $arrBanco,
                  'tipoNominaSel'   => $arrTipoNomina,
                  'estadosSel'      => $arrEstado,
                  //
                  'status'          => '',
                  'apellidos'       => '',
                  'nombres'         => '',
                  'sexo'            => '',
                  'fecNac'          => '',
                  'lugarNac'        => '',
                  'edoCivil'        => '',
                  'tipoSangre'      => '',
                  'telefLocal'      => '',
                  'telefCel'        => '',
                  'email'           => '',
                  'direccion'       => '',
                  'sufragio'        => '',
                  'emerNombre'      => '',
                  'telefEmer'       => '',
                  'nlvAcademico'    => '',
                  'titulo'          => '',
                  'aniosapn'        => '',
                  'ultTrabajo'      => '',
                  'fecIni'          => '',
                  'departamento'    => '',
                  'cargo'           => '',
                  'cargoDen'        => '',
                  'banco'           => '',
                  'tipoCuenta'      => '',
                  'numCuenta'       => '',
                  'tipoNomina'      => '',
                  'numHijos'        => '',
                  'incapacidad'     => '',
                  'indVacaciones'   => '',
                  'becaEscolar'     => '',
                  'codEstado'       => '',
                  'encargaduria'    => '',
                  'observaciones'   => ''
                ];
        }

        return view('empleados/empleado', $data);

    }

    public function guardar(){

        $persona = new Persona();

        $cedula          = $this->request->getPost('cedula');
        $status          = $this->request->getPost('status');
        $nombres         = $this->request->getPost('nombres');
        $apellidos       = $this->request->getPost('apellidos');
        $sexo            = $this->request->getPost('sexo');
        $codDepartamento = $this->request->getPost('departamento');
        $codCargo        = $this->request->getPost('cargo');
        $codCargoDen     = $this->request->getPost('cargoDen');
        $fecNac          = $this->request->getPost('fecNac');
        $direccion       = $this->request->getPost('direccion');
        $ultimoTrabajoPublicado = $this->request->getPost('ultTrabajo');
        $telfLocal       = $this->request->getPost('telefLocal');
        $telefMovil      = $this->request->getPost('telefCel');
        $codEstado       = $this->request->getPost('residencia');
        $lugarNacimiento = $this->request->getPost('lugarNac');
        $codEdoCivil     = $this->request->getPost('edoCivil');
        $tipoSangre      = $this->request->getPost('tipoSangre');
        $email           = $this->request->getPost('email');
        $nombrePersonaEmergencia = $this->request->getPost('emerNombre');
        $telefPersonaEmergencia = $this->request->getPost('telefEmer');
        $codNivelAcademico = $this->request->getPost('nlvAcademico');
        $tituloAcademico = $this->request->getPost('titulo');
        $fecIngreso      = $this->request->getPost('fecIni');
        $aniosAPN        = $this->request->getPost('aniosapn');
        $lugarSufraga    = $this->request->getPost('sufragio');
        $codInstBanca    = $this->request->getPost('banco');
        $tipoCuenta      = $this->request->getPost('tipoCuenta');
        $numCuenta       = $this->request->getPost('numCuenta');
        $numHijos        = $this->request->getPost('numHijos');
        $indBecaEscolar  = $this->request->getPost('becaEscolar');
        $indDiscapacidad = $this->request->getPost('incapacidad');
        $indVacaciones   = $this->request->getPost('vacaciones');
        $codTipoNomin    = $this->request->getPost('tipoNomina');
        $encargaduria    = $this->request->getPost('encargaduria');
        $observaciones   = $this->request->getPost('observaciones');

        $data = [];

        if( empty( $cedula ) || strlen( $cedula ) == 0 ){
            $data[] = [ 'err' => 'La cédula no puede estar vacía.', 'campo' => 'cedula'];
        }

        if( empty( $nombres ) || strlen( $nombres ) == 0 ){
            $data[] = [ 'err' => 'El nombre no puede estar vacía.', 'campo' => 'nombres'];
        }

        if( empty( $apellidos ) || strlen( $apellidos ) == 0 ){
            $data[] = [ 'err' => 'El apellido no puede estar vacía.', 'campo' => 'apellidos'];
        }

        if( empty( $codDepartamento ) || strlen( $codDepartamento ) == 0 ){
            $data[] = [ 'err' => 'El empleado debe tener un departamento asignado.', 'campo' => 'departamento'];
        }

        if( empty( $codCargo ) || strlen( $codCargo ) == 0 ){
            $data[] = [ 'err' => 'El cargo no puede estar vacía', 'campo' => 'cargo'];
        }

        if( empty( $codCargoDen ) || strlen( $codCargoDen ) == 0 ){
            $data[] = [ 'err' => 'El empleado debe tener una denominación de cargo asignada.', 'campo' => 'cargoDen'];
        }

        if( empty( $fecNac ) || strlen( $fecNac ) == 0 ){
            $data[] = [ 'err' => 'La fecha de nacimiento no puede estar vacía', 'campo' => 'fecNac'];
        }

        if( empty( $telefMovil ) || strlen( $telefMovil ) == 0 ){
            $data[] = [ 'err' => 'El número de teléfono celular no puede estar vacía', 'campo' => 'telefCel'];
        }

        if( empty( $codEstado ) || strlen( $codEstado ) == 0 ){
            $data[] = [ 'err' => 'Debe elegir un estado donde reside.', 'campo' => 'residencia'];
        }

        if( empty( $codEdoCivil ) || strlen( $codEdoCivil ) == 0 ){
            $data[] = [ 'err' => 'Debe seleccionar un estado civil.', 'campo' => 'edoCivil'];
        }

        if( empty( $codNivelAcademico ) || strlen( $codNivelAcademico ) == 0 ){
            $data[] = [ 'err' => 'Debe seleccionar un nivel académico.', 'campo' => 'nlvAcademico'];
        }

        if( empty( $fecIngreso ) || strlen( $fecIngreso ) == 0 ){
            $data[] = [ 'err' => 'Debe de indicar la fecha de ingreso.', 'campo' => 'fecIni'];
        }

        if( empty( $lugarSufraga ) || strlen( $lugarSufraga ) == 0 ){
            $data[] = [ 'err' => 'Debe de ingresar el lugar donde sufraga.', 'campo' => 'sufragio'];
        }

        if( empty( $codInstBanca ) || strlen( $codInstBanca ) == 0 ){
            $data[] = [ 'err' => 'Debe de indicar el banco al cual se va a depositar.', 'campo' => 'banco'];
        }

        if( empty( $tipoCuenta ) || strlen( $tipoCuenta ) == 0 ){
            $data[] = [ 'err' => 'Eliga un tipo de cuenta.', 'campo' => 'tipoCuenta'];
        }

        if( empty( $numCuenta ) || strlen( $numCuenta ) == 0 ){
            $data[] = [ 'err' => 'Debe ingresar un número de cuenta bancario.', 'campo' => 'numCuenta'];
        }

        if( empty( $codTipoNomin ) || strlen( $codTipoNomin ) == 0 ){
            $data[] = [ 'err' => 'Debe indicar el tipo de nómina que tendrá el empleado.', 'campo' => 'tipoNomina'];
        }

        $personaRes = $persona->where('cedula', $cedula)->findAll();

        if(count($personaRes) !== 0 ){
            $data[] = [ 'err' => 'Ya existe un empleado con la cédula registrada, verifique dicho registro.'];
        }

        $personaRes = $persona->where('email', $email)->findAll();

        if(count($personaRes) !== 0 ){
            $data[] = [ 'err' => 'Ya existe un empleado con el email registrado, verifique dicho registro.'];
        }

        if( count( $data ) != 0 ){
            return $this->respond($data, 200);
        }

        $insert = [
            'cedula'          => $cedula,
            'status'          => $status,
            'nombres'         =>  $nombres ,
            'apellidos'       => $apellidos,
            'sexo'            => $sexo ,
            'codDepartamento' => $codDepartamento,
            'codCargo'        => $codCargo,
            'codCargoDen'     => $codCargoDen,
            'fecNac'          => $fecNac,
            'direccion'       => $direccion,
            'ultimoTrabajoPublico' => $ultimoTrabajoPublicado,
            'telefLocal'      => $telfLocal,
            'telefMovil'      => $telefMovil,
            'codEstado'       => $codEstado,
            'lugarNacimiento' => $lugarNacimiento,
            'codEdoCivil'     => $codEdoCivil,
            'tipoSangre'      => $tipoSangre ,
            'email'           => $email,
            'nombrePersonaEmergencia' => $nombrePersonaEmergencia,
            'telefPersonaEmergencia'  => $telefPersonaEmergencia ,
            'codNivelAcademico'       => $codNivelAcademico,
            'tituloAcademico' => $tituloAcademico,
            'fecIngreso'      => $fecIngreso,
            'aniosAPN'        => $aniosAPN,
            'lugarSufraga'    => $lugarSufraga,
            'codInstBanca'    => $codInstBanca,
            'tipoCuenta'      => $tipoCuenta,
            'numCuenta'       => $numCuenta,
            'numHijos'        => $numHijos,
            'indBecaEscolar'  => $indBecaEscolar,
            'indDiscapacidad' => $indDiscapacidad,
            'indVacaciones'   => $indVacaciones,
            'codTipoNomina'   => $codTipoNomin,
            'encargaduria'    => $encargaduria,
            'observaciones'   => $observaciones
        ];

        $persona->insert($insert);

        $data = [ 'msg' => 'Empleado registrado con exito.', 'res' => $insert ];

        return $this->respond($data, 200); //La funcion respond se usa gracias a ResponseTrait

    }

    public function editar(){

        $persona = new Persona();

        $cedulaDB        = $this->request->getPost('cedulaDB');
        $cedula          = $this->request->getPost('cedula');
        $status          = $this->request->getPost('status');
        $nombres         = $this->request->getPost('nombres');
        $apellidos       = $this->request->getPost('apellidos');
        $sexo            = $this->request->getPost('sexo');
        $codDepartamento = $this->request->getPost('departamento');
        $codCargo        = $this->request->getPost('cargo');
        $codCargoDen     = $this->request->getPost('cargoDen');
        $fecNac          = $this->request->getPost('fecNac');
        $direccion       = $this->request->getPost('direccion');
        $ultimoTrabajoPublicado = $this->request->getPost('ultTrabajo');
        $telfLocal       = $this->request->getPost('telefLocal');
        $telefMovil      = $this->request->getPost('telefCel');
        $codEstado       = $this->request->getPost('residencia');
        $lugarNacimiento = $this->request->getPost('lugarNac');
        $codEdoCivil     = $this->request->getPost('edoCivil');
        $tipoSangre      = $this->request->getPost('tipoSangre');
        $email           = $this->request->getPost('email');
        $nombrePersonaEmergencia = $this->request->getPost('emerNombre');
        $telefPersonaEmergencia = $this->request->getPost('telefEmer');
        $codNivelAcademico = $this->request->getPost('nlvAcademico');
        $tituloAcademico = $this->request->getPost('titulo');
        $fecIngreso      = $this->request->getPost('fecIni');
        $aniosAPN        = $this->request->getPost('aniosapn');
        $lugarSufraga    = $this->request->getPost('sufragio');
        $codInstBanca    = $this->request->getPost('banco');
        $tipoCuenta      = $this->request->getPost('tipoCuenta');
        $numCuenta       = $this->request->getPost('numCuenta');
        $numHijos        = $this->request->getPost('numHijos');
        $indBecaEscolar  = $this->request->getPost('becaEscolar');
        $indDiscapacidad = $this->request->getPost('incapacidad');
        $indVacaciones   = $this->request->getPost('vacaciones');
        $codTipoNomin    = $this->request->getPost('tipoNomina');
        $encargaduria    = $this->request->getPost('encargaduria');
        $observaciones   = $this->request->getPost('observaciones');

        $data = [];

        if( empty( $cedula ) || strlen( $cedula ) == 0 ){
            $data = [ 'err' => 'La cédula no puede estar vacía.', 'campo' => 'cedula'];
        }

        if( empty( $nombres ) || strlen( $nombres ) == 0 ){
            $data = [ 'err' => 'El nombre no puede estar vacía.', 'campo' => 'nombres'];
        }

        if( empty( $apellidos ) || strlen( $apellidos ) == 0 ){
            $data = [ 'err' => 'El apellido no puede estar vacía.', 'campo' => 'apellidos'];
        }

        if( empty( $codDepartamento ) || strlen( $codDepartamento ) == 0 ){
            $data = [ 'err' => 'El empleado debe tener un departamento asignado.', 'campo' => 'departamento'];
        }

        if( empty( $codCargo ) || strlen( $codCargo ) == 0 ){
            $data = [ 'err' => 'El cargo no puede estar vacía', 'campo' => 'cargo'];
        }

        if( empty( $codCargoDen ) || strlen( $codCargoDen ) == 0 ){
            $data = [ 'err' => 'El empleado debe tener una denominación de cargo asignada.', 'campo' => 'cargoDen'];
        }

        if( empty( $fecNac ) || strlen( $fecNac ) == 0 ){
            $data = [ 'err' => 'La fecha de nacimiento no puede estar vacía', 'campo' => 'fecNac'];
        }

        if( empty( $telefMovil ) || strlen( $telefMovil ) == 0 ){
            $data = [ 'err' => 'El número de teléfono celular no puede estar vacía', 'campo' => 'telefCel'];
        }

        if( empty( $codEstado ) || strlen( $codEstado ) == 0 ){
            $data = [ 'err' => 'Debe elegir un estado donde reside.', 'campo' => 'residencia'];
        }

        if( empty( $codEdoCivil ) || strlen( $codEdoCivil ) == 0 ){
            $data = [ 'err' => 'Debe seleccionar un estado civil.', 'campo' => 'edoCivil'];
        }

        if( empty( $codNivelAcademico ) || strlen( $codNivelAcademico ) == 0 ){
            $data = [ 'err' => 'Debe seleccionar un nivel académico.', 'campo' => 'nlvAcademico'];
        }

        if( empty( $fecIngreso ) || strlen( $fecIngreso ) == 0 ){
            $data = [ 'err' => 'Debe de indicar la fecha de ingreso.', 'campo' => 'fecIni'];
        }

        if( empty( $lugarSufraga ) || strlen( $lugarSufraga ) == 0 ){
            $data = [ 'err' => 'Debe de ingresar el lugar donde sufraga.', 'campo' => 'sufragio'];
        }

        if( empty( $codInstBanca ) || strlen( $codInstBanca ) == 0 ){
            $data = [ 'err' => 'Debe de indicar el banco al cual se va a depositar.', 'campo' => 'banco'];
        }

        if( empty( $tipoCuenta ) || strlen( $tipoCuenta ) == 0 ){
            $data = [ 'err' => 'Eliga un tipo de cuenta.', 'campo' => 'tipoCuenta'];
        }

        if( empty( $numCuenta ) || strlen( $numCuenta ) == 0 ){
            $data = [ 'err' => 'Debe ingresar un número de cuenta bancario.', 'campo' => 'numCuenta'];
        }

        if( empty( $codTipoNomin ) || strlen( $codTipoNomin ) == 0 ){
            $data = [ 'err' => 'Debe indicar el tipo de nómina que tendrá el empleado.', 'campo' => 'tipoNomina'];
        }

        $where = [
            'cedula !=' => $cedulaDB,
            'cedula' => $cedula
        ];

        $personaRes = $persona->where($where)->findAll();

        if(count($personaRes) !== 0 ){
            $data = [ 'err' => 'Ya existe un empleado con la cédula registrada, verifique dicho registro.'];
        }

        $where = [
            'cedula !=' => $cedulaDB,
            'email'     => $email
        ];

        $personaRes = $persona->where($where)->findAll();

        if(count($personaRes) !== 0 ){
            $data = [ 'err' => 'Ya existe un empleado con el email registrado, verifique dicho registro.'];
        }

        if( isset( $data['err']) ){
            return $this->respond($data, 403);
        }

        $update = [
            'status'          => $status,
            'nombres'         =>  $nombres ,
            'apellidos'       => $apellidos,
            'sexo'            => $sexo ,
            'codDepartamento' => $codDepartamento,
            'codCargo'        => $codCargo,
            'codCargoDen'     => $codCargoDen,
            'fecNac'          => $fecNac,
            'direccion'       => $direccion,
            'ultimoTrabajoPublico' => $ultimoTrabajoPublicado,
            'telefLocal'      => $telfLocal,
            'telefMovil'      => $telefMovil,
            'codEstado'       => $codEstado,
            'lugarNacimiento' => $lugarNacimiento,
            'codEdoCivil'     => $codEdoCivil,
            'tipoSangre'      => $tipoSangre ,
            'email'           => $email,
            'nombrePersonaEmergencia' => $nombrePersonaEmergencia,
            'telefPersonaEmergencia'  => $telefPersonaEmergencia ,
            'codNivelAcademico'       => $codNivelAcademico,
            'tituloAcademico' => $tituloAcademico,
            'fecIngreso'      => $fecIngreso,
            'aniosAPN'        => $aniosAPN,
            'lugarSufraga'    => $lugarSufraga,
            'codInstBanca'    => $codInstBanca,
            'tipoCuenta'      => $tipoCuenta,
            'numCuenta'       => $numCuenta,
            'numHijos'        => $numHijos,
            'indBecaEscolar'  => $indBecaEscolar,
            'indDiscapacidad' => $indDiscapacidad,
            'indVacaciones'   => $indVacaciones,
            'codTipoNomina'   => $codTipoNomin,
            'encargaduria'    => $encargaduria,
            'observaciones'   => $observaciones
        ];

        $persona->set($update);
        $persona->where('cedula', $cedula);
        $persona->update();

        $data = [ 'msg' => 'Empleado se ha actualizado con exito.', 'res' => $update ];

        return $this->respond($data, 200); //La funcion respond se usa gracias a ResponseTrait

    }

    public function validaCedula(){

        $persona = new Persona();
        $cedula = $this->request->getPost('cedula');

        $res = $persona->where('cedula', $cedula)->findAll();

        if( count($res) !== 0 ){
            $data[] = [ 'err' => 'Ya existe un empleado con la cédula registrada, verifique dicho registro.', 'campo' => 'cedula'];
        }else{
            $data[] = ['msg' => 'Ok', 'campo' => 'cedula'];
        }

        return $this->respond($data, 200);

    }

        
    
}