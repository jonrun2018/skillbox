<?php

$a = rand(0,1);

var_dump($a);
echo "<br>";

$b = $a == null ? null : rand(1,3);

var_dump($b);
echo "<br>";

switch ($b) {
    case null:
        echo "содержит null<br>";
        break;
    
    case 1:
        echo "содержит 1<br>";
        break;      
    
    default:
        echo "содержит ".$b."<br>";
        break;
}   

var_dump(isset($b));
echo "<br>";

$c = $b ?? rand(20,30);

var_dump($c);
echo "<br>";

?>