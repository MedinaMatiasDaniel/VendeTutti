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
	class PanelCliente extends AbstractaModelo {
		public $id;
		public $razon;
		public $nombre;
		public $password;
		public $cuit;
		public $tipo;
		public $mail;
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
							SELECT *
							FROM cliente
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
								FROM cliente
								WHERE IDCLIENTE = '$id'
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
							INSERT INTO cliente(RAZONSOCIAL,NOMBRE, EMAIL, PASSWORD,CUIT,TIPOIVA,DIRECCION,LOCALIDAD,CP,ACTIVO)
							VALUES ('$razon','$nombre','$password','$cuit','$tipo','$mail','$direccion','$localidad','$cp','$activo')
							;";
			$this->consultaSimple();
		}

		public function edit($datos) {
			foreach ($datos as $campo => $valor) {
				$$campo = $valor;
			}
			$this->query = "
					UPDATE cliente SET'$razon','$nombre','$password','$cuit','$tipo','$mail','$direccion','$localidad','$cp','$activo' WHERE IDCLIENTE='$id'
							;";
			$this->consultaSimple();
		}
	}
?>