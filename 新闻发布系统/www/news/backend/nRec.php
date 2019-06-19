<?php
include 'config.php';
include 'inc.php';
include 'printMsg.php';
//数据获取
$id = $_POST['id'];
$title = $_POST['title'];
if(empty($title)){
	printText('新闻标题不能为空!','modifyNews.php');
	exit;
}
$source = $_POST['source'];
$keyword = $_POST['keyword'];
$mid = $_POST['mid'];
$content = $_POST['content'];
if(empty($content)){
	printText('新闻内容不能为空!','modifyNews.php');
	exit;
}


connect($host,$user,$pwd,$db,$code);
$sql = "update content set title='$title',source='$source',keyword='$keyword',mid=$mid where id=$id";
$result1 = modifyOrInsert($sql);

$sql = "update ncontent set content='$content' where cid=$id";
$result2 = modifyOrInsert($sql);
if($result1 || $result2){
	printText('新闻修改成功!','modifyNews.php');
}else{
	printText('未做任何修改,原信息保存完成!','modifyNews.php');
}
