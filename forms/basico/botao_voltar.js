let botao = document.querySelector("#voltar");

botao.onclick = function () {
    // history.go(-1);
    //pode ser
    //window.open(document.referrer,'_self');
    //ou
    //location.href = document.referrer;
    location.href = "form-basico.php";
}