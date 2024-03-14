<?php
// 連想配列を作成
$product = array(
    '名前' => '玉ねぎ',
    '値段' => 200,
    '産地' => '北海道'
);

// foreach文とecho文を使って連想配列の要素を出力
foreach ($product as $key => $value) {
    echo $key . ': ' . $value . "<br>";
}
?>
