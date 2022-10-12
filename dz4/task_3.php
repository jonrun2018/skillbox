<?php

$list = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
];

$list2 = array_keys($list);
$str = implode(' ', $list2);

echo $str;

?>