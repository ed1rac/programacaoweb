<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= __FILE__ ?></title>
</head>

<body>
    <h1>Contantes em PHP</h1>
    <ul>
        <?php
        define("meu_nome", "Edkallenn");
        define("peso", 93.5);
        echo "<li>O meu nome é " . meu_nome . "</li>";
        echo "<li>O meu peso é " . peso . "</li>";
        echo "<h3>Algumas constantes predefinidas:</h3>";
        echo "<li>TRUE: " . TRUE . "</li>";
        echo "<li>FALSE: " . FALSE . "</li>";
        echo "<li>Nome do script: " . __FILE__ . "</li>";
        echo "<li>Linha do script: " . __LINE__ . "</li>";
        echo "<li>Versão do PHP: " . PHP_VERSION . "</li>";
        echo "<li>Versão do SO: " . PHP_OS . "</li>";
        ?>
    </ul>

</body>

</html>