<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviando dados com POST</title>
</head>

<body>
    <form action="cadastro.php" method="POST">
        <div>Marca:
            <input type="text" name="marca">
        </div>
        <div> Preço: ''
            <input type="text" name="preco">
        </div>
        <div>OPCIONAIS <br>
            <input type="checkbox" name="opcionais[]" value="Teto solar"> Teto solar
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Película"> Película
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Blindado"> Blindado
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>
</body>

</html>