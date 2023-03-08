<?php

$lista_idades = [21, 23, 19, 25, 30, 41, 18, "Olá"];
$lista_idades[] = 20;

echo "Idade 1: $lista_idades[0]" . "<br>";

$uma_idade = $lista_idades[3];
echo "Uma idade: $uma_idade <br><br>";

exibeArray($lista_idades);
showArray($lista_idades);

//exibindo todos
for ($i = 0; $i < count($lista_idades); $i++) {
    echo "Índice: $i - Posição " . ($i + 1) . ": $lista_idades[$i] <br>";
}
echo "<br><br>";
foreach ($lista_idades as $idade) {
    echo $idade . "<br>";
}

function exibeArray($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function showArray($array)
{
    foreach ($array as $item) {
        echo $item . "<br>";
    }
}