<?php

namespace App\Models;

use CodeIgniter\Model;

class TabuladorM extends Model{

    protected $table = 'tabulador';
    protected $primaryKey = 'idTabulador';
    protected $allowedFields = [ 'idTabulador', 'codCargoDen', 'mtomin', 'mtomax', 'rango1', 'rango2' ];
    
    public function consultaPrimaObrero(){

        $arrcodOb = [ 'O-1', 'O-2', 'O-3', 'O-4', 'O-5', 'O-6', 'O-7', 'O-8', 'O-9', 'O-X' ];
        $this->orderBy('codCargoDen', 'ASC');
        $primaProfRes = $this->whereIn( 'codCargoDen', $arrcodOb )->findAll();
        return $primaProfRes;

    }

    public function actualizaPrimaOb( $arr, $codigo ){

        $this->set($arr);
        $this->where('codCargoDen', $codigo);
        $res = $this->update();

        return $res;

    }

}