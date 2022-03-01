<?php

$number1 = '';
$number2 = '';
$number3 = '';
$numbers = '';
$err_numbers = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $number3 = $_POST['number3'];
    if (empty($number1) or empty($number2) or empty($number3)) {
        $err_numbers = '全てに数字を入力してください';
    } else {
        $numbers = $number1 + $number2 + $number3;
        $numbers =  "合計値は{$numbers}です";   
    }
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>複数のフォーム</title>
</head>

<body>
    <h1>数字を入力してください</h1>
    <form action="" method="POST">
        <?php if ($err_numbers) : ?>
            <ul>
                <li>
                    <p><?= $err_numbers ?></p>
                </li>
            </ul>
        <?php endif; ?>
        <div>
            <label for="number">1つめの数字</label><br>
            <input type="number" name="number1">
        </div>
        <div>
            <label for="number">2つめの数字</label><br>
            <input type="number" name="number2">
        </div>
        <div>
            <label for="number">3つめの数字</label><br>
            <input type="number" name="number3">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <p><?= htmlspecialchars($numbers, ENT_QUOTES, 'UTF-8'); ?></p>

</body>

</html>