<?php
     class Productos{
        protected $id_producto;
        protected $nombre_producto;
        protected $precio_producto;
        protected $imagen;
        protected $id_categoria;


        public function __construct(){}
        //     $this->nombre = $nombre;
        //     $this->precioProducto = $precioProducto;
        //     $this->imagen = $imagen;
        //     $this->categoria = $categoria;
        // }

        /**
         * Get the value of nombre
         */
        public function getNombre()
        {
                return $this->nombre_producto;
        }

        /**
         * Set the value of nombre
         */
        public function setNombre($nombre_producto): self
        {
                $this->nombre_producto = $nombre_producto;

                return $this;
        }

        /**
         * Get the value of precioProducto
         */
        public function getPrecioProducto()
        {
                return $this->precio_producto;
        }

        /**
         * Set the value of precioProducto
         */
        public function setPrecioProducto($precio_producto): self
        {
                $this->precio_producto = $precio_producto;

                return $this;
        }

         /**
         * Get the value of imagen
         */
        // public function getImagen()
        // {
        //         return $this->imagen;
        // }

        // /**
        //  * Set the value of imagen
        //  */
        // public function setImagen($imagen): self
        // {
        //         $this->imagen = $imagen;

        //         return $this;
        // }

        /**
         * Get the value of categoria
         */
        public function getCategoria()
        {
                return $this->id_categoria;
        }

        /**
         * Set the value of categoria
         */
        public function setCategoria($id_categoria): self
        {
                $this->id_categoria = $id_categoria;

                return $this;
        }

        /**
         * Get the value of id_producto
         */
        public function getIdProducto()
        {
                return $this->id_producto;
        }

        /**
         * Set the value of id_producto
         */
        public function setIdProducto($id_producto): self
        {
                $this->id_producto = $id_producto;

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
    }















?>