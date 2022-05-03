<?php

namespace App\Controllers;

use App\Models\Complemento;
use App\Models\TabuladorM;
use App\Models\CargoDen;
use App\Models\PrimaAnt;
use CodeIgniter\API\ResponseTrait;

class Tabulador extends BaseController
{

    use ResponseTrait; //Para formatear la respuesta de salida para consumo del frontend

    public function index()
    {
        return view('bienvenido');
    }

    public function complementos(){

        $complemento = new Complemento();
        $complemento->orderBy('codTipoComplemento', 'ASC');
        $complementos = $complemento->findAll();

        $data = [
            'complemento' => [
                'sueldominimo'         => $complementos[0]['monto'],
                'cestatickets'         => $complementos[1]['monto'],
                'primashijos'          => $complementos[2]['monto'],
                'primadiscapacidad'    => $complementos[3]['monto'],
                'primabeca'            => $complementos[4]['monto'],
                'complementoespecial'  => $complementos[5]['monto'],
                'complementosueldos'   => $complementos[6]['monto'],
                'complementoalto'      => $complementos[7]['monto'],
                'diaslaborales'        => $complementos[8]['monto'],
                'complementoadicional' => $complementos[9]['monto']
            ]
        ];

        return view( 'tabuladores/complementos', $data );

    }

    public function primaAnt(){

        $primaAnio = new PrimaAnt();
        $arrPrimaAnio = $primaAnio->consultaPrimaAnt();
        $data = [
            'primaAnio' => $arrPrimaAnio
        ];

        return view( 'tabuladores/primaAnt', $data );

    }

    public function primaProf(){

        return view('tabuladores/primaProf');

    }

    public function tabAltoNivel(){

        $primaPerAdmin = new TabuladorM();
        $arrPrimaAdmin = $primaPerAdmin->consultaPrimaAlto();
        $arr = [];

        foreach ($arrPrimaAdmin as $key => $primaAdmin) {
            switch ($primaAdmin['codCargoDen']) {
                case 'ASE':
                    $primaAdmin['descripcion'] = 'Asistente ejecutivo';
                    $primaAdmin['cargoPublic'] = 'Jefe de división';
                    break;
                case 'COO':
                    $primaAdmin['descripcion'] = 'Coordinador';
                    $primaAdmin['cargoPublic'] = 'Coordinadores de area';
                    break;
                case 'DIG':
                    $primaAdmin['descripcion'] = 'Director general';
                    $primaAdmin['cargoPublic'] = 'Director general';
                    break;
                case 'DIR':
                    $primaAdmin['descripcion'] = 'Director';
                    $primaAdmin['cargoPublic'] = 'Director de linea';
                    break;
                default:
                    $primaAdmin['descripcion'] = 'Presidente';
                    $primaAdmin['cargoPublic'] = 'Máximas Aut. de órganos y entes';
                    break;
            }
            
            $arr[$key] = $primaAdmin;
        }

        $data = [
            'primaAdmin' => $arr
        ];

        return view('tabuladores/tabAltoNivel', $data);

    }

    public function tabPersonalAdmin(){

        $primaPerAdmin   = new TabuladorM();
        $tipoCargoDen    = new CargoDen();
        $arrPrimaAdmin   = $primaPerAdmin->consultaPrimaAdmin();
        $arrTipoCargoDen = $tipoCargoDen->consultaTipoCargoDen('PD');
 
        $data = [
            'primaAdmin' => $arrPrimaAdmin,
            'cargoDen'   => $arrTipoCargoDen
        ];

        return view('tabuladores/tabPersonalAdmin', $data);

    }

    public function tabPersonalOb(){

        $primaOb = new TabuladorM();
        $arrPrimaOb = $primaOb->consultaPrimaObrero();

        $data = [
            'primaOb' => [
                $arrPrimaOb[0],
                $arrPrimaOb[1],
                $arrPrimaOb[2],
                $arrPrimaOb[3],
                $arrPrimaOb[4],
                $arrPrimaOb[5],
                $arrPrimaOb[6],
                $arrPrimaOb[7],
                $arrPrimaOb[8],
                $arrPrimaOb[9],
            ]
        ];

        return view('tabuladores/tabPersonalOb', $data);

    }

