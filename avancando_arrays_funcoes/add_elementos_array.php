<?php
$listaIdades = [21, 23, 19, 25, 30, 41, 18];

//usando um array não-dimensionado:
$listaIdades[]=20;

//funciona com arrays associativos também.

foreach ($listaIdades as $idade) {
    echo $idade.PHP_EOL;
}