<?php

/*
 *
 * 
*/


class VistaIndex{
	
	public function motrarMenu($opciones) {

		//session_start();
		if (isset($_SESSION["usuario"])) {
					
			require_once("html/head.php");
				echo " --- MENU PRINCIPAL </br>";
				echo "Pagina restringida de: " . $_SESSION["usuario"];
				echo '<p><a href="salir">Salir</a></p>';
				
			require_once("html/footer.php");
		}else {
			echo "no estas logueado";
		}
			
	}

	public function mostrarlogin() {
		require_once("html/login2.php");
	}

}

?>