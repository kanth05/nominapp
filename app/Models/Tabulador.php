<?php

namespace App\Models;

use CodeIgniter\Model;

class Tabulador extends Model{

    protected $table = 'tabulador';
    protected $primaryKey = 'idTabulador';
    protected $allowedFields = [ 'idTabulador', 'codCargoDen', 'mtomin', 'mtomax', 'rango1', 'rango2' ];
    

}