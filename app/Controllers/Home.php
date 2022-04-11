<?php

namespace App\Controllers;

use App\Models\Usuario;
use App\Models\Persona;
use App\Config\Services;

class Home extends BaseController
{
    public function index()
    {

        $session = session();

        $data = [
            'nombre' => $session->nombre.' '.$session->apellido,
            'rol'    => $session->rol,
            'codRol'    => $session->codRol,
        ];

        return view('bienvenido', $data);
        
    }

    public function login(){

        $msg = session('msg');
        $datos = [ 'msg' => $msg ];

        //Cada vez que se ingresa al login, se finaliza la sesión activa.
        $session = session();
        $session->destroy();

        return view('login/login', $datos);

    }

    public function iniciarSesion(){

        //El inicio de sesión se maneja de manera automática con el filter 'auth'
        //Solo hay dos excepciones de dicho filter (login e iniciarSesion)
        
        $usuario   = new Usuario();
        $user = $this->request->getPost('username');
        $pass = $this->request->getPost('password');

        if( empty($user) ){
            $msg = 'Debe ingresar un usuario para acceder al sistema';
        }else{
            
            $usrRes = $usuario->where('cedula', $user)->findAll();

            if( empty($usrRes) ){
                $msg = 'El usuario ingresado no coincide con el registro';
            }else{

                if( !password_verify( $pass, $usrRes[0]['password'] ) ){
                    $msg = 'La contraseña ingresada es incorrecta';
                }
            }
        }

        if( !empty( $msg ) ){
            return redirect()->to( base_url('login') )->with('msg', $msg);
        }

        $empleado = new Persona();
        $session  = session();

        $resEmpelado = $empleado->where( 'cedula', $usrRes[0]['cedula'] )->findAll();
        
        if( $resEmpelado ){
            
            $nombres   = $resEmpelado[0]['nombres'];
            $apellidos = $resEmpelado[0]['apellidos'];
            
        }

        $rol = [ //Estas descripciones están en la columna de la tabla usuario
            'ANF' => 'Analista de ficha técnica',
            'ANN' => 'Analista de nómina',
            'ANT' => 'Analista integral',
            'JEF' => 'Jefe de departamento',
        ];
        
        $data = [
            'idUsuario' =>  $usrRes[0]['idUsuario'],
            'cedula'    =>  $usrRes[0]['cedula'],
            'rol'       =>  $rol[ $usrRes[0]['codRol'] ],
            'codRol'    =>  $usrRes[0]['codRol'],
            'nombre'    =>  $nombres,
            'apellido'  =>  $apellidos
        ];

        $session->set($data);
    
        return redirect()->to( base_url() );

    }

    public function destruirSesion(){

        $session = session();
        $session->destroy();

        return redirect()->to( base_url('login') );

    }
}
