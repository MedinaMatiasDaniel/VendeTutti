<?php
	require_once(VISTAS.'articuloVista.php');
	require_once(MODELOS.'articuloModelo.php');

	class articuloControlador{
		// METODOS PUBLICOS
    	public function index($parametro = '') {
        	// verifica si la session existe y tiene los privilegios
	        session_start();
	        if (isset($_SESSION["usuario"])) {
	            //echo("pagina privada");
	            $pagina = new articuloVista();
	            $pagina->mostrarPagina();
	        } else {
	            header('location: ../index.html');
	            exit();
	        }
    	}

    	public function listar($datos='') {
	        $articulo = new Articulo();
	        $articulo->get(0);

	        if($articulo->msj == 'Varios Resultados') {
	            $array = array('data' => $articulo->lista);
	            echo json_encode($array);
	        }else {
	            echo json_encode($articulo);
	        }
    	}


    	public function guardar($datos='') {

    							'nombre' => $_POST['nombre'],
    							'marca' => $_POST['marca'],
    							'descripcion' => $_POST['descripcion'],  
    	}

    	// Metodos privados
    	private function validarPOST() {
	        if (isset($_POST['idarticulo'])) {
	            return array('idarticulo' => $_POST['idarticulo']);
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