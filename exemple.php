<?php
/*
$a = 2;
$b = -10;

$c = 1.234;

$d = 5.4e3;

$e = 7e-8;

$x = 10;
$y = 20;

var_dump( $x > $y );
var_dump( $x < $y );
var_dump( $x == $y );

$y = 10;

var_dump( $x >= $y );
var_dump( $x < $y );
var_dump( $x != $y ); //$x не равна $y символ ! означает "не"
*/

/*
//$a = 2 + 3;
//var_dump($a);

$x = 2;
$y = 3;

$a = $x + $y;
var_dump($a);
echo "<br>";

$b = $x - $y;
var_dump($b);
echo "<br>";

$c = $x * $y;
var_dump($c);
echo "<br>";

$d = $x / $y;
var_dump($d);
echo "<br>";// перенос строки

$e = 15;
$f = 7;
$g = $e % $f; // получаем остаток от деления
var_dump($g);
echo "<br>";
*/

/*
$a = 3;
$b = 2;

$a++;
$b--;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
*/

/*
$a = 4;
$b = 2;
$c = $a + $b--;

var_dump($c); //6
echo "<br>";
var_dump($b); //1
echo "<br>";

$a = 4;
$b = 2;
$c = $a - ++$b;

var_dump($c); //1
echo "<br>";
var_dump($b); //3
echo "<br>";
*/

/*
$a = true;
$b = FALSE;
*/

/*
$a = 2;
$b = 3;
$c = $a == $b;

var_dump($c);
*/

/*
$a = true;
$b = !$a;
var_dump($b);
echo"<br>";

$c = false;
$d = !$c;
var_dump($d);
echo"<br>";

$e = !!$c;
var_dump($e);
echo"<br>";
*/

/*
$a = null; //пустая переменная;
var_dump($a);
echo"<br>";

$c = $a == null;
var_dump($c);
echo"<br>";

$d = isset($a); // isset() проверяет на пустоту переменные, если переменная пустая, возврощает false
var_dump($d);
echo"<br>";

$e = is_null($a); // is_null() проверяет на пустоту переменные, если переменная пустая, возврощает true
var_dump($e);
echo"<br>";
*/

/*
$a = 2;
$b = 3;
$c = 0;

//$a += 2;

if ($a >= $b) {
    $c = 1;
 } /* elseif ($a <= $b) {
    if ($a == $b) {
        $c = 2.3;
    } else {
        $c = 2.6;
    }
 } else {
    $c = 3;
}*//*
else if ($a == $b) {
    $c = 5;
}

var_dump($c); 
*/


//тернарный оператор

//  $a = 2;
/*
if ($a > 10) {
    $b = 1;
} else {
    $b = 0;
}

var_dump($b);
*/
/*
$b = $a > 10 ? 2 : 3;

var_dump($b);
*/
/*
$b = $a > 10 ? 2 : ($a > 5 ? 3 : 4);

var_dump($b);
*/

/*
//null-коалесцентный оператор
$a = null;

if ($a == null) {
    $b = 2;
} else {
    $b = $a;
}

var_dump($b);
echo "<br>";
*//*
$c = $a ?? 10; // проверяем $a на равенство null

var_dump($c);
echo "<br>";

$d = 100;
$e = $d ?? "abc";

var_dump($e);
echo "<br>";
*/
/*
$c = null;
$d = $a ?? $c ?? 22;

var_dump($d);
echo "<br>";
*/

/*
// логические операторы && - и, || - или, ! - не.
$a = false;
$b = true;

if ($a && $b) { // если обе переменные вернут true, то условие выполненно
    $c = 1;
} else {
    $c = 0;
}

var_dump($c);
echo "<br>";


//$c = $a && $b ? 1 : 0; // короткая запись

var_dump($c);
echo "<br>";

if ($a || $b) {
    $d = 1;
} else {
    $d = 0;
}

var_dump($d);
echo "<br>";

//$d = $a || $b ? 1 :0; // короткая запись

var_dump($d);
echo "<br>";

$b = false;
$c = true;

$g = $a || ($b && $c) ? 1 : 0; //0

var_dump($g);
echo "<br>";


$g = $a || !($b && $c) ? 1 : 0; //1

var_dump($g);
echo "<br>";
*/

/*
// конструкция выбора
$a = 3;

if ($a == 1) {
    $b = 10;
} elseif ($a == 2) {
    $b = 20;
} elseif ($a == 3) {
    $b = 30;
} else {
    $b = -10;
}

var_dump($b);
echo "<br>";

// тоже самое через switch
switch ($a) {
    case 1: 
        $b = 10;
        break;

    case 2:
        $b = 20;
        break;

    case 3:
        $b = 30;
        break;

    default:
        $b = -10;
        break;
}

var_dump($b);
echo "<br>";

switch ($a) {
    case 1: 
        $b = 10;
        break;
        
    case 2:
    case 3:
        $b = 30;
        break;

    default:
        $b = -10;
        break;
}

var_dump($b);
echo "<br>";

$c = 4;

switch ($a + 1) {
    case 3: 
        $d = 0;
        break;
        
    case $c:
        $d = 1;
        break;

}

var_dump($d); // 1
echo "<br>";
*/

