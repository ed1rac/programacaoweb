let botao1 = document.querySelector('#btn1');
let botao2 = document.querySelector('#btn2');
botao1.onclick = function () {
    //pegando as variáveis    
    let a1 = parseFloat(document.querySelector('#a1').value);
    let razao = parseFloat(document.getElementById('razao').value);
    let termos = parseFloat(document.querySelector('#termos').value);
    let resultado = document.querySelector('#resultado');

    //criar um array com a PA
    let valores = [];
    valores.push(a1);
    let mensagem = `${a1}`;
    let soma = a1;
    for (let i = 1; i < termos; i++) {
        valores[i] = valores[i - 1] + razao;
        mensagem += `&nbsp;&nbsp;&nbsp; ${valores[i]}`;
        soma += valores[i];
    }
    let somaPA = soma;
    resultado.innerHTML = `<br>
    <p>A P.A. é:</p>
    <p>${mensagem}</p> <hr>
    <p>A soma dos elementos da P.A é: ${somaPA}</p> `
}


botao2.addEventListener('click', function (event) {
    event.preventDefault();
    console.log('Chegou!');
    document.querySelector('#a1').value = "";
    document.querySelector('#razao').value = "";
    document.querySelector('#termos').value = "";
    document.querySelector("#resultado").innerHTML = "";

})