<?php

    include '../model/funcionario.class.php';


    $funcionario = new Funcionario;

    $funcionario->setValorHora(18);
    $funcionario->setTotalDeHoras(173);

    echo 
    "<h1>Resultado:</h1>".
    "<h3>Salário Inicial R$".$funcionario->calcularSalario()."</h3>".
    "<h3>Valor vale transporte: R$".$funcionario->calcularVt()."</h3>".
    "<h3>Insalubridade: R$".$funcionario->calcularIsalubridade()."</h3>".
    "<h3>Salario final: R$".$funcionario->salarioFinal()."</h3>";
?>