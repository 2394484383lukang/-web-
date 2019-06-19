<?php
if(isset($_GET['search'])){
	$cname = $_GET['cname'];
	include 'inc.php';
	$sql = "select * from course where cname like '%".$cname."%'";
	$result = @mysqli_query($link,$sql) or exit("search error!");
	$count = mysqli_num_rows($result);
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>查询数据显示</title>
	<style>
	tr>td,th{text-align:center;border-bottom:1px solid #666;border-right:1px solid #666;border-collapse: collapse;}
	</style>
	
</head>
<body>
	<h2 align="center">查询结果显示</h2>
	<div style="width:70%;margin:30px auto;">
		<form action="search_result.php" method="get" style="text-align:center;">
			<input type="text" name="cname" placeholder="请输入内容">
			<input type="submit" name="search" value="搜索">
		</form>
	</div>
	<?php
	if($count>0){
	?>
	<table width="70%" align="center" cellspacing="0" style="border:1px solid #666;">
		<tr>
			<th>编号</th>
			<th>课程名称</th>
			<th>学习时间</th>
			
		</tr>
		<?php
		while($row = mysqli_fetch_assoc($result)){
		?>
		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['cname'] ?></td>
			<td><?php echo $row['ctime'] ?>个月</td>
			
		</tr>
		<?php
		}
		?>
	</table>
	<?php
	}else{
	?>
	<div style="width:70%;margin:30px auto;color:#f00;font-weight:bold;text-align:center;">没有查到匹配的信息！</div>
	<?php
	}
	?>
	
</body>
</html>
