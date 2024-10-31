<?php 

    require_once("Automotivo.php");

    class Onibus extends Automotivo{

        private $qtdPassageiros;
        private $pesoMax;

        public function getDados(){

            return "Onibus: | Modelo: " . $this->modelo . 
            " | Velocidade Máxima: " . $this->veloMax .
            " | Cor: " . $this->cor . 
            " | Quantidade de Passageiros: " . $this->qtdPassageiros .
            " | Peso Máximo: "  . $this->pesoMax . "\n";
            
        }


        /**
         * Get the value of qtdPassageiros
         */
        public function getQtdPassageiros()
        {
                return $this->qtdPassageiros;
        }

        /**
         * Set the value of qtdPassageiros
         */
        public function setQtdPassageiros($qtdPassageiros): self
        {
                $this->qtdPassageiros = $qtdPassageiros;

                return $this;
        }

        /**
         * Get the value of pesoMax
         */
        public function getPesoMax()
        {
                return $this->pesoMax;
        }

        /**
         * Set the value of pesoMax
         */
        public function setPesoMax($pesoMax): self
        {
                $this->pesoMax = $pesoMax;

                return $this;
        }
    }