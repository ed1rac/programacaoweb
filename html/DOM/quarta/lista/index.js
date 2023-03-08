const form = document.querySelector('form');
const ul = document.querySelector('ul');

form.onsubmit = function (event) {
    console.log('Entrou na função de adicionar')
    event.preventDefault();

    const input = form.querySelector('input');
    let valor = input.value;
    /*
        const li = document.createElement('li');
        const botao = document.createElement('button');
        botao.textContent = 'X';
        botao.setAttribute('class', 'botao');
    
        li.textContent = valor;
        li.appendChild(botao);
        ul.appendChild(li);
        //input.value = "";
        */
    //jeito2
    if (valor == "") return;
    let botaoX = '<button class="botao">X</button>';
    ul.innerHTML = ul.innerHTML + `<li>${valor}&nbsp;&nbsp;&nbsp;&nbsp;${botaoX}</li>`
}

ul.onclick = (event) => {
    //console.log(event.target);
    //console.log(event.currentTarget);
    if (event.target.classList.contains('botao')) {
        // console.log('caramba. Você clicou foi no botao!')
        if (confirm('Deseja Apagar este item?')) {
            //console.log('vai remover');
            event.target.parentElement.remove();
        }
    }
}