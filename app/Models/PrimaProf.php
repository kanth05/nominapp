<?php

namespace App\Models;

use CodeIgniter\Model;

class PrimaProf extends Model{

    protected $table = 'primaprofesional';
    protected $primaryKey = 'idPrimaProfesional';
    protected $allowedFields = [ 'idPrimaProfesional', 'prima', 'codNivelAcademico' ];
    
}