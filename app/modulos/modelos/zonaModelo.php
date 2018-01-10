<?php

//require_once('./core/abstractaModelo.php');
require_once('./core/dbAbstractModel.php');
/*
 * Sera la clase que se comunicara con la clase Abstacta
 * GET: Listar todas 
 * EDIT 
 * DELETE :  Baja
 * SET : 
 */

class Zona extends AbstractaModelo {

    public $id;
    public $area;
    public $activo;
    public $lista = array();

    function __construct() {
        $this->dbname = 'vende-tutti';
    }

    public function set($datos = array()) {
        print_r($datos);
        foreach ($datos as $key => $value) {
                $$key = $value;
            }

        $this->query = "
							INSERT INTO zona(AREA, ACTIVO)
							VALUES ('$area', '1')
							;";
        $this->consultaSimple();
    }

    public function get() {
        $this->query = "
							SELECT IDZONA, AREA
							FROM zona
							WHERE activo = 1
							";
        $this->consultaResultados();


        if (count($this->rows) > 0) { // Si existen registros
            $this->lista = $this->rows;

            $this->msj = 'Varios registros';
        } else {
            $this->msj = 'No existen registros';
        }
    }

    public function edit($id, $area) {
        $this->query = "
							UPDATE zona 
							SET (area = '$area', ACTIVO = '1' 
							WHERE IDZONA = '$id')
							;";
        $this->consultaSimple();
    }

    public function baja($id) {
        $this->query = "
							UPDATE zona 
							SET (ACTIVO = 0
							WHERE IDZONA = '$id')
							;";
        $this->consultaSimple();
    }

}
