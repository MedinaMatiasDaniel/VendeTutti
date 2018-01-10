<?php

	/*
	 *
	 *
	 *
	*/
	require_once(VISTAS.'clienteVista.php');
	require_once(MODELOS.'clienteModelo.php');


	class clienteControlador{
		// METODOS PUBLICOS
    	public function index($parametro = '') {
        
        	// verifica si la session existe y tiene los privilegios
	        session_start();
	        if (isset($_SESSION["usuario"])) {
	            //echo("pagina privada");
	            $pagina = new clienteVista();
	            $pagina->mostrarPagina();
	        } else {
	            header('location: ../index.html');
	            exit();
	        }

    	}


    	public function listar($datos='') {
         
	        $cliente = new Cliente();
	        $cliente->get(0);

	        if($cliente->msj == 'Varios Resultados') {
	            $array = array('data' => $cliente->lista);
	            echo json_encode($array);
	        }else {
	            echo json_encode($cliente);
	        }
	            

    	}
    	//'IDCLIENTE' => $_POST['idcliente'],

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
            $cliente = new Cliente();
            $cliente->set($datosValidos);




    	}

    	// Metodos privados
    	private function validarPOST() {
	        if (isset($_POST['idcliente'])) {

	            return array('idcliente' => $_POST['idcliente']);
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