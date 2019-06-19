<?php
include 'config.php';
include 'inc.php';
include 'printMsg.php';

if($_FILES['path']['error']==0){
	//1.对存储文件的文件夹操作
	$dir = "upload/".date("Ymd",time());
	if(!is_dir($dir)){
		mkdir($dir,0777,true);
	}
	//2.对文件的类型进行限制
	$arr = array("txt","jpg","gif","png","jpeg","docx");
	$fn_arr = explode(".",$_FILES['path']['name']);
	//fn_arr[0]=主文件名   fn_arr[1] = 扩展名
	$ext_name = array_pop($fn_arr);
	//在扩展名数组中查找该扩展名是否存在，如果存在返回true,相反false
	if(!in_array($ext_name,$arr)){
		exit("$ext_name 类型的文件不允许上传!");
	}
	//3.对文件的大小进行限制
	$filesize = 204800;
	if($_FILES['path']['size']>$filesize){
		exit("该文件的大小超出200KB!");
	}
	//4.重新设置文件名
	$newfilename = md5(date("YmdHis",time())).mt_rand(1,1000000000).".".$ext_name;
	//5.存储文件
	$tmp_name = $_FILES['path']['tmp_name'];
	if(is_uploaded_file($tmp_name)){
		if(move_uploaded_file($tmp_name, $dir."/".$newfilename)){
			$filepath = $dir."/".$newfilename;
			//数据获取
			$title = $_POST['title'];
			if(empty($title)){
				printText('新闻标题不能为空!','special.php');
				exit;
			}
			$source = $_POST['source'];
			$keyword = $_POST['keyword'];
			$mid = $_POST['mid'];
			$content = $_POST['content'];
			if(empty($content)){
				printText('新闻内容不能为空!','special.php');
				exit;
			}
			$cdate = time();

			connect($host,$user,$pwd,$db,$code);
			$sql = "insert into content(title,source,keyword,mid,cdate) values('$title','$source','$keyword',$mid,$cdate)";
			$id = insertId($sql);

			$sql = "insert into ncontent(cid,content) values($id,'$content')";
			$result = modifyOrInsert($sql);

			$sql = "insert into img(tid,path) values($id,'$filepath')";
			$resultImg = modifyOrInsert($sql);
			
			if($result){
				printText('专题新闻添加成功!','special.php');
			}else{
				printText('专题新闻添加失败!','special.php');
			}
		}
	}

}

