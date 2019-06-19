<?php

function checkData($param){
	$param = trim($param);
	if(strlen($param)>6 && strlen($param)<18){
		return 1;
	}else{
		return 0;
	}
}