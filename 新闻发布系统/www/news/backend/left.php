<?php include 'verify.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>菜单</title>
	<script src="../lib/js/jquery.js"></script>
	<script>
		$(function(){
			$("ul:gt(0)").hide();
			$(".menu>h3").click(function(){
				$(this).next().toggle();		
			});			
		});
	</script>
	<style>
		h3,ul,li{
			font-size: 14px;
			margin:0px;
			padding:0px;
		}
		body{
			margin:0px;
			padding:3px;
			background-color: #369;
		}
		.menu{
			width:150px;
			height:auto;
			
		}
		h3{
			width:150px;
			line-height: 30px;
			text-indent:30px;
			background-color: #369;
			color:#fff;
			border:1px solid #ccc;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px;
		}
		h3>span,ul li span{
			font-weight: bold;
			margin-right:5px;
		}
		
		ul{
			list-style: none;
		}
		ul li{
			width:148px;
			line-height: 25px;
			background: #eee;
			border-top:none;
			text-align: center;
			padding:3px;
			border-bottom: 1px solid #ccc;
		}
		a{
			text-decoration: none;
			color:#000;
		}

	</style>
</head>
<body>
	<div class="menu">
		<h3><span>+</span>新闻管理 </h3>
		<ul>
			<li><span>-</span><a href="news.php" target="right">添加新闻</a></li>
			<li><span>-</span><a href="modifyNews.php" target="right">编辑新闻</a></li>
			<li><span>-</span><a href="special.php" target="right">专题新闻</a></li>
		</ul>
		<h3><span>+</span>菜单管理 </h3>
		<ul>
			<li><span>-</span><a href="menu.php" target="right">添加菜单</a></li>
			<li><span>-</span><a href="modifyMenu.php" target="right">编辑菜单</a></li>
		</ul>
		<h3><span>+</span>评论管理 </h3>
		<ul>
			<li><span>-</span><a href="msg.php" target="right">评论设置</a></li>
		</ul>
		<h3><span>+</span>系统管理</h3>
		<ul>
			<li><span>-</span><a href="system.php" target="right">系统设置</a></li>
			<li><span>-</span><a href="user.php" target="right">用户编辑</a></li>
			<li><span>-</span><a href="exit.php" target="_parent">退出管理</a></li>
		</ul>
	</div>
</body>
</html>