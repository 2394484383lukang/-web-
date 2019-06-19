<?php

//链接数据库服务器
function connect($host,$user,$pwd,$db,$code){
	global $link;
	$link = @mysqli_connect($host,$user,$pwd,$db);
	if(!$link){
		exit("error:".mysqli_connect_error());
	}
	mysqli_query($link,$code);
}

//添加数据的功能
function add($sql){
	global $link;
	$result = @mysqli_query($link,$sql) or exit("add error!");
	if($result && mysqli_affected_rows($link)>0){
		return 1;
	}else{
		return 0;
	}
}

//查询所有数据

function queryAll($sql){
	global $link;
	$result = @mysqli_query($link,$sql) or exit("query all error!");
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}
