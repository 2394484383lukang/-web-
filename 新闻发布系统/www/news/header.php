<?php
include './backend/config.php';
include './backend/inc.php';
include './backend/printMsg.php';
connect($host,$user,$pwd,$db,$code);
$sqlC = "select * from config";
$c = fetchOne($sqlC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $c["name"]?>首页</title>
	<meta name="keyword" content="<?php echo $c["keyword"]?>">
	<meta name="description" content="<?php echo $c["dscp"]?>">
	<link rel="stylesheet" href="lib/css/bootstrap.min.css">
	<script src="lib/js/jquery.js"></script>
	<script src="lib/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/common.css">
</head>
<body>
<div class="container">
		<!-- header -->
	  <div class="row">
	    	<div class="col-md-6">
				<h1>新闻发布系统 </h1>
	    	</div>
  			<div class="col-md-6">
				<form class="navbar-form navbar-right" role="search" method="post" action="search.php">
				  <div class="form-group">
				    <input type="text" name="search" class="form-control" placeholder="请输入搜索的关键字">
				  </div>
				  <button type="submit" class="btn btn-default">搜索</button>
				</form>
  			</div>
	  </div>
	  <!-- nav-->
	  <div class="row">
	  	<nav class="navbar navbar-inverse">
	  		<ul>
	  			<li><a href="index.php">首页</a></li>
	  			<?php 
	  				$sqlM = "select * from menu";
	  				$resultM = fetchAll($sqlM);
	  				foreach($resultM as $m){
	  			?>
	  			<li><a href="menu.php?id=<?php echo $m["id"]?>"><?php echo $m["name"]?></a></li>
	  			<?php
	  			}
	  			?>
	  		</ul>
	  	</nav>
	  </div>
	  <!-- banner -->
	  <div class="row">
	  	<img src="img/2.jpg" alt="2" class="img-thumbnail">
	  </div>