<?php 

    require_once("Mago.php");

    class Curandeiro extends Mago{

        private int $forcaDeCura;

        public function lancarPoder(){

            return "O mago " . $this->nome . ", do tipo Curandeiro, possui força de " . $this->getForcaDeCura() . 
            " e lançou o poder " . $this->poder->getDescricao() . " com força total de " . $this->poder->getForcaTotal($this->getForcaDeCura()) . "\n";

        }
        

        /**
         * Get the value of forcaDeCura
         */
        public function getForcaDeCura(): int
        {
                return $this->forcaDeCura;
        }

        /**
         * Set the value of forcaDeCura
         */
        public function setForcaDeCura(int $forcaDeCura): self
        {
                $this->forcaDeCura = $forcaDeCura;

                return $this;
        }
    }