<?php

$numbers = [];

for ($s = ord('A'); $s < ord('B') + 1; $s++) {

    for ($n = 0; $n < 1000; $n++) {

        $numbers[] =  sprintf("%c%03d%c%c", $s, $n, $s, $s);

        foreach ($numbers as $key => &$value){
            //echo $value."\n";
            if($value[1] == $value[2] && $value[2] == $value[3]){

                array_slice($numbers,$key,1);
                echo $value."<br>";


            }

        }
    }
}

