a<?php
	//require_once('./core/abstractaModelo.php');
	require_once('./core/dbAbstractModel.php');
	/*
	 * Sera la clase que se comunicara con la clase Abstacta
	 * GET: Listar todas 
	 * EDIT 
	 * DELETE :  Baja
	 * SET : 
	*/
	class OrdenEnvio extends AbstractaModelo {
		public $id;
		public $IDCLIENTE;
		public $ESTADO;
		public $FECHAINGRESO;
		public $FECHAENTREGA;
		public $HORARIO;
		public $DIRECCION;
		public $LOCALIDAD;
		public $IDZONA;
		public $IDCAMION;
		public $idarticulo;
		public $observaciones;
		public $activo;
		public $lista = array();
                             
		function __construct() {
			$this->dbname = 'vende-tutti';
		}

		public function get($id=0) {
			if($id==0) { // retorna todos
    		$this->query = "
							SELECT
								o.IDORDEN,
								o.IDCLIENTE,
								o.ESTADO,
								o.FECHAINGRESO,
								o.FECHAENTREGA,
								o.HORARIO,
								ci.DIRECCION,
								ci.LOCALIDAD,
								z.IDZONA,
								ca.IDCAMION,
								(select GROUP_CONCAT(a.nombre) from contiene as c inner join articulo as a on a.idarticulo=c.idarticulo WHERE c.IDORDEN= o.IDORDEN) as ARTICULOS,
								o.observaciones
							from orden as o
								inner join camion as ca on ca.IDCAMION=o.IDCAMION
								inner join zona as z on z.IDZONA= o.IDZONA
								inner join cliente ci on ci.IDCLIENTE= o.IDCLIENTE
								inner join contiene as con on con.IDORDEN=o.IDORDEN
							WHERE o.activo = 1
							";
			$this->consultaResultados();
				if (count($this->rows) > 0) {
					$this->lista=$this->rows;
					$this->msj = 'Varios Resultados';
				} else {
					$this->msj = 'No se encontraron Resultados';
				}
	    	} else { 
	    		$this->query = "
							SELECT
								o.IDORDEN,
								o.IDCLIENTE,
								o.ESTADO,
								o.FECHAINGRESO,
								o.FECHAENTREGA,
								o.HORARIO,
								ci.DIRECCION,
								ci.LOCALIDAD,
								z.IDZONA,
								ca.IDCAMION,
								(select GROUP_CONCAT(a.nombre) from contiene as c inner join articulo as a on a.idarticulo=c.idarticulo WHERE c.IDORDEN= o.IDORDEN) as ARTICULOS,
								o.observaciones
							from orden as o
								inner join camion as ca on ca.IDCAMION=o.IDCAMION
								inner join zona as z on z.IDZONA= o.IDZONA
								inner join cliente ci on ci.IDCLIENTE= o.IDCLIENTE
								inner join contiene as con on con.IDORDEN=o.IDORDEN
								WHERE o.idorden = '$id'
								";
				$this->consultaResultados();
				if (count($this->rows) == 1) { // Si existe el id
					foreach ($this->rows[0] as $propiedad => $valor) {
						$this->$propiedad = $valor;
					}
					$this->msj = 'Existe';
				} else {
					$this->msj = 'No existe';
				}
	    	}
		}


		public function set($datos=array()) {
			foreach ($datos as $campo => $valor) {
					$$campo = $valor;
				}		
			$this->query = "
							INSERT INTO orden(IDCLIENTE, ESTADO,FECHAINGRESO,FECHAENTREGA,HORARIO,observaciones,idcamion,idzona)
							VALUES ('$IDCLIENTE','$ESTADO','$FECHAINGRESO','$FECHAENTREGA','$HORARIO','$observaciones','$IDCAMION','IDZONA')
							$ultimo_id = mysql_insert_id(); 
							INSERT INTO contiene(idorden,idarticulo)
							VALUES('$ultimo_id','$idarticulo')

							;";
			$this->consultaSimple();
		}

		public function edit($datos) {
			foreach ($datos as $campo => $valor) {
				$$campo = $valor;
			}
			$this->query = "
					UPDATE orden SET( IDCLIENTE='$IDCLIENTE', ESTADO='$ESTADO',FECHAINGRESO='$FECHAINGRESO',FECHAENTREGA='$FECHAENTREGA',HORARIO='$HORARIO',observaciones='$observaciones',IDCAMION='$IDCAMION',IDZONA='IDZONA' where IDORDEN='$id')

					UPDATE contiene set(  idarticulo='$idarticulo' where idorden= '$id')
							;";
			$this->consultaSimple();
		}
	}
?>