<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

function inline($fao, $num1, $num2, $result)
{

    return "$num1 $fao $num2 = $result";
}

if ($operator == 'addition') {
    $result = $num1 + $num2;
    $fao = '+';
    $message = inline($fao, $num1, $num2, $result);
} elseif ($operator == 'subtraction') {
    $result = $num1 - $num2;
    $fao = '-';
    $message = inline($fao, $num1, $num2, $result);
} elseif ($operator == 'multiplication') {
    $result = $num1 * $num2;
    $fao = '*';
    $message = inline($fao, $num1, $num2, $result);
} elseif ($operator == 'division') {
    $result = $num1 / $num2;
    $fao = '/';
    $message = inline($fao, $num1, $num2, $result);
} else {
    $error_message = "正しい演算子を指定して下さい";
}

if (empty($error_message)) {
    echo $message;
} else { 
    echo $error_message;
}

