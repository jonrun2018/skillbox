<?php
//я так понял что повторяющееся слово нужно найти глазами, так как похожей функции не нашел
$str = "Я люблю море. Я лечу на море. Я умею плавать в море. Какое чистое море! Хочу на море. Завтра поедем на море.";
$rev = strrev("море");

$str2 = str_replace('море', $rev, $str);
echo $str2.'<br>';

//на всякий случай)
echo str_replace('море', strrev("море"), $str);
?>