<?php
include 'config.php';
include 'inc.php';
include 'printMsg.php';
$id = $_POST['id'];
$name = $_POST['name'];
$dscp = $_POST['dscp'];
$mdate = time();

connect($host,$user,$pwd,$db,$code);
$sql = "update menu set name = '$name',dscp = '$dscp',mdate = $mdate where id = $id";
$result = modifyOrInsert($sql);
if($result){
	printText('菜单修改成功!','modifyMenu.php');
}else{
	printText('菜单修改失败!','modifyMenu.php');
}