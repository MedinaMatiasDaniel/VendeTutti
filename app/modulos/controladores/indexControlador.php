<?php


	require_once(VISTAS.'indexView.php');
	//require_once(MODELOS.'indexModelo.php');
	class indexControlador {

		function __construct() {
			//echo 'index principal';
		}
		public function index($parametro = null) {
			
			// Verifica si esta iniciada la sesion
			session_start();
			$vista = new VistaIndex();
			if (isset($_SESSION["usuario"])) {	// Esta logueado
							// VERIFICAR SI EXISTE CLAVE 
				// Verifica el tipo e indica que opciones del menu se mostrara
				switch ($_SESSION["tipo"]) {
					case 'administrador':
						$menu = array('Zonas' => 'zona',
									'Reportes' => 'reporte',
									'Zonas' => 'zona',
									'Modificaciones' => 'modificacion',
									'Clientes' => 'cliente',
									'Ordenes de Envio' => 'orden',
									'Articulos' => 'articulo'
						);
						break;


					case 'supervisor':
						$menu = array('ABM​ ​Camiones' => 'caminones', 'ABM​ ​Zonas' => 'zonas', 'Reporte ordenes' => 'reporte');
						break;
					case 'empleadoadm':
						
						$menu = array('ABM​ ​Clientes' => 'cliente', ' ABM​ ​ordenes​ ​de​ ​Envio' => 'ordenes', 'ABM​ ​Articulos' => 'articulos');
						break;

					case 'cliente':
						
						$menu = array('Cliente' => 'cliente');
						break;
				}

				
						
				$vista->motrarMenu($menu);
			}else {
				header('location: ../index.html'); //redirige fuera de app

			}


		}

		public function hash($parametro = null) {
			
			if(empty($parametro)){
				echo "Ingrese el string";
			} else {
				echo "parametro: " . md5($parametro[0]) . "<br>";
				echo iconv_strlen(md5($parametro[0]));
				//echo(md5($parametro));
				
			}
			
		}


	}

?>