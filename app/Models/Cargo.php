<?php

namespace App\Models;

use CodeIgniter\Model;

class Cargo extends Model{

    protected $table = 'Cargo';
    protected $primaryKey = 'codCargo';
    protected $allowedFields = [ 'codCargo', 'descripcion' ];
    
    public function consultaCargos(){

        $cargoRes = $this->orderBy('descripcion', 'ASC')->findAll();
        return $cargoRes;

    }

    public function actualizaCargo( $arr, $codCargo ){

        $this->set($arr);
        $this->where('codCargo', $codCargo);
        $res = $this->update();

        return $res;

    }

    public function eliminaCargo( $codCargo ){

        $this->where('codCargo', $codCargo);
        $res = $this->delete();

        return $res;

    }

    public function insertarCargo( $cargoDesc ){

        $ultimoCargo = $this->orderBy('codCargo', 'DESC')->findAll();
        $codCargo = intval( $ultimoCargo[0]['codCargo']) + 1;

        if( strlen($codCargo) == 1 ){
            $codCargo = '00'.$codCargo;
        }elseif ( strlen($codCargo) == 2) {
            $codCargo = '0'.$codCargo;
        }
        
        $insert = [
            'codCargo' => strval( $codCargo ),
            'descripcion' => $cargoDesc 
        ];

        $res = $this->insert($insert);

        return $res;

    }

}