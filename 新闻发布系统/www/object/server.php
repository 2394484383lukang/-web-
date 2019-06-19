<?php
include 'class1.php';
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$content = $_POST['content'];

	$db = new msgSql("localhost","root","","msg","utf8");
	$field = array("name","tel","content");
	$value = array("$name","$tel","$content");
	$result = $db->addSql("message",$field,$value);
	if($result){
		echo "success!";
	}else{
		echo "fail";
	}

}