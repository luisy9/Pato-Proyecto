<?php

$pedidos = [];
if (isset($_COOKIE['pedido'])) {
    $pedidos = json_decode($_COOKIE['pedido']);
}

$precio = 0;
if (isset($_COOKIE['precioTotal'])) {
    $precio = $_COOKIE['precioTotal'];
}
?>

<body>
    <section id="carrito_pc" class="container-fluid pt-5 pb-5" style="background-image: URL(../assets/images/mesas.jpg);">
        <h1 class="text-center h1Carrito pb-5">Compra Final </h1>
        <div id="caca" class="container-xxl contenedorCarrito py-4 px-4">
            <div class="contenedorDentroCarritoFinal">
                <h1 class="h1Pedido mx-4 pt-3">Tu Compra</h1>
                <?php foreach (pedidoDAO::getPedidos() as $pedido) { ?>
                    <div class="row">
                        <div class="col my-5 mx-4" style="text-align:left">
                            <td><?= $pedido->getNombrePedido() ?></td>
                        </div>
                        <div class="col my-5 " style="display:flex">
                            Cantidad: <?= $pedido->getCantidadPedido() ?>
                        </div>
                        <div class="col my-5">
                            Precio: <?= $pedido->getPrecioPedido() ?>€
                        </div>
                        <div class="col my-5">

                        </div>
                    </div>
                <?php }
                ?>
                <div class="row py-3">
                    <div class="col precioFinal mx-4">
                        <h5 class="h2Total" style="float:left;">Total: </h5>
                        <p class="pPrecio" style="float:right"><?= pedidoDAO::getPrecioTotalPedido() ?>€</p>
                    </div>
                    <form method="POST" action=reseñas>
                        <button type="submit">Añadir Reseña</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>