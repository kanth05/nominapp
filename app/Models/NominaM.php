<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;
use App\Models\NominaDetal;

class NominaM extends Model{

    protected $table = 'nomina';
    protected $primaryKey = 'idNomina';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

    protected $allowedFields = [ 
        'idNomina',
        'numQuincena',
        'anio',
        'mes'
    ];

    public function validaNominas(){

        $fecha =  Time::now();
        $mes   = $fecha->toLocalizedString('MMMM');
        $anio  = $fecha->toLocalizedString('yyyy');
        $where = [
            'numQuincena' => 'II',
            'mes'         => $mes,
            'anio'        => $anio
        ];

        $arrRes = $this->where($where)->findAll();
        $res = [];

        if( count( $arrRes ) != 0 ){
            $res['err'] = 'Ya se han generado las dos quincena del mes correspondiente';
        }else{
            $res['msg'] = 'Ok';
        }

        return $res;

    }

    public function borrarNomina( $idNomina ){

        $nomianDetal = new NominaDetal();
        $res     = $nomianDetal->borrarNominaDetal($idNomina);
        $this->where( 'idNomina', $idNomina );
        $nomina  =  $this->delete();

        return $nomina;

    }
    

}