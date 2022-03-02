<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];



if ($operator == 'addition') {
    $total = $num1 + $num2;
    $add = '+';
} elseif ($operator == 'subtraction') {
    $total = $num1 - $num2;
    $add = '-';
} elseif ($operator == 'multiplication') {
    $total = $num1 * $num2;
    $add = '*';
} elseif ($operator == 'division') {
    $total = $num1 / $num2;
    $add = '/';
} else {
    $total = "正しい演算子を指定して下さい";
}

$total = "{$num1} {$add} {$num2} = $total";

echo $total;
