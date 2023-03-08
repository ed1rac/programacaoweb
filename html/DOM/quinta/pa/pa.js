let botao1 = document.querySelector('#btn1');
let titulo1 = document.getElementById('titulo1');
botao1.onclick = function () {
    //pegando as variáveis
    let a1 = parseFloat(document.querySelector('#a1').value);
    let razao = parseFloat(document.querySelector('#razao').value);
    let termos = parseFloat(document.querySelector('#termos').value);
    const resultado = document.getElementById('resultado');

    //criar um array com a PA
    let valores = [];
    valores.push(a1); //console.log(valores);
    let mensagem = `${a1} `;
    let soma = a1;
    for (let i = 1; i < termos; i++) {
        valores[i] = valores[i - 1] + razao;
        mensagem += `&nbsp;&nbsp;&nbsp; ${valores[i]}`;
        soma += valores[i];
    }
    console.log(`a1 = ${a1}`);
    console.log(`razao = ${razao}`);
    console.log(`termos = ${termos}`);
    console.log(valores);
    let somaPA = soma;
    resultado.innerHTML =
        `<br>
    <p class="par1">A P.A. é:</p>
    <p>${mensagem}</p>
    <hr>
    <p class="par1">A soma dos termos da P.A. é: ${somaPA}</p>`


}

/*
botao1.onmouseover = function () {
    console.log('colocou em cima!');
}
botao1.onmouseout = function () {
    console.log('Saiu de cima')

}
*/