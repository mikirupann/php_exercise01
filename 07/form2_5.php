<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];


$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = h($_POST['name']);
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $item_key = $_POST['item_key'];
    if (empty($name)) {
        $err_msgs[] = "氏名を入力してください";
    }
    if (empty($tel)) {
        $err_msgs[] = "電話番号を入力してください";
    }
    if (empty($email)) {
        $err_msgs[] = "メールアドレスを入力してください";
    }
    if ($name and $tel and $email) {
        header('Location: confirm.php?item_key=' . $item_key);
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>個人情報を入力してください</h3>
    <?php if ($err_msgs) : ?>
        <h2>エラーメッセージ</h2>
        <ul>
            <?php foreach ($err_msgs as $err_msg) : ?>
                <li><?= $err_msg ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="" method="post">
        <label for="name">氏名</label><br>
        <input type="text" name="name"><br>
        <label for="tel">電話番号</label><br>
        <input type="tel" name="tel" maxlength="20"><br>
        <label for="email">メールアドレス</label><br>
        <input type="email" name="email" id="email"><br>

        <h3>購入するものを選択してください</h3>
        <p>
            <select name="item_key">
                <?php foreach ($items as $item) : ?>
                    <option name="item_key"><?= $item ?></option>
                <?php endforeach; ?>
            </select>
        </p>

        <br>
        <div class="submit">
            <input type="submit" value="送信">
        </div>
    </form>
</body>

</html>
