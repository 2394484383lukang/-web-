<?php
if($_FILES['uploadfile']['error']==0){
	/*if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], "upload/".$_FILES['uploadfile']['name'])){
		echo "文件上传成功!";
	}else{
		echo "文件上传失败!";
	}*/
	//1.对存储文件的文件夹操作
	$dir = "upload/".date("Ymd",time());
	if(!is_dir($dir)){
		mkdir($dir,0777,true);
	}
	//2.对文件的类型进行限制
	$arr = array("txt","jpg","gif","png","jpeg","docx");
	$fn_arr = explode(".",$_FILES['uploadfile']['name']);
	//fn_arr[0]=主文件名   fn_arr[1] = 扩展名
	$ext_name = array_pop($fn_arr);
	//在扩展名数组中查找该扩展名是否存在，如果存在返回true,相反false
	if(!in_array($ext_name,$arr)){
		exit("$ext_name 类型的文件不允许上传!");
	}
	//3.对文件的大小进行限制
	$filesize = 102400;
	if($_FILES['uploadfile']['size']>$filesize){
		exit("该文件的大小超出100KB!");
	}
	//4.重新设置文件名
	$newfilename = md5(date("YmdHis",time())).mt_rand(1,1000000000).".".$ext_name;
	//5.存储文件
	$tmp_name = $_FILES['uploadfile']['tmp_name'];
	if(is_uploaded_file($tmp_name)){
		if(move_uploaded_file($tmp_name, $dir."/".$newfilename)){
			$filepath = $dir."/".$newfilename;
			echo "文件上传成功！<a href={$filepath}>查看文件</a>";
		}else{
			echo "文件上传失败！";
		}
	}

}