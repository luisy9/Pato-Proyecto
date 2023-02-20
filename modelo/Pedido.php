<?php
    class Pedido{
        
        protected $id_pedido;
        protected $nombre_pedido;
        protected $precio_pedido;
        protected $cantidad_pedido;

        // public function __construct($nombrePedido,$cantidadPedido,$precioUnidad){
        //     $this->nombrePedido = $nombrePedido;
        //     $this->cantidadPedido = $cantidadPedido;
        //     $this->precioTotal = $precioUnidad * $cantidadPedido;
        // 

        /**
         * Get the value of nombrePedido
         */
        public function getNombrePedido()
        {
                return $this->nombre_pedido;
        }

        // /**
        //  * Set the value of nombrePedido
        //  */
        // public function setNombrePedido($nombre_pedido): self
        // {
        //         $this->nombre_pedido = $nombre_pedido;

        //         return $this;
        // }

        // /**
        //  * Get the value of cantidadPedido
        //  */
        public function getCantidadPedido()
        {
                return $this->cantidad_pedido;
        }

        // /**
        //  * Set the value of cantidadPedido
        //  */
        // public function setCantidadPedido($cantidadPedido): self
        // {
        //         $this->cantidadPedido = $cantidadPedido;

        //         return $this;
        // }

        // /**
        //  * Set the value of precioTotal
        //  */
        // public function setPrecioTotal($precioTotal): self
        // {
        //         $this->precioTotal = $precioTotal;

        //         return $this;
        // }

        // /**
        //  * Get the value of precioTotal
        //  */
        public function getPrecioTotal()
        {
                return $this->precio_pedido*$this->cantidad_pedido;
        }

        public function getPrecioPedido()
        {
                return $this->precio_pedido;
        }
    }
