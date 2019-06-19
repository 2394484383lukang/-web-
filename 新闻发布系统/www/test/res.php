<?php
session_start();
if(isset($_POST['submit'])){
	//客户端(js)验证文本框不能为空
	$user = $_POST['username'];
	$pwd = $_POST['pwd'];
	$code = $_POST['code'];
	//验证客户端提交的验证码是否和存储在session中的验证码一致
	$c = $_SESSION['code'];
	if($code != $c){
		//客户端跳转
		echo "<script>alert('验证码错误!');window.location='login.php';</script>";
	}else{
		$_SESSION['name'] = $user;
		//服务器端跳转
		header("location:index.php");
	}
}
