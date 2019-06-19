<?php
session_start();
if(!isset($_SESSION['name'])){
	header("location:error.html");
}
$varid = intval($_GET['id']);
include 'inc.php';
$sql = "delete from course where id = $varid";
$result = @mysqli_query($link,$sql) or exit("delete error!");
if($result && mysqli_affected_rows($result)>0){
	header("location:read.php");
}else{
	header("location:read.php");
}