<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model{

    protected $table = 'usuario';
    protected $primaryKey = 'idUsuario';
    protected $allowedFields = [ 'cedula', 'password', 'codRol', 'status', 'created' ];
    

    public function devuelveUsuarios(){

        $arrUser = $this->findAll();
        return $arrUser;

    }

    public function devuelveUsuario( $idUsuario ){

        $resUsr = $this->where('idUsuario', $idUsuario)->findAll();
        return $resUsr;
    }

    public function creaUsuario( $cedula, $codRol ){

        $insert = [
            'cedula'   => $cedula,
            'password' => password_hash($cedula, PASSWORD_BCRYPT),
            'codRol'   => intval($codRol),
            'status'   => 1
        ];

        $res = $this->insert( $insert );
        return $res;

    }

    public function actualizaEstadoUsr( $idUsuario, $status ){

        $this->set('status', $status);
        $this->where('idUsuario', $idUsuario);
        $res = $this->update();

        return $res;

    }

    public function actualizaPassword( $idUsuario, $password ){

        $this->set('password', password_hash($password, PASSWORD_BCRYPT) );
        $this->where('idUsuario', $idUsuario);
        $res = $this->update();

        return $res;

    }
}