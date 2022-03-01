<?php

$age = '';
$err_age = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['number'];
    if (empty($age)) {
        $err_age = '年齢を入力してください';
    } elseif ($age) {
        $age = "私は{$age}歳です";
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>バリデーションの作成</title>
</head>

<body>
    <h1>バリデーションの作成</h1>
    <form action="" method="POST">
        <?php if ($err_age) : ?>
            <ul>
                <li>
                    <p><?= $err_age ?></p>
                </li>
            </ul>
        <?php endif; ?>
        <div>
            <label for="age">年齢</label><br>
            <input type="number" name="number">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <p><?= htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?></p>
</body>

</html>