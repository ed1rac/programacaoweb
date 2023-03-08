<?php
echo "<h1>Testando a variável SERVER</h1>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "<br>";
echo "Mysql Home: ";
echo $_SERVER['MYSQL_HOME'] . "<br>";
if ($_SERVER['SERVER_NAME'] == "localhost") {
    echo "Estou no localhost" . "<br>";
} else {
    echo "Não estou no localhost" . "<br>";
}
