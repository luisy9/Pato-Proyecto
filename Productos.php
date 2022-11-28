<?php
     abstract class Productos{
        protected $nombre;
        protected $precioProducto;
        protected $imagen;
        protected $categoria;


        public function __construct($nombre,$precioProducto,$imagen,$categoria){
            $this->nombre = $nombre;
            $this->precioProducto = $precioProducto;
            $this->imagen = $imagen;
            $this->categoria = $categoria;
        }

        /**
         * Get the value of nombre
         */
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         */
        public function setNombre($nombre): self
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of precioProducto
         */
        public function getPrecioProducto()
        {
                return $this->precioProducto;
        }

        /**
         * Set the value of precioProducto
         */
        public function setPrecioProducto($precioProducto): self
        {
                $this->precioProducto = $precioProducto;

                return $this;
        }

         /**
         * Get the value of imagen
         */
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Set the value of imagen
         */
        public function setImagen($imagen): self
        {
                $this->imagen = $imagen;

                return $this;
        }

        /**
         * Get the value of categoria
         */
        public function getCategoria()
        {
                return $this->categoria;
        }

        /**
         * Set the value of categoria
         */
        public function setCategoria($categoria): self
        {
                $this->categoria = $categoria;

                return $this;
        }
    }















?>