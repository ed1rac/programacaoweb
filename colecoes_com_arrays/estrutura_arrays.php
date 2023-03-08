<?php

$array = [
    1, 2, 3, 4, 5, 6, "Olá Mundo"
];
$array2 = array("Olá mundo!", 6, 5, 4, 3, 2, 1);
$array3 = range(1, 20);
print_r($array3);
exibe($array);
echo PHP_EOL;
exibe($array2);
echo PHP_EOL;
exibe($array3);
echo PHP_EOL;
$tamanho = count($array3);
echo "O array 3 tem $tamanho elementos";
echo PHP_EOL;
//desestruturação
list($valor1, $valor2, $valor3) = $array;
echo $valor1, $valor2, $valor3;
echo PHP_EOL;

$pessoa = [
    "Edkallenn", "Professor", 42
];

list($nome, $profissao, $idade) = $pessoa;
echo "Nome: $nome";
echo PHP_EOL;
echo "Profissão: $profissao";
echo PHP_EOL;
echo "Idade: $idade";
echo PHP_EOL;

function exibe($array)
{
    foreach ($array as $key => $value) {
        echo "array[$key] ==> $value" . PHP_EOL;
    }
}

//podemos ver os valores com var_dump($array);