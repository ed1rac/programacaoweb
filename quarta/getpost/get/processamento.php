<?php
if (isset($_GET['nome']) && isset($_GET['idade'])) {
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
} else {
    $nome = "Não informado";
    $idade = "Não informado";
}
echo "Olá $nome, você tem $idade anos" . "<br>";
?>
<h1> O seu nome é <?= $nome ?>, e você tem <?= $idade ?> anos. </h1>

<?php
//exibindo o conteúdo do array $_GET
echo "<pre>";
print_r($_GET);
echo "</pre>";