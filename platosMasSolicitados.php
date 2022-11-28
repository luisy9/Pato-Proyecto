<?php
     class platosMasSolicitados extends Productos{

        public function __construct($nom,$precioProducto,$imagen)
        {
            parent::__construct($nom,$precioProducto,$imagen,Categorias::PLATOS_SOLICITADOS);
        }
    }







?>