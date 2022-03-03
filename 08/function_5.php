<?php

$date = '';




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $week = ['日', '月', '火', '水', '木', '金', '土'];
    $day = date('w');
    $date = '今日は、' . date('Y年m月d日') . $week[$day] . '曜日です';
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
    <form action="" method="post">
        <?php if ($date) : ?>
            <h1><?= $date ?></h1>
            <a href="">戻る</a>
        <?php elseif (empty($date)) : ?>
            <h2>本日の日付、曜日を確認しますか？</h2>
            <input type="submit" value="はい">
        <?php endif; ?>
    </form>
</body>

</html>