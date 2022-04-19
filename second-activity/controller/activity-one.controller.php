<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Verificador</title>
</head>

<body class="blue-grey darken-4">
    <main>
        <div class="center-align white-text container">
            <?php

            include "../model/CalcVerificate.class.php";

            $calc = new CalcVerificate;

            $calc->setValorInput($_POST['num']);
            echo "<h1>" . $calc->verificadorNum() . "</h1>";

            ?>
            <br>
            <a href="../view/activity-one.php">
                <button class="waves-effect waves-light btn indigo darken-1">
                   <i>Voltar para verificador</i> 
                </button>
            </a>
            <a href="../index.php">
                <button class="waves-effect waves-light btn indigo darken-1">
                   <i>Voltar menu inicial</i> 
                </button>
            </a>
        </div>
    </main>
</body>

</html>