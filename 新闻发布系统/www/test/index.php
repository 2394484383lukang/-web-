<?php
session_start();
if(!isset($_SESSION['name'])){
	header("location:login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		if(isset($_SESSION['name'])){
			echo $_SESSION['name'];
		}
	?>

	您好,欢迎登陆网站后台!<a href="quit.php">退出</a>
</body>
</html>