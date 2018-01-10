<?php
	require_once(VISTAS.'modificacionVista.php');
	require_once(MODELOS.'modificacionModelo.php');

	class modificacionControlador{
		// METODOS PUBLICOS
    	public function index($parametro = '') {
        	// verifica si la session existe y tiene los privilegios
	        session_start();
	        if (isset($_SESSION["usuario"])) {
	            //echo("pagina privada");
	            $pagina = new modificacionVista();
	            $pagina->mostrarPagina();
	        } else {
	            header('location: ../index.html');
	            exit();
	        }
    	}

    	public function listar($datos='') {
	        $modificacion = new Modificacion();
	        $modificacion->get(0);

	        if($modificacion->msj == 'Varios Resultados') {
	            $array = array('data' => $modificacion->lista);
	            echo json_encode($array);
	        }else {
	            echo json_encode($modificacion);
	        }
    	}


    	public function guardar($datos='') {
    	}

    	// Metodos privados
    	private function validarPOST() {
	        if (isset($_POST['idmodificacion'])) {
	            return array('idmodificacion' => $_POST['idmodificacion']);
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