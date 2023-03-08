<?php
function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

function exibeConta($conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular <br> 
            Saldo: {$saldo}</li>";
}

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
        exibeMensagem("A conta do titular {$conta['titular']} não tem saldo suficiente!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valor): array
{
    if ($valor > 0) {
        $conta['saldo'] += $valor;
    } else exibeMensagem("Valores de depósito precisam ser positivos!");

    return $conta;
}
/**
 * Função: Titular com letras maiúsculas
 *
 * @param array $conta
 * @return void
 */
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeContas($contasCorrentes)
{
    echo "<ul>";
    echo '<br>' . 'Exibindo Contas' . '<hr>';
    foreach ($contasCorrentes as $cpf => $conta) {
       //['titular' => $titular, 'saldo' => $saldo] = $conta; //desestruturação para lista
        //echo $cpf . " \t :" . $conta['titular'] . "\t" . $conta['saldo'] . PHP_EOL; //substitui isso pela linha abaixo usando a list
       // echo $cpf . " \t :" . $titular . "\t" . $saldo . '<br>';
       exibeConta($conta);
    }
    echo "</ul>";
}
