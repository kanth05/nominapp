<?php

namespace App\Models;

use CodeIgniter\Model;

class NivelAcademico extends Model{

    protected $table = 'nivelacademico';
    protected $primaryKey = 'codNivelAcademico';
    protected $allowedFields = [ 'codNivelAcademico', 'descripcion' ];
    
    public function consultaNivelAcademico(){

        $nvlAcademicoRes = $this->findAll();
        return $nvlAcademicoRes;

    }

}