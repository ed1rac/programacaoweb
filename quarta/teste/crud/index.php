<!doctype html>
<html lang="pt-br">

<head>
    <title>CRUD em PHP</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=aulaprogweb', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare("INSERT INTO `tab_alunos` VALUES (null, ?, ?, ?, ?, ?)");

    if (isset($_GET['excluir'])) {
        $cod_aluno = (int)$_GET['excluir'];
        $sql = $pdo->prepare("DELETE FROM `tab_alunos` WHERE `cod_aluno` = '$cod_aluno'");
        $sql->execute();
        echo "<h2>Aluno excluído com sucesso!</h2>";
        //voltar para o index
        header("Location: index.php");
    }

    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $sql->execute(array($nome, $matricula, $nota1, $nota2, $nota3));
        echo '<h2>Aluno cadastrado com sucesso!</h2>';
    }
    ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

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

    <?php
    //exibir todos os dados da tabela tab_alunos em formato de tabela
    $sql = $pdo->prepare("SELECT * FROM tab_alunos");
    $sql->execute();
    $alunos = $sql->fetchAll();
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th colspan=2 scope="col" class="text-center">Ações</th>';
    echo '<th scope="col">Nome</th>';
    echo '<th scope="col">Matrícula</th>';
    echo '<th scope="col">Nota 1</th>';
    echo '<th scope="col">Nota 2</th>';
    echo '<th scope="col">Nota 3</th>';
    //exibir a média
    echo '<th scope="col">Média</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($alunos as $valor) {
        echo '<tr>';
        echo '<td><a href="?excluir=' . $valor['cod_aluno'] . '"> ( X )</a></td>';
        echo '<td><a href="alterar.php?cod_aluno=' . $valor['cod_aluno'] . '">Alterar</a></td>';
        echo '<td>' . $valor['nome'] . '</td>';
        echo '<td>' . $valor['matricula'] . '</td>';
        echo '<td>' . number_format($valor['nota1'], 2) . '</td>';
        echo '<td>' . number_format($valor['nota2'], 2) . '</td>';
        echo '<td>' . number_format($valor['nota3'], 2) . '</td>';
        //exibir a média das notas
        $media = ($valor['nota1'] + $valor['nota2'] + $valor['nota3']) / 3;
        echo '<td>' . number_format($media, 2) . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';

    ?>


</body>

</html>