<?php
//文件包含
session_start();
if(!isset($_SESSION['name'])){
	header("location:error.html");
}
include 'inc.php';
//定义每一页显示的记录数
$pageSize = 10;
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
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>读取数据</title>
	<style>
	tr>td,th{text-align:center;border-bottom:1px solid #666;border-right:1px solid #666;border-collapse: collapse;}
	</style>
	<script>
	function cfm(varid){
		if(confirm("确定删除该条数据?")){
			window.location="del.php?id="+varid;
		}else{
			return false;
		}
	}
	</script>
</head>
<body>
	<h2 align="center">课程信息表</h2>
	<?php
	$sql = "select * from course";
	$result = @mysqli_query($link,$sql) or exit("query error!");
	//获取总记录数
	$totalNum = mysqli_num_rows($result);
	//总页数 = 总记录数/每一页记录数
	$pageTotal = ceil($totalNum/$pageSize);
	//计算起始位置
	//$pageTotal = 3
	//$page = 4
	if($page > $pageTotal){
		$page = $pageTotal;
	}
	$start = ($page-1)*$pageSize;

	$pageSQL = "select * from course limit $start,$pageSize";

	$pageRes = @mysqli_query($link,$pageSQL) or exit("page query error!");
	?>
	<div style="width:70%;margin:30px auto;">
		<form action="search_result.php" method="get" style="text-align:center;">
			<input type="text" name="cname" placeholder="请输入内容">
			<input type="submit" name="search" value="搜索">
		</form>
		<input type="button" value="添加数据" onclick="window.location='add.php';">
		<div style="display:inline-block;float:right;">用户:<?php if(isset($_SESSION['name'])) echo $_SESSION['name']?>
			<button type="button" onclick="window.location='out.php'">退出</button>
		</div>
	</div>
	<table width="70%" align="center" cellspacing="0" style="border:1px solid #666;">
		<tr>
			<th>编号</th>
			<th>课程名称</th>
			<th>学习时间</th>
			<th>操作</th>
		</tr>
		<?php
		while($row = mysqli_fetch_assoc($pageRes)){
		?>
		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['cname'] ?></td>
			<td><?php echo $row['ctime'] ?>个月</td>
			<td><input type="button" value="修改" onclick="window.location='edit.php?id=<?php echo $row['id']?>'" >&nbsp;<input type="button" value="删除" onclick="cfm(<?php echo $row['id']?>)"></td>
		</tr>
		<?php
		}
		?>
	</table>
	<div style="width:70%;margin:10px auto;text-align:center;">
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
	</div>
</body>
</html>
