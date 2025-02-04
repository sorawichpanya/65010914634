<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สรวิชญ์ ปัญญา(MK)</title>
</head>

<body>
<h1>สรวิชญ์ ปัญญา(MK) </h1>

<form method="post" action="">
	จำนวน <input type="number" name="a" required autofocus>
    <button type="submit" name="submit">OK</button>
</form>
<br><hr>

<?php
	if(isset($_POST['submit'])){
	$count = $_POST['a'];
	echo "แสดงจำนวน $count รูป <br><br>";
	for($i=1; $i<= $count; $i++){
?>
	<img src="im/unnamed.jpg" width="250">
<?php 	
	}
	} 
?>

</body>
</html>