<?php
$link = @mysqli_connect("localhost","root","","msg");
if(!$link){
	exit("connect error!");
}
mysqli_set_charset($link,"utf8");
/*$sql = "select * from message";
$result = mysqli_query($link,$sql);
while($row = mysqli_fetch_assoc($result)){
	echo $row["name"]."===".$row["content"]."<br>";
}*/

$sql = "insert into message(name,content) values('马先生','马先生叫牛先生和候先生去朱先生家去看杨先生烧蚂蚁上树')";
$result = mysqli_query($link,$sql);
if($result && mysqli_affected_rows($link)){
	echo "success!";
}

//面向过程的软件开发

//过程 = 函数

面向对象
smarty 模板引擎
正则表达式
dbo

mysql 


thinkphp(国产)
laravel(国外)

mongodb+php(非关系型数据库)
memcache(缓存系统)
redis(缓存系统)

linux(centos)


(html+css+js+jquery+bt+vue+angular+node+ps)
