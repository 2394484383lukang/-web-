<?php include 'verify.php' ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户信息编辑</title>
	<link rel="stylesheet" href="../lib/css/bootstrap.min.css">
	<script src="../lib/js/bootstrap.min.js"></script>
	<script src="../lib/js/check.js"></script>
</head>
<body style="padding:5px;background-color:#369;">
	<ol class="breadcrumb" style="background-color:#369;border:1px solid #fff;">
	  <li><a href="#" style="color:#fff">网站后台</a></li>
	  <li><a href="#" style="color:#fff">系统管理</a></li>
	  <li class="active" style="color:#ddd">用户信息编辑</li>
	</ol>


	<div class="panel panel-default">
	  <div class="panel-heading" style="background-color:#369;color:#fff;">
	    <h3 class="panel-title">用户信息编辑:</h3>
	  </div>
	  <div class="panel-body">
	  	
		<form method="post" action="userec.php" onsubmit = "return check();">
		  <div class="form-group">
		    <label for="username">用户名</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="请输入新的用户名">
		  </div>

		  <div class="form-group">
		    <label for="pwd">新密码</label>
		    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="请输入新密码">
		  </div>

		  <div class="form-group">
		    <label for="cfm">确认密码</label><span id="msgErr" style="color:#f00;display:inline-block;text-indent:20px;"></span>
		    <input type="password" class="form-control" id="cfm" name="cfm" placeholder="请再次输入新密码">
		  </div>

		  
		  <button type="submit" class="btn btn-primary">修改信息</button>
		</form>

	  </div>
	</div>


	
</body>
</html>