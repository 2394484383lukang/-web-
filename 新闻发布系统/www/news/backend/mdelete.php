<?php
$id = $_GET['id'];
include 'config.php';
include 'inc.php';
include 'printMsg.php';
connect($host,$user,$pwd,$db,$code);
$sql = "delete from menu where id = $id";
$result = modifyOrInsert($sql);
if($result){
	printText('菜单删除成功!','modifyMenu.php');
}else{
	printText('菜单删除失败!','modifyMenu.php');
}
