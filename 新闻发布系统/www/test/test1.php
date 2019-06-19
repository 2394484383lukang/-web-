<?php

//boolean 逻辑类型  true(1)  false(0)
/*$age = "a";
if($age){
	echo "true";
}else{
	echo "false";
}*/

//integer 整形 
/*$a = 100;
$b = 0x123;
$c = 012;*/
//dechex()  将10进制转变成16进制
//echo dechex($a);

//简单的验证码
//mt_rand(start,end)  随机从start到end之间的数字 mt_rand(1,100)
/*$rnd_str = null;
for($i=0;$i<4;$i++){
	$rnd_str .= dechex(mt_rand(0,15));
}
echo $rnd_str;*/

//float  double 浮点型
/*$price = 12.88;
echo gettype($price);
*/
//string 字符串
/*$name1 = "abc";
$name2 = 'def';*/
//""  '' 区别
/*echo "hello,$name1<br>";
echo 'hello,$name1<br>';

echo 'hello world!';*/





//数组
/*$user = array("tom",25,"13576889976");
print_r($user[1]);*///索引数组

/*$user = array("name"=>"tom","age"=>25,"tel"=>"13576889976");
print_r($user["name"]);//关联数组

if(is_array($user)){
	echo "true";
}else{
	echo "false";
}
*/

//数据类型转换

/*$age = 12;
$age1 = (string)$age;
echo gettype($age1);*/

/*$number = "abc100";
echo intval($number);*/

/*echo __FILE__;//输出当前文件的路径
echo "<br>";
echo __LINE__;//输出当前光标的位置
echo "<br>";
echo PHP_VERSION;//输出当前php的版本
echo "<br>";
echo PHP_OS;//输出服务器的操作系统的名称*/

//变量
//empty(是否为空)   isset(是否定义了变量)   unset (删除变量)

/*$age = "12";
if(empty($age)){
	echo "empty";
}else{
	echo "no empty";
}*/

/*if(isset($name)){
	echo $name;
}else{
	$name = "t1";
	echo $name;
}*/

$name = "tom";
echo $name;
unset($name);
echo $name;






