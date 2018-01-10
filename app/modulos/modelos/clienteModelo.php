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

	class Cliente extends AbstractaModelo {
		public $idcliente;
		public $razonsocial;
		public $email;
		public $tipoiva;
		public $cuit;
		public $nombre;
		public $direccion;
		public $cp;
		public $localidad;
		public $password;
		public $activo;
		public $lista = array();
                             
       
		function __construct() {
			$this->dbname = 'vende-tutti';
		}

		public function get($id=0) {
			
			if($id==0) { // retorna todos

    		$this->query = "
							SELECT IDCLIENTE,RAZONSOCIAL, EMAIL, TIPOIVA, CUIT, NOMBRE, DIRECCION, CP,LOCALIDAD
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
								WHERE idcliente = '$id'
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
							INSERT INTO cliente(RAZONSOCIAL, EMAIL, TIPOIVA, CUIT, NOMBRE, DIRECCION, CP, LOCALIDAD, PASSWORD, ACTIVO )
							VALUES ('$razonsocial', '$email', '$tipoiva', '$cuit', '$nombre', '$direccion', '$cp', '$localidad', '$password', '1')
							;";

			$this->consultaSimple();
		}


		public function edit($datos) {
			foreach ($datos as $campo => $valor) {
				$$campo = $valor;
			}

			$this->query = "
					UPDATE cliente SET(IDCLIENTE = '$idcliente', RAZONSOCIAL = '$razonsocial',
					    EMAIL = '$email',
					    TIPOIVA = '$tipoiva',
					    CUIT = '$cuit', 
					    NOMBRE = '$nombre', 
					    DIRECCION = '$direccion', 
					    CP = '$cp',
					    LOCALIDAD = '$localidad', 
					    PASSWORD = '$password', 
					    ACTIVO = '1' )
							;";

			$this->consultaSimple();
		}


		public function getHash($hashPassword, $hashEmail) {
			//echo $hashPassword;
			if($hashPassword != '') {  // verifica hashPassword exista
				$this->query = "
								SELECT IDCLIENTE, EMAIL, PASSWORD, TIPO
								FROM cliente
								WHERE password = '$hashPassword'
								";
				$this->consultaResultados();
				//print_r($this->rows);
			}

			if (count($this->rows) > 0) { // si existes el usuario

				foreach ($this->rows as $row) {

					if (md5($row['email']) == $hashEmail){

						foreach ($row as $propiedad => $valor) {
							$this->$propiedad = $valor;

						}
						$this->msj = 'Existe';
					}
					
				}
				
			} else {
				$this->msj = 'No existe';
			}

		}

	}
	
?>
