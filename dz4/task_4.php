<?php

$list = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
    'd' => 'word a',
    'e' => 'word e'
];

$count = count($list);
echo "Значение массива до: $count<br>";

$flip = array_flip($list);
$count2 = count($flip);
echo "Значение массива после: $count2<br>Результат сравнения переменных на не равенство: ";
var_dump($count != $count2);










?>