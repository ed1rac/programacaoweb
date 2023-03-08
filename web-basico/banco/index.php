<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require("helper.php");
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD com Mysqli</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    .navigation {
        display: flex;
        flex-flow: row wrap;
        justify-content: space-around;
        list-style: none;
        margin: 0;
        margin-left: auto;
        margin-right: auto;
        background: deepskyblue;
        max-width: 60%;
        text-align: center;
    }

    .navigation a {
        text-decoration: none;
        display: block;
        padding: 1em;
        color: white;
    }

    .navigation a:hover {
        background: #1565C0;
    }

    .navigation li:last-of-type a {
        border-bottom: none;
    }
    </style>

</head>

<body>
    <header>
        <ul class="navigation">
            <li><a href="#">Incluir</a></li>
            <li><a href="consulta.php">Consulta</a></li>
            <li><a href="#">Alterar</a></li>
            <li><a href="#">Excluir</a></li>
        </ul>
    </header>
    <main>
        <div class="container">
            <h2 class="row justify-content-center">Dados de alunos e notas</h2>
            <form method="POST">
                <legend>Insira os dados abaixo</legend>
                <fieldset>
                    <div>
                        Nome: <input class="form-control" type="text" name="nome">
                    </div>
                    <div>
                        Matrícula: <input class="form-control" type="text" name="matricula">
                    </div>
                    <div>
                        Nota 1: <input class="form-control" type="text" name="nota1">
                    </div>
                    <div>
                        Nota 2: <input class="form-control" type="text" name="nota2">
                    </div>
                    <div>
                        Nota 3: <input class="form-control" type="text" name="nota3">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Inserir">
                    <input type="reset" class="btn btn-primary" value="Limpar dados">

                </fieldset>
            </form>
        </div>
    </main>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>