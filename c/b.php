<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สรวิชญ์ ปัญญา (MK)</title>
</head>
	
<body>
<h1> สรวิชญ์ ปัญญา (MK) </h1>	
<form method="post" action="">
	ตัวเลข <input type="number" name="a" step="5" min="0" max="100" required autofocus><br>
    ชื่อ-สกุล <input type="text" name="b" required><br>
    จังหวัด
	<select name="province">
    	<option value="ขอนนแก่น">ขอนแก่น</option>
        <option value="มหาสารคาม">มหาสารคาม</option>
        <option value="เลย">เลย</option>
     </select><br>
     วันเดือนปีเกิด <input type="date" name="date">
     <br><br>
    <button type="submit" name="Submit">ตกโต๊ะ</button>
    <button type="reset">ยกเลิก</button>
    <button type="button" onClick="window.print();">พิมพ์</button>
</form>
<hr>

<?php 
if(isset($_POST['Submit'])){
	echo "ตัวเลข: ".$_POST['a']."<br>";
	echo "ชื่อ-สกุล: ".$_POST['b']."<br>";
	echo "จังหวัด: ".$_POST['province']."<br>";
	echo "วันเดือนปีเกิด: ".$_POST['date']."<br>";
	}
?>
</body>
</html>