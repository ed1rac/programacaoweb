//entrada de dados via prompt
//num1 = parseFloat(prompt('Digite um número:'));
//num2 = parseFloat(prompt('Digite outro número:'));
/*console.log(`${num1} ^ ${num2} = ${num1 ** num2}`);
var londrina = `Qualquer coisa - ${Math.pow(num1, num2)}`;
console.log(typeof londrina);
console.log(londrina);
alunos = ['Kaline', 'Amanda'];
var outraString = `Isso é a string: ${alunos}`;
console.log(outraString);*/
/*switch (num1) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
        console.log('Primeiro semestre');
        break;
    case 7:
    case 8:
    case 9:
    case 10:
    case 11:
    case 12:
        console.log('Segundo semestre!');
        break;
    default:
        console.log('Mês inexistente!');
        break;
}
*/
/*var idade = parseInt(prompt('Digite sua idade'));
if (idade >= 18) {
    alert('Você pode jogar GTA 5!')
} else {
    alert('Você é um anjinho. Vá jogar Unravel!')
}*/
num1 = 7;
exibeTabuada(num1);
console.log('O dobro de ' + num1 + ' é ' + dobro(num1));
console.log(`O dobro de ${num1} é ${dobro(num1)}`)


function exibeTabuada(num) {
    console.log(`tabuada de ${num}`);
    for (var i = 1; i <= 10; i++) {
        console.log(`${num} * ${i} = ${num * i}`);
    }
}

function eleva(x, y) {
    let pot = 1;
    for (var i = 1; i <= y; i++) {
        pot = pot * x;
    }
    return pot;
}
for (var i = 1; i <= 10; i++) {
    console.log(`2 ^ ${i} = ${eleva(2, i)}`);
}

let pessoa = {
    nome: 'Levi Oliveira',
    idade: 19,
    notas: [10, 9.5]
};
let string = 'Nome:  ' + pessoa.nome + ' - Idade: ' + pessoa.idade;
let string2 = `
Nome: ${pessoa.nome}
Idade: ${pessoa.idade}
Nota1: ${pessoa.notas[0]}
Nota2: ${pessoa.notas[1]}
Média: ${(pessoa.notas[0] + pessoa.notas[1]) / 2}
`;
print = console.log;
//console.log(string);
print(string);
document.writeln(string2);

setInterval(Ola, 2000);
setTimeout(exibeData, 6000);

function dobro(num) {
    return num * 2;
}

d = dobro;
print(`O dobro de 4 é ${d(4)}`);

function Ola() {
    print('Olá Mundo');
}
function Ola2() {
    print('Olá Mundo 2');
}

function exibeData() {
    let data = new Date();
    print(`${data.getDate()}/${data.getMonth() + 1}/${data.getFullYear()}`);
}

var c = cubo = function (numero) {
    return `O cubo de ${numero} = ${numero * numero * numero}`;
}
print(cubo(2));
print(c(3));

function map(f, objeto) {
    var result = [];
    for (var i = 0; i != objeto.length; i++) {
        result[i] = f(objeto[i]);
    }
    return result;
}
var numeros = [0, 1, 2, 3, 4, 5, 6];
var quad = map(function (x) { return x * x }, numeros);
console.log(numeros);
console.log(quad);

