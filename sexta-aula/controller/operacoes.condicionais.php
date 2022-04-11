
<?php

    $valorDigitado = 3;
    $resultado = " "; //string

    if ($valorDigitado > 0 ) {
        $resultado = "Valor positivo";
    } 
    else if ($valorDigitado < 0 ) {
        $resultado = "Valor negativo";
    }
    else {
        $resultado = "Valor igual a zero";
    }
    echo $resultado;

?>