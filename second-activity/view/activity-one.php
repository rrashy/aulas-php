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
            <form name="calcform1" action="../controller/activity-one.controller.php" method="post">
                <h1>Positivo ou negativo</h1>
                <h4>Insira um numero abaixo:</h4>
                <div class="input-field col s6">
                    <input placeholder="Digite um numero aqui" name="num" id="num" type="number" class="validate white-text">

                    <a>
                        <button class="waves-effect waves-light btn indigo darken-1" value="verificar" type="submit">
                            <i>Verificar</i>
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