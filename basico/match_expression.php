<?php
abstract class Question {}
class Single extends Question{}
class Multiple extends Question{}

$input = 'single';
/*
$question = match($input){
    'single' => new Single(),
    'multi', 'multiple' => new Multiple(),
    default => throw new InvalidArgumentException('Argumento inválido!')

};

 */

switch($input){
    case 'single':
        $question = new Single();
        break;
    case 'multi':
        $question = new Multiple();
        break;
    default:
        throw new Exception($message='Invalid Question Type');
    
}




var_dump($question);

