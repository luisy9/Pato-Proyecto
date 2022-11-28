<?php
    class Carnes extends Productos{
        public function __construct($nom,$precioProducto,$imagen,$categorias)
        {
            parent::__construct($nom,$precioProducto,$imagen,Categorias::CARNES);

        }
    }

?>
