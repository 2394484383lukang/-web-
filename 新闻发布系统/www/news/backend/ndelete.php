<?php
$id = $_GET['id'];
include 'config.php';
include 'inc.php';
include 'printMsg.php';
connect($host,$user,$pwd,$db,$code);
$sql = "delete from content where id = $id";
$result = modifyOrInsert($sql);
if($result){
	printText('新闻删除成功!','modifyNews.php');
}else{
	printText('新闻删除失败!','modifyNews.php');
}