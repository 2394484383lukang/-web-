<?php
//链接数据库服务器，选择操作的数据库，并设置字符编码
$link = @mysqli_connect("localhost","root","","test");
if(!$link){
	exit("ERROR:".mysqli_connect_error());
}
mysqli_set_charset($link,"utf8");