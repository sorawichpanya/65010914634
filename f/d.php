<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สรวิชญ์ ปัญญา (MK)</title>
</head>

<body>
<h1>สรวิชญ์ ปัญญา (MK)</h1>


<form method="post" action="">
คะแนน <input type="number" name="aa" min="0" max="100" autofocus required>
	<!--<input type="submit" name="sumbit" value="ok">-->
    <button type="submit" name="submit">OK</button>
</form>

<?php
if(isset($_POST['submit'])){
	$score = $_POST['aa'] ;
	if ($score >= 80) {
	$grade = "A" ;
	} else if ($score >= 70) {
	$grade = "B" ;
	} else if ($score >= 60) {
	$grade = "C" ;
	} else if ($score >= 50) {
	$grade = "D" ;
	} else {
	$grade = "F" ;
	}
echo "คะแนน $score ได้เกรด $grade" ;
}
?>
</body>
</html>