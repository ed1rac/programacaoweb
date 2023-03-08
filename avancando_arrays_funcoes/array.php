<?php
$listaIdades = [21, 23, 19, 25, 30, 41, 18];
//sintaxe alternativa: $listaIdades = array(21,23,19,25,30,41,18);

echo "Idade 1: $listaIdades[0]";
echo PHP_EOL;

$umaIdade = $listaIdades[3];
echo "Uma idade: $umaIdade" . PHP_EOL;

//Exibindo todos
for ($i = 0; $i < count($listaIdades); $i++) {
    echo "Índice: $i\tPosição:" . ($i + 1) . "\t: $listaIdades[$i]" . PHP_EOL;
}
