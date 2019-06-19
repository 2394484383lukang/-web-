<?php
if(isset($_POST['submit'])){
	include 'inc.php';//文件包含
	include 'printMsg.php';
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$content = $_POST['content'];
	$ctime = time();
	connect("localhost","root","","msg","utf8");
	$sql = "insert into message(name,tel,content,ctime) values('$name','$tel','$content',$ctime)";
	$res = add($sql);
	if($res){
		printText("发表留言成功!",'show.php');
	}else{
		printText("发表留言失败!",'index.php');
	}

}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>用户留言</title>
	<link rel="stylesheet" href="lib/css/bootstrap.min.css">
	<script src="lib/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		  <div class="row">
		  	<div class="col-md-12">
		  		<form class="form-horizontal" action="" method="post">
				  <div class="form-group">
				    <label for="name" class="col-sm-1 control-label">姓名</label>
				    <div class="col-sm-11">
				      <input type="text" class="form-control" id="name" name="name" placeholder="name">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="tel" class="col-sm-1 control-label">联系方式</label>
				    <div class="col-sm-11">
				      <input type="text" class="form-control" id="tel" name="tel" placeholder="telphone">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="content" class="col-sm-1 control-label">留言内容</label>
				    <div class="col-sm-11">
				      <textarea name="content" id="content" class="form-control" rows="10"></textarea>
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <div class="col-sm-offset-1 col-sm-11">
				      <button type="submit" name="submit" class="btn btn-primary form-control">发表留言</button>
				    </div>
				  </div>
				</form>
		  	</div>
		  </div>
</div>
</body>
</html>