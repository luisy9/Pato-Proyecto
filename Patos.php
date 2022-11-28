<?php
    class Patos extends Productos{
        public function __construct($nombre,$precioProducto,$imagen)
        {
            parent::__construct($nombre,$precioProducto,$imagen,Categorias::PATOS);

        }


    }

?>


