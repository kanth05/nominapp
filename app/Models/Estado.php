<?php

namespace App\Models;

use CodeIgniter\Model;

class Estado extends Model{

    protected $table = 'estados';
    protected $primaryKey = 'codEstado';
    protected $allowedFields = [ 'codEstado', 'descripcion' ];
    

}