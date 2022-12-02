<?php
    class Pedido{
        
        protected $nombrePedido;
        protected $cantidadPedido = 1;
        protected $precioTotal;

        public function __construct($nombrePedido,$cantidadPedido,$precioUnidad){
            $this->nombrePedido = $nombrePedido;
            $this->cantidadPedido = $cantidadPedido;
            $this->precioTotal = $precioUnidad * $cantidadPedido;
        }

        /**
         * Get the value of nombrePedido
         */
        public function getNombrePedido()
        {
                return $this->nombrePedido;
        }

        /**
         * Set the value of nombrePedido
         */
        public function setNombrePedido($nombrePedido): self
        {
                $this->nombrePedido = $nombrePedido;

                return $this;
        }

        /**
         * Get the value of cantidadPedido
         */
        public function getCantidadPedido()
        {
                return $this->cantidadPedido;
        }

        /**
         * Set the value of cantidadPedido
         */
        public function setCantidadPedido($cantidadPedido): self
        {
                $this->cantidadPedido = $cantidadPedido;

                return $this;
        }

        /**
         * Set the value of precioTotal
         */
        public function setPrecioTotal($precioTotal): self
        {
                $this->precioTotal = $precioTotal;

                return $this;
        }

        /**
         * Get the value of precioTotal
         */
        public function getPrecioTotal()
        {
                return $this->precioTotal;
        }
    }




?>