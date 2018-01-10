<?php
	require_once(VISTAS.'reporteVista.php');
	require_once(MODELOS.'reporteModelo.php');

	class reporteControlador{
		// METODOS PUBLICOS
    	public function index($parametro = '') {
        	// verifica si la session existe y tiene los privilegios
	        session_start();
	        if (isset($_SESSION["usuario"])) {
	            //echo("pagina privada");
	            $pagina = new reporteVista();
	            $pagina->mostrarPagina();
	        } else {
	            header('location: ../index.html');
	            exit();
	        }
    	}

    	public function listar($datos='') {
	        $reporte = new Reporte();
	        $reporte->get(0);

	        if($reporte->msj == 'Varios Resultados') {
	            $array = array('data' => $reporte->lista);
	            echo json_encode($array);
	        }else {
	            echo json_encode($reporte);
	        }
    	}
    	public function guardar($datos='') {
    		'idorden'=> $_POST['idorden'],
    		'estado' => $_POST['estado'],
    		'fechaingreso' => $_POST['fechaingreso'],
    		'fechaentrega' => $_POST['fechaentrega'],
    		'horario' => $_POST['horario'],
    		'direccion' => $_POST['direccion'],
    		'localidad' => $_POST['localidad'],
    		'idzona' => $_POST['idzona'],
    		'idcamion' => $_POST['idcamion'],




    		 $reporte = new reporte();
            $reporte->set($datosValidos);
    	}

    		 $orden = new OrdenEnvio();
            $orden->set($datosValidos);
    	}

    	// Metodos privados
    	private function validarPOST() {
	        if (isset($_POST['idreporte'])) {
	            return array('idreporte' => $_POST['idreporte']);
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