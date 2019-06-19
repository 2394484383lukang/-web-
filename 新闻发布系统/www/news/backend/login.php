<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录页面</title>
	<link rel="stylesheet" href="../lib/css/bootstrap.min.css">
	<script src="../lib/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="panel panel-primary" style="width:400px;margin:150px auto;">
	  <div class="panel-heading">
	    <h3 class="panel-title">用户登录</h3>
	  </div>
	  <div class="panel-body">
		<form class="form-horizontal" method="post" action="rec.php">
		  <div class="form-group">
		    <label for="username" class="col-sm-2 control-label">用户</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="username" name="username" placeholder="用户名">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="pwd" class="col-sm-2 control-label">密码</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="密码">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary form-control">登录</button>
		    </div>
		  </div>
		</form>
	  </div>
	</div>	
</body>
</html>