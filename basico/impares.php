<?php
//Números ímpares - forma 1
for ($i = 1; $i<=100;$i+=2){
  echo "# $i ". PHP_EOL;
}
//Números ímpares - forma 2
echo "Forma 2".PHP_EOL;
for ($i = 0; $i<=100;$i++){
  if ($i%2 != 0){
    echo "# $i ". PHP_EOL;
  }
}