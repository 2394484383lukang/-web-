<?php
session_start();
if(!isset($_SESSION['name'])){
	header("location:error.html");
}
$varid = intval($_GET['id']);
include 'inc.php';
$sql = "select * from course where id = $varid";
$result = @mysqli_query($link,$sql) or exit("query error!");
$row = mysqli_fetch_assoc($result);
//保存修改后的数据
if(isset($_POST['save'])){
	$id = $_POST['id'];
	$cname = $_POST['cname'];
	$ctime = $_POST['ctime'];
	$sql = "update course set cname='$cname',ctime=$ctime where id=$id";
	$updateRes = @mysqli_query($link,$sql) or exit("update error!");
	if($updateRes){
		echo "<script>alert('修改数据成功!');window.location='read.php';</script>";
	}
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改数据</title>
	<script>
	function check(){
		var c = document.getElementById("cname").value;
		if(c == ""){
			alert("课程名称必须填写!");
			return false;
		}
		return true;
	}
	</script>
</head>
<body>
	<form action="" method="post" onsubmit="return check();">
		<table width="40%" height="120" align="center" style="border:1px solid #999;">
			<tr>
				<td align="center">课程名称
					<input type="hidden" name="id" value="<?php echo $row['id']?>">
				</td>
				<td><input type="text" name="cname" id="cname" value="<?php echo $row['cname']; ?>"></td>
			</tr>
			<tr>
				<td align="center">学习时间</td>
				<td>
					<select name="ctime" id="ctime">
						<?php
						for($i=1;$i<=6;$i++){
						?>
<option value="<?php echo $i ?>" <?php if($i==$row['ctime']) echo "selected"; ?> ><?php echo $i ?>个月</option>
						<?php	
						}
						?>
					</select>

				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="save" value="保存信息"></td>
			</tr>
		</table>

	</form>
</body>
</html>