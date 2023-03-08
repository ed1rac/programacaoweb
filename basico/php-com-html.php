<?php
$titulo = "Página gerada pelo PHP";
$corpo = "Um corpo qualquer com alguma informação";
$codigo_pagina = "
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>$titulo</title>
</head>

<body>
<h1>$corpo</h1>
</body>

</html>
";
echo $codigo_pagina;