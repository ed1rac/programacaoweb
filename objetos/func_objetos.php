<?php

class Aluno
{
    private $nome;
    private $matricula;
    private $turma;
    private $notas = [];
    static $colegio = "Meta";

    public function __construct($nome, $matricula, $turma, $notas)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->turma = $turma;
        $this->notas = $notas;
    }

    /**
     * @return mixed
     */
    function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome 
     * @return Aluno
     */
    function setNome($nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula 
     * @return Aluno
     */
    function setMatricula($matricula): self
    {
        $this->matricula = $matricula;
        return $this;
    }

    /**
     * @return mixed
     */
    function getTurma()
    {
        return $this->turma;
    }

    /**
     * @param mixed $turma 
     * @return Aluno
     */
    function setTurma($turma): self
    {
        $this->turma = $turma;
        return $this;
    }

    /**
     * @return mixed
     */
    function getNotas(): array
    {
        return $this->notas;
    }

    /**
     * @param mixed $notas 
     * @return Aluno
     */
    function setNotas($notas): self
    {
        $this->notas = $notas;
        return $this;
    }
    public function calculaMedia()
    {
        return number_format((($this->notas[0] + $this->notas[1] + $this->notas[2]) / 3.0), 2);
    }

    function __toString(): string
    {
        return "Nome: " . $this->nome . " Matricula: " . $this->matricula . " Turma: " . $this->turma . " Notas: " . number_format($this->notas[0], 2) . " " . number_format($this->notas[1], 2) . " " . number_format($this->notas[2], 2) . " Media: " . $this->calculaMedia();
    }


    function exibeInfo()
    {
        echo "Exibindo Aluno" . PHP_EOL . "===============" . PHP_EOL;
        echo "Nome.............: {$this->getNome()} " . PHP_EOL;
        echo "Matricula........: {$this->getMatricula()} " . PHP_EOL;
        echo "Turma............: {$this->getTurma()} " . PHP_EOL;
        echo "Notas............: N1: {$this->notas[0]}\tN2: {$this->notas[1]}\tN3: {$this->notas[2]}" . PHP_EOL;
        echo "Média............: {$this->calculaMedia()}" . PHP_EOL;
    }
}

$aluno = new Aluno("Vanessa Lima", "123456", "Educação Física", [10.0, 9.0, 8.5]);
echo "Exibindo via echo..." . PHP_EOL;
echo $aluno;
echo "=======================" . PHP_EOL;
echo "A média de {$aluno->getNome()} = {$aluno->calculaMedia()}" . PHP_EOL;
$aluno->exibeInfo();
echo "\n\n\nManipulação de Objetos!\n\n";
echo "get_class_methods :\n ";
print_r(get_class_methods('Aluno'));
echo "\n\n";
echo "get_class_vars :\n ";
print_r(get_class_vars('Aluno'));
echo "\n\n";
echo "get_object_vars :\n ";
print_r(get_object_vars($aluno));
echo "\n\n";
echo "get_class :\n ";
print_r(get_class($aluno));
echo "\n\n";
echo "call_user_func: \n";
call_user_func(array($aluno, 'exibeInfo'));

//var_dump($aluno);