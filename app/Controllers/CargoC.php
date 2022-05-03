<?php

namespace App\Controllers;

use App\Models\Cargo;
use CodeIgniter\API\ResponseTrait;

class CargoC extends BaseController
{

    use ResponseTrait; //Para formatear la respuesta de salida para consumo del frontend

    public function index(){

        $cargo = new Cargo();
        $arrCargo = $cargo->consultaCargos();
        $data = [
            'cargos' => $arrCargo
        ];

        return view( 'empleados/cargos', $data );
    }

    public function nuevoCargo(){

        $cargoDesc = $this->request->getPost('descripcion');

        $cargo = new Cargo();
        $res = $cargo->insertarCargo($cargoDesc);

        $data = [ 'msg' => 'Las descripciones han sido actualizados.', 'res' => 'OK' ];

        return $this->respond($data, 200);

    }

    public function borrarCargo($codCargo){

        $cargo = new Cargo();
        $cargo->eliminaCargo($codCargo);

        return redirect()->to( base_url('cargos') );

    }

    public function editarCargo(){

        foreach ( $this->request->getPost() as $key => $value) {

            $codCargo = str_replace( 'cod-', '', $key);
            $descrip  = $value;

            $update = [
                'descripcion' => $descrip
            ];

            $primaAnio = new Cargo();
            $res = $primaAnio->actualizaCargo( $update, $codCargo );
        }

        $data = [ 'msg' => 'Las descripciones han sido actualizados.', 'res' => $update ];

        return $this->respond($data, 200);
    }
}