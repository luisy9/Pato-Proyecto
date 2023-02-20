<?php
require_once "./modelo/Carnes.php";
require_once "./modelo/Postres.php";
require_once "./modelo/Productos.php";
require_once "./modelo/platosCombinados.php";
require_once "./modelo/Categorias.php";
require_once "./modelo/Verduras.php";
require_once "./modelo/Pescados.php";
require_once "./modelo/platosMasSolicitados.php";
require_once "./modelo/Patos.php";
require_once "./index.php";
require_once "./config/productDAO.php";

$listaProductos = ProductDAO::getAllProducts();


    // "Carne con Patatas" => new platosCombinados('Carne con Patatas', 8, "assets/images/carnePatatas.jpg", 1 ),
    // "Pato con Patatas" => new Patos('Pato con Patatas', 8, "assets/images/patoConPatatas.jpg", 1 ),
    // "Pato al horno" => new Patos('Pato al horno', 8, "assets/images/pato.jpg", 1 ),
    // "Flan de la casa" => new Postres('Flan de la casa',10,"assets/images/flan_de_la_casa.jpg",1),
    // "tarta" => new Postres('tarta',9,"assets/images/tarta.jpg",1),
    // "Brocoli con patatas y zanahorias" => new Verduras('Brocoli con patatas y zanahorias', 10, "assets/images/verduras.jpg", 2 ),
    // "Merluza con gambas y patatas" => new Pescados('Merluza con gambas y patatas', 11 , "assets/images/merluza.jpg", 2 ),
    // "Pechuga con Patatas" => new platosCombinados('Pechuga con Patatas', 8, 'assets/images/pechugas.jpg', 6 ),
    // "Toritilla de Patatas" => new platosMasSolicitados('Toritilla de Patatas', 8, "assets/images/tortilla.jpg", 1 ),
    // "Pechuga con Patatas" => new platosMasSolicitados('Pechuga con Patatas', 8, "assets/images/pechugas.jpg", 6 ),
    // "Brocoli con patatas y zanahorias y gambas" => new platosMasSolicitados('Brocoli con patatas y zanahorias y gambas', 8, 'assets/images/verduras.jpg', 4 ),
    // "Merluza con gambas y patatas" => new platosMasSolicitados('Merluza con gambas y patatas', 8, 'assets/images/merluza.jpg', 6 ),
    // "Toritilla de Patatas" => new platosMasSolicitados('Toritilla de Patatas', 8, "assets/images/tortilla.jpg", 1 ),
    // "Pechuga con Patatas con Bacon" => new platosMasSolicitados('Pechuga con Patatas con Bacon', 8, "assets/images/tortilla.jpg", 6 ),
    // "Verduras" => new platosMasSolicitados('Verduras', 8, "assets/images/verduras.jpg", 4 ),
    // "Merluza" => new platosMasSolicitados('Merluza', 8, "assets/images/merluza.jpg", 6 ),


$arrayPatos = ProductDAO::getAll(4);

$arrayPostres = ProductDAO::getAll(2);

$arrayVerdurasPescados = ProductDAO::getAll(3);

$platosCarne = ProductDAO::getAll(1);

$platosSolicitados = ProductDAO::getAll(5);

$platosMasSolicitados = ProductDAO::getAll(6);
//     new platosMasSolicitados('Toritilla de Patatas', 8, "../assets/images/tortilla.jpg", 1 ),
//     new platosMasSolicitados('Pechuga con Patatas con Bacon', 8, "../assets/images/pechugas.jpg", 6 ),
//     new platosMasSolicitados('Verduras', 8, '../assets/images/verduras.jpg', 4 ),
//     new platosMasSolicitados('Merluza', 8, '../assets/images/merluza.jpg', 6 ),
// ); 
