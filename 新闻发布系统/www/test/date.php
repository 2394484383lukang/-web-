<?php
//date_default_timezone_set("ASIA/shanghai");
//echo time();
/*$end = mktime(0,0,0,6,6,2019);
$today = time();
$res = ceil(($end-$today)/86400);
echo "还有".$res."天";*/

//echo date("Y年m月d日 H时i分s秒 星期w a",time());
/*for($i=1;$i<=10;$i++){
	echo mt_rand(1,100)."<br>";
}*/
$filename = md5(mt_rand(1,1000000000)).".html";
echo $filename;