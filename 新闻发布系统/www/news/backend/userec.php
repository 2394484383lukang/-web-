<?php
//用户信息修改操作
include 'verify.php';
include 'config.php';
include 'inc.php';
include 'printMsg.php';

$username = $_POST['username'];
$passwd = md5($_POST['pwd']);
$id = $_SESSION['id'];

connect($host,$user,$pwd,$db,$code);
$sql = "update admin set username = '$username',pwd = '$passwd' where id = $id";
$result = modifyOrInsert($sql);
if($result){
	printText("用户信息修改成功!","login.php","parent");
}else{
	printText("用户信息修改失败!","user.php");
}
