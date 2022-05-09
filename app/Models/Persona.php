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
        'encargaduria',
        'bonoProteico',
        'complementoSueldo'
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

     public function consultaEmpleadosMontos( $campo ){

      $db = db_connect();

      $sql = 'SELECT p.*, d.descripcion as departamento, c.descripcion as cargo '.
             'FROM persona p '.
             'INNER JOIN departamento d '.
             'ON p.codDepartamento = d.codDepartamento '.
             'INNER JOIN cargo c '.
             'ON p.codCargo = c.codCargo '.
             "WHERE p.cedula != '00001'" .
             'AND p.'.$campo.' = 0';            
      
      $arrEmpleados = $db->query($sql)->getResult();

      return $arrEmpleados;

   }

   public function consultaEmpleadosUsr(){

      $db = db_connect();

      $sql = 'SELECT p.* '.
             'FROM persona p '.
             'WHERE NOT EXISTS ( SELECT cedula FROM usuario WHERE cedula = p.cedula) '.
             "AND p.status = 'ACT' ";            
      
      $arrEmpleados = $db->query($sql)->getResult('array');
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

     public function devuelvePersonaEncargaduria(){

      $where = [
         'encargaduria !=' => 0,
         'cedula !='       => '00001'   
      ];

      $personaEn = $this->where($where)->findAll();
      return $personaEn;

     }

     public function devuelvePersonaBonoProteico(){

      $where = [
         'bonoProteico !=' => 0,
         'cedula !='       => '00001'   
      ];

      $personaBp = $this->where($where)->findAll();
      return $personaBp;

     }
    
     public function devuelvePersonaComplementoSueldo(){

      $where = [
         'complementoSueldo !=' => 0,
         'cedula !='       => '00001'   
      ];

      $personaCs = $this->where($where)->findAll();
      return $personaCs;

     }

     public function actualizaMontoEmpleado ( $idPersona, $monto, $campo ){

      $arr = [
         $campo => doubleval( $monto )
      ];
      $this->set( $arr );
      $this->where('idPersona', $idPersona );
      $upd = $this->update();

      $res = ( $upd ) ? 'ok' : 'err';

      return $res;

   }

}