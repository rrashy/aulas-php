<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle</title>
</head>
<body>
    <h1>Calculadora Controle</h1>
    <?php
        include '../model/calculadora.class.php';

        $calc = new Calculadora;

        $calc->setValor1(10);
        $calc->setValor2(2);

        echo '<br><h2>Resultados</h2>'
        .'<br><p>Valor 1: '.$calc->getValor1()
        .'<br>Valor 2: '.$calc->getValor2()
        .'<br>Soma: '.$calc->somar()
        .'<br>Subtração: '.$calc->subtrair()
        .'<br>Divisão: '.$calc->dividir()
        .'<br>Multiplicação: '.$calc->multiplicar().'</p>';
    ?>
    <br>
    <a href="../index.php">
        <button>Voltar a Página Inicial</button>
    </a>
</body>
</html>