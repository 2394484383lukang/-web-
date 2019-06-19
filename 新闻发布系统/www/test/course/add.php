<?php
session_start();
if(!isset($_SESSION['name'])){
	header("location:error.html");
}
if(isset($_POST['submit'])){
	include 'inc.php';
	$cname = $_POST['cname'];
	$ctime = $_POST['ctime'];
	//去重
	$query = "select cname from course where cname='$cname'";
	$queryRes = @mysqli_query($link,$query) or exit('query error!');
	if($queryRes && mysqli_num_rows($queryRes)>0){
		echo "<script>alert('该数据信息已经存在!')</script>";
	}else{
		$sql = "insert into course(cname,ctime) values('$cname',$ctime)";
		$result = @mysqli_query($link,$sql) or exit("insert error!");
		if($result && mysqli_insert_id($link)>0){
			header("location:read.php");
		}else{
			echo "<script>alert('添加失败!');</script>";
		}
	}

}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加数据</title>
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
				<td align="center">课程名称</td>
				<td><input type="text" name="cname" id="cname" ></td>
			</tr>
			<tr>
				<td align="center">学习时间</td>
				<td>
					<select name="ctime" id="ctime">
						<option value="1">一个月</option>
						<option value="2">二个月</option>
						<option value="3">三个月</option>
						<option value="4">四个月</option>
						<option value="5">五个月</option>
						<option value="6">六个月</option>
					</select>

				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="添加信息"></td>
			</tr>
		</table>

	</form>
</body>
</html>