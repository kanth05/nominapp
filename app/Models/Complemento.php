<?php

namespace App\Models;

use CodeIgniter\Model;

class Complemento extends Model{

    protected $table = 'complemento';
    protected $primaryKey = 'codTipoComplemento';
    protected $allowedFields = [ 'codTipoComplemento', 'descripcion', 'monto' ];
    
}