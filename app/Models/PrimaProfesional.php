<?php

namespace App\Models;

use CodeIgniter\Model;

class PrimaProfesional extends Model{

    protected $table = 'primaprofesional';
    protected $primaryKey = 'idPrimaProfesional';
    protected $allowedFields = [ 'idPrimaProfesional', 'prima', 'codNivelAcademico' ];

    public function consultaPrimaProf(){

        $this->orderBy('idPrimaProfesional', 'ASC');
        $primaProfRes = $this->findAll();
        return $primaProfRes;

    }

    public function actualizaPrimaProf( $arr, $codigo ){

        $this->set($arr);
        $this->where('codNivelAcademico', $codigo);
        $res = $this->update();

        return $res;

    }
    
}