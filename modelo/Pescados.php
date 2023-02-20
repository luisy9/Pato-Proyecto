<?php
    class Pescados extends Productos{
        public function __construct($nom,$precioProducto,$imagen)
        {
            parent::__construct($nom,$precioProducto,$imagen,Categorias::PESCADOS);
        }
    }







?>