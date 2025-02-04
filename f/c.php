<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สรวิชญ์ ปัญญา (MK)</title>
</head>

<body>
<h1>สรวิชญ์ ปัญญา (MK)</h1>

<?php
$std1 = 75 ;
$std2 = 60 ;
$std3 = 82 ;
$std4 = 59 ;
$std5 = 64 ;
$sum = $std1+$std2+$std3+$std4+$std5;
$avg = $sum/5 ;

echo "นิสิตคนที่ 1 ได้คะแนน : {$std1} <br>";
echo "นิสิตคนที่ 2 ได้คะแนน : {$std2} <br>";
echo "นิสิตคนที่ 3 ได้คะแนน : {$std3} <br>";
echo "นิสิตคนที่ 4 ได้คะแนน : {$std4} <br>";
echo "นิสิตคนที่ 5 ได้คะแนน : {$std5} <br>";
echo "ผลรวมคะแนน : {$sum} <br>";
echo "คะแนนเฉลี่ย : {$avg} ";
?>
</body>
</html>