<?php
header('content-type:text/html;charset="utf-8"');
$arr=array("name"=>"lc","age"=>30,"sex"=>"man");
echo "cb(".json_encode($arr).")" ;