<?php include 'verify.php' ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑菜单</title>
	<link rel="stylesheet" href="../lib/css/bootstrap.min.css">
	<script src="../lib/js/bootstrap.min.js"></script>
	<script src="../lib/js/check.js"></script>
</head>
<body style="padding:5px;background-color:#369;">
	<ol class="breadcrumb" style="background-color:#369;border:1px solid #fff;">
	  <li><a href="#" style="color:#fff">网站后台</a></li>
	  <li><a href="#" style="color:#fff">菜单管理</a></li>
	  <li class="active" style="color:#ddd">编辑菜单</li>
	</ol>


	<div class="panel panel-default">
	  <div class="panel-heading" style="background-color:#369;color:#fff;">
	    <h3 class="panel-title">编辑菜单信息:</h3>
	  </div>
	  <div class="panel-body">
	  	
		<table class="table table-bordered table-hover">
			<tr style="font-weight:bold;">
				<td>菜单名称</td>
				<td>菜单描述</td>
				<td>添加时间</td>
				<td>菜单操作</td>
			</tr>
			<?php
			include 'config.php';
			include 'inc.php';
			connect($host,$user,$pwd,$db,$code);
			$sql = "select * from menu";
			$rows = fetchAll($sql);
			foreach($rows  as $row){
			?>
			<tr>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['dscp'];?></td>
				<td><?php echo date("Y-m-d H:i:s",$row['mdate']);?></td>
				<td><button class="btn btn-primary btn-xs" onclick="window.location='medit.php?id=<?php echo $row['id'];?>'">修改</button> <button class="btn btn-primary btn-xs" onclick="del(<?php echo $row['id'];?>)">删除</button></td>
			</tr>
			<?php
			}
			?>
		</table>

	  </div>
	</div>


	
</body>
</html>