<?php
$idade = 15;
//$nome = 'John Snow';
$numero_de_pessoas = 2;

echo "Você só pode entrar se tiver mais que 18 anos." . PHP_EOL;
echo "Ou a partir de 16 desde que acompanhado!" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 and $numero_de_pessoas > 1) {
    echo "\nVocê tem $idade anos, está acompanhado(a), então pode entrar!\n";
} else 
    echo "Você tem $idade anos." . PHP_EOL. "Você NÃO PODE entrar!";


echo PHP_EOL;
echo "Adeus!";
