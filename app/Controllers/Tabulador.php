<?php

namespace App\Controllers;

use App\Models\Complemento;
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

        return view('tabuladores/primaAnt');

    }

    public function primaProf(){

        return view('tabuladores/primaProf');

    }

    public function tabAltoNivel(){

        return view('tabuladores/tabAltoNivel');

    }

    public function tabPersonalAdmin(){

        return view('tabuladores/tabPersonalAdmin');

    }

    public function tabPersonalOb(){

        return view('tabuladores/tabPersonalOb');

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
}