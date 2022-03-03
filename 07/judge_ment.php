<?php

$score = $_GET['score'];

?>




<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <form action="" method="post">
        <?php if ($score >= 60) : ?>
            <h1>合格です</h1>
        <?php elseif ($score < 60 and $score) : ?>
            <h1>不合格です</h1>
        <?php endif; ?>
    </form>

    <a href="form2_3.php">戻る</a>
</body>

</html>