/*
//строки
$str1 = 'Привет, мир!';
echo $str1."<br>";

$str2 = 'Хочу сказать \'Привет мир\'...';    // \' экранирование одинарной кавычки
echo $str2."<br>";

$str3 = 'Символ \ называется "Обратный слэш"';
echo $str3."<br>";

$str4 = 'Привет мир!\rА эта часть уже на новой страке?\t - нет';
echo $str4."<br>";

$str1 = "Привет \"мир\"!";
echo $str1;

$str2 = "\nКак дела?\t - Хорошо!"; // Работает только в консоле, в браузере нужны HTML теги
echo $str2;

$a = 25;

$str3 = "<br>мне $a лет";
echo $str3;

$str = <<<EOD
<br>Привет мир,<br>
как дела? "хорошо"<br>
строка через here\doc-синтаксис
EOD;                                  // в консоле перенос работает без тегов
echo $str;

$str1 = '<br>hello';
$str2 = "world";
$str3 = $str1.$str2;
echo $str3;

$str4 = '<br>Привет';
$str4 .= 'мир<br>';
echo $str4;

//длина строки
//каждый не латинский символ равен 2-м
$str = 'hello'; //5 символов
var_dump($str);

$str2 = 'Привет'; //12 символов
var_dump($str2);
echo "<br>";

$length = strlen($str); //определенние длинны строки, возвращает число
var_dump($length);
echo "<br>";

$length2 = mb_strlen($str2); ////определенние длинны строки для не латинских букв и латиских, возвращает число
var_dump($length2);
echo "<br>";

$str = 'hello';
$e = $str[1]; //возвращает конкретный символ строки, в данном случае вторую букву "e"
echo "$e <br>";

$letterO = $str[strlen($str) - 1]; // возвращает последнюю букву слова,длина слова минус один, так как отсчет начинается с нуля
echo "$letterO <br>";

$str[1] = 'E'; // меняем символ 'e' на 'E'
echo "$str <br>";
*/

/*
//работа со строками
$str = 'Hello world';
$word1 = substr($str, 0, 5); // возвращаем слово "Hello", substr(переменная содержащая текст, индекс первого нужного символа(откуда начнем), сколько символов хотим вернуть(если его не указывать, вернет все до конца строки)) отрезает часть строки
echo "$word1 <br>";

$part = substr($str, 4);
echo "$part <br>";


$part2 = substr($str, -5); //если указать отрецательный индекс символа, функция счетает с конца предложения
echo "$part2 <br>";

$part3 = substr($str, 6, -3); //отрецательное число можно указать и для последнего символа, принцип работы тот же
echo "$part3 <br>";

$str = "hello world";
$index = strpos($str, 'hello'); //ищем индекс с которого начинаеться нужное нам слово
var_dump($index);
echo "<br>";

$str = "abc abc";
$index = strpos($str, "abc", 2); //ищем слово не сначала а с указаного индекса
var_dump($index);
echo "<br>";

$index = strpos($str, "acd"); //если последовательность символов не найдена, функция вернет false
var_dump($index);
echo "<br>";

$index = strpos($str, "ABC"); //в случае несовпадения регистра символов, вернет false
var_dump($index);
echo "<br>";

$index = stripos($str, "ABC"); //найдет, даже если регистор не будет совпадать
var_dump($index);
echo "<br>";

$str = "hello world";
$str2 = str_replace('hello', 'Hi', $str); // заменяем слово 'hello' на 'Hi'
echo "$str2 <br>";

$str2 = str_ireplace('Hello', 'Hi', $str); // заменяем слово 'hello' на 'Hi', без учета регистра
echo "$str2 <br>";

$str = "abc abc";
$str2 = str_replace('abc', '123', $str, $count); // заменяем 'abc' на '123', с созданием переменной в которой будет содержаться число с количеством замен слова
echo "$str2, заменено $count раз<br>";

$str = 'Hello World';
$str2 = strtolower($str); //преобразовывает текст в маленький регистр
echo "$str2 <br>";

$str3 = strtoupper($str); //преобразовывает текст в большой регистр
echo "$str3 <br>";

$str = '   Hello   ';
$str2 = trim($str); // удаляем ненужные символы (пробелы, переносы и так далее) по краям строки
echo "$str2 <br>";

$str3 = rtrim($str); // удаляем ненужные символы справа от строки
echo "$str3 <br>";

$str4 = "PHP_EOL.PHP_EOL.Hello"; //PHP_EOL. перенос строки
echo "$str4<br>";

$str5 = ltrim($str4); // удаляем ненужные символы слева от строки
echo "$str5<br>";
*/

