<?php

namespace App\Models;

use CodeIgniter\Model;

class PrimaAntiguedad extends Model{

    protected $table = 'primaantiguedad';
    protected $primaryKey = 'anioAntiguedad';
    protected $allowedFields = [ 'anioAntiguedad', 'prima' ];
    
}