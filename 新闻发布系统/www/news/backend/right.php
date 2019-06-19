<?php include 'verify.php' ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>初始信息</title>
	<link rel="stylesheet" href="../lib/css/bootstrap.min.css">
	<script src="../lib/js/bootstrap.min.js"></script>
</head>
<body style="padding:5px;background-color:#369;">
	<ol class="breadcrumb" style="background-color:#369;border:1px solid #fff;">
	  <li><a href="#" style="color:#fff">网站后台</a></li>
	  <li class="active" style="color:#ddd">后台管理</li>
	</ol>


	<div class="panel panel-default">
	  <div class="panel-heading" style="background-color:#369;color:#fff;">
	    <h3 class="panel-title">服务器参数显示:</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-hover table-bordered">
	    	<tr>
	    		<td>服务器名:</td>
	    		<td><?php echo $_SERVER['SERVER_NAME']?></td>
	    		<td>端口:</td>
	    		<td><?php echo $_SERVER['SERVER_PORT']?></td>
	    		<td>根目录:</td>
	    		<td><?php echo $_SERVER['DOCUMENT_ROOT']?></td>
	    	</tr>
	    	<tr>
	    		<td>客户端地址:</td>
	    		<td><?php echo $_SERVER['REMOTE_ADDR']?></td>
	    		<td>服务器软件:</td>
	    		<td><?php echo $_SERVER['SERVER_SOFTWARE']?></td>
	    		<td>协议:</td>
	    		<td><?php echo $_SERVER['SERVER_PROTOCOL']?></td>
	    	</tr>
	    	<tr>
	    		<td>当前文件:</td>
	    		<td><?php echo $_SERVER['PHP_SELF']?></td>
	    		<td>浏览器:</td>
	    		<td><?php echo substr($_SERVER['HTTP_USER_AGENT'],0,11)?></td>
	    		<td>当前时间:</td>
	    		<td><?php echo date("Y-m-d H:i:s",$_SERVER['REQUEST_TIME'])?></td>
	    	</tr>
		</table>
	  </div>
	</div>


	<div class="panel panel-default">
	  <div class="panel-heading" style="background-color:#369;color:#fff;">
	    <h3 class="panel-title">系统参数显示:</h3>
	  </div>
	  <div class="panel-body">
	  	<?php
	  		include 'config.php';
	  		include 'inc.php';

	  		connect($host,$user,$pwd,$db,$code);
	  		$sql = "select * from config";
	  		$row = fetchOne($sql);
	  	?>
	    <table class="table table-hover table-bordered">
	    	<tr>
	    		<td>系统名称:</td>
	    		<td><?php echo $row['name'];?></td>
	    		<td>关键字:</td>
	    		<td title="<?php echo $row['keyword'];?>"><?php echo mb_substr($row['keyword'],0,15)."...";?></td>
	    		<td>描述:</td>
	    		<td title="<?php echo $row['dscp'];?>"><?php echo mb_substr($row['dscp'],0,20)."...";?></td>
	    	</tr>
	    	<tr>
	    		<td>地址:</td>
	    		<td><?php echo $row['addr'];?></td>
	    		<td>联系电话:</td>
	    		<td><?php echo $row['tel'];?></td>
	    		<td>版权信息:</td>
	    		<td><?php echo $row['copy'];?></td>
	    	</tr>
	    	<tr>
	    		<td>备案号:</td>
	    		<td><?php echo $row['number'];?></td>
	    		<td>设计者:</td>
	    		<td><?php echo $row['author'];?></td>
	    		<td></td>
	    		<td></td>
	    	</tr>
		</table>
	  </div>
	</div>
</body>
</html>