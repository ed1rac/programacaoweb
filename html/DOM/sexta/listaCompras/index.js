let form = document.querySelector('form');
let ul = document.querySelector('ul');

form.onsubmit = function (evento) {
    evento.preventDefault();
    console.log('Legal! Clicou no botão Adicionar!');
    let input = form.querySelector('input');
    let valor = input.value;
    console.log(valor);

    if (valor == "") return;
    let li = document.createElement('li');
    li.textContent = valor;
    let botao = document.createElement('button');
    botao.textContent = 'X';
    botao.setAttribute('class', 'botao');

    li.appendChild(botao);
    ul.appendChild(li);
    input.value = "";

}

ul.onclick = (evento) => {
    // console.log(evento.target);
    // console.log(evento.currentTarget)
    if (evento.target.classList.contains('botao')) {
        if (confirm('Deseja apagar este item?')) {
            console.log('Removendo item!');
            evento.target.parentElement.remove();
        }
    }
}

form.addEventListener('dblclick', (evento) => {
    console.log('clicou duas vezes no formulário');
    console.log(evento.target);
});

form.addEventListener('submit', (evento) => {
    evento.preventDefault();
});
form.addEventListener('submit', (evento) => {
    console.log('Olha como isso é legal!');
});

