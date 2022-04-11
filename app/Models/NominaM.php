<?php

namespace App\Models;

use CodeIgniter\Model;

class NominaM extends Model{

    protected $table = 'nomina';
    protected $primaryKey = 'idNomina';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

    protected $allowedFields = [ 
        'idNomina',
        'numQuincena',
        'anio',
        'mes'
     ];
    

}