/*
//массивы
$list[0] = 'овощи';
$list[1] = 'фрукты';
$list[2] = 'ягоды';

echo $list[1].'<br>';

$list2[] = 'a';
$list2[] = 'b';
$list2[] = 'c';

echo "$list2[1]<br>";

$list['vegetables'] = 'овощи';
$list['fruits'] = 'фрукты';
$list['berries'] = 'ягоды';

echo $list['fruits'].'<br>';

$list3 = [1,3,5,7,];

echo "$list3[2]<br>";

$list4 = ['vegetables' => 'овощи','fruits' => 'фрукты', 'berries' => 'ягоды',];

echo $list4['fruits']."<br>";

$a = sizeof($list3); //возвращает количество элементов массива (число)
var_dump($a);
echo "<br>";

$b = count($list4); //возвращает количество элементов массива (число)
var_dump($b);
echo "<br>";

$str ='Hello world';
$list5 = explode(' ',$str); //делаем из строки массив, в качестве разделителя между будущими элементами массива выступает знак пробел
var_dump($list5);
echo "<br>";

$list6 = explode('!',$str); //если разделитель не втречаеться в строке, функция вернет массив из одного элемента
var_dump($list6);
echo "<br>";

$list6 = [1,3,5,7,];
$str2 = implode(' ',$list6); //объединяем массив в строку, в качестве разделителя выступает знак пробел
var_dump($str2);
echo "<br>";

$list7 = [1,3,5,7,];
$str3 = implode(' + 2 = ',$list7); 
var_dump($str3);
echo "<br>";
*/

/*
//многомерные массивы
$list1 = [1,2,3];
$list2 = [4,5,6];

$list =[
    's1' => $list1,
    's2' => $list2,
    's3' => [7,8,9],
];

var_dump($list['s3']);
echo '<br>';

var_dump($list['s3'][0]);
echo '<br>';

$cities = [
    'russia' => [
        'msk' => 'москва',
        'spb' => 'санкт-перебург',
    ],
    'germany' => [
        'Berlin',
        'Munchen',
    ],
];

var_dump($cities['russia']['spb']);
*/


//функции работы с массивами
/*
$list = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
];

$list1 = array_keys($list); //делаем массив из ключей другого массива
var_dump($list1);
echo '<br>';

$list2 = array_values($list); //делаем массив из значений другого массива
var_dump($list2);
echo '<br>';

$list3 = [
    'a' => 'word a',
    'b' => 'word b',
];

$list4 = [
    'c' => 'word c',
    'd' => 'word d',
    'a' => 'word a2',
];

$list5 = array_merge($list3, $list4); //объединяем два (можно больше) массива в один, если есть одинаковый ключи, то он перезаписывается
var_dump($list5);
echo '<br>';

$list6 = ['a','b','c',];
$list7 = ['d','e','a',];

$list8 = array_merge($list6, $list7);
var_dump($list8);
echo '<br>';

$list9 = [
    'a' => 'word a',
    'word b',
];
$list10 = [
    'c' => 'word c',
    'a' => 'word a2',
    'word d',
];

$list11 = array_merge($list9, $list10);
var_dump($list11);
echo "<br>";

$keys = ['a','b'];
$value = ['word a','word b'];

$list12 = array_combine($keys, $value); //объединяем два массива так, что бы значение первого массива стали ключами
var_dump($list12);
echo "<br>";

$list13 = [
    'a' => 'word a', 
    'b' => 'word b',
    'c' => 'word a',
];

$list14 = array_flip($list13); //меняем местами ключи и значения массива, если ключи совпадают, они будут перезаписываться в порядке очереди
var_dump($list14);
echo "<br>";

$list15 = ['a','b','c','d',];
$list16 = array_reverse($list15); //переворачиваем массив, первый элемент становиться последним и так далее
var_dump($list16);
echo "<br>";

$list17 = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
];
$list18 = array_reverse($list17); //переворачиваем массив с заданными ключами
var_dump($list18);
echo '<br>';

$list19 = ['a','b','c','d'];
$list20 = array_reverse($list19);
var_dump($list20);
echo '<br>';

$list21 = array_reverse($list19, true); //переворачиваем значения массива с сохранием ключей
var_dump($list21);
echo '<br>';

$list22 = ['a','b','c','d'];
$hasLetter = in_array('e', $list22); //проверяем массив на содержание требуемого значения, в случае обнаружения значения функция вернет true, в обратном случае вернет false
var_dump($hasLetter);
echo '<br>';

$hasLetter2 = array_search('b', $list22); //проверяем массив на содержание требуемого значения, в случае обнаружения значения функция вернет его ключ, в обратном случае вернет false
var_dump($hasLetter2);
echo '<br>';

$list23 = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
];

$hasLetter3 = array_search('word b', $list23);
var_dump($hasLetter3);
echo '<br>';
*/



?>