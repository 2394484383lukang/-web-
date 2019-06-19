<?php
//封装相应的功能

//链接数据库服务器的函数
function connect($host,$user,$pwd,$db,$code){
	global $link;
	$link = @mysqli_connect($host,$user,$pwd,$db);
	if(!$link){
		exit('connect error!');
	}
	mysqli_set_charset($link,$code);
}

//返回单条记录的函数
function fetchOne($sql){
	global $link;
	$result = @mysqli_query($link,$sql) or exit('fetchOne error!');
	$row = mysqli_fetch_assoc($result);
	return $row;
	//$row 一维数组
}

//返回多条记录的函数
function fetchAll($sql){
	global $link;
	$result = @mysqli_query($link,$sql) or exit('fetchAll error!');
	$rows = array();
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

//更新或添加数据的函数
function modifyOrInsert($sql){
	global $link;
	$result = @mysqli_query($link,$sql) or exit('modifyOrInsert error!');
	if($result && mysqli_affected_rows($link)>0){
		return 1;
	}else{
		return 0;
	}
}
//返回添加数据的ID方法
function insertId($sql){
	global $link;
	$result = @mysqli_query($link,$sql) or exit('InsertId error!');
	if($result && mysqli_affected_rows($link)>0){
		return mysqli_insert_id($link);
		//返回当前记录的ID值
	}else{
		return 0;
	}
}
//返回总记录数
function returnCount($sql){
	global $link;
	$result = @mysqli_query($link,$sql) or exit('returnCount error!');
	return mysqli_num_rows($result);
}