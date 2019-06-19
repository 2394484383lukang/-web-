<?php
//127.0.0.1  =  localhost
$link = @mysqli_connect("127.0.0.1","root","","test");
if(!$link){
	exit("ERROR:".mysqli_connect_error());
}

$sql = "select * from course";
$result = mysqli_query($link,$sql);
//var_dump($result);
/*while($row = mysqli_fetch_row($result)){
//row返回的是一个一维索引数组
//print_r($row);
	echo $row[0]."---".$row[1]."<br>";

}*/
/*while($row = mysqli_fetch_assoc($result)){
//assoc返回的是一个关联数组
//print_r($row);
		echo $row['id']."---".$row['cname']."<br>";

	}*/
$total = mysqli_num_rows($result);
echo "共有".$total."条记录!<br>";
while($row = mysqli_fetch_array($result)){
//返回有索引数组和关联数组
//print_r($row);
	echo $row[0]."---".$row['cname']."<br>";

}
mysqli_free_result($result);
mysqli_close($link);