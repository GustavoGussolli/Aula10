<?php 

    require_once("modelo/Hotel.php");
    require_once("modelo/Restaurante.php");
    require_once("modelo/PontoTuristico.php");

    $vetor = array();

    do{

        echo "|--------------------------------| \n";
        echo "|             Locais             | \n";
        echo "|--------------------------------| \n";
        echo "|    1 - Cadastrar Espaço        | \n";
        echo "|--------------------------------| \n";
        echo "|    2 - Excluir Espaço          | \n";
        echo "|--------------------------------| \n";
        echo "|    3 - Listar Espaços          | \n";
        echo "|--------------------------------| \n";
        echo "|    0 - Sair                    | \n";
        echo "|--------------------------------| \n";

        $escolha = readline("Informe oque fazer: ");

        switch($escolha){

            case '1':

                $tipo = readline("Informe o tipo do Espaço: ");

                if(strtolower($tipo) == "hotel"){

                    $hotel = new Hotel();
                    $hotel->setNome(readline("Informe o nome do Hotel: "));
                    $hotel->setEndereco(readline("Informe o endereço do hotel: "));
                    $hotel->setNumeroEstrela(readline("Informe a quantidade de estrelas do hotel: "));
                    $CafeIncluido = readline("Cafe incluido(Digite 'S' para sim ou Digite 'N' para não): ");

                    if($CafeIncluido == "S"){
                        $hotel->setCafeIncluido(true);
                    } else {
                        $hotel->setCafeIncluido(false);
                    }

                    array_push($vetor, $hotel);
                    print_r($vetor);
                    
                } 

                if(strtolower($tipo) == "restaurante"){

                    $restaurante = new Restaurante();
                    $restaurante->setNome(readline("Informe o nome do Restaurante: "));
                    $restaurante->setEndereco(readline("Informe o endereço do Restaurante: "));
                    $restaurante->setTipoComida(readline("Informe o tipo de comida: "));


                    array_push($vetor, $restaurante);
                    print_r($vetor);
                    
                }

                if(strtolower($tipo) == "ponto turistico"){

                    $pontoTuristico = new PontoTuristico();
                    $pontoTuristico->setNome(readline("Informe o nome do Ponto turistico: "));
                    $pontoTuristico->setEndereco(readline("Informe o endereço do Ponto turistico: "));
                    $pontoTuristico->setDuracaoDaVisita(readline("Informe a duração da visita: "));


                    array_push($vetor, $pontoTuristico);
                    print_r($vetor);
                    
                }
                break;

            case '2':

                foreach($vetor as $v){

                 if($v instanceof Hotel){

                    echo "-------------------------------- \n";
                    
                    echo $v->getNome() . "\n";
                    echo $v->getEndereco() . "\n";
                    echo $v->getNumeroEstrela() . "\n";
                    echo $v->getCafeIncluido() . "\n";
                 }

                 if($v instanceof Restaurante){

                    echo "-------------------------------- \n";
                    
                    echo $v->getNome() . "\n";
                    echo $v->getEndereco() . "\n";
                    echo $v->getTipoComida() . "\n";
                 }

                 if($v instanceof PontoTuristico){

                    echo "-------------------------------- \n";
                    
                    echo $v->getNome() . "\n";
                    echo $v->getEndereco() . "\n";
                    echo $v->getDuracaoDaVisita() . "\n";
                 }
                    
                }

                $excluir = readline("Informe qual excluir: ");
                array_splice($vetor, $excluir, 1);
                break;

            case '3':
                foreach($vetor as $v){

                    if($v instanceof Hotel){
   
                       echo "-------------------------------- \n";
                       
                       echo $v->getDadosHotel() . "\n";
                    }
   
                    if($v instanceof Restaurante){
   
                       echo "-------------------------------- \n";
                       
                       echo $v->getDadosRestaurante() . "\n";
                    }
   
                    if($v instanceof PontoTuristico){
   
                       echo "-------------------------------- \n";
                       
                       echo $v->getDadosPontoTuristico() . "\n";
                    }
                       
                   }
                
                break;

            case '0':
                echo "Programa encerrado \n";
                break;
            
            default:
                echo "Opção invalida! \n";
                break;

        }
        
    }while($escolha != 0);