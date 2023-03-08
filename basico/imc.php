<?php
$massa = 93;
$altura = 1.76;
$imc = $massa  / $altura ** 2;
echo "Peso: $massa".PHP_EOL;
echo "Altura: $altura".PHP_EOL;
echo "O IMC é: $imc".PHP_EOL;

if ($imc < 18.5){
  echo "IMC está abaixo!";
}elseif ($imc < 25){
  echo "IMC dentro da normalidade!";
} else{
  echo "IMC acima do normal!";
} echo PHP_EOL;