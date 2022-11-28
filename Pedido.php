<?php
    class Pedido{
        
        protected $nombrePedido;
        protected $cantidadPedido;
        protected $precioPedido;

        public function __construct($nombrePedido,$cantidadPedido,$precioPedido){
            $this->nombrePedido = $nombrePedido;
            $this->cantidadPedido = $cantidadPedido;
            $this->precioPedido = $precioPedido;
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
         * Get the value of precioPedido
         */
        public function getPrecioPedido()
        {
                return $this->precioPedido;
        }

        /**
         * Set the value of precioPedido
         */
        public function setPrecioPedido($precioPedido): self
        {
                $this->precioPedido = $precioPedido;

                return $this;
        }
    }




?>