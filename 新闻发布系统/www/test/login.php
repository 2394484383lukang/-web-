<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div style="width:210px;height:160px;margin:100px auto;">
	<form action="res.php" method="post">
		用户:<input type="text" name="username">
		密码:<input type="password" name="pwd">
		验证码:<input type="text" name="code" style="width:50px;"><img src="code.php"><br>
		<input type="submit" name="submit" value="登陆">

	</form>
	</div>
</body>
</html>