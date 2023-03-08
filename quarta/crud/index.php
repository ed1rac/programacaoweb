<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD em PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php

    $pdo = new PDO("mysql:host=localhost;dbname=aulaprogweb", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['excluir'])) {
        $cod_aluno = (int) $_GET['excluir'];
        $pdo->exec("DELETE FROM tab_alunos WHERE cod_aluno = $cod_aluno");
        echo "<h2>Aluno $cod_aluno foi excluído com sucesso!</h2>";
        //voltar para o index
        header("Location: index.php");
    }

    if (isset($_POST['nome'])) {
        $sql = $pdo->prepare("INSERT INTO `tab_alunos` VALUES (null, ?, ?, ?, ?, ?)");
        $nome = $_POST['nome'];
        $sql->execute(array($nome, $_POST['matricula'], $_POST['nota1'], $_POST['nota2'], $_POST['nota3']));
        echo "<h2>Aluno $nome cadastrado com sucesso!</h2>";
    }

    ?>

    <div class="container">
        <form method="POST" max-width="80%">
            <legend>
                <h2 class="row justify-content-center">Cadastro de alunos e notas</h2>
            </legend>

            <fieldset>
                <div>
                    Nome: <input type="text" name="nome" class="form-control">
                </div>
                <div>
                    Matrícula: <input type="text" class="form-control" name="matricula">
                </div>
                <div>
                    Nota 1: <input type="text" class="form-control" name="nota1">
                </div>
                <div>
                    Nota 2: <input type="text" class="form-control" name="nota2">
                </div>
                <div>
                    Nota 3: <input type="text" class="form-control" name="nota3">
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-success" value="Enviar">

                    <input type="reset" class="btn btn-warning" value="Limpar Dados">
                </div>
        </form>
        </fieldset>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <br>
    <?php
    $sql = $pdo->prepare("SELECT * FROM `tab_alunos`");
    $sql->execute();
    $alunos = $sql->fetchAll(); //array associativo com tudo da tabela
    echo "<div class='container d-flex justify-content-center'><div class='w-100'>";
    echo "<table class= 'table table-striped table-sm table-hover'>";
    echo "<thead class='table-bordered table-info'>";
    echo "<tr>";
    echo "<th scope='col' colspan='2'class='text-center'>Ações</th>";
    echo "<th scope='col'>Nome</th>";
    echo "<th scope='col'>Matrícula</th>";
    echo "<th scope='col'>Nota 1</th>";
    echo "<th scope='col'>Nota 2</th>";
    echo "<th scope='col'>Nota 3</th>";
    echo "<th scope='col'>Média</th>";
    echo "</tr></thead><tbody class='table-striped'>";

    foreach ($alunos as $aluno) {
        echo "<tr>";
        echo '<td align=center>
        <a href="?excluir=' . $aluno['cod_aluno'] . '">( X )</a>
        </td>';
        echo '<td align=center>
        <a href="alterar.php?cod_aluno=' . $aluno['cod_aluno'] . '">( Alterar )</a>
        </td>';
        echo "<td>" . $aluno['nome'] . "</td>";
        echo "<td>" . $aluno['matricula'] . "</td>";
        echo "<td>" . number_format($aluno['nota1'], 2) . "</td>";
        echo "<td>" . number_format($aluno['nota2'], 2) . "</td>";
        echo "<td>" . number_format($aluno['nota3'], 2) . "</td>";
        $media = ($aluno['nota1'] + $aluno['nota2'] + $aluno['nota3']) / 3;
        echo '<td>' . number_format($media, 2) . '</td>';
        echo "</tr>";
    }
    echo "</div></div>";
    ?>

</body>

</html>