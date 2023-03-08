console.log('Está tudo ok! Sextou na faculdade!')

let aluna = {
    nome: 'Joyce',
    idade: 19,
    matricula: 12345
}
let alunos = ['Isabela', 42, aluna, 'Thays', 'Romário'];
console.log(aluna);
console.log(alunos);
aluna.notas = [10, 9, 9.5];
console.log(aluna);

const eleicao = '2/10/2022';

/*var contadora = 10;
while (contadora >= 1) {    
    console.log(contadora);
    contadora = contadora - 1;
}*/

/*
for (let i = 10; i != 0; i--) {
    print(i)
}
console.log('fora do laço! Acabou a parada!')
/*
var mes = parseInt(prompt('Digite um mês: '));
if (mes === 1) {
    alert('Janeiro');
} else if (mes === 2) {
    alert('Fevereiro');
} else if (mes === 3) {
    alert('Março');
} else {
    alert('mês não é Janeiro, Fevereiro nem março');
}

var mes = 5;
switch (mes) {
    case 1:
        console.log('Janeiro');
        break;
    case 2:
        console.log('Fevereiro');
        break;
    case 3:
        console.log('Março');
        break;
    default:
        console.log('mes não é Janeiro, Fevereiro ou Março');
        break;
}
num = parseInt(prompt('Digite um número:'))
/*if (num % 2 === 0) {
    alert('Par');
} else {
    alert('Ímpar');
}
num % 2 === 0 ? alert('par') : alert('ímpar');
*/
function print(texto) {
    console.log(texto);
}

function somar(num1, num2) {
    return num1 + num2;
}
function dobro(num) {
    return 2 * num;
}
function escreveHTML(texto) {
    document.writeln(texto)
}
function pula() {
    return '<br>';
}
let n = 3;
let texto1 = `<h1>Olha que legal, veio do JS</h1>
<hr>
<p>O dobro de ${n} é: ${dobro(n)}</p>
Qualquer coisa ${pula()} - PULOU
`
escreveHTML(texto1);
print(texto1)
print(somar(3, 2));
print(`O dobro de ${n} é: ${dobro(n)}`);

function fatorial(n) {
    if (n == 0) {
        return 1;
    } else {
        return n * fatorial(n - 1)
    }
}
for (let i = 0; i <= 20; i++) {
    let string = `Fatorial de ${i} = ${fatorial(i)}${pula()}`
    escreveHTML(string);

}












/*
let idade = parseInt(prompt('Digite uma idade: '));
if (idade < 18) {
    alert('Você não pode entrar!')
} else {
    alert('Você é maior de idade. Pode entrar!')
}
let num = parseInt(prompt('Digite um número: '));
if (num % 2 == 0) {
    alert(`${num} é par!`)
} else {
    alert(`${num} é ímpar!`)
}
/*let numero = parseInt(
    prompt('Digite um numero entre 1 e 3: ', 'Digite aqui')
);
switch (numero) {
    case 1:
        alert("Número 1");
        break;
    case 2:
        alert("Número 2");
        break;
    case 3:
        alert("Número 3");
        break;
    default:
        alert("Opção Inválida");
}
for (var i = 0; i <= 10; i++) {
    document.writeln('<br>valor de i: ' + i);
}
var i = 0;
while (i < 5) {
    document.writeln('<br>valor de i(com while): ' + i++);
}
*/


