<?php 

    require_once("Espaco.php");

    class Hotel extends Espaco{

        private int $numeroEstrela;
        private bool $cafeIncluido;

        public function getDadosHotel(){
               return $this->getNome() . "\n" . $this->getEndereco() . "\n" .$this->getNumeroEstrela() . "\n" . $this->getCafeIncluido() . "\n";
        }


        /**
         * Get the value of numeroEstrela
         */
        public function getNumeroEstrela(): int
        {
                return $this->numeroEstrela;
        }

        /**
         * Set the value of numeroEstrela
         */
        public function setNumeroEstrela(int $numeroEstrela): self
        {
                $this->numeroEstrela = $numeroEstrela;

                return $this;
        }

        /**
         * Get the value of cafeIncluido
         */
        public function getCafeIncluido()
        {
                return $this->cafeIncluido;
        }

        /**
         * Set the value of cafeIncluido
         */
        public function setCafeIncluido($cafeIncluido): self
        {
                $this->cafeIncluido = $cafeIncluido;

                return $this;
        }
    }