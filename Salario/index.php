<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="view/style.css">
    <title>Salario</title>
</head >
<main>
    <div class="div1 card mb-3 bg-dark text-white" style="max-width: 360px;">
        <div class="card-body">
            <h3 class="card-title"><strong>Calculo salarial</strong></h3>
            <hr>
            <p class="card-text"><strong>Seu salário sera exibido logo abaixo:</strong></p>
            <?php
            include 'model/funcionario.class.php';

            $salario = new Funcionario();
                
            $salario->setName("Gabriel");
            $salario->setSalarioFixo(2200);
            $salario->setValorVendas(1975);
            $salario->setComissao(0.03);
                
            $total = $salario->getValorVendas() * $salario->getComissao();
            $totalComissao = $total + $salario->getSalarioFixo();

                echo "<strong>Olá, tudo bem? Seja bem-vindo ".$salario->getName()."!</strong>";
                echo "<br>Valor do salário: R$".$salario->getSalarioFixo();
                echo "<br>Valor total de vendas: R$".$salario->getValorVendas();
                echo "<br>Comissao: ".$salario->getComissao()."%";
                echo "<hr>";
                echo "<p><strong>Valor total a receber de salário: R$".$totalComissao."</strong></p>";
            ?>
            <a href="" class="btn btn-primary">Confirmar</a>
        </div>
    </div>
</main>
</body>
</html>