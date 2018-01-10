<?php

/*
 * Clase que sera heredada por las vistas
 * Con estructura JSON { estado : true / false
 *					     mensaje : "Mensaje de informacion"
 *						 datos: array()
 * 						}
*/
class Vista {
	
	public $estado = true;
	public $mensaje;
	public $datos = array();


	public function renderJSON() {
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($this);
	}
}

?>