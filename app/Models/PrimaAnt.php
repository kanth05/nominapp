<?php

namespace App\Models;

use CodeIgniter\Model;

class PrimaAnt extends Model{

    protected $table = 'primaantiguedad';
    protected $primaryKey = 'anioAntiguedad';
    protected $allowedFields = [ 'anioAntiguedad', 'prima' ];

    public function consultaPrimaAnt(){

        $this->orderBy('anioAntiguedad', 'ASC');
        $primaAntRes = $this->findAll();
        return $primaAntRes;

    }

    public function actualizaPrimaAnt( $arr, $codigo ){

        $this->set($arr);
        $this->where('anioAntiguedad', $codigo);
        $res = $this->update();

        return $res;

    }
    
}