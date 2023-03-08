let numero = Math.random();
console.log(numero);
if (numero > 0.5) console.log('http://www.google.com'); 
else console.log('http://www.globo.com');



var pessoas = ["João", "Maria", "Pedro", "Mario"];

//Utiliza o separador padrão ","
console.log(pessoas.join() + " <br/>");
//Utiliza o separador padrão passado por parâmetro
console.log(pessoas.join(" + ") + " <br/>");
//Utiliza o separador padrão passado por parâmetro
console.log(pessoas.join(" and ") + " <br/>");

pessoas.forEach(nome => {
    console.log(nome);    
});

pessoas.forEach(logArray = (elemento, indice, array) => {
    console.log("pessoas[" + indice + "] = " + elemento);    
});

var carros = new Array();
carros[0] = "Wolks";
carros[1] = "BMW";
carros[2] = "Ferrari";
for(let x of carros){
  document.write(x + " <br/>");
}

var myCars = new Array();
var myCars = new Array(10);
var myCars = new Array("Wolks", "Volvo", "BMW");
var myCars = ["Wolks", "Volvo", "BMW"];


//Retorna todos elementos p do HTML
document.getElementsByTagName("p")

//Retorna um vetor de tags

document.getElementById("main").getElementsByTagName("p");

//obtendo todos os elementos <p> (parágrafo) do elemento com id ‘main’





