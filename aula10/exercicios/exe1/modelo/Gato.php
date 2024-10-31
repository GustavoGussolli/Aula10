<?php

    require_once("Animal.php");
    
    class Gato extends Animal{

        public function miar(){

            $miar = "Miau Miau \n";
            return $miar;

        }
    }