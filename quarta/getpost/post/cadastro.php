<?php
//exibindo a variavel POST
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<br>" . $_POST['marca'];
echo "<br>" . $_POST['preco'];
if (isset($_POST['opcionais'][0])) {
    echo "<br>" . $_POST['opcionais'][0];
}
echo "<br>" . $_POST['opcionais'][1];
echo "<br>" . $_POST['opcionais'][2];