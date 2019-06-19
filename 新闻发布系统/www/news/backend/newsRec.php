<?php
include 'config.php';
include 'inc.php';
include 'printMsg.php';
//数据获取
$title = $_POST['title'];
if(empty($title)){
	printText('新闻标题不能为空!','news.php');
	exit;
}
$source = $_POST['source'];
$keyword = $_POST['keyword'];
$mid = $_POST['mid'];
$content = $_POST['content'];
if(empty($content)){
	printText('新闻内容不能为空!','news.php');
	exit;
}
$cdate = time();

connect($host,$user,$pwd,$db,$code);
$sql = "insert into content(title,source,keyword,mid,cdate) values('$title','$source','$keyword',$mid,$cdate)";
$id = insertId($sql);

$sql = "insert into ncontent(cid,content) values($id,'$content')";
$result = modifyOrInsert($sql);
if($result){
	printText('新闻添加成功!','news.php');
}else{
	printText('新闻添加失败!','news.php');
}



