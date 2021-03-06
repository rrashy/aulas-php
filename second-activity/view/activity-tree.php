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
                <h1>Calculadora idade</h1>
                <h4>Abaixo digite uma idade abaixo:</h4>
                <div class="input-field col s6">
                    <input placeholder="Digite sua idade" name="num" id="num" type="number" class="validate white-text" min="1" max="100">

                    <a>
                        <button class="waves-effect waves-light btn indigo darken-1" value="verificar" type="submit">
                            <i>Calcular</i>
                        </button>
                    </a>
                    <a>
                        <button class="waves-effect waves-light btn indigo darken-1" value="voltar" onclick="history.go(-1)">
                            <i>Voltar</i>
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