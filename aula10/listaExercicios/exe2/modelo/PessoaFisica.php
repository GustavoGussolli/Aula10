<?php 

    require_once("Pessoa.php");

    class PessoaFisica extends Pessoa{

        private $idade;
        private string $cpf;


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
         * Get the value of cpf
         */
        public function getCpf(): string
        {
                return $this->cpf;
        }

        /**
         * Set the value of cpf
         */
        public function setCpf(string $cpf): self
        {
                $this->cpf = $cpf;

                return $this;
        }

    }