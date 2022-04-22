<?php

namespace App\Models;

use CodeIgniter\Model;

class Banco extends Model{

    protected $table = 'banco';
    protected $primaryKey = 'codInstBanca';
    protected $allowedFields = [ 'codInstBanca', 'descripcion' ];

    public function consultaBancos(){

        $bancoRes = $this->orderBy('descripcion', 'ASC')->findAll();
        return $bancoRes;

    }
    

}