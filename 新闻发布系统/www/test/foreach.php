<?php
$arr = array("name"=>"tom","age"=>25,"female"=>'man');
/*for($i=0;$i<3;$i++){
	echo $arr[$i]."<br>";
}*/
foreach($arr as $k=>$v){
	echo $k."=>".$v."<br>";
}