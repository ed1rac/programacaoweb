<?php
//alterar dados no banco aluno
//conectar ao banco
$conexao = mysqli_connect('localhost', 'root', '', 'aluno');

//verificar se a conexão foi bem sucedida
if (!$conexao) {
    echo "Erro ao conectar ao banco de dados";
    exit;
}
//preparar a query
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$query = "UPDATE aluno SET nome = '{$nome}', matricula = '{$matricula}', nota1 = '{$nota1}', nota2 = '{$nota2}', nota3 = '{$nota3}' WHERE matricula = '{$matricula}'";

//executar a query
if (mysqli_query($conexao, $query)) {
    echo "Aluno alterado com sucesso";
} else {
    echo "Erro ao alterar aluno";
}
//fechar a conexão
mysqli_close($conexao);
// Path: web-basico\banco\alterar.php
// Compare this snippet from web-basico\banco\inserir.php:
// <?php
// //inserir dados no banco aluno
// //conectar ao banco