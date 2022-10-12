<?php
$str = 'лето пришло';

$part = strpos($str, ' ');
echo $part.'<br>';

$part2 = substr($str, $part + 1);
echo $part2.'<br>';

//на всяки случай
echo substr($str, strpos($str, ' ') + 1);

?>