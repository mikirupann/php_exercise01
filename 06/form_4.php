<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];



if ($operator == 'addition') {
    $total_add = $num1 + $num2;
    $total = "{$num1} + {$num2} = $total_add";
} elseif ($operator == 'subtraction') {
    $total_sub = $num1 - $num2;
    $total = "{$num1} - {$num2} = $total_sub";
} elseif ($operator == 'multiplication') {
    $total_mul = $num1 * $num2;
    $total = "{$num1} * {$num2} = $total_mul";
} elseif ($operator == 'division') {
    $total_div = $num1 / $num2;
    $total = "{$num1} / {$num2} = $total_div";
} else {
    $total = "正しい演算子を指定して下さい";
} 

echo $total;
