<?php

class Db{
	private $host;
	private $user;
	private $pwd;
	private $db;
	private $code;
	private $link;
	private $sql;
	private $result;
	public function __construct($h,$u,$p,$d,$c){
		$this->host = $h;
		$this->user = $u;
		$this->pwd = $p;
		$this->db = $d;
		$this->code = $c;
		$this->connect();
	}

	private function connect(){
		$this->link = mysqli_connect($this->host,$this->user,$this->pwd,$this->db);
		if(!$this->link){
			exit("connect error:".mysqli_connect_error());
		}
		mysqli_set_charset($this->link,$this->code);
	}

	//查询单条记录的方法
	//查询多条记录的方法
	//添加，删除，修改等方法
	public function add($sql){
		$this->sql = $sql;
		$this->result = mysqli_query($this->link,$this->sql);
		if($this->result && mysqli_affected_rows($this->link)){
			return 1;
		}else{
			return 0;
		}
	}
}


class msgSql extends Db{
	public function addSql($table,$field=array(),$value=array()){
		$sql = "insert into {$table} (";
		foreach($field as $f){
			$sql .= $f.",";
		}
		$sql = trim($sql,",");
		$sql .= ") values (";
		foreach($value as $v){
			$sql .= "'".$v."',";
		}
		$sql = trim($sql,",");
		$sql .= ")";
		

		$res = $this->add($sql);
		return $res;
	}
}
