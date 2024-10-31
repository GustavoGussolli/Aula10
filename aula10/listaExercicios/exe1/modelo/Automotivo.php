<?php 

    class Automotivo{

        protected $modelo;
        protected $veloMax;
        protected $cor;


        /**
         * Get the value of modelo
         */
        public function getModelo()
        {
                return $this->modelo;
        }

        /**
         * Set the value of modelo
         */
        public function setModelo($modelo): self
        {
                $this->modelo = $modelo;

                return $this;
        }

        /**
         * Get the value of veloMax
         */
        public function getVeloMax()
        {
                return $this->veloMax;
        }

        /**
         * Set the value of veloMax
         */
        public function setVeloMax($veloMax): self
        {
                $this->veloMax = $veloMax;

                return $this;
        }

        /**
         * Get the value of cor
         */
        public function getCor()
        {
                return $this->cor;
        }

        /**
         * Set the value of cor
         */
        public function setCor($cor): self
        {
                $this->cor = $cor;

                return $this;
        }
    }