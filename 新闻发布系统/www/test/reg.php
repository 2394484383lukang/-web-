<?php
if(isset($_POST['submit'])){
	include 'function.php';//包含文件
	$user = $_POST['username'];
	$result = checkData($user);
	if($result){
		echo "注册";
	}else{
		echo "数据长度不符合要求!";
	}
}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		用户名:
		<input type="text" name="username">
		<input type="submit" value="注册" name="submit">

	</form>
</body>
</html>