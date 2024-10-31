<?php 

    require_once("Automotivo.php");

    class Caminhao extends Automotivo{

        private $qtdCarga;
        private $altura;

        public function getDados(){

            return "Caminhão: | Modelo: " . $this->modelo . 
            " | Velocidade Máxima: " . $this->veloMax .
            " | Cor: " . $this->cor . 
            " | Quantidade da Carga: " . $this->qtdCarga .
            " | Altura: " . $this->altura . "\n";
        }

        /**
         * Get the value of qtdCarga
         */
        public function getQtdCarga()
        {
                return $this->qtdCarga;
        }

        /**
         * Set the value of qtdCarga
         */
        public function setQtdCarga($qtdCarga): self
        {
                $this->qtdCarga = $qtdCarga;

                return $this;
        }

        /**
         * Get the value of altura
         */
        public function getAltura()
        {
                return $this->altura;
        }

        /**
         * Set the value of altura
         */
        public function setAltura($altura): self
        {
                $this->altura = $altura;

                return $this;
        }
    }