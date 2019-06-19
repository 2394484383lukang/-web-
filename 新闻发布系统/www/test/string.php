<?php
session_start();
echo $_SESSION['code'];
//trim  strlen  strtolower  strtoupper  md5   explode
//substr  mb_substr
//str_replace
//parse_url


/*$name = "       admin      ";
echo trim($name);*/

/*$name = "/admin/";
echo trim($name,'/');*/

/*$name = "TOM";
echo strtolower($name);
*/

//md5 字符加密,最终加密的字符串长度为32

/*$pwd = "w123_T*8yc_";
echo md5($pwd);*/

/*$filename = "img_".md5("666").".jpg";
echo $filename;*/


//explode  将字符串拆分成一维数组

/*$filename ="w1.b1.jpg";
$fn = explode(".", $filename);


$ext = $fn[count($fn)-1];
echo $ext;*/

/*$intro = "我们的天空是黑色的...";
$res =  substr($intro,4);
echo $res;*/


/*$name = "admin国民党888";
$res = str_replace("国民党", "", $name);
echo $res;
*/

/*$url = "http://www.china.com/test/index.php?id=12";

$arr_url = parse_url($url);

print_r($arr_url['path']);
*/











