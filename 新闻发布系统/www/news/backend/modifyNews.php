<?php include 'verify.php' ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑新闻</title>
	<link rel="stylesheet" href="../lib/css/bootstrap.min.css">
	<script src="../lib/js/bootstrap.min.js"></script>
	<script src="../lib/js/check.js"></script>
</head>
<body style="padding:5px;background-color:#369;">
	<ol class="breadcrumb" style="background-color:#369;border:1px solid #fff;">
	  <li><a href="#" style="color:#fff">网站后台</a></li>
	  <li><a href="#" style="color:#fff">新闻管理</a></li>
	  <li class="active" style="color:#ddd">编辑新闻</li>
	</ol>
	<?php
	include 'config.php';
	include 'inc.php';
	connect($host,$user,$pwd,$db,$code);
	//定义每一页显示的记录数
	$pageSize = 17;
	//设置默认的第一页
	if(isset($_GET['page'])){
		if($_GET['page'] < 1){
			$page = 1;
		}else{
			$page = intval($_GET['page']);
		}
	}else{
		//默认的第一次访问
		$page = 1;
	}

	$sql = "select * from content";
	//获取总记录数
	$totalNum = returnCount($sql);
	//总页数 = 总记录数/每一页记录数
	$pageTotal = ceil($totalNum/$pageSize);
	//计算起始位置
	//$pageTotal = 3
	//$page = 4
	if($page > $pageTotal){
		$page = $pageTotal;
	}
	$start = ($page-1)*$pageSize;

	$pageSQL = "select * from content order by id desc limit $start,$pageSize";

	$pageRes = fetchAll($pageSQL);
	?>

	<div class="panel panel-default">
	  <div class="panel-heading" style="background-color:#369;color:#fff;">
	    <h3 class="panel-title">编辑新闻信息:</h3>
	  </div>
	  <div class="panel-body">
	  	
		<table class="table table-bordered table-hover table-condensed">
			<tr style="font-weight:bold;">
				<td>新闻编号</td>
				<td>新闻标题</td>
				<td>新闻来源</td>
				<td>新闻分类</td>
				<td>发布时间</td>
				<td>新闻操作</td>
			</tr>
			<?php
			foreach($pageRes as $row){
			?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['title'];?></td>
				<td><?php echo $row['source'];?></td>
				<td><?php 
						$mid = $row['mid'];
						$sql = "select name from menu where id = $mid";
						$name = fetchOne($sql);
						echo $name["name"];

				?></td>
				<td><?php echo date("Y-m-d H:i:s",$row['cdate']);?></td>
				<td><button class="btn btn-primary btn-xs" onclick="window.location='nedit.php?id=<?php echo $row['id'];?>'">修改</button> <button class="btn btn-primary btn-xs" onclick="del(<?php echo $row['id'];?>,2)">删除</button></td>
			</tr>
			<?php
			}
			?>
			<tr>
				<td colspan="6" align="center">
					<?php
					if($totalNum >$pageSize){
						echo "<a href='?page=1'>首页</a>&nbsp;";
						if($page <= 1){
							echo "上一页&nbsp;";
						}else{
							echo "<a href=?page=".($page-1).">上一页</a>&nbsp;";
						}
						

						if($page < $pageTotal){
							echo "<a href=?page=".($page+1).">下一页</a>&nbsp;";
						}else{
							echo "下一页&nbsp;";
						}
						
						echo "<a href=?page=".$pageTotal.">末页</a>";
					}
					?>
				</td>
			</tr>
		</table>

	  </div>
	</div>


	
</body>
</html>