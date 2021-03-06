<?php
require 'conexion.php';
require 'sesiones.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU PRINCIPAL</title>

    <!-- Bootstrap core CSS
    <link href="assets/css/bootstrap.css" rel="stylesheet">-->
    <link href="css\bootstrap.min.css" rel="stylesheet">


    <!--external css-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DataTables -->
    <link href="assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link href="assets/css/table-responsive.css" rel="stylesheet">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/script/script2.js"></script>

    <!-- Autocompleto -->
    <link rel="stylesheet" href="assets/calendario/jquery-ui.css" />

    <script src="assets/calendario/jquery-ui.js"></script>
    <!-- Autocompleto
    <script src="assets/script/autocompleto.js"></script>
    <script type="text/javascript" src="assets/script/script.js"></script>-->

    <script type="text/javascript" src="assets/script/validation.min.js"></script>

    <!-- Autocompleto -->

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="menu.php">inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="listadocliente.php">Clientes <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listadoproducto.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="FacturarVentas.php">Factura</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="pedidos.php">Pedidos</a>
                </li>

            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link " href="logout.php">cerrar session</a>
                </li>
            </ul>
        </div>
    </nav>


    <section class="row m-0 bg-white justify-content-center align-items-center vh-100">
        <div class="col-sm-8 bg-white">
            <h1 class="text-center">Cargar cliente</h1>
            <!--formulario-->
            <form class="container-fluid center-block bg-white " action="cargarcliente.php" method="GET">
                <div class="row">

                    <div class="col-12">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre_cliente" id="nombre_cliente">
                    </div>
                    <div class="col-12">
                        <label>Apellido</label>
                        <input type="text" class="form-control" name="apellido_cliente" id="apellido_cliente">
                    </div>
                    <div class="col-12">
                        <label>Documento</label>
                        <input type="text" class="form-control" name="documento_cliente" id="documento_cliente">
                    </div>
                    <div class="col-12">
                        <label>Documento</label>
                        <input type="text" class="form-control" name="direccion_cliente" id="direccion_cliente">
                    </div>
                    <div class="col-12">
                        <label>Telefono</label>
                        <input type="text" class="form-control" name="telefono_cliente" id="telefono_cliente">
                    </div>
                </div>
                <br>
                <!--botones-->
                <div class="text-center">
                    <!--button type="submit" class="btn btn-success" id="btn_buscar">
                        <img src="img\search.svg" alt="" width="20" height="20">
                    </button-->
                    <button type="submit" class="btn btn-primary" name="btn_agregar" id="btn_agregar"
                        value="Agregar">Agregar</button>

                </div>
            </form>
        </div>

    </section>
    <script src="js\jquery-3.1.1.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
</body>
<?php

?>

</html>