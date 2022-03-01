<?php

$name = '';
$err_name = '';

function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    if (empty($name)) {
        $err_name = '※名前を入れてください';
    } else {
        $name = "私の名前は、{$name}です。";
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームの作成2</title>
</head>

<body>
    <p><?= $err_name ?></p>
    <p><?= h($name) ?></p>
    <a href="form_2.php">戻る</a>
</body>

</html>