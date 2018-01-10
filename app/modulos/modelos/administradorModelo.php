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
	class Administrador extends AbstractaModelo {
		public $id;
		public $email;
		public $password;
		public $tipo;
		public $activo;
		public $nombre;
		public $direccion;
		public $localidad;
		public $cp;
		public $lista = array();
                             
		function __construct() {
			$this->dbname = 'vende-tutti';
		}

		public function get($id=0) {
			if($id==0) { // retorna todos
    		$this->query = "
							SELECT IDEMPLEADO, EMAIL, PASSWORD, TIPO, ACTIVO, NOMBRE, DIRECCION, LOCALIDAD, CP
							FROM empleado
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
								FROM empleado
								WHERE idempleado = '$id'
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
				}	print_r($datos);	
			$this->query = "
							INSERT INTO empleado(EMAIL, PASSWORD, TIPO, ACTIVO, NOMBRE, DIRECCION, LOCALIDAD, CP )
							VALUES ('$email' , '$password', '$tipo', '1', '$nombre', '$direccion', '$localidad', '$cp')
							;";
			$this->consultaSimple();
		}

		public function edit($datos) {
			foreach ($datos as $campo => $valor) {
				$$campo = $valor;
			}
			
			$this->query = "
					UPDATE empleado SET
					    EMAIL = '$email',
					    PASSWORD = '$password',
					    TIPO = '$tipo',
					    ACTIVO = '1', 
					    NOMBRE = '$nombre', 
					    DIRECCION = '$direccion', 
					    LOCALIDAD = '$localidad', 
					    CP = '$cp'where IDEMPLEADO = '$idempleado'
					     
							;";
			$this->consultaSimple();
		}

		public function baja($idempleado){
			$this->query = "
					UPDATE empleado SET					   
					    ACTIVO = 0 
					    where IDEMPLEADO = '$idempleado'
					     
							;";
			$this->consultaSimple();
		}
	}
?>