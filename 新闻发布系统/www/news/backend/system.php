<?php include 'verify.php' ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>系统设置</title>
	<link rel="stylesheet" href="../lib/css/bootstrap.min.css">
	<script src="../lib/js/bootstrap.min.js"></script>
</head>
<body style="padding:5px;background-color:#369;">
	<ol class="breadcrumb" style="background-color:#369;border:1px solid #fff;">
	  <li><a href="#" style="color:#fff">网站后台</a></li>
	  <li><a href="#" style="color:#fff">系统管理</a></li>
	  <li class="active" style="color:#ddd">系统设置</li>
	</ol>


	<div class="panel panel-default">
	  <div class="panel-heading" style="background-color:#369;color:#fff;">
	    <h3 class="panel-title">系统参数编辑:</h3>
	  </div>
	  <div class="panel-body">
	  	<?php
	  		include 'config.php';
	  		include 'inc.php';

	  		connect($host,$user,$pwd,$db,$code);
	  		$sql = "select * from config";
	  		$row = fetchOne($sql);
	  	?>
		<form method="post" action="sysrec.php">
		  <div class="form-group">
		    <label for="name">系统名称</label>
		    <input type="text" class="form-control" id="name" name="name" placeholder="请输入系统名称" value="<?php echo $row['name']?>">
		  </div>

		  <div class="form-group">
		    <label for="keyword">关键字</label>
		    <input type="text" class="form-control" id="keyword" name="keyword" placeholder="请输入关键字" value="<?php echo $row['keyword']?>">
		  </div>

		  <div class="form-group">
		    <label for="dscp">描述</label>
		    <textarea class="form-control" rows="5" id="dscp" name="dscp" placeholder="请输入系统描述"><?php echo $row['dscp'] ?></textarea>
		  </div>

		  <div class="form-group">
		    <label for="addr">地址</label>
		    <input type="text" class="form-control" id="addr" name="addr" placeholder="请输入地址信息" value="<?php echo $row['addr']?>">
		  </div>

		  <div class="form-group">
		    <label for="tel">联系电话</label>
		    <input type="text" class="form-control" id="tel" name="tel" placeholder="请输入联系电话" value="<?php echo $row['tel']?>">
		  </div>

		  <div class="form-group">
		    <label for="copy">版权信息</label>
		    <input type="text" class="form-control" id="copy" name="copy" placeholder="请输入版权信息" value="<?php echo $row['copy']?>">
		  </div>

		  <div class="form-group">
		    <label for="number">备案信息</label>
		    <input type="text" class="form-control" id="number" name="number" placeholder="请输入备案信息" value="<?php echo $row['number']?>">
		  </div>

		  <div class="form-group">
		    <label for="author">设计者</label>
		    <input type="text" class="form-control" id="author" name="author" placeholder="请输入设计者" value="<?php echo $row['author']?>">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">修改信息</button>
		</form>

	  </div>
	</div>


	
</body>
</html>