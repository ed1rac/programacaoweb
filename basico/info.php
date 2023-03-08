<?php

$nome = "Edkallenn";
echo "Olá, mundo! Tudo bem " . $nome . "?";

class Main
{
    //public $atributo_teste;

    public function __construct()
    {
        echo "\n\nOlá\n";
    }


    /**
     * Function teste
     *
     * @param string|null $nome
     * @return void
     */
    public function teste(string $nome = null): void
    {
        echo "dentro do teste!";
    }
}

(new Main())->teste();