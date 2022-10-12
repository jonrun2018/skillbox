<?php

/*
// получаем вывод первой позиции символа
$testStr = 'abracadabra';
$exampleStrLen = strlen($testStr); // получаем длину строки

for ($i = 0; $i < $exampleStrLen; $i++) {
    if ($testStr[$i] === 'b'){
        break;
    }
}

echo $i + 1;
*/

$numbers = [5, 10, 20, 4, 3, 1, 74];
$sum = 0;

foreach ($numbers as $value) {
    if ($value % 5 !== 0) {
        continue;
    }
    $sum += $value;
}

echo $sum;
?>