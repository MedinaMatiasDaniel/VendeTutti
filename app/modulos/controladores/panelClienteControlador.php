<?php
	require_once(VISTAS.'panelClienteVista.php');
	require_once(MODELOS.'panelClienteModelo.php');

	class panelClienteControlador{
		// METODOS PUBLICOS
    	public function index($parametro = '') {
        	// verifica si la session existe y tiene los privilegios
	        session_start();
	        if (isset($_SESSION["usuario"])) {
	            //echo("pagina privada");
	            $pagina = new panelClienteVista();
	            $pagina->mostrarPagina();
	        } else {
	            header('location: ../index.html');
	            exit();
	        }
    	}

    	public function listar($datos='') {
	        $panelCliente = new PanelCliente();
	        $panelCliente->get(0);

	        if($panelCliente->msj == 'Varios Resultados') {
	            $array = array('data' => $panelCliente->lista);
	            echo json_encode($array);
	        }else {
	            echo json_encode($panelCliente);
	        }
    	}


    	public function guardar($datos='') {


    		$datosValidos = array(
    							'razonsocial' => $_POST['razonsocial'],
    							'email' => $_POST['email'],
    							'tipoiva' => $_POST['tipoiva'],
    							'cuit' => $_POST['cuit'],
    							'cp' => $_POST['cp'],
    							'localidad' => $_POST['localidad'],
    							'nombre' => $_POST['nombre'],
    							'password' => '1234',
								'direccion' => $_POST['direccion']);

    		//print_r($datosValidos); 
            $panelCliente = new panelCliente();
            $panelCliente->set($datosValidos);


    	}

    	// Metodos privados
    	private function validarPOST() {
	        if (isset($_POST['idpanelCliente'])) {
	            return array('idpanelCliente' => $_POST['idpanelCliente']);
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
	}
?>