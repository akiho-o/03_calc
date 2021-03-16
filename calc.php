<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

if ($operator == "addition") {
    $answer = $num1 + $num2;
    echo $num1 . ' + ' . $num2 . ' = ' . $answer;
} elseif ($operator == "subtraction") {
    $answer = $num1 - $num2;
    echo $num1 . ' - ' . $num2 . ' = ' . $answer;
} elseif ($operator == "multiplication") {
    $answer = $num1 * $num2;
    echo $num1 . ' * ' . $num2 . ' = ' . $answer;
} elseif ($operator == "division") {
    $answer = $num1 / $num2;
    echo $num1 . ' / ' . $num2 . ' = ' . $answer;
} else {
    echo '正しい演算子を指定して下さい';
}