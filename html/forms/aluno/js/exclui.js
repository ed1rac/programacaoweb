function exclui() {
    let form = document.querySelector('#form-adiciona');
    let botoes = document.getElementsByClassName('btn btn-info');
    let tabela = document.querySelector('table');
    //form.nome.value = 'Teste';
    //console.log('Excluindo!');
    /*   for (i = 0; i < botoes.length; i++) {
           botoes[i].addEventListener('click', function (event) {
               //    this.parentElement.parentElement.classList.add("fadeOut");
               //   setTimeout(function () {
               this.parentElement.parentElement.classList.add('fadeOut');
               //   this.parentElement.parentElement.remove();
               setTimeout(function () {
                   var alvo = event.target;
                   //alvo.parentNode.remove();
                   alvo.parentElement.parentElement.remove();
               }, 500);

               //    }, 500);
               //console.log(botoes[i] + 'Vai ser removido!')
               //  });
           })
       }*/
    tabela.addEventListener('click', function (event) {
        if (event.target.classList.contains('btn btn-info')) {
            let lixeira = event.target;

            lixeira.parentElement.parentElement.classList.add('fadeOut');
            //   this.parentElement.parentElement.remove();
            setTimeout(function () {
                var alvo = event.target;
                //alvo.parentNode.remove();
                alvo.parentElement.parentElement.remove();
            }, 500);
        }

    });

}