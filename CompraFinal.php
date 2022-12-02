<?php
require_once "header.php";
require_once "Pedido.php";
require_once "Productos.php";
require_once "listaProductos.php";

$pedidos = [];
if (isset($_COOKIE['pedido'])) {
    $pedidos = json_decode($_COOKIE['pedido']);
}

$precio = 0;
if (isset($_COOKIE['precioTotal'])) {
    $precio = $_COOKIE['precioTotal'];
}
?>

<html>

<head>
    <title>Platilla de bootstrapp</title>

    <meta charset="UTF-8" />
    <meta name="description" content="Descripció web" />
    <meta name="keywords" content="Paraules clau" />
    <meta name="author" content="Autor" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/full_estil.css" rel="stylesheet" type="text/css" media="screen" />

    <meta http-equiv="refresh" content="2000" />
</head>
<html>

<body>
    <h1>Compra Final</h1>
    <?php foreach ($pedidos as $pedido) { ?>
        <div class="row">
            <div class="col my-5 mx-4" style="text-align:left">
                <td><?= $pedido[0] ?></td>
            </div>
            <div class="col my-5 " style="display:flex">
                <?= $pedido[1] ?>
            </div>
            <div class="col my-5">
                <?= $pedido[2] ?>€
            </div>
            <div class="col my-5">

            </div>
        </div>
    <?php }
    ?>
    <h1>Precio Total</h1>
    <div class=""><?= $precio ?>€</div>
</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>