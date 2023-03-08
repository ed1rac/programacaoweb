<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando o GET</title>
</head>

<body>
    <form action="processamento.php" method="GET">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="idade">Idade</label>
            <input type="text" name="idade">
        </div>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>