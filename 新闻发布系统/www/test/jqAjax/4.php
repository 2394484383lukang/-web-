<?php
$json1=array('name'=>'lc','age'=>30,'sex'=>'man');

$json=array(
    array('name'=>'lc','age'=>30,'sex'=>'man'),
    array('name'=>'zs','age'=>20,'sex'=>'woman'),
    array('name'=>'ls','age'=>40,'sex'=>'man')
);

echo json_encode($json);