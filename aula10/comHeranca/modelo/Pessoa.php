<?php 

    class Pessoa{

        protected $nome;
        private $idade;
        private $rg;

        public function getNomeCompleto(){

                return $this->nome . " - " . $this->idade . "\n";
        }

        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of idade
         */
        public function getIdade()
        {
                return $this->idade;
        }

        /**
         * Set the value of idade
         */
        public function setIdade($idade): self
        {
                $this->idade = $idade;

                return $this;
        }

        /**
         * Get the value of rg
         */
        public function getRg()
        {
                return $this->rg;
        }

        /**
         * Set the value of rg
         */
        public function setRg($rg): self
        {
                $this->rg = $rg;

                return $this;
        }
    }