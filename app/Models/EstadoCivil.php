<?php

namespace App\Models;

use CodeIgniter\Model;

class EstadoCivil extends Model{

    protected $table = 'estadocivil';
    protected $primaryKey = 'codEdoCivil';
    protected $allowedFields = [ 'codeEdoCivil', 'descripcion' ];
    

}