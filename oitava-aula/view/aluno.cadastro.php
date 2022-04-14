<!DOCTYPE html />
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Matricula de Aluno">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Rita de Cássia Gaieski">

    <link rel="stylesheet" href="../view/style.css">

    <title>Escola XYZ</title>
</head>

<body>
    <main id="inicio">
        <header class="topo">
            <nav>

            </nav>
        </header>
        <section class="conteudo1">
            <h2></h2>

        </section>
        <aside class="conteudo2">
            <h2>Faça sua Matrícula</h2>

            <form name="form1" action="../controller/aluno.controller.php" method="get">

                <label>Nome:
                    <input type="text" name="txtnome" placeholder="Maria da Silva" required autofocus>
                </label>
                <label>Idade:
                    <input type="number" name="txtidade" placeholder="0" required>
                </label>
                <h5>Selecione o Gênero</h5>
                <label>Masculino
                    <input type="radio" name="rbgenero" value="Masculino" checked="checked">
                </label>
                <label>Feminino
                    <input type="radio" name="rbgenero" value="Feminino">
                </label>
                <h4>Selecione sua Escolaridade:</h4>
                <label>Ensino Fundamental
                    <input type="checkbox"  name="fundamental" value="Ensino Fundamental">
                </label>
                <label>Ensino Médio
                    <input type="checkbox"  name="medio" value="Ensino Médio">
                </label>
                <label>Ensino Superior
                    <input type="checkbox"  name="superior" value="Ensino Superior">
                </label>
                
            </form>

        </aside>
        <footer class="rodape">
            <h2>Este é um exemplo de rodape</h2>
        </footer>

    </main>



</body>

</html>