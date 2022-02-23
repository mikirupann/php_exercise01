<?php

$poket_money = 1000;
$fund_raising = 101;

while ($poket_money > $fund_raising) {
    echo <<< EOM
        あなたの所持金は{$poket_money}円です。<br>
        {$fund_raising}募金しました。<br>
        EOM;
    $poket_money = $poket_money - $fund_raising;
    echo "残り残高は{$poket_money}円です。<br>";
    if ($poket_money < $fund_raising) {
        echo "あなたはこれ以上募金できません。";
    }
}
//残り残高は{$poket_mone} - {$fund_raising}