<?php
define("PI",3.1415);
//客户端采用js   服务器端采用php
$r = $_POST['radius'];//$user['name']  $_POST[] 默认是一个(关联)数组
$area  = PI * pow($r,2);
echo "面积是".$area;

	

