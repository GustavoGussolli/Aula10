<?php 

    require_once("Automotivo.php");

    class CarroPasseio extends Automotivo{

        private $qtdPassageiros;

        public function getDados(){

            return "Carro: | Modelo: " . $this->modelo . 
            " | Velocidade Máxima: " . $this->veloMax .
            " | Cor: " . $this->cor . 
            " | Quantidade de Passageiros: " . $this->qtdPassageiros . "\n";
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
    }