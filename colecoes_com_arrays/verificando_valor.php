<?php

$notas = [
    'Edkallenn' => null,
    'John' => 8,
    'Paul' => 9,
    'George' => '7',
    'Ringo' => 10
];

$treinamentos = [
    'Treinamentos' => [
        'PHP',
        'JS',
        'HTML5',
        'Laravel',
    ]
];

ksort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

//var_dump(array_is_list($notas));

echo 'Edkallenn fez a prova: ' . PHP_EOL;
var_dump(isset($notas['Edkallenn']));

echo 'Alguém tirou 10? - ';
var_dump(in_array(10, $notas));

echo 'Alguém tirou 7? - ';
var_dump(in_array(7, $notas, true));

echo 'Quem tirou 10? ';
echo array_search(10, $notas);

print_r(array_keys($notas));
print_r(array_values($notas));
echo "Tamanho do array: " . count($notas) . "<br>";
echo PHP_EOL;
print_r(array_merge($notas, $treinamentos));

$frutas = ['Uva', 'Abacaxi', 'Abacate', 'Laranja'];
array_pop($frutas);
print_r($frutas);
// Resultado: 'Uva', 'Abacaxi', 'Abacate'

$novaFruta = 'Tangerina';
array_push($frutas, $novaFruta);
print_r($frutas);

$cesta = ['Arroz', 'Feijão', 'Macarrão', 'Batata', 'Arroz', 'Batata'];
$cesta = array_unique($cesta);
print_r($cesta);
// Resultado: 'Arroz', 'Feijão', 'Macarrão', 'Batata'

$nome = 'Edkallenn Lima';
$email = 'ed1rac@unipe.edu.br';
$empresa = 'Unipê';
$cursos = [
    'PHP',
    'JS',
    'HTML5',
    'Laravel',
];
$info = compact('nome', 'email', 'empresa', 'cursos');
print_r($info);


$numeros = [1, 2, 726, 5, 6, 788, 900, 212, 2, 3, 1998];
function checaPar($value)
{
    return $value % 2 == 0;
}
$numeros = array_filter($numeros, 'checaPar');
print_r($numeros);


$carrinho = [
    'Uva',
    'Arroz',
    'Maionese',
    'Batata',
];
function mudaUppercase($value)
{
    return strtoupper($value);
}
$carrinho = array_map('mudaUppercase', $carrinho);
print_r($carrinho);