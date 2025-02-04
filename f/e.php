<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สรวิชญ์ ปัญญา (MK)</title>
</head>

<body>
<h1>สรวิชญ์ ปัญญา (MK)</h1>
<form method="post" action="">
ราคาสินค้ารวม <input type="number" name="aa" min="0" autofocus required>
	<!--<input type="submit" name="sumbit" value="ok">-->
    <button type="submit" name="submit">OK</button>
</form>
<hr>
<?php
if(isset($_POST['submit'])){
	$price = $_POST['aa'] ;
	if ($price >= 5000) {
	$discount = $price*0.15 ;
	} else if ($price >= 2000) {
	$discount = $price*0.1 ;
	} else if ($price >= 1000) {
	$discount = $price*0.05 ;
	} else {
	$discount = 0 ;
	}
$net = $price-$discount ;

echo "ราคาสินค้ารวม :".number_format($price,2)." บาท <br>";
echo "ส่วนลดที่ได้ :".number_format($discount,2)." บาท<br>" ;
echo "จำนวนเงินที่ต้องจ่าย :".number_format($net,2)." บาท";
}
?>

</body>
</html>