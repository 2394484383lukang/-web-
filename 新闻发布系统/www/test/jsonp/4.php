<?php
header('content-type:text/html;charset="utf-8"');
$fn=$_GET["callback"];
$name=$_GET["name"];
$age=$_GET["age"];

$arr=array("name"=>"lc","age"=>30,"sex"=>"man");

$a=array("name"=>"a","age"=>20,"sex"=>"woman");

if($name=="zs"&&$age==50)
{
    echo $fn."(".json_encode($arr).")";
}else{
    echo $fn."(".json_encode($a).")";
}

