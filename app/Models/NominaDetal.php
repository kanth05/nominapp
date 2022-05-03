<?php

namespace App\Models;

use CodeIgniter\Model;

class NominaDetal extends Model{

    protected $table = 'nominadetal';
    protected $primaryKey = 'idNominaDetal';
    protected $useAutoIncrement = true;
    protected $returnType     = 'object';

    protected $allowedFields = [ 
        'idNominaDetal',
        'idNomina',
        'cedula',
        'salario',
        'aniosFMA',
        'aniosAPN',
        'antiguedad',
        'primaAnt',
        'primaProf',
        'beca',
        'numHijos',
        'diasLaborales',
        'sueldoBase',
        'primaAntAsig',
        'primaProfAsig',
        'encargaduria',
        'primaHijos',
        'primaBeca',
        'primaDis',
        'totRemuneracion',
        'bonoVacc',
        'complementoSuedo',
        'complementoEspecial',
        'bonoProteico',
        'retroActivo',
        'seguroSocial',
        'faov',
        'rpe',
        'tesoreriaSs',
        'appSeguroSocial',
        'appFaov',
        'appRpe',
        'appTesoreria',
        'totAsignacion',
        'toodeduccion',
        'totApp',
        'netoCobrar'
     ];

     public function borrarNominaDetal( $idNomina ){

        $this->where( 'idNomina', $idNomina );
        $res = $this->delete();

        return $res;

     }
    

}