<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Calculadora idade</title>
</head>

<body class="blue-grey darken-4">
    <main>
        <div class="center-align white-text container">
            <form name="calcform3" action="../controller/activity-tree.controller.php" method="post">
                <h1>Resuldado da idade</h1>
                <?php

                include "../model/CalcConvertOldder.class.php";

                $calc = new CalcOldder;

                $calc->setIdade($_POST['num']);

                echo "<h4>" . $calc->__toString() . "</h4>";

                ?>
                <br>
                <a>
                    <button class="waves-effect waves-light btn indigo darken-1" value="voltar" onclick="history.go(-1)">
                        <i>Voltar</i>
                    </button>
                </a>
                <a>
                    <button class="waves-effect waves-light btn indigo darken-1" value="voltar" onclick="history.go(-2)">
                        <i>Voltar menu inicial</i>
                    </button>
                </a>

        </div>
        </form>
        </div>
    </main>
    <br>
    <footer>
        <div class="footer-copyright center-align white-text">
            <div class="container">
                © 2022 Nícolas Silva, Todos direitos reservados.
            </div>
        </div>
    </footer>
</body>

</html>