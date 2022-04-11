<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model{

    protected $table = 'usuario';
    protected $primaryKey = 'idUsuario';
    protected $allowedFields = [ 'cedula', 'password', 'codRol', 'created' ];
    

}