<?php
abstract class AbstractaModelo{
	// ATRIBUTOS
	private  $host = 'localhost';
	private static $usuario = 'root';
	private static $clave = '';
	protected $nombredb = '';  // En casa clase hija se especificara el nombre de la BaseDeDatos
	protected $query;
	protected $rows = array();
	protected $conexion;
	public $msj;


	// OPERACIONES
	private function abrirConexion() {
		try {
			$this->conexion = new PDO("mysql:host=$this->host;dbname=$this->nombredb", self::$usuario, self::$clave);
			// set the PDO error mode to exception
			$this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$this->msj = "Conexion exitosa";
		} catch (PDOException $e) {
			$this->msj = "Error: " . $e->getMessage();
		}
		
	
	}

	
	private function cerrarConexion() {
		$this->conexion = null;
	}

	// Consultas del tipo INSERT
	protected function consultaSimple() {
		$this->abrirConexion();
		try {
			// $this->conexion->query($this->query);
			$this->conexion->exec($this->query);
			$this->msj = "Correcto";
		} catch(PDOException $e) {
			$this->msj = "Error: " . $e->getMessage();
			}
		$this->cerrarConexion();
	}


	// Consultas del tipo SELECT
	protected function consultaResultados() {
		// Si no se allan resultados retorna []
		// Si, retorna array asociativo
		$this->abrirConexion();
		try{
			//$resultados = $this->conexion->query($this->query);
			$resultados = $this->conexion->query($this->query, PDO::FETCH_ASSOC);
			foreach ($resultados as $this->rows[]) {
					
			}
			
		} catch(PDOException $e) {
			$this->msj = "Error: " . $e->getMessage();
		}
		
		$this->cerrarConexion();
	}

}

?>