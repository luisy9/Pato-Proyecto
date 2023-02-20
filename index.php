<?php
require_once "config/parameters.php";
require_once "controller/homeController.php";
//Si no nos envia ninguna peticion mostramos la pagina inicial


if(!isset($_GET['controller'])){
    //esto podria ser un menu sin ningun acceso a datos
    //en nuestro caso sera una vista de un controllador
    header("Location: ".base_url."home/index");

}else{
    $nombre_controlador = $_GET['controller'].'Controller';
    //
    if(class_exists($nombre_controlador)){
        $controlador = new $nombre_controlador();
        
    }
    //
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = action_default;
    }
    
    $controlador->$action();
}

?>