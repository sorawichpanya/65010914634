<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สรวิชญ์ ปัญญา (MK)</title>
</head>

<body>
<h1> สวัสดีคับท่านสมาชิกชมคนชอบสี </h1>
<form method="post" action="" enctype="multipart/form-data" >
	ชื่อ-สกุล 	<input type="text" name="a" required><br>
    เพศ <input type="radio" name="b" value="ชาย" required> ชาย
    	<input type="radio" name="b" value="หญิง" required> หญิง<br>
    ที่อยู่<br>
	<textarea name="c" cols="29" rows="4" required> </textarea><br>
    เบอร์โทร <input type="text" name="d" required ><br>
    <tr>
    <td>ระดับการศึกษา</td>
	<td><select name="e" >
    	<option value="ปวช.">ปวช.</option>
        <option value="ปวส.">ปวส.</option>
        <option value="ม.6">ม.6</option>
        <option value="ปริญญาตรี">ปริญญาตรี</option>
        <option value="ปริญญาโท">ปริญญาโท</option>
        <option value="ปริญญาเอก">ปริญญาเอก</option>
     </select><br></td>
     </tr>
     อาหารที่ชอบ <input type="checkbox" name="f[]" value="ข้าวหมูทอด" >ข้าวหมูทอด 
     			<input type="checkbox" name="f[]" value="ข้าวขาหมู">ข้าวขาหมู
                <input type="checkbox" name="f[]" value="ข้าวกะเพราหมู">ข้าวกะเพราหมู
     <br><br>
     Username <input type="text" name="g" required>
     Password <input type="password" name="h" minlength="8" required><br>

	<button type="submit" name="Submit">สมัคร</button>
    <button type="reset">ยกเลิก</button>
    <button type="button" onClick="window.print();">พิมพ์</button>
</form>
<hr>

<?php 
if(isset($_POST['Submit'])){
	echo "ชื่อ-สกุล: ".$_POST['a']."<br>";
	echo "เพศ: ".$_POST['b']."<br>";
	echo "ที่อยู่: ".$_POST['c']."<br>";
	echo "เบอร์โทร: ".$_POST['d']."<br>";
	echo "ระดับการศึกษา: ".$_POST['e']."<br>";
	echo "อาหารที่ชอบ: ";
	if(isset($_POST['f'])){
    foreach($_POST['f'] as $food){
        echo "<li>" . htmlspecialchars($food) . "</li>";
    }
}
	echo "Username: ".$_POST['g']."<br>";
	echo "Password: ".$_POST['h']."<br>";
	}
?>
</body>
</html>