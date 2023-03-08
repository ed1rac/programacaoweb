<?php
//Array Associativo
$conta1 = [
  'titular' => 'Edkallenn Lima',
  'saldo' => 2000.0
];
$conta2 = [
  'titular' => 'Vanessa Lima',
  'saldo' => 5000.0
];
$conta3 = [
  'titular' => 'Ana Ester',
  'saldo' => 200.0
];
//Pode se acessar de forma individual. Ex:
//echo $conta1['titular'].PHP_EOL;

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}

