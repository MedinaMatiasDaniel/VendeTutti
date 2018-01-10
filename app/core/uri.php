<?php
/*
1. Obtiene la URI
2. Divide en fragmentos
3. Asigna a cada fragmento a la petición
	modulo/recurso correspondiente
4. Almacenar los argumentos

	Analiza la URI recibida por el usuario, luego botiene : modulo/recurso/argumentos

	1) Analiza la URI
	* Genera un array con el modulo,recurso, parametros
	* Genera un array con los argumento que fueron pasados
*/

function obtener_uri() {
	// Si existe la variable $_GET['url'] la asigna a $url, de lo contrario asigna la default
	if(isset($_GET["url"])) {
		$url = $_GET["url"];
	} else {
			$url = "index/index";  // Controlador default y metodo
		}

	// Crea un array con el string
	$url = explode("/", $url);


	// Define quien es el metodo, el controlado y el parametro
	$controlador = (isset($url[0])) ? $url[0] . "Controlador" : "indexControlador";
	$metodo = (isset($url[1]) && $url[1] != null) ? $url[1] : "index";
	$parametro = (isset($url[2]) && $url[2] != null) ? $url[2] : null;

	if (isset($url[2]) && $url[2] != null) {
		//echo "parametros Existe el parametros<br/>";
		$parametro2 = array_slice($url, 2);
		//print_r($parametro2);
		//echo "<br/>";
	}else {

		$parametro2 = null;
		//echo "No Existe el parametros<br/>";
		//print_r($parametro2);
	}



	//echo "controlador: " . $controlador;
	//echo "</br> metodo: " . $metodo;
	//echo "</br> parametro: " .$parametro;

	$datos = array($controlador, $metodo, $parametro2);
	return $datos;
}

?>