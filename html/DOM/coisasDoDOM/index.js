const form = document.querySelector('form');
const ul = document.querySelector('ul')

form.onsubmit = function(event){
    event.preventDefault(); 

    const input = form.querySelector('input')
    const value = input.value
/*
    const li = document.createElement('li')
    li.textContent = value;

    const button = document.createElement('button');
    button.textContent = "X";
    button.setAttribute('class', 'botao');

    li.appendChild(button);
    ul.appendChild(li);
*/
//jeito 2

    if (value=="") return;

    botaoX = '<button class="botao">X</button>'
    ul.innerHTML = ul.innerHTML + `<li>${value}${botaoX}</li>` 

    input.value = ""
}

ul.onclick = function(event){
 // console.log(event.currentTarget);
 // console.log(event.target)
 if(event.target.classList.contains('botao')){
   //console.log('CLicou no botão delete');
   if(confirm('Deseja apagar esse item? ')){
     console.log('remove o item');
     event.target.parentElement.remove();
   }
 }

}


/*
se tiver mais de uma forma/evento de submeter:
form.addEventListener('submit', function(event){
  event.preventDefault();
})
form.addEventListener('submit', function(event){
  console.log('Olha que legal!');
})
*/