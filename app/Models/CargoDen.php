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

}