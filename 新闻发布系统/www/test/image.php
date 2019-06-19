<?php
/*
*author:wzs
*date:2016年6月8日
*/
session_start();
header("content-type:text/html;charset=utf-8");
$width=100;
$height=30;
$img=@imagecreatetruecolor($width, $height) or die('创建画布错误!');
$bg=imagecolorallocate($img, 255, 0, 0); 
$fg=imagecolorallocate($img, 255, 255, 255);
//随机生成内容
$str=null;
/*  for($i=0;$i<6;$i++){
	$str.=dechex(mt_rand(0, 15));
}   */

$arr1=range(0,9);
$arr2=range('a','z');
$arr=array_merge($arr1,$arr2);
shuffle($arr);
for($i=0;$i<4;$i++){
	$str.=$arr[mt_rand(0, count($arr)-1)];
}
$_SESSION['verify']=$str;
//产生中文字符 
/* $string="告 诉 方 公 司 的 无 情 人 去 玩 儿 行 政 村 和 对 更 好 我 欧 尼";
$arr=explode(" ", $string);
shuffle($arr);
for($i=0;$i<4;$i++){
	$str.=$arr[mt_rand(0, count($arr)-1)];
}
$_SESSION['verify']=$str; */
//产生干扰元素
for($d=1;$d<=200;$d++){
	$color=imagecolorallocate($img, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
	imagesetpixel($img, mt_rand(0,100), mt_rand(0,30), $color);
}

for($x=1;$x<=4;$x++){
	$color=imagecolorallocate($img, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
	imageline($img, 0, mt_rand(0,30), 100, mt_rand(0,30), $color);
}
//产生字符间距
 for($j=0;$j<strlen($str);$j++){
	$font=mt_rand(3,5);
	$x=mt_rand(5,10)+$width*$j/4;
	$y=mt_rand(3, $height/3);
	$rnd=substr($str, $j,1);
	imagestring($img, $font, $x, $y, $rnd, $fg);
} 

/* for($j=0;$j<strlen($str);$j++){
	//$font=mt_rand(3,5);
	$x=mt_rand(5,10)+$width*$j/4;
	$y=mt_rand(14, $height-3);
	$rnd=mb_substr($str, $j,1,'utf-8');
	$fontfile="SIMHEI.TTF";
	imagettftext($img, 14, mt_rand(3,9), $x, $y, $fg, $fontfile, $rnd);
} */

header("content-type:image/jpeg");
imagejpeg($img);












