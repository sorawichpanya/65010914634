<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สรวิชญ์ ปัญญา(MK)</title>
</head>

<body>
<h1>สรวิชญ์ ปัญญา(MK) While</h1>

<form method="post" action="">
	รหัสนิสิต <input type="text" name="a" required autofocus>
    <button type="submit" name="submit">OK</button>
</form>
<br><hr>

<?php
	if(isset($_POST['submit'])){
	 $std = $_POST['a'];
	 $y = substr($std, 0, 2);
	 echo "<img src='http://202.28.32.211/picture/student/{$y}/{$std}.jpg' width = '250'>" ;
	}
?>
		
<?php
	
?>

</body>
</html>