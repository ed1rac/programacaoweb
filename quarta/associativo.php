<?php
$carros = [
    'LMS-2232' => [
        'marca' => 'Fiat',
        'modelo' => 'Argo'
    ],
    'KLM-1234' => [
        'marca' => 'Ford',
        'modelo' => 'Fiesta'
    ],
    'OPN-5612' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
];
echo "<h1>Carros:</h1>";
foreach ($carros as $placa => $carro) {
    echo $placa . " : " . $carro['marca'] . " - " . $carro['modelo'] . "<br>";
}