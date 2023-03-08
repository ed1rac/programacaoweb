<?php
//excluir dados no banco aluno
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

$query = "DELETE FROM aluno WHERE matricula = '{$matricula}'";

//executar a query
if (mysqli_query($conexao, $query)) {
    echo "Aluno excluído com sucesso";
} else {
    echo "Erro ao excluir aluno";
}
//fechar a conexão
mysqli_close($conexao);
// Path: web-basico\banco\excluir.php
// Compare this snippet from web-basico\get\processamento.php: