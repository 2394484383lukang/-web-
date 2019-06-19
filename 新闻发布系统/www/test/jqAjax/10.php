<?php
header('content-type:text/html;charset="utf-8"');
$data=$_GET['name'];
if($data=='lc')
{
    echo "000";
}else{
    echo "111";
}