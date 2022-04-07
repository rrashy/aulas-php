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

        echo '<h2>Resultados</h2>'
        .'<p>Valor 1: '.$calc->getValor1()
        .'<br>Valor 2: '.$calc->getValor2()
        .'<br>Soma entre 10 e 2: '.$calc->somar()
        .'<br>Subtração entre 10 e 2: '.$calc->subtrair()
        .'<br>Divisão entre 10 e 2: '.$calc->dividir()
        .'<br>Multiplicação entre 10 e 2: '.$calc->multiplicar().'</p>';
    ?>
    <br>
    <a href="../index.php">
        <button>Voltar a Página Inicial</button>
    </a>
</body>
</html>