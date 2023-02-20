<?php
     class Usuario{
        protected $id_usuario;
        protected $nombre_user;
        protected $apellido_user;
        protected $correo_electronico;
        protected $contraseña_user;
        protected $rol;


        /**
         * Get the value of rol
         */
        public function getRol()
        {
                return $this->rol;
        }

        /**
         * Set the value of rol
         */
        public function setRol($rol): self
        {
                $this->rol = $rol;

                return $this;
        }

        /**
         * Get the value of id_usuario
         */
        public function getIdUsuario()
        {
                return $this->id_usuario;
        }

        /**
         * Set the value of id_usuario
         */
        public function setIdUsuario($id_usuario): self
        {
                $this->id_usuario = $id_usuario;

                return $this;
        }

        /**
         * Get the value of nombre_usuario
         */
        public function getNombreUsuario()
        {
                return $this->nombre_user;
        }

        /**
         * Set the value of nombre_usuario
         */
        public function setNombreUsuario($nombre_user): self
        {
                $this->nombre_user = $nombre_user;

                return $this;
        }

        /**
         * Get the value of apellido_usuario
         */
        public function getApellidoUsuario()
        {
                return $this->apellido_user;
        }

        /**
         * Set the value of apellido_usuario
         */
        public function setApellidoUsuario($apellido_user): self
        {
                $this->apellido_user = $apellido_user;

                return $this;
        }

        /**
         * Get the value of correo_electronico
         */
        public function getCorreoElectronico()
        {
                return $this->correo_electronico;
        }

        /**
         * Set the value of correo_electronico
         */
        public function setCorreoElectronico($correo_electronico): self
        {
                $this->correo_electronico = $correo_electronico;

                return $this;
        }

        /**
         * Get the value of contrase
         */
        public function getContrase()
        {
                return $this->contraseña_user;
        }

        /**
         * Set the value of contrase
         */
        public function setContrase($contraseña_user): self
        {
                $this->contraseña_user = $contraseña_user;

                return $this;
        }
     }