let aluna = {
    nome: 'Juliana Aguiar',
    idade: 24,
    peso: 65,
    notas: [9.5, 9.75, 10],
    mulher: true
};
console.log(quadrado(parseInt(prompt('Digite um numero: '))));
let numeros = [13, 22, 12];
alunos = [
    'Thayná', aluna, 'Elaine', numeros, 'Larissa', 'Raquel'
];

function fat2(n) {
    let fatorial = 1;
    for (var i = 1; i <= n; i++) {
        fatorial *= i; //fatorial = fatorial * i
    }
    return fatorial;
}
let cubo = function (numero) {
    return numero * numero * numero;
};
console.log(cubo(2));
let c = cubo;
console.log(c(3));

let pessoa = {
    nome: 'Edkallenn',
    idade: 42,
    sexo: 'M'
};

var objetoQualquer = pessoa;
if (objetoQualquer.idade >= 18) {
    var adicionaPropriedade = function (objeto) {
        objeto.maiorDeIdade = true;
    }
}
adicionaPropriedade(pessoa);
console.log(pessoa);

//alert(alunos);
//let nome = prompt('Digite seu nome: ');
//alert(`O nome digitado foi: ${nome}`);
console.log(alunos);
console.log(aluna);
aluna.media = (aluna.notas[0] + aluna.notas[1] +
    aluna.notas[2]) / 3;
console.log(aluna.media);
console.log(quadrado(4));
exibeData();
setInterval(Ola, 2000);
setTimeout(Ola2, 6000);
for (let i = 0; i <= 20; i++) {
    console.log(`${i}! = ${fatorial(i)}`);
    console.log(i + '! = ' + fat2(i))
}
///return n==0? 1: n * fatorial(n-1)
function fatorial(n) {
    if (n == 0)
        return 1;
    else
        return (n * fatorial(n - 1));
}


function quadrado(numero) {
    return numero * numero;
    //return Math.pow(numero,2);
}

function exibeData() {
    let data = new Date();
    console.log(data.getDate());
}
function Ola() {
    console.log('Olá mundo!');
}
function Ola2() {
    console.log('Olá mundo 2!');
}



