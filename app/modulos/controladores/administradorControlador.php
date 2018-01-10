<?php
	require_once(VISTAS.'administradorVista.php');
	require_once(MODELOS.'administradorModelo.php');

	class administradorControlador{
		// METODOS PUBLICOS
    	public function index($parametro = '') {
        	// verifica si la session existe y tiene los privilegios
	        session_start();
	        if (isset($_SESSION["usuario"])) {
	            //echo("pagina privada");
	            $pagina = new administradorVista();
	            $pagina->mostrarPagina();
	        } else {
	            header('location: ../index.html');
	            exit();
	        }
    	}

    	public function listar($datos='') {
	        $administrador = new Administrador();
	        $administrador->get(0);

	        if($administrador->msj == 'Varios Resultados') {
	            $array = array('data' => $administrador->lista);
	            echo json_encode($array);
	        }else {
	            echo json_encode($administrador);
	        }
    	}


    	public function guardar($datos='') {

    		    		$datosValidos = array(
    							
    							'email' => $_POST['email'],
    							'nombre' => $_POST['nombre'],    							
    							'tipo' => $_POST['tipo'], 
    							'direccion' => $_POST['direccion'],   							
    							'cp' => $_POST['cp'],
    							'localidad' => $_POST['localidad'],					
    							'password'=> md5('1234'),
								'direccion' => $_POST['direccion']);
    		//print_r($datosValidos); 
            $empleado = new Administrador();
            $empleado->set($datosValidos);
    	}

    	public function editar($datos = '') {
        $datosValidos = array(
    							'idempleado' => $_POST['idempleado'],
    							'email' => $_POST['email'],
    							'nombre' => $_POST['nombre'],    							
    							'tipo' => $_POST['tipo'], 
    							'direccion' => $_POST['direccion'],   							
    							'cp' => $_POST['cp'],
    							'localidad' => $_POST['localidad'],					
    							'password'=> md5('1234'),
								'direccion' => $_POST['direccion']);
        //print_r($datosValidos);

        if ($datosValidos != '') { // Si los datos son validos ($datosValidos != '')
            // Instancia al modelo
            $administrador = new Administrador();
            $administrador->edit($datosValidos);
        } else { // Contratratio retorna JSON con el mensaje de error
        //
			}
    }

    	// Metodos privados
    	private function validarPOST() {
	        if (isset($_POST['idadministrador'])) {
	            return array('idadministrador' => $_POST['idadministrador']);
	            /*
	            		idcliente,
				razonsocial,
				email,
				tipoiva,
				cuit,
				nombre,
				direccion,
				cp,
				localidad,
				password,
				*/
	        } else {
	            return '';
	        }
    	}

    	public function baja($datos=''){
    		 $administrador = new Administrador();
    		 echo $_POST['idempleado'];
            $administrador->baja($_POST['idempleado']);
			
		}
	}
?>