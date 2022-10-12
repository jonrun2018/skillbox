<?php

$a = rand(1,9);
$b = 10 * rand(1,3);

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";

$c = $a * $b;
$c += rand(0,100);
//$c += 1000; //проверка default

echo $a." * ".$b." = "; 

switch ($c) {
    case $c >= 0 && $c < 100:
        echo "от 0 до 99";
        break;
    
    case $c >= 100 && $c < 200:
        echo "от 100 до 199";
        break;

    case $c >= 200 && $c < 300:
        echo "от 200 до 299";
        break;
    
    default:
        echo "больше 299, вот это результат)";
        break;
}

?>