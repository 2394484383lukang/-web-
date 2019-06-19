<?php
header('content-type:text/html;charset="utf-8"');
$name=$_GET['name'];
if($name)
{
    echo "abc";
}else{
    echo "错误";
}