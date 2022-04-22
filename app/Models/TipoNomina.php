<?php

namespace App\Models;

use CodeIgniter\Model;

class TipoNomina extends Model{

    protected $table = 'tiponomina';
    protected $primaryKey = 'codTipoNomina';
    protected $allowedFields = [ 'codTipoNomina', 'descripcion' ];
    
    public function consultaTipoNomina(){

        $tipoNominaRes = $this->orderBy('descripcion', 'ASC')->findAll();
        return $tipoNominaRes;

    }

}