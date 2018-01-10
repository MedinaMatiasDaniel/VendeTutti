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
	class Reporte extends AbstractaModelo {
		public $idOrden;
		public $idCliente;
		public $idCamion;
		public $idZona;
		public $estado;
		public $fechaingreso;
		public $fechaentrega;
		public $horario;
		public $observaciones;
		public $activo;
		public $lista = array();
                             
		function __construct() {
			$this->dbname = 'vende-tutti';
		}

		public function get($id=0) {
			if($id==0) { // retorna todos
    		$this->query = "
							SELECT *
							FROM orden
							WHERE activo = 1
							";
			$this->consultaResultados();
				if (count($this->rows) > 0) {
					$this->lista=$this->rows;
					$this->msj = 'Varios Resultados';
				} else {
					$this->msj = 'No se encontraron Resultados';
				}
	    	} else { 
	    		$this->query = "
								SELECT *
								FROM orden
								WHERE idreporte = '$id'
								";
				$this->consultaResultados();
				if (count($this->rows) == 1) { // Si existe el id
					foreach ($this->rows[0] as $propiedad => $valor) {
						$this->$propiedad = $valor;
					}
					$this->msj = 'Existe';
				} else {
					$this->msj = 'No existe';
				}
	    	}
		}


		public function set($datos=array()) {
			foreach ($datos as $campo => $valor) {
					$$campo = $valor;
				}		
			$this->query = "
							INSERT INTO reporte()
							VALUES ()
							;";
			$this->consultaSimple();
		}

		public function edit($datos) {
			foreach ($datos as $campo => $valor) {
				$$campo = $valor;
			}
			$this->query = "
					UPDATE reporte SET()
							;";
			$this->consultaSimple();
		}
	}
?>
