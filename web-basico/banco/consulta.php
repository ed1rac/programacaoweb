<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php

//include_once "conexao.php";
/*
$host = "localhost";
$db = "quinta";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$stmt = $conn->prepare("SELECT * FROM tab_aluno");
$stmt->execute();

$alunos = $sql->fetchAll();
*/
//$pdo = new PDO("mysql:host=localhost;dbname=quinta", "root", ""); //em casa
//na PF
$pdo = new PDO("mysql:host=localhost;dbname=aulaprogweb", "root", "");
//$sql = $pdo->prepare("SELECT * FROM `aluno`");
$sql = $pdo->prepare("SELECT * FROM `tab_aluno`");
$sql->execute();
$alunos = $sql->fetchAll(); //array associativo com tudo da tabela
echo "<a href='index.php'>Voltar</a>";
//consulta dados da tabela tab_aluno e exibe os dados em uma tabela
echo "<div class='container'>";
echo "<table class='table table-striped table-sm table-hover'>";
echo "<thead class='table-bordered table-info'>";
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>
Matrícula</th>";
echo "<th>Nota 1</th>";
echo "<th>Nota 2</th>";
echo "<th>Nota 3</th>";
echo "<th>Média</th>";
echo "</tr>";
echo "</thead>";
foreach ($alunos as $aluno) {
    echo "<tr>";
    echo "<td>" . $aluno['nome'] . "</td>";
    echo "<td>" . $aluno['matricula'] . "</td>";
    echo "<td>" . number_format($aluno['nota1'], 2) . "</td>";
    echo "<td>" . number_format($aluno['nota2'], 2) . "</td>";
    echo "<td>" . number_format($aluno['nota3'], 2) . "</td>";
    echo "<td>" . number_format((($aluno['nota1'] + $aluno['nota2'] + $aluno['nota3']) / 3.0), 2) . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";

//echo "<pre>";
//print_r($alunos);
//echo "</pre>";

?>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>