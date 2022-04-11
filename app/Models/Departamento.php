<?php

namespace App\Models;

use CodeIgniter\Model;

class Departamento extends Model{

    protected $table = 'departamento';
    protected $primaryKey = 'codDepartamento';
    protected $allowedFields = [ 'codDepartamento', 'descripcion' ];
    

}