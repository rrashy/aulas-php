<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Conversor moeda</title>
</head>

<body class="blue-grey darken-4">
    <main>
        <div class="center-align white-text container">
            <form name="calcform1" action="../controller/activity-two.controller.php" method="post">
                <?php

                include "../model/CalcConvert.class.php";

                $calc = new Convert;

                $calc->setInputValor($_POST['num']);

                echo "<h1>" . $calc->convertReal() . " USD</h1>";

                ?>
                <br>
                <a>
                    <button class="waves-effect waves-light btn indigo darken-1" value="voltar1" onclick="history.go(-1)">
                        <i>Voltar para conversor</i>
                    </button>
                </a>
                <a>
                    <button class="waves-effect waves-light btn indigo darken-1 " onclick="history.go(-2)">
                       <i>Voltar menu inicial</i>
                    </button>
                </a>
        </div>

        </form>
    </main>
</body>

</html>