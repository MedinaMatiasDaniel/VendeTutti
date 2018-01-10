<?php
// MODIFICAR LAS OPCIONES QUE VERA CADA TIPO DE DE USUARIO

switch ($_SESSION["tipo"]) {
    case 'administrador':
        $menu = array('administrador' => 'administrador');
        break;
    case 'supervisor':
        $menu = array('Camiones' => 'camion',
            'Reportes' => 'reporte',
            'Zonas' => 'zona',
            'Modificaciones' => 'modificacion',
        );
        break;
    case 'empleadoadm':
        $menu = array('ABM​ ​Clientes' => 'cliente', ' ABM​ ​ordenes​ ​de​ ​Envio' => 'ordenEnvio', 'ABM​ ​Articulos' => 'articulo');
        break;
    case 'cliente':
        $menu = array('cliente' => 'cliente');
        break;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Vende Tutti</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.css">
        <link rel="stylesheet" href="../css/responsive.bootstrap.min.css">
        <link rel="stylesheet" href="../DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/estilos.css">

        <script src="../js/jquery.js"></script>
        <script src="../js/jquery.dataTables.min.js"></script>
        <script src="../DataTables/datatables.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/dataTables.buttons.min.js"></script>
        <script src="../js/buttons.bootstrap.min.js"></script>
        <script src="../js/buttons.html5.min.js"></script>
        <script src="../js/dataTables.responsive.min.js"></script>
        <script src="../js/responsive.bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/funciones.js"></script>
        <script type="text/javascript" src="../js/validaciones.js"></script>
        <script type="text/javascript" src="../js/zona.js"></script>
        <script type="text/javascript" src="../js/cliente.js"></script>
        <script type="text/javascript" src="../js/administrador.js"></script>
        <script type="text/javascript" src="../js/articulo.js"></script>
        <script type="text/javascript" src="../js/camion.js"></script>
        <script type="text/javascript" src="../js/modificacion.js"></script>
        <script type="text/javascript" src="../js/ordenEnvio.js"></script>
        <script type="text/javascript" src="../js/panelCliente.js"></script>
        <script type="text/javascript" src="../js/reporte.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <img class="logo" src="../images/logo.jpg" alt="logo">
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav nav-justified">

                        <?php
                        foreach ($menu as $key => $value) {
                            echo '<li><a href="' . $value . '">' . $key . '</a></li>';
                        }
                        ?>
                        <!--
                        <li><a href="ABM camiones.html">Camiones</a></li>
                        <li><a href="ABM zonas.html">Zonas</a></li>
                        <li><a href="Reportes.html">Reportes</a></li>
                        <li><a href="Modificaciones.html">Modificaciones</a></li>
                        <li><a href="ABM Clientes.html">Clientes</a></li>
                        <li><a href="ABM Ordenes de Envio.html">Ordenes de Envio</a></li>
                        <li><a href="ABM Articulos.html">Articulos</a></li>
                        -->
                        <!--<li><a class="nombre" href="#bannerformmodal" data-toggle="modal" data-target="#modalDatos">Nombre Cliente</a></li>-->
                        <li class="nombre"><?php echo $_SESSION["usuario"]; ?></li>
                        <!--<li><a href="#" id="login" data-toggle="modal" data-target="#ModalIniciar"><span id="login" class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                        <li><a id="login" href="empleado/salir"><span class="glyphicon">&#xe163;</span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
