<?php

    require_once("Animal.php");
    
    class Cachorro extends Animal{

        public function latir(){

            $latir = "AU AU \n";
            return $latir;

        }
    }