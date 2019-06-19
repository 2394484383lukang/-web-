<?php
//处理用户登录
session_start();
include 'config.php';
include 'inc.php';
include 'printMsg.php';

$username = $_POST['username'];
$passwd = md5($_POST['pwd']);

connect($host,$user,$pwd,$db,$code);
$sql = "select * from admin where username = '$username' and pwd = '$passwd'";
$row = fetchOne($sql);

if(is_array($row)){
	$_SESSION['id'] = $row['id'];
	$_SESSION['username'] = $row['username'];
	printText('欢迎您!','index.php');
}else{
	printText('用户名或密码错误!','login.php');
}

