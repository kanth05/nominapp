<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\CargoDen;

class TabuladorM extends Model{

    protected $table = 'tabulador';
    protected $primaryKey = 'idTabulador';
    protected $allowedFields = [ 'idTabulador', 'codCargoDen', 'mtomin', 'mtomax', 'rango1', 'rango2' ];
    
    public function consultaPrimaObrero(){

        $arrcodOb = [ 'O-1', 'O-2', 'O-3', 'O-4', 'O-5', 'O-6', 'O-7', 'O-8', 'O-9', 'O-X' ];
        $this->orderBy('codCargoDen', 'ASC');
        $primaObRes = $this->whereIn( 'codCargoDen', $arrcodOb )->findAll();
        return $primaObRes;

    }

    public function consultaPrimaAdmin(){

        $cargoDen = new CargoDen();
        $arrCargoDen = $cargoDen->consultaTipoCargoDen('PD');
        $arr = [];

        foreach( $arrCargoDen as $value){
            $arr[] = $value['codCargoDen'];
        }
        
        $this->orderBy('idTabulador', 'ASC');
        $primaAdminRes = $this->whereIn( 'codCargoDen', $arr )->findAll();
        return $primaAdminRes;

    }

    public function consultaPrimaAlto(){

        $cargoDen = new CargoDen();
        $arrCargoDen = $cargoDen->consultaTipoCargoDen('AN');
        $arr = [];

        foreach( $arrCargoDen as $value){
            $arr[] = $value['codCargoDen'];
        }

        $this->orderBy('idTabulador', 'ASC');
        $primaAltoRes = $this->whereIn( 'codCargoDen', $arr )->findAll();
        return $primaAltoRes;

    }

    public function actualizaPrimaOb( $arr, $codigo ){

        $this->set($arr);
        $this->where('codCargoDen', $codigo);
        $res = $this->update();

        return $res;

    }

    public function actualizaPrimaAdmin( $arr, $idTabulador ){

        $this->set($arr);
        $this->where('idTabulador', $idTabulador);
        $res = $this->update();

        return $res;

    }

}