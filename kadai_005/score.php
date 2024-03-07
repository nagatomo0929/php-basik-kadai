<?php

// 生徒10人分の点数を配列に代入
$scores = array(80, 60, 55, 40, 100, 25, 80, 95, 30, 60);

// 合計点を計算
$total = array_sum($scores);

// 生徒の人数を取得
$num_students = count($scores);

// 平均点を計算
$average = $total / $num_students;

// 平均点をブラウザに出力
echo "平均点は: " . $average;

?>
