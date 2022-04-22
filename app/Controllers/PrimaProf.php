<?php

namespace App\Controllers;

use App\Models\PrimaProfesional;
use CodeIgniter\API\ResponseTrait;

class PrimaProf extends BaseController
{

    use ResponseTrait; //Para formatear la respuesta de salida para consumo del frontend

    public function index()
    {
        return view('primaProfesion');
    }

    public function primaProfesion(){

        $primaProf = new PrimaProfesional();
        $primas = $primaProf->consultaPrimaProf();

        $data = [
            'primaProf' => [
                'educacionBasica' => $primas[0]['prima'],
                'bachillerato'    => $primas[1]['prima'],
                'tecnico'         => $primas[2]['prima'],
                'pregrado'        => $primas[3]['prima'],
                'especialidad'    => $primas[4]['prima'],
                'postgrado'       => $primas[5]['prima'],
                'doctorado'       => $primas[6]['prima']
            ]
        ];

        return view( 'tabuladores/primaProf', $data );

    }

    public function editarPrimaProf(){

        $educacionBasica  = doubleval( str_replace( ',', '.', $this->request->getPost('educacionBasica') ) );
        $bachillerato     = doubleval( str_replace( ',', '.', $this->request->getPost('bachillerato') ) );
        $tecnico          = doubleval( str_replace( ',', '.', $this->request->getPost('tecnico') ) );
        $pregrado         = doubleval( str_replace( ',', '.', $this->request->getPost('pregrado') ) );
        $especialidad     = doubleval( str_replace( ',', '.', $this->request->getPost('especialidad') ) );
        $postgrado        = doubleval( str_replace( ',', '.', $this->request->getPost('postgrado') ) );
        $doctorado        = doubleval( str_replace( ',', '.', $this->request->getPost('doctorado') ) );


        for ($i=1; $i < 11 ; $i++) { 
            
            switch ($i) {
                case 1:
                    $monto  = $educacionBasica;
                    $codigo = 'EDB';
                    break;
                case 2:
                    $monto  = $bachillerato;
                    $codigo = 'BCH';
                    break;
                case 3:
                    $monto  = $tecnico;
                    $codigo = 'TCS';
                    break;
                case 4:
                    $monto  = $pregrado;
                    $codigo = 'PRE';
                    break;
                case 5:
                    $monto  = $especialidad;
                    $codigo = 'ESP';
                    break;
                case 6:
                    $monto  = $postgrado;
                    $codigo = 'POS';
                    break;
                default:
                    $monto  = $doctorado;
                    $codigo = 'DOC';
                    break;
            }

            if( $monto < 0 ) {
                $monto = 0;
            }

            $update = [
                'prima' => $monto 
            ];

            $primaProf = new PrimaProfesional();
            $res = $primaProf->actualizaPrimaProf( $update, $codigo );
            
        }

        $data = [ 'msg' => 'Las primas han sido actualizados.', 'res' => $update ];

        return $this->respond($data, 200);
        
    }
}