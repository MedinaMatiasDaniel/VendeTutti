<?php
//require_once('./core/abstractaModelo.php');
require_once('./core/dbAbstractModel.php');
	/*
	 * Sera la clase que se comunicara con la clase Abstacta
	 * GET: (Busca el email) ? Carga los atributos : atributos vacios
	 * GETHash
	*/

class Empleado extends AbstractaModelo {
	
	// ATRIBUTOS PRIVADOS
	public $idEmpleado;
	public $email;
	private $password;
	public $tipo;


	// FUNCIONES PUBLICAS
	function __construct() {
		$this->dbname = 'vende-tutti';

	}

	public function getHash($hashPassword, $hashEmail) {
		//echo $hashPassword;
		if($hashPassword != '') {  // verifica hashPassword exista
			$this->query = "
							SELECT idEmpleado, email, password, tipo
							FROM empleado
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

	public function getHashOLD($hash='') {

		if($hash != '') {
			$this->query = "
							SELECT idEmpleado, email, password, tipo
							FROM empleado
							WHERE password = '$hash'
							";
			$this->consultaResultados();
			//print_r($this->rows);
		}

		if (count($this->rows) > 0) { // si existes el usuario
			foreach ($this->rows[0] as $propiedad => $valor) {
				$this->$propiedad = $valor;

			}
			$this->msj = 'Existe';
		} else {
			$this->msj = 'No existe';
		}

	}

	public function get($email = '') {
		if ($usuario != '') {
			$this->query = "
							SELECT idEmpleado, email, password, tipo
							FROM empleado
							WHERE email = '$email'
							";
			$this->consultaResultados();

			//echo count($this->rows);
		}

		if (count($this->rows) == 1) { // si existes el email
			//print_r($this->rows);
			foreach ($this->rows[0] as $propiedad => $valor) {
				$this->$propiedad = $valor;

			}
			$this->msj = 'Existe';
		} else {
			$this->msj = 'No existe';
		}

	}

	public function set($datos=array()) {
		if(array_key_exists('email', $datos)) {
			$this->get($datos['email']);
			if ($datos['email'] != $this->email) {


				foreach ($datos as $campo => $valor) {
						$$campo = $valor;

					}
				$this->query = "
								INSERT INTO 
								VALUES 
								;";
		
				$this->consultaSimple();
				$this->msj = "Registro Exitoso";

			} else {
				$this->msj = "El usuario ya existe";
			}
			
		}
	}


	public function edit() {
		//
	}

	public function delete() {
		//
	}

	// Verificar!
	public function getter($atributo) {
		return $this->$atributo;
	}
}



?>