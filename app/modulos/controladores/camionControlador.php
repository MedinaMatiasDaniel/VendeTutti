<?php
	require_once(VISTAS.'camionVista.php');
	require_once(MODELOS.'camionModelo.php');

	class camionControlador{

		private $permiso;

		function __construct() {
			session_start();
	        if (isset($_SESSION["tipo"]) && $_SESSION["tipo"] == "supervisor") {
	            $this->permiso = true;

	        } else {
	            header('location: ../index.html');
	            exit();
	        }
		}

		// METODOS PUBLICOS
    	public function index($parametro = '') {
        	// verifica si la session existe y tiene los privilegios
	        if ($this->permiso == true) {

	            $pagina = new camionVista();
	            $pagina->mostrarPagina();

	        } else {
	            header('location: ../index.html');
	            exit();
	        }
    	}

    	public function listar($datos='') {
	        $camion = new Camion();
	        $camion->get(0);
	        
	        if($camion->msj == 'Varios Resultados') {
	            $array = array('data' => $camion->lista);
	            echo json_encode($array);
	        }else {
	            echo json_encode($camion);
	        }
    	}


    	public function guardar($datos='') {

    							'modelo' => $_POST['modelo'],
    							'marca' => $_POST['marca'],
    							'patente' => $_POST['patente'],  
    							'chofer' => $_POST['chofer'],  
    	}

    		
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