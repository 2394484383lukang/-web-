<?php
include 'inc.php';
include 'config.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td>编号</td>
			<td>名称</td>
			<td>地址</td>
			<td>时间</td>
		</tr>
		<?php
		connect($host,$user,$pwd,$db,$code);
		$sql = "select * from site";
		$rows = queryAll($sql);
		foreach($rows as $row){
		?>
		<tr>
			<td><?php echo $row['id']?></td>
			<td><?php echo $row['sitename']?></td>
			<td><?php echo $row['url']?></td>
			<td><?php echo date("Y-m-d H:i:s",$row['s_date'])?></td>
		</tr>

		<?php
		}
		?>
	</table>
</body>
</html>