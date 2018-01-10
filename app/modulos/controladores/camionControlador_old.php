<?php
	require_once(VISTAS.'camionVista.php');
	//require_once(MODELOS.'camionModelo.php');

	class camionControlador{

		function __construct() {
			session_start();
	        if (isset($_SESSION["tipo"]) && $_SESSION["tipo"] == "supervisor") {
	            
	            $pagina = new camionVista();
	            $pagina->mostrarPagina();
	        } else {
	            header('location: ../index.html');
	            exit();
	        }
		}

		// METODOS PUBLICOS
    	public function index($parametro = '') {
        	// verifica si la session existe y tiene los privilegios
	        /*
	        session_start();
	        if (isset($_SESSION["usuario"])) {
	            //echo("pagina privada");
	            $pagina = new camionVista();
	            $pagina->mostrarPagina();
	        } else {
	            header('location: ../index.html');
	            exit();
	        }
	        */
    	}

    	public function listar($datos='') {
	        $camion = new Camion();
	        $camion->get();
			$arrayName = array('data' => $camion->lista);
        echo json_encode($arrayName);
    }


    	public function guardar($datos='') {
    	}

    	// Metodos privados
    	private function validarPOST() {
	        if (isset($_POST['idcamion'])) {
	            return array('idcamion' => $_POST['idcamion']);
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