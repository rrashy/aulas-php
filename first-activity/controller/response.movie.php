<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/style1.css">
    <title>Cinema</title>
</head >
<main>
  <div class="div1 card mb-3 bg-dark text-white" style="max-width: 650px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://uploads.jovemnerd.com.br/wp-content/uploads/2022/03/cartaz-strange-galeria-1.jpg" class="img-fluid rounded-start"alt="cartaz">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><strong>Cinema compra</strong></h5>
          <hr>
          <p class="card-text"><strong>Confirmar compra sessão filme "Doctor Strange"?</strong></p>
          <?php 
          include '../model/movie.class.php';

          $calc = new CalculoIngresso;

          $calc->setDesconto(10);
          $calc->setValorIngresso(35);
          $calc->setQtdIngresso(2);
          $calc->setFormaPagamento("PIX");

          $total = $calc->getValorIngresso() * $calc->getQtdIngresso(); // REAIS 70
          $totalDesconto = $total * $calc->getDesconto() / 100; // -10% DESCONTO
          $descontado = $total - $totalDesconto;

          echo "Valor do ingresso: R$".$calc->getvalorIngresso();
          echo "<br>Quantidade de ingresso: ".$calc->getqtdIngresso();
          echo "<br>Desconto: ".$calc->getdesconto()."%";
          echo "<br>Forma de pagamento selecionada: ".$calc->getformaPagamento();
          echo "<hr>";
          echo "<p><strong>Valor total da compra sera de: R$".$descontado."</strong></p>";
          ?>
          <a href="../index.php" class="btn btn-primary">Voltar</a>
        </div>
      </div>
    </div>
  </div>
</main>
</body>
</html>

