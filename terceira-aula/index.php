<?php
    // variaveis
    $nome = "Helena";
    $idade = 18;
    $cidade = "Porto Alegre";

    // Apostrofo sem concatenação imprime exatamente o que está escrito dentro
    echo 'Nome: $nome';

    // Aspas faz a busca da variavel
    echo "<br> Nome: $nome";
    echo "<br> Idade: $idade";

    // Apostrofo identifica como texto assim tendo de fazer uma concatenação de forma especifica
    echo '<br> Cidade: '.$cidade
?>