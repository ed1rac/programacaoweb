<?php
//inserir dados no banco aluno
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

$query = "INSERT INTO aluno (nome, matricula, nota1, nota2, nota3) 
        VALUES ('{$nome}', '{$matricula}', '{$nota1}', '{$nota2}', '{$nota3}')";

//executar a query
if (mysqli_query($conexao, $query)) {
    echo "Aluno inserido com sucesso";
} else {
    echo "Erro ao inserir aluno";
}
//fechar a conexão
mysqli_close($conexao);
// Path: web-basico\banco\inserir.php