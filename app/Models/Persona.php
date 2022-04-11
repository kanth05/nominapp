<?php

namespace App\Models;

use CodeIgniter\Model;

class Persona extends Model{

    protected $table = 'persona';
    protected $primaryKey = 'idPersona';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

    protected $allowedFields = [ 
        'idPersona',
        'cedula',
        'status',
        'nombres',
        'apellidos',
        'sexo',
        'codDepartamento',
        'codCargo',
        'codCargoDen',
        'fecNac',
        'direccion',
        'ultimoTrabajoPublicado',
        'telfLocal',
        'telefMovil',
        'codEstado',
        'lugarNacimiento',
        'codEdoCivil',
        'tipoSangre',
        'email',
        'nombrePersonaEmergencia',
        'telefPersonaEmergencia',
        'codNivelAcademico',
        'tituloAcademico',
        'fecIngreso',
        'aniosAPN',
        'lugarSufraga',
        'codInstBanca',
        'tipoCuenta',
        'numCuenta',
        'numHijos',
        'indBecaEscolar',
        'indDiscapacidad',
        'codTipoNomina'
     ];
    

}