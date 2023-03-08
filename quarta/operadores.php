<?php
$idade = 42;
$idade_ha_5_anos = $idade - 5;
echo "Minha idade: " . $idade;
pula(2);
$num1 = 13;
$num2 = 22;
echo "Número 1: " . $num1;
pula();
echo "Número 2: $num2";
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
function pula($quant = 1)
{
    for ($i = 1; $i <= $quant; $i++) {
        echo "<br>";
    }
}