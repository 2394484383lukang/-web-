<?php

if($_FILES['fileup']['error'] == 0){
	//目录的创建
	//文件类型的判断 
	//文件大小的判断
	//生成新的文件名
	if(is_uploaded_file($_FILES['fileup']['tmp_name'])){
		move_uploaded_file($_FILES['fileup']['tmp_name'], "upload/".$_FILES["fileup"]["name"]);
		echo "success!";
	}
}