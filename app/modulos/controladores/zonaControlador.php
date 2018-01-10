<?php

header("Access-Control-Allow-Origin: *");
// Permite la ejecucion de los metodos
header("Access-Control-Allow-Methods: GET, POST");
/*
 *
 * 
 * 
 */
require_once(VISTAS . 'zonaVista.php');
require_once(MODELOS . 'zonaModelo.php');

class zonaControlador {

    private $permiso;

    function __construct() {
        // verifica si la session existe y tiene los privilegios
        session_start();
        if (isset($_SESSION["usuario"]) && $_SESSION["tipo"] == "supervisor") {
            $this->permiso = true;
        } else {
            header('location: ../index.html');
            exit();
        }
    }

    // METODOS PUBLICOS
    public function index($parametro = '') {

        // verifar si la session existe y tiene los privilegios
        session_start();
        if (isset($_SESSION["usuario"])) {

        
        if ($this->permiso == true) {


            $pagina = new zonaVista();
            $pagina->mostrarPagina();
        } else {
            header('location: ../index.html');
            exit();
        }
    }
}

    public function guardar($datos = '') {
        $datosValidos = $this->validarPOST();


        if ($datosValidos != '') { // Si los datos son validos ($datosValidos != '')
            // Instancia al modelo
            $zona = new Zona();
            $zona->set($datosValidos);
        } else { // Contratrio retorna JSON con el mensaje de error
        //
			}
    }

    public function listar($datos = '') {
        $zona = new Zona();
        $zona->get();
        $arrayName = array('data' => $zona->lista);
        echo json_encode($arrayName);
    }

    public function editar($datos = '') {
        $datosValidos = $this->validarPOSTeditar();


        if ($datosValidos != '') { // Si los datos son validos ($datosValidos != '')
            // Instancia al modelo
            $zona = new Zona();
            $zona->edit($datosValidos[0], $datosValidos[1]);
        } else { // Contratratio retorna JSON con el mensaje de error
        //
			}
    }

    public function baja($datos = '') {
        $datosValidos = $this->validarPOSTbaja();


        if ($datosValidos != '') { // Si los datos son validos ($datosValidos != '')
            // Instancia al modelo
            $zona = new Zona();
            $zona->baja($datosValidos[0]);
        } else { // Contratratio retorna JSON con el mensaje de error
        //
			}
    }

    // METODOS PRIVADOS
    private function validarPOST() {
        if (isset($_POST['area'])) {

            return array('area' => $_POST['area']);
        } else {
            return '';
        }
    }

    private function validarPOSTeditar() {
        if (isset($_POST['idzona']) && isset($_POST['area'])) {

            //return array('IDZONA' => $_POST['idzona'],
            //			'AREA' => $_POST['area'],
            //			'ACTIVO' => $_POST['activo']);
            $datos = array($_POST['idzona'], $_POST['area']);

            print_r($datos);
            return $datos;
        } else {
            return '';
        }
    }

    private function validarPOSTbaja() {
        if (isset($_POST['idzona'])) {

            return array($_POST['idzona']);
        } else {
            return '';
        }
    }

}

?>