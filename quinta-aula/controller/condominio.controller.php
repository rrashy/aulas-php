<?php

    $valorMulta = 0.37;
    $valorParcela = 125;

    $valorJuros = $valorMulta * $valorParcela;
    $totalParcela = $valorParcela + $valorJuros;

    echo "<h1>Operação com porcentagem</h1>";
    echo "Valor da parcela inicial: $valorParcela";
    echo "<br>Valor de multa: $valorMulta";
    echo "<br>Valor total da parcela com juros: $totalParcela";
    echo "<br>";
    echo '<br>
          <a href="../index.php">
          <button>Voltar a Página Inicial</button>
          </a>';
?>
