<?php
require_once('./core/vista.php');
	/* 
	* Renderiza el JSON con los datos recibidos en el array
	*	------------------------------------------
	*	{
	*	    "status": 200,
	*	    "message": true | false,
	*	    "data": []
	*	}
	*	-------------------------------------------------
	*/
	class EmpleadoVista extends Vista {
		
		private $user = array();

		function __construct($datos = '') {
			
			//$this->data[] = array('nombre' => '', 'apellido' => '');
			//$this->renderJSON();
		}

		public function logueCorrecto($usuario) {
			$this->mensaje = "Logueo Correcto";
			$this->user['id'] = $usuario->idEmpleado;
			$this->user['email'] = $usuario->email;
			// retorna JSON
			$this->datos[] = $this->user;
			$this->renderJSON();

		}


		public function registroExitoso() {
			$this->estado =  true;
			$this->mensaje = "Registro exitoso";
			$this->renderJSON();
		}


		public function emailExistente() {
			$this->estado =  false;
			$this->mensaje = "El email ya esta registrado";
			$this->renderJSON();
		}


		public function datosInvalidos() {
			$this->estado = false;
			$this->mensaje = "Usuario o contraseña invalidos";
			$this->renderJSON();
		}


	}


?>