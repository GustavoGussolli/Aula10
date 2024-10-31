<?php

    require_once("modelo/Aluno.php");
    require_once("modelo/Professor.php");

    //Aluno

    $aluno = new Aluno();
    $aluno->setMatricula(123456789);
    $aluno->setIdade(16);
    $aluno->setNome("Gustavo");
    $aluno->setRg(19932989978);
    
    echo $aluno->getNomeCompleto();

    echo $aluno;

    //Professor

    $professor = new Professor();
    $professor->setNome("Daniel");
    $professor->setRg(987654321);
    $professor->setIdade(30);
    $professor->setSalario(10000);

    echo $professor;

