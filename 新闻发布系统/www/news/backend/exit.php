<?php
session_start();
if(isset($_SESSION["username"])){
	session_destroy();//删除服务器存储的session文件
	header("location:login.php");
}