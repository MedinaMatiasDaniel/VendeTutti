<?php
require_once('./core/vista.php');
	/* 
	* Renderiza el JSON con los datos recibidos en el array
	*	------------------------------------------
	*	{
	*	    "status": 200,
	*	    "message": true | false,
	*	    "data": []
	*	}
	*	-------------------------------------------------
	*/
	class ModificacionVista extends Vista {
		
		

		function __construct($datos = '') {
			
			//$this->data[] = array('clave' => '', 'clave' => '');
			//$this->renderJSON();
		}

		public function mostrarPagina() {
			require_once("html/head.php");

			require_once("html/modificacion.php");

			require_once("html/footer.php");
		}
	}


?>