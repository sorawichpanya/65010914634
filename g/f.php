<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สรวิชญ์ ปัญญา(MK)</title>
</head>

<body>
<h1>สรวิชญ์ ปัญญา(MK) While</h1>

<form method="post" action="">
	แม่สูตรคูณ <input type="number" name="a" required autofocus>
    <button type="submit" name="submit">OK</button>
</form>
<br><hr>

<?php
	if(isset($_POST['submit'])){
	$m = $_POST['a'];
	$i = 1;
	while($i<=12){
	$x = $m * $i;
?>
		<?=$m;?> x <?=$i;?> = <?=$x;?>  <br>
<?php 
	$i++;	
	}
	} 
?>

</body>
</html>