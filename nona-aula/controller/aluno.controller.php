<?php

    include '../model/aluno.class.php';

    $aluno = new Aluno;

    $aluno->setNome($_POST['txtnome']);
    $aluno->setIdade($_POST['txtidade']);
    $aluno->setGenero($_POST['rbgenero']);
    $aluno->setCurso($_POST['txtcurso']);

    echo "<h4>Nome: {$aluno->getNome()}</h4>".
         "<h4>Idade: {$aluno->getIdade()}</h4>".
         "<h4>Gênero: {$aluno->getGenero()}</h4>".
         "<h4>Curso: {$aluno->getCurso()}</h4>";