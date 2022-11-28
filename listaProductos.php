<?php
require_once "Patos.php";
require_once "Productos.php";
require_once "platosCombinados.php";
require_once "Categorias.php";
require_once "Verduras.php";
require_once "Pescados.php";
require_once "platosMasSolicitados.php";


$arrayPatos = array(
    new Patos('Pato con Patatas', 8, "assets/images/patoConPatatas.jpg", 1),
    new Patos('Pato al horno', 8, "assets/images/pato.jpg", 1),

);

// $arrayPostres = array(
//     new Postre(''),
//     new Postre(''),
// )


$arrayVerduras = array(
    new Verduras('Brocoli con patatas y zanahorias y gambas', 10, "assets/images/verduras.jpg"),
);

$arrayPescados = array(
    new Verduras('Merluza con gambas y patatas', 11 , "assets/images/merluza.jpg"),
);


$platosCombinados = array(
    new platosCombinados('Carne con Patatas', 8, "assets/images/carnePatatas.jpg", 1),
    new platosCombinados('Pechuga con Patatas', 8, 'assets/images/pechugas.jpg', 6),
);

$platosSolicitados = array(
    new platosMasSolicitados('Toritilla de Patatas', 8, "assets/images/tortilla.jpg", 1),
    new platosMasSolicitados('Pechuga con Patatas', 8, "assets/images/pechugas.jpg", 6),
    new platosMasSolicitados('Verduras', 8, 'assets/images/verduras.jpg', 4),
    new platosMasSolicitados('Merluza', 8, 'assets/images/merluza.jpg', 6),
);
