<?php
    class Pedido{
        
        protected $nombrePedido;
        protected $cantidadPedido;

        public function __construct($nombrePedido,$cantidadPedido){
            $this->nombrePedido = $nombrePedido;
            $this->cantidadPedido = $cantidadPedido;
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
    }




?>