<?php

    require_once("modelo/CarroPasseio.php");
    require_once("modelo/Caminhao.php");
    require_once("modelo/Onibus.php");

    echo "Carro: \n";

    $carro = new CarroPasseio();
    $carro->setModelo(readline("Informe o Modelo: "));
    $carro->setVeloMax(readline("Informe a velocidade Máxima: "));
    $carro->setCor(readline("Informe a cor: "));
    $carro->setQtdPassageiros(readline("Informe a quantidade de passageiros: "));

    echo "Caminhão: \n";

    $caminhao = new Caminhao();
    $caminhao->setModelo(readline("Informe o Modelo: "));
    $caminhao->setVeloMax(readline("Informe a velocidade Máxima: "));
    $caminhao->setCor(readline("Informe a cor: "));
    $caminhao->setQtdCarga(readline("Informe a quantidade de carga: "));
    $caminhao->setAltura(readline("Informe a Altura: "));

    echo "Onibus: \n";

    $onibus = new Onibus();
    $onibus->setModelo(readline("Informe o Modelo: "));
    $onibus->setVeloMax(readline("Informe a velocidade Máxima: "));
    $onibus->setCor(readline("Informe a cor: "));
    $onibus->setQtdPassageiros(readline("Informe a quantidade de passageiros: "));
    $onibus->setPesoMax(readline("Informe o peso máximo: "));

    echo $carro->getDados();
    echo $caminhao->getDados();
    echo $onibus->getDados();