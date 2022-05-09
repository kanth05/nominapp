<?php

namespace App\Controllers;

use App\Models\Usuario;
use App\Models\Persona;
use CodeIgniter\API\ResponseTrait;

class UsuarioC extends BaseController
{

    use ResponseTrait; //Para formatear la respuesta de salida para consumo del frontend

    public function index(){

        $alert = $this->request->getVar('alert');
        $usuarios = new Usuario();
        $arrUsr = $usuarios->devuelveUsuarios();
        $data = [
            'usuarios' => $arrUsr,
            'alert'    => $alert
        ];
        return view( 'usuarios/usuarios', $data );
    }

    public function usuario( $idUsuario ){

        $usuario = new Usuario();
        $arrUsr = $usuario->devuelveUsuario( $idUsuario );
        $data = [
            'usuario' => $arrUsr
        ];
        return view( 'usuarios/usuario', $data );
    }

    public function consultaEmplados(){

        $usuarios = new Persona();
        $arrUsr = $usuarios->consultaEmpleadosUsr();
        $data = [
            'usuarios' => $arrUsr
        ];

        $data = [ 'msg' => 'Consulta realizada con exito.', 'res' => $arrUsr ];
        return $this->respond($data, 200);

    }

    public function crearUsuario(){

        $cedula = $this->request->getPost('cedula');
        $codRol = $this->request->getPost('codRol');

        $usuario = new Usuario();
        $res = $usuario->creaUsuario( $cedula, $codRol );

        $data = [ 'msg' => 'Usuario creado con éxito. La contraseña asignada por defecto es el número de cédula', 'res' => $res ];
        return $this->respond($data, 200);

    }

    public function actualizaEstado(){

        foreach( $this->request->getPost() as $key => $value ){

            if( $key != 'emplados' && $key != 'nuevoRol' ){

                $idUsuario  = str_replace( 'sel-', '', $key);
                $status     = $value;
                $usuario    = new Usuario();
                $usuario->actualizaEstadoUsr( $idUsuario, $status );

            }
        }

        $data = [ 'msg' => 'Los usuarios han sido actualizados.', 'res' => 'Ok' ];

        return $this->respond($data, 200);

    }

    public function actualizaContrasena(){

        $password  = $this->request->getPost('contrasena');
        $nuevaPass = $this->request->getPost('nuevaContrasena');
        $rePass    = $this->request->getPost('confirmarContrasena');
        $idUsuario = $this->request->getPost('idUsuario');

        $usuario = new Usuario();
        $arrUsr = $usuario->devuelveUsuario( $idUsuario );

        if( !password_verify( $password, $arrUsr[0]['password']) ){
            $data = [ 'msg' => 'La contraseña actual no es la registrada en sistema.', 'res' => 'Err' ];
            return $this->respond($data, 200);
        }

        if( $nuevaPass != $rePass ){
            $data = [ 'msg' => 'La nueva contraseña no coincide con su confirmación.', 'res' => 'Err' ];
            return $this->respond($data, 200);
        }

        $nuevoUsuario = new Usuario();
        $res = $nuevoUsuario->actualizaPassword( $idUsuario, $nuevaPass );
        $data = [ 'msg' => 'La contraseña ha sido actualizada.', 'res' => 'Ok' ];

        return $this->respond($data, 200);
    }

    public function restablecerContrasena( $idUsuario ){

        $usuario = new Usuario();
        $arrUsr = $usuario->devuelveUsuario( $idUsuario );
        $nuevaPass = $arrUsr[0]['cedula'];
        $nuevoUsuario = new Usuario();
        $res = $nuevoUsuario->actualizaPassword( $idUsuario, $nuevaPass );
        $data = [ 'msg' => 'La contraseña ha sido actualizada.', 'res' => 'Ok' ];

        return redirect()->to( base_url("usuarios?alert=1") );
    }

}