<?php
session_start();
$img = imagecreatetruecolor(100,50);
$bg = imagecolorallocate($img,0,0,0);
$fg = imagecolorallocate($img,255,255,255);

/*$rnd_str = null;
for($i=0;$i<4;$i++){
	$rnd_str .= dechex(mt_rand(0,15));
}*/
//随机的 字符数16个
$arr1 = range(0,9);//产生一个0-9作为数组元素的 一维数组
//print_r($arr);
$arr2 = range('a','z');
//print_r($arr2);
$arr = array_merge($arr1,$arr2);//合并多个数组成一个数组
//print_r($arr);
$rnd_str=null;
for($i=0;$i<4;$i++){
	$rnd_str.=$arr[mt_rand(0,count($arr)-1)];
}
//把随机字符加入到session中
$_SESSION['code'] = $rnd_str;
$fontfile = "tahomabd.ttf";
//imagestring($img,20,10,10,$rnd_str,$fg);



//画点操作
for($d=0;$d<300;$d++){
	$color  = imagecolorallocate($img, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
	imagesetpixel($img, mt_rand(1,100), mt_rand(1,50), $color);
}
//画线操作
for($x=0;$x<5;$x++){
	$color  = imagecolorallocate($img, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
	imageline($img, 0, mt_rand(0,50), 100, mt_rand(0,50), $color);
}

for($j=0;$j<strlen($rnd_str);$j++){
	imagettftext($img, 20, mt_rand(0,20), $j*20+10, mt_rand(25,45), $fg, $fontfile, $rnd_str[$j]);
}



header("content-type:image/jpeg");
imagejpeg($img);