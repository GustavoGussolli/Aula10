<?php 

    require_once("Espaco.php");

    class PontoTuristico extends Espaco{

        private int $duracaoDaVisita;

        public function getDadosPontoTuristico(){

            return $this->getNome() . "\n" . $this->getEndereco() . "\n" . $this->getDuracaoDaVisita() . "\n";

        }

        /**
         * Get the value of duracaoDaVisita
         */
        public function getDuracaoDaVisita(): int
        {
                return $this->duracaoDaVisita;
        }

        /**
         * Set the value of duracaoDaVisita
         */
        public function setDuracaoDaVisita(int $duracaoDaVisita): self
        {
                $this->duracaoDaVisita = $duracaoDaVisita;

                return $this;
        }

    }