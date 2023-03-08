function clicouBotao() {
    let botao = document.getElementById('botao-bonito');
    let frame = document.getElementById('frame');

    if (frame.textContent == '') {
        frame.textContent = "Clicou no Botão!";
        console.log('Clicou no botão! Isso é muito legal!');
    } else {
        frame.textContent = '';
        console.log('Limpou o botão! Que massa!')
    }


}