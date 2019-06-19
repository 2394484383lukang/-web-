<?php
if(isset($_POST['reg'])){
	include 'inc.php';
	$userName = $_POST['userName'];
	$pwd = md5($_POST['pwd']);
	//查询用户名是否在数据库中已经存在
	$sql = "select username from t_user where username = '$userName'";
	$result = @mysqli_query($link,$sql) or exit("select user error!");
	if(mysqli_num_rows($result)>0){
		echo "<script>alert('该用户已经存在,不能再注册!');</script>";
	}else{
		$tdate = date("Y-m-d H:i:s",time());
		$insertSql = "insert into t_user(username,pwd,tdate) values('$userName','$pwd','$tdate')";
		$insertRes = @mysqli_query($link,$insertSql) or exit("insert user error!");
		if($insertRes && mysqli_insert_id($link)>0){
			echo "<script>alert('该用户添加成功!');window.location='login.php';</script>";
		} 
	}
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册</title>
	<script>
		function checkReg(){
		var u = document.getElementById('userName').value;
		var p = document.getElementById('pwd').value;
		var c = document.getElementById('cpwd').value;
		if(u == ""){
			document.getElementById('userMsg').innerText = "不能为空!";
			return false;
		}
		if(u.length<6){
			document.getElementById('userMsg').innerText = "用户名的长度不能小于6个字符!";
			return false;
		}
		if(p == ""){
			document.getElementById('pwdMsg').innerText = "不能为空!";
			return false;
		}
		if(c == ""){
			document.getElementById('cpwdMsg').innerText = "不能为空!";
			return false;
		}
		if(p != c){
			document.getElementById('cpwdMsg').innerText = "两次密码不一致!";
			return false;
		}
		return true;
	} 
	</script>
</head>
<body>
	<fieldset style="width:400px;margin:100px auto;">
	<legend>用户注册</legend>
	<form action="" method="post" onsubmit="return checkReg()">
		<table width="400" height="160" align="center">
			<tr>
				<td>用户</td>
				<td><input type="text" id="userName" name="userName">
					<span id="userMsg" style="font-size:14px;color:#f00;"></span>
				</td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" id="pwd" name="pwd" >
					<span id="pwdMsg" style="font-size:14px;color:#f00;"></span>
				</td>
			</tr>
			<tr>
				<td>确认密码</td>
				<td><input type="password" id="cpwd" name="cpwd" >
					<span id="cpwdMsg" style="font-size:14px;color:#f00;"></span>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="reg" value="注册用户"></td>
			</tr>
		</table>
	</form>
</fieldset>

</body>
</html>