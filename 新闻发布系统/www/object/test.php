<?php

$im = imagecreatetruecolor(100,100);
$bg = imagecolorallocate($im, 0,0,0);
$fg = imagecolorallocate($im ,255,255,255);
imagestring($im,20,10,5,"string",$fg);
header("content-type:image/jpeg");
imagejpeg($im);