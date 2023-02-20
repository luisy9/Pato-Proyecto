<?php
require_once('Productos.php');
    class Carnes extends Productos{
        public function __construct($id_producto,$nombre_producto,$precio_producto,$imagen,$id_categoria)
        {
            parent::__construct($id_producto,$nombre_producto,$precio_producto,$imagen,$id_categoria);

        }
    }

?>
