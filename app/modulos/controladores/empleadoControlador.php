<?php
	/*
	 * 1. Login
	 * 2. Logout
	 * 3. Olvide contraseña.
	 * 
	 * 
	*/
	require_once(VISTAS.'empleadoVista.php');
	require_once(MODELOS.'empleadoModelo.php');
	require_once(MODELOS.'clienteModelo.php');

	class empleadoControlador{
		
		/*
			1. Recibir la variables por POST
			2. Validar
			3. Verificar si existe el user y pass en la db
			4. Iniciar sesion
			5. Retornar true
		*/

		public function iniciar($datos=array()) {
			// Valida datos
			$arrayDatosValidos = $this->validarDatosPOST();


			if ($arrayDatosValidos['email'] != "" && $arrayDatosValidos['password'] != "") {

				$hashUser = md5($arrayDatosValidos['password']);
				$hashEmail = md5($arrayDatosValidos['email']);

				$usuario = new Empleado();
				$usuario->getHash($hashUser, $hashEmail);

			}

			// Si existe el usuario y el pass es validos crea la vista
			// Instacia a la vista
			$instacia = new empleadoVista(); // Inicia vista JSON

			if($usuario->msj == "Existe" ) {
				//$instacia = new cuentaVista();
				$instacia->logueCorrecto($usuario);
				
				// Crea la variable se sesion Super Gobal
				session_start();//Iniciar sesión
				$_SESSION["usuario"] = $usuario->email;
				$_SESSION["tipo"] = $usuario->tipo;
				

				
			} else { //  Si no existe
				//$instacia = new cuentaVista();
				$cliente = new Cliente();
				$cliente->getHash($hashUser, $hashEmail);
				if($cliente->msj == "Existe" ) {
					echo "EXISTE";	
				} else {
					$instacia->datosInvalidos();
				}

				
			} 
			
		}public function guardar($datos='') {

    		$datosValidos = array(
    							
    							'email' => $_POST['email'],
    							'tipo' => $_POST['tipo'],
    							'password' => md5('1234'));
    							
    							

    		//print_r($datosValidos); 
            $empleado = new Empleado();
            $empleado->set($datosValidos);
        }

		


		public function salir($datos=''){
			session_start();
			session_destroy();
			// Pagina de inicio login
			header('location: ../../index.html');
			exit();
			echo "Salistes...";
		}


		// Metodo de prueba
		/*
		public function restringido($datos='') {
				session_start();
				if (isset($_SESSION["usuario"])) {
					
					require_once("html/head.php");
					//echo "Pagina restringida de: " . $_SESSION["usuario"];
					//echo '<p><a href="salir">Salir</a></p>';
					require_once("html/footer.php");
				}else {
					echo "no estas logueado";
				}
				
				//$instacia = new cuentaVista();
				//$instacia->registroExitoso();

		}

		*/
		private function validarDatosPOST() {
			// Verifica si recible las variables por $_POST
			// PROXIMAMENTE HACERLO POR MEDIO DE JSONs
			$usuario_valido = (isset($_POST['usuario'])) ? htmlspecialchars($_POST['usuario']) : "";
			$password_valido = (isset($_POST['password'])) ? htmlspecialchars($_POST['password']) : "";

			return array('email'=>$usuario_valido, 'password'=>$password_valido);

		}


	}

?>