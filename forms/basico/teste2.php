<html>

<head>
    <title>Página com os dados</title>
</head>

<body>
    <?php
    $br = "<br>";
    echo "<h1>Dados que vieram do form da página anterior:</h1>";

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $cor = $_GET['cor'];
    echo "Nome do usuário: " . $nome . $br;
    echo "Sua idade: " . $idade . $br;
    echo "Sua cor preferida é $cor";
    echo "$br$br";

    echo "<button id='voltar'>Voltar</button>";
    ?>
</body>
<script src="botao_voltar.js"></script>

</html>