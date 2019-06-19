<?php
session_start();
if(isset($_POST['submit'])){
	include 'inc.php';
	$userName = $_POST['userName'];
	$pwd = md5($_POST['pwd']);
	$verity = $_POST['verity'];
	//验证码的判断
	if($verity != $_SESSION['code']){
		echo "<script>alert('验证码错误!');</script>";
	}else{
		$sql = "select * from t_user where username='$userName' and pwd='$pwd'";
		$result = @mysqli_query($link,$sql) or exit("query error!");
		if($result && mysqli_num_rows($result)>0){
			$_SESSION['name'] = $userName;
			header("location:read.php");
		}else{
			echo "<script>alert('用户或密码错误!');</script>";
		}

	}

}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户登录</title>
	<script src="course.js"></script>
</head>
<body>
<fieldset style="width:400px;margin:100px auto;">
	<legend>用户登陆</legend>
	<form action="" method="post" onsubmit="return check()">
		<table width="400" height="160" align="center">
			<tr>
				<td>用户</td>
				<td><input type="text" id="userName" name="userName" onblur="checkUser('userName','userMsg')">
					<span id="userMsg" style="font-size:14px;color:#f00;"></span>
				</td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" id="pwd" name="pwd" onblur="checkUser('pwd','pwdMsg')">
					<span id="pwdMsg" style="font-size:14px;color:#f00;"></span>
				</td>
			</tr>
			<tr>
				<td>验证码</td>
				<td>
					<input type="text" id="verity" name="verity" style="width:50px;" onblur="checkUser('verity','verityMsg')">
					<img src="code.php" id="code" style="vertical-align:middle;">
					<span onclick="change()" style="cursor:pointer;">换一个</span>
					<span id="verityMsg" style="font-size:14px;color:#f00;"></span>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="登陆">
					&nbsp;<button type="button" onclick="window.location='reg.php'">注册</button>
				</td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>