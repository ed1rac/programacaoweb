<?php

$idade = 42;
$idadeha5anos = $idade - 5;
echo "Minha idade: " . $idade . "\n";

echo "Minha idade daqui a 10 anos: " . ($idade + 10) . "\n";
echo "Minha idade há cinco anos: " . $idadeha5anos;
pula();
echo "=============";
pula();
echo "Operações aritméticas";
pula();
echo "=============";
pula(2);
$num1 = 2;
echo "Número 1 = " . $num1;
pula();
$num2 = 4;
echo "Número 2 = " . $num2;
pula();
echo "Soma: " . ($num1 + $num2);
pula();
echo "Subtração: " . ($num1 - $num2);
pula();
echo "Multiplicação: " . ($num1 * $num2);
pula();
echo "Divisão: " . ($num1 / $num2);
pula();
echo "Resto da divisão: " . ($num1 % $num2);
pula();
echo "Potenciação " . ($num1 ** $num2);
pula();
echo "=============";
pula(2);
var_dump($idade);
print_r($idade);
/**
 * função pula
 *
 * @param [type] $quant
 * @return void
 */
function pula($quant = 1)
{
    for ($i = 1; $i <= $quant; $i++) {
        echo "\n";
    }
}