<?php

namespace App\Models;

use CodeIgniter\Model;

class Cargo extends Model{

    protected $table = 'Cargo';
    protected $primaryKey = 'codCargo';
    protected $allowedFields = [ 'codCargo', 'descripcion' ];
    

}