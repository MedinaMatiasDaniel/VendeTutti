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
	class Modificacion extends AbstractaModelo {
		public $id;
		public $fecha;
		public $horario;
		public $direccion;
		public $localidad;
		public $cp;
		public $activo;
		public $lista = array();
                             
		function __construct() {
			$this->dbname = 'vende-tutti';
		}

		public function get($id=0) {
			if($id==0) { // retorna todos
    		$this->query = "
							SELECT IDMODIFICACION, FECHA, HORARIO, DIRECCION, LOCALIDAD, CP, ACTIVO
							FROM modificacion
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
								FROM modificacion
								WHERE idmodificacion = '$id'
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
							INSERT INTO modificacion(FECHA, HORARIO, DIRECCION, LOCALIDAD, CP, ACTIVO )
							VALUES ('$idmodificacion' , '$fecha', '$horario', '$direccion', '$localidad', '$cp', '1')
							;";
			$this->consultaSimple();
		}

		public function edit($datos) {
			foreach ($datos as $campo => $valor) {
				$$campo = $valor;
			}
			$this->query = "
					UPDATE modificacion SET(IDMODIFICACION = '$idmodificacion',
					    FECHA = '$email',
					    HORARIO = '$password', 
					    DIRECCION = '$direccion', 
					    LOCALIDAD = '$localidad', 
					    CP = '$cp',
					    ACTIVO = '1'
					     )
							;";
			$this->consultaSimple();
		}
	}
?>
