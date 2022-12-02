<?php


require_once "header.php";
require_once "Pedido.php";
require_once "Productos.php";
require_once "listaProductos.php";
function miPrint($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
$pedidos = [];

$precioTotal = 0;
$pedidoCookie = [];
if (isset($_SESSION['compraProductos'])) {
    if (isset($_POST['añadirProducto'])) {

        // $añadir = $_SESSION['compraProductos'][$_POST['añadirProducto']];
        // $añadir->setCantidadPedido($añadir->getCantidadPedido() + 1);
        array_push($_SESSION['compraProductos'], $_POST['añadirProducto']);
    }
    if (isset($_POST['restarProducto'])) {
        if (($key = array_search($_POST['restarProducto'], $_SESSION["compraProductos"])) !== false) {
            unset($_SESSION["compraProductos"][$key]);
        }
    }
    if (isset($_POST['borrarProducto'])) {
        $array_del = array($_POST["borrarProducto"]);
        $_SESSION["compraProductos"] = array_values(array_diff($_SESSION["compraProductos"], $array_del));
    }
    $cuentasProductos = array_count_values($_SESSION['compraProductos']);
    foreach ($cuentasProductos as $nombreProducto => $cuentas) {
        $producto = $listaProductos[$nombreProducto];
        $pedido = new Pedido($nombreProducto, $cuentas, $producto->getPrecioProducto());
        array_push($pedidos, $pedido);
        $precioTotal = $precioTotal + $pedido->getPrecioTotal();
        array_push($pedidoCookie, [$nombreProducto, $cuentas, $pedido->getPrecioTotal()]);
    }
} else {
    $_SESSION['compraProductos'] = array();
}

setcookie("pedido", json_encode($pedidoCookie), time() + 8 * 3600);

setcookie("precioTotal", $precioTotal, time() + 8 * 3600);

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
<section id="banner_principal" class="container-fluid pt-5 pb-5" style="background-image: URL(assets/images/mesas.jpg);">
    <h1 class="text-center pb-5">Carrito</h1>
    <div id="caca" class="container-xxl contenedorCarrito py-1">
        <div class="contenedorDentroCarrito">
            <h1 class="h1Pedido mx-4 pt-3">Tu Pedido</h1>
            <?php foreach ($pedidos as $pedido) { ?>
                <div class="row">
                    <div class="col my-5 mx-4" style="text-align:left">
                        <td><?= $pedido->getNombrePedido() ?></td>
                    </div>
                    <div class="col my-5 " style="display:flex">
                        <form method="POST" action="carrito.php">
                            <input type="hidden" name="añadirProducto" value='<?= $pedido->getNombrePedido(); ?>'>
                            <button type="submit" class="botonStyleCarrito mx-3">+</button>
                        </form>
                        <form method="POST" action="carrito.php">
                            <input type="hidden" name="restarProducto" value='<?= $pedido->getNombrePedido(); ?>'>
                            <button type="submit" class="botonStyleCarrito mx-3">-</button>
                            <td class="px-2"><?= $pedido->getCantidadPedido() ?></td>
                        </form>
                    </div>
                    <div class="col my-5">
                        <?= $pedido->getPrecioTotal() ?>
                    </div>
                    <div class="col my-5">
                        <form method="POST" action="carrito.php">
                            <input type="hidden" name="borrarProducto" value='<?= $pedido->getNombrePedido(); ?>'>
                            <button type="submit" class="botonStyleCarrito">X</button>
                        </form>
                    </div>
                </div>
            <?php }
            ?>
            <form method="POST" action="CompraFinal.php">
                <div class="contendroFinalizar">
                    <h5 class="h2Total">Total: </h5><?= $precioTotal ?>

                    <button type="submit" class="botonStyleCarrito">Finalizar</button>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>
<?php

require_once "footer.html";


?>