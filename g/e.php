<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สรวิชญ์ ปัญญา(MK)</title>
</head>

<body>
<h1>สรวิชญ์ ปัญญา(MK) for</h1>

<form method="post" action="">
	แม่สูตรคูณ <input type="number" name="a" required autofocus>
    <button type="submit" name="submit">OK</button>
</form>
<br><hr>

<?php
	if(isset($_POST['submit'])){
	$m = $_POST['a'];
	for($i=1; $i<= 12; $i++){
		$x = $m * $i ;
?>
		<?=$m;?> x <?=$i;?> = <?=$x;?>  <br>
<?php 	
	}
	} 
?>

</body>
</html>