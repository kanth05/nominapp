<?php

namespace App\Models;

use CodeIgniter\Model;

class CargoDen extends Model{

    protected $table = 'denominacioncargo';
    protected $primaryKey = 'codCargoDen';
    protected $allowedFields = [ 'codCargoDen', 'descripcion' ];

    public function consultaCargoDen(){

        $cargoDenRes = $this->orderBy('tipoCargo', 'ASC')->findAll();
        return $cargoDenRes;

    }

    public function consultaTipoCargoDen( $tipoCargo ){

        $this->orderBy('codCargoDen', 'ASC');
        $arrCargoDen = $this->where('tipoCargo', $tipoCargo )->findAll();
        return $arrCargoDen;

    }

}