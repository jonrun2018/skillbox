<?php

$a;

$a = 1;

var_dump(isset($a) != true);
echo"<br>";

$a = null;

var_dump(is_null($a) != false);

?>