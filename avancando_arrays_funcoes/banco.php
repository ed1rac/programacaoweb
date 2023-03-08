<?php
//include 'funcoes.php';
//require_once 'funcoes.php';
require_once 'funcoes.php';

$contasCorrentes = [
    '522.407.622-68' => [
        'titular' => 'Edkallenn Lima',
        'saldo' => 2000.0
    ],
    '123.321.456-99' => [
        'titular' => 'Vanessa de Lima',
        'saldo' => 5000.0
    ],
    '789.654.123-11' => [
        'titular' => 'Ana Ester Leal',
        'saldo' => 200.0
    ]
];

//realizando saques
$contasCorrentes['522.407.622-68'] = sacar($contasCorrentes['522.407.622-68'], 500);
$contasCorrentes['123.321.456-99'] = sacar($contasCorrentes['123.321.456-99'], 500);
$contasCorrentes['789.654.123-11'] = sacar($contasCorrentes['789.654.123-11'], 500);
$contasCorrentes['522.407.622-68'] = depositar($contasCorrentes['522.407.622-68'], 600);
$contasCorrentes['789.654.123-11'] = depositar($contasCorrentes['789.654.123-11'], -300);

$contasCorrentes['999.999.888-11'] = [
    'titular' => 'Yuri Alberto Dias',
    'saldo' => 200.00
];

//exibeMensagem("Teste da função `exibeMensagem`" . PHP_EOL);
//echo mb_strtoupper('olá  mundo!').PHP_EOL; //pode ser strtoupper()

titularComLetrasMaiusculas($contasCorrentes['522.407.622-68']) . PHP_EOL;
/*
//exibindo
exibeContas($contasCorrentes);

//excluindo
unset($contasCorrentes['999.999.888-11']);

echo PHP_EOL . 'Exibindo de novo' . PHP_EOL;
exibeContas($contasCorrentes);
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML e PHP</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>                 
        <dt>
            <h3><?=$conta['titular'];?> - <?=$cpf?></h3>
        </dt>
        <dd>
            Saldo: <?=$conta['saldo'];?>
        </dd>       
        <?php } ?>
    </dl>
</body>
</html>