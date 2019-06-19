<?php
header("content-type:text/html;charset=utf-8");
include "inc.php";
include 'config.php';
$sitename = $_POST["sitename"];
$url = $_POST["url"];
$s_date = time();
connect($host,$user,$pwd,$db,$code);
$sql = "insert into site(sitename,url,s_date) values('$sitename','$url',$s_date)";
$res = add($sql);
if($res){
	echo "添加成功!<a href='index.php'>跳转</a>&nbsp;<a href='add.php'>继续添加</a>";
}else{
	echo "添加失败!<a href='index.php'>跳转</a>&nbsp;<a href='add.php'>返回添加</a>";
}

