<html>

<body>
    <?php
    $data_de_hoje = date("d/m/Y", time());
    include "frase-time.php"
    ?>
    <p align="center">
    <h1>Hoje é dia
        <?= $data_de_hoje; ?>
    </h1>
    </p>
</body>

</html>