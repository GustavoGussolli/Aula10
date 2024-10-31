<?php

    require_once("modelo/Cachorro.php");
    require_once("modelo/Gato.php");

    for($i=1; $i <= 2; $i++){

        echo "Dados do " . $i . "° Cachorro: \n";
        
        $dog = new Cachorro();
        $dog->setNome(readline("Informe o nome do cachorro: "));
        $dog->setRaca(readline("Informe a raça do cachorro: "));

        echo $dog->getDados();
        echo $dog->latir();
        
    }

    for ($i=0; $i < 2; $i++){ 

        echo "Dados do " . $i . "° Gato: \n";
        
        $cat = new Gato();
        $cat->setNome(readline("Informe o nome do Gato: "));
        $cat->setRaca(readline("Informe a raça do Gato: "));

        echo $cat->getDados();
        echo $cat->miar();
    }
