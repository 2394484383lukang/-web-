<?php
header('content-type:text/html;charset="utf-8"');
$fn=$_GET["callback"];
$arr=array("name"=>"lc","age"=>30,"sex"=>"man");
echo $fn."(".json_encode($arr).")";


/* $arr=array("name"=>"lc","age"=>30,"sex"=>"man");
echo "web(".json_encode($arr).")"; */