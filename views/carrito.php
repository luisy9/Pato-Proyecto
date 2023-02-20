<?php

require_once("./config/pedidoDAO.php");

?>

<section id="carrito_pc" class="container-fluid pt-5 pb-5" style="background-image: URL(../assets/images/mesas.jpg);">
    <h1 class="text-center h1Carrito pb-5">Carrito</h1>
    <div class="container contenedorCarrito pt-1">
        <div class="contenedorDentroCarrito container-fluid">
            <h1 class="h1Pedido mx-5 pt-3">Tu Pedido</h1>
            <?php foreach (pedidoDAO::getPedidos() as $pedido) { ?>
                <div class="container">
                    <div class="row px-3">
                        <div class="col-md">
                            <p class="px-4"><?= $pedido->getNombrePedido() ?></p>
                        </div>
                        <div class="col-md">
                            <div class="d-flex flex-row " style="margin-left:6rem;">
                                <form method="POST" action=sumarPedido>
                                    <input type="hidden" name="nombre" value='<?= $pedido->getNombrePedido() ?>'>
                                    <input type="hidden" name="precio" value='<?= $pedido->getPrecioPedido() ?>'>
                                    <button type="submit" class="botonStyleCarritoPC mx-3"><img src="../assets/images/mas.png" width="30px" height="30px"></button>
                                </form>
                                <p class="pt-1"><?= $pedido->getCantidadPedido() ?></p>
                                <div class="">
                                    <form method="POST" action=restarPedido>
                                        <input type="hidden" name="nombre" value='<?= $pedido->getNombrePedido() ?>'>
                                        <button type="submit" class="botonStyleCarritoPC mx-3"><img src="../assets/images/menos.png" width="30px" height="30px"></button>
                                    </form>
                                </div>
                                <div class="" style=" margin-left:12rem">
                                    <p class="pt-1"> Precio: <?= $pedido->getPrecioTotal() ?>€</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <form method="POST" action=borrarPedido>
                                <input type="hidden" name="nombre" value='<?= $pedido->getNombrePedido(); ?>'>
                                <button type="submit" class="botonStyleCarritoPC mx-3" style="float: right;"><img src="../assets/images/trash.png" width="30px" height="30px"></button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
            <div class="d-flex flex-row ">
                <div class="container mx-4" style="max-width: 25%;">
                    <div class="divPrecio">
                        <h5 class="h2Total mx-3" style="float:left;">Total: </h5>
                        <p class="pPrecio px-3" style="float:right;"><?= pedidoDAO::getPrecioTotalPedido() ?>€</p>
                    </div>
                </div>
                <div class="p-1 container" style="max-width:22%; ">
                    <form method="POST" action=compraFinal>
                        <button type="submit" style="float:right;" class="botonStyleCarrito">Finalizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--                     CARRITO             MOBILE                   -->
<section id="carrito_mobil" class="container-fluid pt-5 pb-5" style="background-image: URL(../assets/images/mesas.jpg);">
    <h1 class="text-center h1Carrito pb-5">Carrito</h1>
    <div class="container contenedorCarrito pt-2">
        <div class="container contenedorDentroCarritoMobil">
            <h1 class="h1Pedido py-3 " style="padding-left:30px">Tu Pedido</h1>
            <?php foreach ($pedidos as $pedido) { ?>
                <p style="padding-left:30px"><?= $pedido->getNombrePedido() ?></p>
                <p style="padding-left:30px">Precio: <?= $pedido->getPrecioTotal() ?></p>
                <div class="d-flex flex-row ">
                    <div class="p-1 ">
                        <form method="POST" action="carrito.php">
                            <input type="hidden" name="borrarProducto" value='<?= $pedido->getNombrePedido(); ?>'>
                            <button type="submit" class="botonStyleCarritoMas"><img src="assets/images/mas.png" width="30px" height="30px"></button>
                        </form>
                    </div>
                    <div class="p-1">
                        <p><?= $pedido->getCantidadPedido() ?></p>
                    </div>
                    <div class="p-1">
                        <form method="POST" action="carrito.php">
                            <input type="hidden" name="borrarProducto" value='<?= $pedido->getNombrePedido(); ?>'>
                            <button type="submit" class="botonStyleCarritoMenos"><img src="assets/images/menos.png" width="30px" height="30px"></button>
                        </form>
                    </div>
                    <div class="p-1 px-5">
                        <form method="POST" action="carrito.php">
                            <input type="hidden" name="borrarProducto" value='<?= $pedido->getNombrePedido(); ?>'>
                            <button type="submit" class="botonStyleCarritoQuitar"><img src="assets/images/trash.png" width="30px" height="30px"></button>
                        </form>
                    </div>
                </div>
            <?php }
            ?>
            <div class="d-flex flex-row ">
                <div class="container mx-3" style="max-width: 50%;">
                    <div class="divPrecio">
                        <h5 class="h2Total mx-3" style="float:left;">Total: </h5>
                        <p class="pPrecio px-3" style="float:right;"><?= $precioTotal ?></p>
                    </div>
                </div>
                <div class="p-1 container" style="max-width:32%; max-height:60%">
                    <form method="POST" action="CompraFinal.php">
                        <button type="submit" style="float:right;" class="botonStyleCarrito">Finalizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>