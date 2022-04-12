<?php

    include '../model/operacoes.class.php';

 $op = new Operacoes;

 $op->setValorA(4);
 $op->setValorB(5);
 $op->setValorC(20);

 $op->setValorD(6); //impar 

 // ano Bissexto 
 $op->setAno(2022);

 // notas 
 $op->setNota1(8);
 $op->setNota2(6);

 echo '<br>Resultado 1: '.$op->testarValores();
 echo '<br>Resultado 2: '.$op->testarParOuImpar();
 echo '<br>Teste do Ano: '.$op->testarAno();
 echo '<br>Nota 1: '.$op->getNota1();
 echo '<br>Nota 2: '.$op->getNota2();
 echo '<br>Teste das Notas: '.$op->calcularMediaFinal();