<?php
include 'config.php';
include 'inc.php';
include 'printMsg.php';

connect($host,$user,$pwd,$db,$code);

$id = $_GET["id"];
$tp = $_GET["tp"];
$page = $_GET["page"];
if($tp == 0){
	$t = 1;
}else{
	$t = 0;
}
$sql = "update msg set tp = $t where id = $id";
$result = modifyOrInsert($sql);
if($result){
	header("location:msg.php?page=$page");
}