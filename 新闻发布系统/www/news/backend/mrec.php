<?php
//菜单添加的操作
include 'config.php';
include 'inc.php';
include 'printMsg.php';

$name = $_POST['name'];
$dscp = $_POST['dscp'];
$mdate = time();

connect($host,$user,$pwd,$db,$code);
$sql = "insert into menu(name,dscp,mdate) values('$name','$dscp',$mdate)";
$result = modifyOrInsert($sql);
if($result){
	printText("菜单添加成功!","modifyMenu.php");
}else{
	printText("菜单添加失败!","menu.php");
}