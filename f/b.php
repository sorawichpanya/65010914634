<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สรวิชญ์ ปัญญา (MK)</title>
</head>

<body>
<h1>สรวิชญ์ ปัญญา (MK)</h1>

<?php
$name = "สรวิชญ์ ปัญญา";
$name .= "สรวิชญ์ ปัญหู";
$age = 64 ;
$price = 154.366 ;

echo "ชื่อ-สกุล: $name <br>";
echo "อายุ: $age <br>";
echo "ราคา: ".$price."<hr>";

echo gettype($name)."<br>";
echo gettype($age)."<br>";
var_dump($price);
?>
</body>
</html>