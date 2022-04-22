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
        'telefLocal',
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
        'indVacaciones',
        'codTipoNomina',
        'observaciones',
        'encargaduria'
     ];

     public function consultaEmpleados(){

        $db = db_connect();

        $sql = 'SELECT p.*, d.descripcion as departamento, c.descripcion as cargo '.
               'FROM persona p '.
               'INNER JOIN departamento d '.
               'ON p.codDepartamento = d.codDepartamento '.
               'INNER JOIN cargo c '.
               'ON p.codCargo = c.codCargo '.
               "WHERE p.cedula != '00001'";            
        
        $arrEmpleados = $db->query($sql)->getResult();

        return $arrEmpleados;

     }

     public function consultaEmpleado( $cedula ){

        $persona = $this->where('cedula', $cedula)->findAll();
        return $persona;

     }

     public function consultaCorreo ( $email ){

        $email = $this->where('email', $email)->findAll();
        return $email ;

     }

     public function consultaVariable( $where ){

        $personaRes = $this->where( $where )->findAll();
        return $personaRes;

     }

     public function registraEmpleado ( $arr ){

        $ins = $this->insert($arr);

        $res = ( $ins ) ? 'ok' : 'err';

        return $res;

     }

     public function actualizaEmpleado ( $arr, $cedula ){

        $this->set($arr);
        $this->where('cedula', $cedula);
        $upd = $this->update();

        $res = ( $upd ) ? 'ok' : 'err';

        return $res;

     }
    

}