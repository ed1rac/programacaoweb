<!DOCTYPE html>
<html lang="en">
<?php
$titulo = "Página feita em PHP";
$data_de_hoje = date("d/m/Y", time());
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $titulo ?>
    </title>
</head>

<body>
    <?php
    $br = "<br>";
    echo $titulo . $br; //concatenar strings
    echo "<p align=\"center\">$br<h1>
    A data de hoje é: $data_de_hoje </h1>";
    ?>
    </p>
    <?php
    include "frase-time.php";
    ?>
</body>

</html>