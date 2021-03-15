<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

if ($operator == "addition") {

function addition($num1, $num2)
{
    return $num1 + $num2;
}
echo $num1 . ' + ' . $num2 . ' = ' . addition($num1, $num2) . '<br>';
} elseif ($operator == "subtraction") {

function subtraction($num1, $num2)
{
    return $num1 - $num2 ;
}

echo $num1 . ' - ' . $num2 . ' = ' . subtraction($num1, $num2) . '<br>';
} elseif ($operator == "multiplication") {

function multiplication($num1, $num2)
{
    return $num1 * $num2;
}

echo $num1 . ' * ' . $num2 . ' = ' . multiplication($num1, $num2) . '<br>';
} elseif ($operator == "division") {

function division($num1, $num2)
{
    return $num1 / $num2;
}

echo $num1 . ' / ' . $num2 . ' = ' . division($num1,$num2) . '<br>';
} else {
    echo '正しい演算子を指定して下さい';
}