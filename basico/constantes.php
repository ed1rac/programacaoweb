<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>CONSTANTES</title>
</head>

<body>
    <?php
    define("meunome", "Edkallenn");
    define("peso", 93.5);
    echo "<h1>O meu nome é " . meunome . "</h1>";
    echo "<h2>O meu peso é " . peso . " quilos " . "</h2>";
    echo "<h4>Algumas constantes predefinidas</h4>";

    ?>
    <table class="table">
        <caption></caption>
        <thead>
            <tr>
                <th scope="col">Constante</th>
                <th scope="col">Saída com echo</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">TRUE</th>
                <th scope="row"><?= TRUE; ?></th>
                <td>Valor verdadeiro</td>
            </tr>
            <tr>
                <th scope="row">FALSE</th>
                <th scope="row">
                    <?= FALSE; ?>
                </th>
                <td>Valor falso</td>
            </tr>
            <tr>
                <th scope="row">__FILE__</th>
                <th scope="row">
                    <?= __FILE__; ?>
                </th>
                <td>Nome do script</td>
            </tr>
            <tr>
                <th scope="row">__LINE__</th>
                <th scope="row"><?= __LINE__; ?></th>
                <td>Linha executada</td>
            </tr>
            <tr>
                <th scope="row">PHP_VERSION</th>
                <th scope="row"><?= PHP_VERSION; ?></th>
                <td>Linha executada</td>
            </tr>
            <tr>
                <th scope="row">PHP_OS</th>
                <th scope="row"><?= PHP_OS; ?></th>
                <td>Linha executada</td>
            </tr>

        </tbody>
    </table>

</body>

</html>