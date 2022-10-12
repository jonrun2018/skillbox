<?php

//циклы
$testResults = [10, 34, 50, 70, 90, 20];

$candidatesNum = count($testResults);

for($i = 0; $i < $candidatesNum; $i++) {
    if($testResults[$i] > 70) {
        echo "кандидат с номером $i набрал 70 баллов<br>";
    }
}

for($i = 200; $i >0; $i--){
    if($i % 5 == 0) {
        echo "$i делиться на пять<br>";
    }
}




?>