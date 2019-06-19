<?php
session_start();
if(isset($_SESSION['name'])){
	session_destroy();//删除所有的session,并且删除服务器上的session文件
	header("location:login.php");
}
