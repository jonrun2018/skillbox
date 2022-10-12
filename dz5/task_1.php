<?php

$str = 'number';
$a = 3;

for ($i = 0; $i < strlen($str); $i++) {
    $str[$i] = chr(ord($str[$i]) + $a);
};

echo "Зашифрованое слово: ".$str."<br><br>";

for ($i = 0; $i < strlen($str); $i++) {
    $str[$i] = chr(ord($str[$i]) - $a);
};

echo "Расшифрованое слово: ".$str;

?>