<?php

//链接数据库服务器
function connect($host,$user,$pwd,$db,$encode){
	global $link;//全局变量
	$link = @mysqli_connect($host,$user,$pwd,$db) or exit("connect error!");
	mysqli_set_charset($link,$encode);
	
}
//添加数据
function add($sql){
	global $link;//全局变量
	$result = @mysqli_query($link,$sql) or exit("insert error!");
	if($result && mysqli_affected_rows($link)>0){
		return 1;
	}else{
		return 0;
	}
}