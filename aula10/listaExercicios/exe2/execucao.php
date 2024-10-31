<?php

    require_once("modelo/PessoaFisica.php");
    require_once("modelo/PessoaJuridica.php");

    $listaPessoa = array();

    do {

        echo "|-------------------------------| \n";
        echo "|            Cadastro           | \n";
        echo "|-------------------------------| \n";
        echo "| 1 - Cadastrar pessoa fisica   | \n";
        echo "| 2 - Cadastrar pessoa juridica | \n";
        echo "| 3 -        Listar             | \n";
        echo "| 4 -        Excluir            | \n";
        echo "| 0 -         Sair              | \n";
        echo "|-------------------------------| \n";

        $escolha = readline("Informe oque quer fazer: ");

        if($escolha == 1){

            $fisica = new PessoaFisica();
            $fisica->setNome(readline("Informe o nome: "));
            $fisica->setIdade(readline("Informe a Idade: "));
            $fisica->setCpf(readline("Informe o CPF: "));

            array_push($listaPessoa, $fisica);
            
        }

        if($escolha == 2){

            $juridica = new PessoaJuridica();
            $juridica->setNome(readline("Informe o nome: "));
            $juridica->setNomeFantasia(readline("Informe o nome fantasia: "));
            $juridica->setCnpj(readline("Informe a CNPJ: "));

            array_push($listaPessoa, $juridica);
            
        }

        if($escolha == 3){

            foreach($listaPessoa as $pessoa){

                if($pessoa instanceof PessoaFisica){

                    echo "----------------------------\n";
                    echo "Nome: " . $pessoa->getNome() . "\n";
                    echo "Idade: " . $pessoa->getIdade() . "\n";
                    echo "CPF: " . $pessoa->getCpf() . "\n";
                    echo "----------------------------\n";

                }

                if($pessoa instanceof PessoaJuridica){

                    echo "----------------------------\n";
                    echo "Nome: " . $pessoa->getNome() . "\n";
                    echo "Nome fantasia: " . $pessoa->getNomeFantasia() . "\n";
                    echo "CNPJ: " . $pessoa->getCnpj() . "\n";
                    echo "----------------------------\n";

                }
            }
        }

        if($escolha == 4){

            foreach($listaPessoa as $pessoa){

                if($pessoa instanceof PessoaFisica){

                    echo "----------------------------\n";
                    echo "Nome: " . $pessoa->getNome() . "\n";
                    echo "Idade: " . $pessoa->getIdade() . "\n";
                    echo "CPF: " . $pessoa->getCpf() . "\n";
                    echo "----------------------------\n";

                }

                if($pessoa instanceof PessoaJuridica){

                    echo "----------------------------\n";
                    echo "Nome: " . $pessoa->getNome() . "\n";
                    echo "Nome fantasia: " . $pessoa->getNomeFantasia() . "\n";
                    echo "CNPJ: " . $pessoa->getCnpj() . "\n";
                    echo "----------------------------\n";

                }
            }

            $excluir = readline("Informe o Indice de remoção: ");
           
            array_splice($listaPessoa, $excluir, 1);
            echo "Pessoa Deletado com sucesso! \n";

        }
        
    } while ($escolha != 0);