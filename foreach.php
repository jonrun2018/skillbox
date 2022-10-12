<?php

$testResults = [
    'Иван Иванов' => 40,
    'Петр Петров' => 50,
    'Денис Денисов' => 90,
    'Василий Васильев' => 100,
    'Михаил Михайлов' => 60
];

foreach ($testResults as $key => $testResult) {
    if ($testResult > 70){
        echo "Кандидат с именем: <b>'$key'</b> набрал больше 70-ти баллов<br>";
    }
};

$testArray = [1, 2, 3];

foreach ($testArray as &$value) { // при добавлении & перед переменной $value, переменная ссылаеться на значение массива и может его изменить
    $value = 0;
};

print_r($testArray);



?>