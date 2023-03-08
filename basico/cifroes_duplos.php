<?php

$nome = "Edkallenn";
echo $nome . PHP_EOL;
$$nome = "Lima";
echo $$nome . PHP_EOL;
echo $Edkallenn . PHP_EOL;

//Variáveis de variáveis --> Básico
$x = "teste";
$$x = 5; //após isso a variável $teste (conteúdo de $x será criada com o valor 5)
echo $x . PHP_EOL;
echo $teste;