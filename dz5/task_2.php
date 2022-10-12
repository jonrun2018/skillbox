<?php
for ($i = ord('A'); $i <= ord('B'); $i++) {
    for($x = ord('A'); $x <= ord('B'); $x++){
        for($y = ord('A'); $y <= ord('B'); $y++){
            for ($j = 000; $j <= 999; $j++) {
                $arrayNumber[] = chr($i) . sprintf("%'.03d", $j).chr($x).chr($y);
            }
        }
    }
}

foreach ($arrayNumber as $val) {
    echo $val."<br>";
}

echo "<br><hr><b>Номера с одинаковыми цифрами:</b> <hr><br><br>";

foreach ($arrayNumber as $key => &$value) {
    if ($value[1] != $value[2] || $value[2] != $value[3]) {
        unset($arrayNumber[$key]);
    }
}

foreach ($arrayNumber as $val) {
   echo $val."<br>";
}



?>