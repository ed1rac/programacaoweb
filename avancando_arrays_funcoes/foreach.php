<?php
//poderia usar assim
$contasCorrentes = [
  12332112311 => [
    'titular' => 'Edkallenn Lima',
    'saldo' => 2000.0
  ],
  32112365499 => [
    'titular' => 'Vanessa Lima',
    'saldo' => 5000.0
  ],
  78965412311 => [
    'titular' => 'Ana Ester',
    'saldo' => 200.0
  ]
];

foreach ($contasCorrentes as $cpf => $conta) {
  echo $cpf . " \t :" . $conta['titular'] . PHP_EOL;
}