    public function editarComplementos(){

        $complemento = new Complemento();

        $sueldominimo         = doubleval( str_replace( ',', '.', $this->request->getPost('sueldominimo') ) );
        $cestatickets         = doubleval( str_replace( ',', '.', $this->request->getPost('cestatickets') ) );
        $primashijos          = doubleval( str_replace( ',', '.', $this->request->getPost('primashijos') ) );
        $primadiscapacidad    = doubleval( str_replace( ',', '.', $this->request->getPost('primadiscapacidad') ) );
        $primabeca            = doubleval( str_replace( ',', '.', $this->request->getPost('primabeca') ) );
        $complementoespecial  = doubleval( str_replace( ',', '.', $this->request->getPost('complementoespecial') ) );
        $complementosueldos   = doubleval( str_replace( ',', '.', $this->request->getPost('complementosueldos') ) );
        $complementoalto      = doubleval( str_replace( ',', '.', $this->request->getPost('complementoalto') ) );
        $diaslaborales        = doubleval( str_replace( ',', '.', $this->request->getPost('diaslaborales') ) );
        $complementoadicional = doubleval( str_replace( ',', '.', $this->request->getPost('complementoadicional') ) );

        for ($i=1; $i < 11 ; $i++) { 
            
            switch ($i) {
                case 1:
                    $monto  = $sueldominimo;
                    $codigo = '001';
                    break;
                case 2:
                    $monto  = $cestatickets;
                    $codigo = '002';
                    break;
                case 3:
                    $monto  = $primashijos;
                    $codigo = '003';
                    break;
                case 4:
                    $monto  = $primadiscapacidad;
                    $codigo = '004';
                    break;
                case 5:
                    $monto  = $primabeca;
                    $codigo = '005';
                    break;
                case 6:
                    $monto  = $complementoespecial;
                    $codigo = '006';
                    break;
                case 7:
                    $monto  = $complementosueldos;
                    $codigo = '007';
                    break;
                case 8:
                    $monto  = $complementoalto;
                    $codigo = '008';
                    break;
                case 9:
                    $monto  = $diaslaborales;
                    $codigo = '009';
                    break;
                default:
                    $monto  = $complementoadicional;
                    $codigo = '010';
                    break;
            }

            if( $monto < 0 ) {
                $monto = 0;
            }

            $update = [
                'monto' => $monto 
            ];

            $complemento->set($update);
            $complemento->where('codTipoComplemento', $codigo);
            $complemento->update();
        }

        $data = [ 'msg' => 'Los complementos han sido actualizados.', 'res' => $update ];

        return $this->respond($data, 200);
        
    }

    public function editarPrimaOb(){

        for ($i=1; $i < 11 ; $i++) { 

            $montoMin = doubleval( str_replace( ',', '.', $this->request->getPost('min'.$i) ) );
            $montoMax = doubleval( str_replace( ',', '.', $this->request->getPost('max'.$i) ) );
            
            switch ($i) {
                case 1:
                    $codigo = 'O-1';
                    break;
                case 2:
                    $codigo = 'O-2';
                    break;
                case 3:
                    $codigo = 'O-3';
                    break;
                case 4:
                    $codigo = 'O-4';
                    break;
                case 5:
                    $codigo = 'O-5';
                    break;
                case 6:
                    $codigo = 'O-6';
                    break;
                case 7:
                    $codigo = 'O-7';
                    break;
                case 8:
                    $codigo = 'O-8';
                    break;
                case 9:
                    $codigo = 'O-9';
                    break;
                default:
                    $codigo = 'O-X';
                    break;
            }

            if( $montoMin < 0 ) {
                $montoMin = 0;
            }

            if( $montoMax < 0 ) {
                $montoMax = 0;
            }

            $update = [
                'mtomin' => $montoMin,
                'mtomax' => $montoMax
            ];

            $primaProf = new TabuladorM();
            $res = $primaProf->actualizaPrimaOb( $update, $codigo );
            
        }

        $data = [ 'msg' => 'Las primas han sido actualizados.', 'res' => $update ];

        return $this->respond($data, 200);
    }

    public function editarPrimaAdmin(){

        foreach ( $this->request->getPost() as $key => $value) {

            $idTabulador = str_replace( 'id-', '', $key);
            $monto       = doubleval( str_replace( ',', '.', $value ) );

            if( $monto < 0 ) {
                $monto = 0;
            }

            $update = [
                'mtomin' => $monto
            ];

            $primaProf = new TabuladorM();
            $res = $primaProf->actualizaPrimaAdmin( $update, $idTabulador );
        }

        $data = [ 'msg' => 'Las primas han sido actualizados.', 'res' => $update ];

        return $this->respond($data, 200);
    }

    public function editarPrimaAlto(){

        foreach ( $this->request->getPost() as $key => $value) {

            $idTabulador = substr( $key, -1);
            $columna     = str_replace( '-'.$idTabulador, '', $key);
            $monto       = doubleval( str_replace( ',', '.', $value ) );

            if( $monto < 0 ) {
                $monto = 0;
            }

            $update = [
                $columna => $monto
            ];

            $primaProf = new TabuladorM();
            $res = $primaProf->actualizaPrimaAdmin( $update, $idTabulador );
        }

        $data = [ 'msg' => 'Las primas han sido actualizados.', 'res' => $update ];

        return $this->respond($data, 200);
    }

    public function editarPrimaAnio(){

        foreach ( $this->request->getPost() as $key => $value) {

            $anio = str_replace( 'id-', '', $key);
            $monto       = doubleval( str_replace( ',', '.', $value ) );

            if( $monto < 0 ) {
                $monto = 0;
            }

            $update = [
                'prima' => $monto
            ];

            $primaAnio = new primaAnt();
            $res = $primaAnio->actualizaPrimaAnt( $update, $anio );
        }

        $data = [ 'msg' => 'Las primas han sido actualizados.', 'res' => $update ];

        return $this->respond($data, 200);
    }
        
}