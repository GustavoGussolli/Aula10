<?php 

    require_once("modelo/Combatente.php");
    require_once("modelo/Curandeiro.php");

    $poderes = array();

    $poder1 = new Poder("Recuperação energia", 0);
    $poder2 = new Poder("Recuperação energia super", 20);
    $poder3 = new Poder("Golpe normal", 0);
    $poder4 = new Poder("Golpe especial", 15);


    array_push($poderes, $poder1, $poder2, $poder3, $poder4);
    $magos = array();

    do{

        echo "-----------Menu-----------\n";
        echo "|    1 - CRIAR MAGO      | \n";
        echo "--------------------------\n";
        echo "|    2 - LANÇAR PODER     | \n";
        echo "--------------------------\n";
        echo "|    3 - LISTAR MAGOS     | \n";
        echo "--------------------------\n";
        echo "|    0 - SAIR             | \n";
        echo "--------------------------\n";

        $escolha = readline("Informe oque fazer: ");

        switch($escolha){
            case '1':

                echo "1 - Curandeiro \n";
                echo "2 - Combatente \n";

                $tipo = readline("Informe o tipo do mago: ");

                if($tipo == 1){

                    $mago = new Curandeiro();
                    $mago->setNome(readline("Informe o nome do seu Mago: "));
                    $mago->setForcaDeCura(readline("Informe a força de cura: "));

                    echo "1 - Recuperação de Energia \n";
                    echo "2 - Recuperação de Energia Super \n";
                    $poderDoMago = readline("Informe qual poder: ");

                    if($poderDoMago == 1){
                        $mago->setPoder($poderes[0]);
                    }
                    if($poderDoMago == 2){
                        $mago->setPoder($poderes[1]);
                    }

                    array_push($magos, $mago);
                } 
                
                if($tipo == 2){

                    $mago = new Combatente();
                    $mago->setNome(readline("Informe o nome do seu Mago: "));
                    $mago->setForcaDeAtaque(readline("Informe a força de Ataque: "));

                    echo "1 - Golpe Normal \n";
                    echo "2 - Golpe Especial \n";
                    $poderDoMago = readline("Informe qual poder: ");

                    if($poderDoMago == 1){
                        $mago->setPoder($poderes[2]);
                    }
                    if($poderDoMago == 2){
                        $mago->setPoder($poderes[3]);
                    }

                    array_push($magos, $mago);
                }
                break;

            case '2':

                $numeracao = 1;
                foreach($magos as $m){

                    echo "Mago " . $numeracao . ":\n";
                    echo $m->lancarPoder() ."\n";
                    
                }
                
                break;

            case '3':
                foreach($magos as $m){

                    if($m instanceof Curandeiro){

                        echo $m->getNome() . " | " . $m->getForcaDeCura() . " | " . $m->getPoder()  . "\n";
                        
                    }

                    if($m instanceof Combatente){

                        echo $m->getNome() . " | " . $m->getForcaDeAtaque() . " | " . $m->getPoder()  . "\n";
                        
                    }
                    
                }

                break;
            
            default:
                echo "Opção Invalida! \n";
                break;
        }
        
    } while ($escolha != 0);

