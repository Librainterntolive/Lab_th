<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lab 2_5</title>
</head>

<body>
<?php
	include("lab2_5a.php");
	include("lab2_5b.php");
	include("lab2_5b.php");

	if(isset($x))
		echo "Giá trị của x là: $x";
	else
		echo "Biến x không tồn tại";

	echo"<br>sẽ ra kq bằng 20 do 5b la x+=10 => x=10+10  x còn lại = 10 la do 5a 2 các cộng lại";
?>
</body>
</html>