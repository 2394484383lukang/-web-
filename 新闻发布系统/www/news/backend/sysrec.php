<?php
//系统参数的修改操作
include 'config.php';
include 'inc.php';
include 'printMsg.php';

$name = $_POST['name'];
$keyword = $_POST['keyword'];
$dscp = $_POST['dscp'];
$addr = $_POST['addr'];
$tel = $_POST['tel'];
$copy = $_POST['copy'];
$number = $_POST['number'];
$author = $_POST['author'];

connect($host,$user,$pwd,$db,$code);
$sql = "update config set name='$name',keyword='$keyword',dscp='$dscp',addr='$addr',tel='$tel',copy='$copy',number='$number',author='$author'";
$result = modifyOrInsert($sql);
if($result){
	printText("配置信息修改成功!","system.php");
}else{
	printText("配置信息修改失败!","system.php");
}




