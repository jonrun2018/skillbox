<?php

$supportedOperators = ['+','-', '*', '/'];
$callsHistory = [];

function calculateOperation (&$history, int $a, int $b, string $operation = '+') : int
{
    $history[] = $a . ' ' . $operation . ' ' . $b;
    if ($operation == '+'){
        return $a + $b; 
    } elseif ($operation == '-'){
        return $a - $b;
    } elseif ($operation == '*'){
        return $a * $b;
    } elseif ($operation == '/'){
        return $a / $b;
    }
}

function parseoperator($userInput, $operator)
{
    $parseResult = explode($operator, $userInput);
    if ($parseResult && count($parseResult) == 2){
        return ['operators' => $parseResult, 'operator' => $operator];
    } else {
        return false;
    }
}

do {
    $userInput = readline('Введите выражение: '); // функция, позволяющая получить пользовательский ввод
    if ($userInput == 'exit') {
        print_r($callsHistory);
    }
    foreach ($supportedOperators as $operator) {
        $parseResult = parseoperator($userInput, $operator);
        if ($parseResult) {
            echo 'Результат = ' . calculateOperation( $callsHistory, intval($parseResult['operators'][0]), intval($parseResult['operators'][1]), $parseResult['operator']).PHP_EOL;// intval переводит строку в число
        }
    }
}while (true);


/*
function displayParameters ($a, $b, $c = 0)
{
    echo "$a $b $c".PHP_EOL;
}

displayParameters(1,2,3);
displayParameters(2,5);
*/

/*
function isValidNumber ($n) 
{
    return $n % 3 === 0;
}

function displayResult ($n, $isValidNumber)
{
    if ($isValidNumber) {
        echo "Число $n делится на 3<br>";
    } else {
        echo "Число $n не делится на 3<br>";
    }
}

for ($i = 1; $i <= 100; $i++) {
    displayResult ($i, isValidNumber($i));
}
*/


/*
function displayString (string $str,int $n): void // указываем типы принимаймых переменных. void указваем какой тип должна вернуть функция (в данном примере указываем что функция нечего не возвращает)
{
    for ($i = 0; $i < $n; $i++){
        echo $str."<br>";
    }

    //return true; // выдает ошибку
};

displayString ("Text string", 3);

*/

/*
function displayString (string $str,int $n) : array
{
    $resultArray = [];
    for ($i = 0; $i < $n; $i++){
        $resultArray[$i] = $str."<br>";
    }

    return $resultArray;
};

$resultArray =  displayString ("Text string", 3);

foreach ($resultArray as $result) {
    echo $result.'<br>';
}
*/

/*
$numbersArray = [1, 4, 5, 8, 9, 2, 0];
$elementsNumber = count($numbersArray);

function truncArray (array &$numbersArray, int $elementsNumber) : void //меняем массив за пределлами массива. & перед переменной
{
    for ($i = 0; $i < $elementsNumber; $i++) {
        if ($i % 2 !== 0) {
            unset($numbersArray[$i]); // удаление элемента из массива
        }
    }
}

truncArray ($numbersArray, $elementsNumber);
print_r($numbersArray);
*/







?>