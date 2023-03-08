let form = document.querySelector('#form-adiciona');
let tabela = document.querySelector('table');
tabela.addEventListener('click', function (event) {
    console.log(event.target);
    if (event.target.tagName == 'BUTTON') {
        let lixeira = event.target;
        console.log('Entrou');
        lixeira.parentElement.parentElement.classList.add('fadeOut');
        //   this.parentElement.parentElement.remove();
        setTimeout(function () {
            var alvo = event.target;
            //alvo.parentNode.remove();
            alvo.parentElement.parentElement.remove();
        }, 500);
    } else if (event.target.classList.contains('lixeira')) {
        let lixeira = event.target;
        console.log('Entrou');
        lixeira.parentElement.parentElement.parentElement.classList.add('fadeOut');
        //   this.parentElement.parentElement.remove();
        setTimeout(function () {
            var alvo = event.target;
            //alvo.parentNode.remove();
            alvo.parentElement.parentElement.parentElement.remove();
        }, 500);
    }
    form.reset();
});

function insereAluno() {
    let botaoAdicionar = document.getElementById('bt-inserirAluno');
    botaoAdicionar.addEventListener("click", function (event) {
        event.preventDefault();
    });
    //console.log('Clicou no botão! Massa!');
    let form = document.querySelector('#form-adiciona');
    let aluno = getAluno(form);
    console.log(aluno);

    let alunoTR = montaTR(aluno);
    let tabela = document.querySelector('#table-aluno');
    tabela.appendChild(alunoTR);

    exclui();

}
/**
 * Está OK!
 */
function limpaForm() {
    let botaoLimpa = document.getElementById('bt-limpaForm');
    botaoLimpa.addEventListener("click", function (evento) {
        evento.preventDefault();
    });
    let form = document.querySelector('#form-adiciona');
    //form.nome.value = 'Teste';
    form.reset();
}


function excluiAluno() {
    /*    let botaoLimpa = document.getElementById('bt-limpaForm');
        botaoLimpa.addEventListener("click", function (evento) {
            evento.preventDefault();
        });
    */
    /*   let form = document.querySelector('#form-adiciona');
    let botoes = document.getElementsByClassName('btn btn-info');
    //form.nome.value = 'Teste';
    //console.log('Excluindo!');
    for (i = 0; i < botoes.length; i++) {
        botoes[i].addEventListener('click', function () {
            this.parentElement.parentElement.remove();
            //console.log(botoes[i] + 'Vai ser removido!')
        });
    }
*/
    let form = document.querySelector('#form-adiciona');
    let tabela = document.querySelector('table');
    tabela.addEventListener('click', function (event) {
        console.log(event.target);
        if (event.target.classList.contains('btn btn-info')) {
            let lixeira = event.target;
            console.log('Entrou');
            lixeira.parentElement.parentElement.classList.add('fadeOut');
            //   this.parentElement.parentElement.remove();
            setTimeout(function () {
                var alvo = event.target;
                //alvo.parentNode.remove();
                alvo.parentElement.parentElement.remove();
            }, 500);
        }

    });
    form.reset();

}

function getAluno(form) {
    let aluno = {
        nome: form.nome.value,
        matricula: form.mat.value,
        nota1: form.nota1.value,
        nota2: form.nota2.value,
        nota3: form.nota3.value
    };
    //console.log(aluno);
    return aluno;
}

function montaTR(aluno) {
    let alunoTR = document.createElement("tr");
    //alunoTR.classList.add("aluno");

    //adiciona aluno na tabela
    alunoTR.appendChild(montaTD(aluno.nome));
    alunoTR.appendChild(montaTD(aluno.matricula));
    alunoTR.appendChild(montaTD(aluno.nota1));
    alunoTR.appendChild(montaTD(aluno.nota2));
    alunoTR.appendChild(montaTD(aluno.nota3));
    alunoTR.appendChild(montaTDtrash());

    return alunoTR;
}

function montaTD(dado) {
    let td = document.createElement("td");
    td.textContent = dado;

    return td;
}

function montaTDtrash() {
    let td = document.createElement("td");
    //td.innerHTML = "<a href='#'><img src='img/trash.png' width='15'></a>";
    td.innerHTML = '<button class="btn btn-info"><img class="lixeira" src="img/trash.png" width="15"></button>';
    // td.classList.add("centraliza");
    console.log(td);
    return td;
}