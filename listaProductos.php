<?php
require_once "Patos.php";
require_once "Postres.php";
require_once "Productos.php";
require_once "platosCombinados.php";
require_once "Categorias.php";
require_once "Verduras.php";
require_once "Pescados.php";
require_once "platosMasSolicitados.php";

$listaProductos = array(
    "Carne con Patatas" => new platosCombinados('Carne con Patatas', 8, "assets/images/carnePatatas.jpg", 1 ),
    "Pato con Patatas" => new Patos('Pato con Patatas', 8, "assets/images/patoConPatatas.jpg", 1 ),
    "Pato al horno" => new Patos('Pato al horno', 8, "assets/images/pato.jpg", 1 ),
    "Flan de la casa" => new Postres('Flan de la casa',10,"assets/images/flan_de_la_casa.jpg",1),
    "tarta" => new Postres('tarta',9,"assets/images/tarta.jpg",1),
    "Brocoli con patatas y zanahorias y gambas" => new Verduras('Brocoli con patatas y zanahorias', 10, "assets/images/verduras.jpg", 2 ),
    "Merluza con gambas y patatas" => new Pescados('Merluza con gambas y patatas', 11 , "assets/images/merluza.jpg", 2 ),
    "Pechuga con Patatas" => new platosCombinados('Pechuga con Patatas', 8, 'assets/images/pechugas.jpg', 6 ),
    "Toritilla de Patatas" => new platosMasSolicitados('Toritilla de Patatas', 8, "assets/images/tortilla.jpg", 1 ),
    "Pechuga con Patatas" => new platosMasSolicitados('Pechuga con Patatas', 8, "assets/images/pechugas.jpg", 6 ),
    "Brocoli con patatas y zanahorias y gambas" => new platosMasSolicitados('Brocoli con patatas y zanahorias y gambas', 8, 'assets/images/verduras.jpg', 4 ),
    "Merluza con gambas y patatas" => new platosMasSolicitados('Merluza con gambas y patatas', 8, 'assets/images/merluza.jpg', 6 ),
);


$arrayPatos = array(
    0 => new Patos('Pato con Patatas', 8, "assets/images/patoConPatatas.jpg", 1 ),
    1 => new Patos('Pato al horno', 8, "assets/images/pato.jpg", 1 )

);

$arrayPostres = array(
    new Postres('Flan de la casa',10,"assets/images/flan_de_la_casa.jpg",1),
    new Postres('tarta',9,"assets/images/tarta.jpg",1),
);


$arrayVerduras = array(
    new Verduras('Brocoli con patatas y zanahorias', 10, "assets/images/verduras.jpg", 2 ),
);

$arrayPescados = array(
    new Pescados('Merluza con gambas y patatas', 11 , "assets/images/merluza.jpg", 2 ),
);


$platosCombinados = array(
    new platosCombinados('Carne con Patatas', 8, "assets/images/carnePatatas.jpg", 1 ),
    new platosCombinados('Pechuga con Patatas', 8, 'assets/images/pechugas.jpg', 6 ),
);

$platosSolicitados = array(
    new platosMasSolicitados('Toritilla de Patatas', 8, "assets/images/tortilla.jpg", 1 ),
    new platosMasSolicitados('Pechuga con Patatas', 8, "assets/images/pechugas.jpg", 6 ),
    new platosMasSolicitados('Verduras', 8, 'assets/images/verduras.jpg', 4 ),
    new platosMasSolicitados('Merluza', 8, 'assets/images/merluza.jpg', 6 ),
); 

