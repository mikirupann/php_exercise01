<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

foreach ($subjects as $subject) {
    switch ($subject) {
        case '数学':
            $day = "明日";
            break;
        case '英語':
            $day = "明後日";
            break;
        case '理科':
            $day = "明々後日";
            break;
        case '社会':
            $day = "昨日";
            break;
        case '国語':
            $day = "中止";
            break;
        default:
            break;
    }
    echo "{$subject}の試験は{$day}です。<br>";
}