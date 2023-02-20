<?php
    class platosCombinados extends Productos{
        public function __construct($nombre,$precioProducto,$imagen)
        {
            parent::__construct($nombre,$precioProducto,$imagen,Categorias::PLATOS_COMNINADOS);

        }


    }

?>
