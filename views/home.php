<?php
// include("./views/includes/header.php");
// include("./modelo/Productos.php");
// include("./modelo/platosCombinados.php");
// include("./modelo/Categorias.php");
// include("./data/listaProductos.php");
// require_once "./modelo/Pedido.php";

//Comprovamos si hay una session activa
if (isset($_SESSION['compraProductos'])) {
    if (isset($_POST['producto'])) {
        // $productoSel = $arrayProductos[$_POST['producto']];
        array_push($_SESSION['compraProductos'], $_POST['producto']);
    }
} else {
    $_SESSION['compraProductos'] = array();
}

?>

<!-- <html>

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
</head> -->

<body>
    <section id="banner_principal" class="container-fluid" style="background-image: URL(../assets/images/mesas.jpg);">
        <div class="col-12 banner">
            <h2 class="mb-5 ">Restaurante</h2>
            <h1 class="mb-5 ">Con el cariño y la dedicacion de lo casero</h1>
            <a href=carta style="font-size:18px"><button type="submit" id="botonmenuprincipal">Ver Carta</button></a>
        </div>
    </section>
    <section id="pasteles" class="container-fluid mt-5 pb-5 mb-5">
        <h2 class="textoPlatos">Platos mas Solicitados</h2>
        <hr>
        <div class="container-xxl contenedor-xxl">
            <div class="text-center row md-3">
                <?php foreach ($platosMasSolicitados as $plato) { ?>
                    <div class="col-12 col-md-3 mt-3 divOferta">
                        <div class="bg-color1 m-1">
                            <img class="fotocolumna" src=<?= $plato->getImagen() ?>>
                            <h3 class="textoOfertas fs-4 fa-center p-3 d-flex justify-content-center"><?= $plato->getNombre() ?></h3>
                        </div>
                        <form method="POST" action="home.php">
                            <input type="hidden" name="producto" value='<?= $plato->getNombre(); ?>'>
                            <button type="submit" class="botonStyle" href="">Añadir</button>
                        </form>
                    </div>
                <?php }
                ?>
            </div>
        </div>

    </section>
    <section id="seccionPatoGordo" class="container-fluid" style="background-image: URL(../assets/images/señora.png);">
        <div class="col-12 banner">
            <h2 class="mb-2">El Pato Gordo</h2>
            <p>El Pato Gordo es un resturente orientado a la comida casera de toda la vida.
                Tambien preparamos todo tipo de platos con el pato.<br> El pato tiene una de las
                carnes mas sabrosas del mundo, estamos encanados que estes en nuestra pagina web.<br> aqui podras
                encargar nuestros platos.<br>
                Bienvendido!
            </p>
            <form method="" action=video>
                <button type="submit" id="botonmenuprincipal">Video Promocional</button>
            </form>
        </div>
    </section>
</body>