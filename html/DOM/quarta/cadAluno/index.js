import {
    Aluno
} from "./Aluno.js";
//https://bit.ly/3THVPZe //===> imagem da LIXEIRA
let botaoLimpa = document.querySelector("#btn-limpar");
let botaoInsere = document.querySelector('#btn-inserir');
let form = document.querySelector("#form-adiciona");
let tabela = document.querySelector('table');
//console.log(tabela)

botaoInsere.onclick = function insereAluno() {
    let aluno = getAluno(form);
    console.log(aluno);
    console.log(`As informações capturadas foram: 
    Nome: ${aluno.nome}
    Matricula: ${aluno.matricula}
    N1: ${parseFloat(aluno.nota1).toFixed(2)}, N2: ${(aluno.nota2).toFixed(2)}, N3: ${(aluno.nota3).toFixed(2)}
    Média: ${aluno.calculaMedia()}`);
    let linha = geraLinhaTabela(aluno);
    tabela.appendChild(linha);
    //tabela.innerHTML = linha;

}

botaoLimpa.onclick = () => {
    console.log('Clicou no botão de limpar o form!');
    form.reset();
}

function geraLinhaTabela(aluno) {
    /*   let linha = `
       <tr>
           <td scope="row">${aluno.nome}</td>
           <td class="centraliza">${aluno.matricula}</td>
           <td class="centraliza">${aluno.nota1}</td>
           <td class="centraliza">${aluno.nota2}</td>
           <td class="centraliza">${aluno.nota3}</td>
           <td class="centraliza">${aluno.calculaMedia()}</td>
           <td class="centraliza">        
               <button class="btn-trash"><img class="lixeira" src="trash.png" width="15"></button>
           </td>
       </tr>
       `;
       */
    //console.log('Dentro do gera:' + aluno.nome);
    let tr = document.createElement("tr");
    //adiciona aluno na tabela
    tr.appendChild(montaTD(aluno.nome));
    tr.appendChild(montaTD(aluno.matricula));
    tr.appendChild(montaTD(parseFloat(aluno.nota1).toFixed(2)));
    tr.appendChild(montaTD(parseFloat(aluno.nota2).toFixed(2)));
    tr.appendChild(montaTD(parseFloat(aluno.nota3).toFixed(2)));
    tr.appendChild(montaTD(aluno.calculaMedia()));
    tr.appendChild(montaTDtrash());
    tr.classList.add('centraliza');
    console.log(tr);
    return tr;
}

function montaTD(info) {
    let td = document.createElement("td");
    td.textContent = info;
    return td;
}

function montaTDtrash() {
    let td = document.createElement("td");
    td.innerHTML = '<button class="btn-trash"><img class="lixeira" src="trash.png" width="15"></button>';
    console.log(td);
    return td;

}

function getAluno(form) {
    let nome = form.nome.value;
    let matricula = form.matricula.value;
    let nota1 = parseFloat(form.n1.value);
    let nota2 = parseFloat(form.n2.value);
    let nota3 = parseFloat(form.n3.value);

    let aluno = new Aluno(nome, matricula, nota1, nota2, nota3);

    // console.log(aluno);
    return aluno;
}

tabela.addEventListener('click', function (event) {
    //console.log(event.currentTarget); //ver a diferença entre os dois
    //console.log(event.target);
    if (event.target.tagName == 'BUTTON') {
        //console.log('Clicou no botão! Que legal!');
        let lixeira = event.target;
        lixeira.parentElement.parentElement.classList.add('fade');

        setTimeout(() => {
            var alvo = event.target;
            alvo.parentElement.parentElement.remove();
        }, 500);

    } else if (event.target.classList.contains('lixeira')) {
        //console.log('Clicou na imagem dentro do botão! Que legal!');
        let lixeira = event.target;
        lixeira.parentElement.parentElement.classList.add('fade');

        setTimeout(() => {
            var alvo = event.target;
            //alvo.parentElement.parentElement.remove();
            alvo.parentElement.parentElement.parentElement.remove();
        }, 500);
    }
    form.reset();

});