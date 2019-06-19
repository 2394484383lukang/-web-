<?php include 'verify.php' ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>菜单添加</title>
	<link rel="stylesheet" href="../lib/css/bootstrap.min.css">
	<script src="../lib/js/bootstrap.min.js"></script>
	
</head>
<body style="padding:5px;background-color:#369;">
	<ol class="breadcrumb" style="background-color:#369;border:1px solid #fff;">
	  <li><a href="#" style="color:#fff">网站后台</a></li>
	  <li><a href="#" style="color:#fff">菜单管理</a></li>
	  <li class="active" style="color:#ddd">添加菜单</li>
	</ol>


	<div class="panel panel-default">
	  <div class="panel-heading" style="background-color:#369;color:#fff;">
	    <h3 class="panel-title">菜单信息添加:</h3>
	  </div>
	  <div class="panel-body">
	  	
		<form method="post" action="mrec.php">
		  <div class="form-group">
		    <label for="name">菜单名称</label>
		    <input type="text" class="form-control" id="name" name="name" placeholder="请输入菜单名称">
		  </div>

		  <div class="form-group">
		    <label for="dscp">菜单描述</label>
		    <input type="text" class="form-control" id="dscp" name="dscp" placeholder="请输入菜单描述">
		  </div>

		  
		  <button type="submit" class="btn btn-primary">添加菜单</button>
		</form>

	  </div>
	</div>


	
</body>
</html>