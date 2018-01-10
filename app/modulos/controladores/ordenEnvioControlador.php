<?php
	require_once(VISTAS.'ordenEnvioVista.php');
	require_once(MODELOS.'ordenEnvioModelo.php');

	class ordenEnvioControlador{
		// METODOS PUBLICOS
    	public function index($parametro = '') {
        	// verifica si la session existe y tiene los privilegios
	        session_start();
	        if (isset($_SESSION["usuario"])) {
	            //echo("pagina privada");
	            $pagina = new ordenEnvioVista();
	            $pagina->mostrarPagina();
	        } else {
	            header('location: ../index.html');
	            exit();
	        }
    	}

    	public function listar($datos='') {
	        $ordenEnvio = new OrdenEnvio();
	        $ordenEnvio->get(0);

	        if($ordenEnvio->msj == 'Varios Resultados') {
	            $array = array('data' => $ordenEnvio->lista);
	            echo json_encode($array);
	        }else {
	            echo json_encode($ordenEnvio);
	        }
    	}


    	public function guardar($datos='') {
    		'estado' => $_POST['estado'],
    		'fechaingreso' => $_POST['fechaingreso'],
    		'fechaentrega' => $_POST['fechaentrega'],
    		'horario' => $_POST['horario'],
    		'direccion' => $_POST['direccion'],
    		'localidad' => $_POST['localidad'],
    		'idzona' => $_POST['idzona'],
    		'idcamion' => $_POST['idcamion'],




    		 $orden = new OrdenEnvio();
            $orden->set($datosValidos);
    	}

    	// Metodos privados
    	private function validarPOST() {
	        if (isset($_POST['idordenEnvio'])) {
	            return array('idordenEnvio' => $_POST['idordenEnvio']);
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