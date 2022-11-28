<?php
include("header.html");
include("Productos.php");
include("platosCombinados.php");
include("Categorias.php");
include("listaProductos.php");

session_start();
if (isset($_SESSION['compraProductos'])) {
    if (isset($_POST['producto'])) {
        $productoSel = $listaProductos[$_POST['producto']];
        array_push($_SESSION['compraProductos'], $productoSel);
    }
} else {
    $_SESSION['compraProductos'] = array();
}

?>

<html>

<head>
    <title>Carta el Pato Gordo</title>
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
<section id="" class="container-fluid mt-3">
    <h2 class="textoPlatos">Nuestra Carta </h2>
    <div id="caca" class="container-xxl contenedorCarta mt-3 mx-auto">
        <!-- columna1 -->
        <div class="row px-4 py-5">
            <div class="col-12 col-md-6">
                <div class="me-md-2 my-5 my-md-0 columna">
                    <h2 class="TitleCards">Platos Combinados </h2>
                    <?php foreach ($platosCombinados as $platoCombi) { ?>
                        <p id="TitlePlatos"><?= $platoCombi->getNombre() ?></p>
                        <img class="imagenesCarta" src=<?= $platoCombi->getImagen() ?>>
                        <button type="button" class="botonStyleCarta" href="">Añadir</button>
                        <p class="styleP"><?= $platoCombi->getPrecioProducto() ?></p>
                    <?php }
                    ?>
                </div>
            </div>
            <div class="col-12 col-md-6 ">
                <div class="ms-md-2 columna">
                    <h2 class="TitleCards">Patos</h2>
                    <?php foreach ($arrayPatos as $pato) { ?>
                        <p><?= $pato->getNombre() ?></p>
                        <img class="imagenesCarta" src=<?= $pato->getImagen() ?>>
                        <button type="button" class="botonStyleCarta" href="">Añadir</button>
                        <p class="styleP"><?= $pato->getPrecioProducto() ?></p>
                    <?php }
                    ?>
                </div>
            </div>
        </div>

        <!-- columna2 -->
        <div class="row px-4 py-5">
            <div class="col-12 col-md-6 ">
                <div class="me-md-2 my-5 my-md-0 columna">
                    <h2 class="TitleCards">Patos</h2>
                    <?php foreach ($arrayVerduras as $verdura) { ?>
                        <p><?= $verdura->getNombre() ?></p>
                        <img class="imagenesCarta" src=<?= $verdura->getImagen() ?>>
                        <button type="button" class="botonStyleCarta" href="">Añadir</button>
                        <p class="styleP"><?= $verdura->getPrecioProducto() ?></p>
                    <?php }
                    ?>
                    <?php foreach ($arrayPescados as $pescado) { ?>
                        <p><?= $pescado->getNombre() ?></p>
                        <img class="imagenesCarta" src=<?= $pescado->getImagen() ?>>
                        <button type="button" class="botonStyleCarta" href="">Añadir</button>
                        <p class="styleP"><?= $pescado->getPrecioProducto() ?></p>
                    <?php }
                    ?>
                </div>
            </div>
            <div class="col-12 col-md-6  ">
                <div class="me-md-2 my-5 my-md-0 columna">
                    <h2 class="TitleCards">Patos</h2>
                    <?php foreach ($arrayPatos as $pato) { ?>
                        <p><?= $pato->getNombre() ?></p>
                        <img class="imagenesCarta" src=<?= $pato->getImagen() ?>>
                        <button type="button" class="botonStyleCarta" href="">Añadir</button>
                        <p class="styleP"><?= $pato->getPrecioProducto() ?></p>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>


<?php

// include("footer.html");


?>