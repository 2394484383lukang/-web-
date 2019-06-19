<?php 
include 'header.php';
?>
	  <!-- 面包屑导航 -->
				<ol class="breadcrumb" style="margin:15px 0px">
				  <li><a href="index.php">首页</a></li>
				  <li>
				  	<?php
				  	$id = $_GET["id"];
				  	$sqlMname = "select name from menu where id=$id";
				  	$resultName = fetchOne($sqlMname);
				  	echo $resultName["name"];
				  	?>
				  </li>
				  
				</ol>
	  
	  <!-- 详细新闻内容 -->
	  	<div class="row" style="margin-top:15px">
			<div class="col-md-4">
				<div class="panel panel-info">
				  <div class="panel-heading">
				    <h3 class="panel-title">热点新闻</h3>
				  </div>
				  <div class="panel-body detail">
				    <ul>
				    	<?php
				    	$sqlH = "select * from content order by hit desc limit 10";
				    	$resultH = fetchAll($sqlH);
				    	foreach($resultH as $cj){
			    	?>
			    	<li><a href="detail.php?id=<?php echo $cj["id"]?>&mid=<?php echo $cj["mid"]?>"><?php echo mb_substr($cj["title"],0,20);?></a> <span class="badge" style="background-color:orange;"><?php echo $cj["hit"]?></span></li>
			    	<?php
			    	}
			    	?>
						
				    </ul>
				  </div>
				</div>
			</div>
  			<div class="col-md-8">
				<div class="panel panel-info">
					<div class="panel-heading"><?php echo $resultName["name"];?></div>
					  <div class="panel-body">
					    <ul >
					    	<?php 
					    		$sqlContent = "select * from content where mid = $id order by id desc";
					    		$resultContent = fetchAll($sqlContent);
					    		if($resultContent != array()){
					    		foreach($resultContent as $con){
					    	?>
					    	<li class="col-md-12"><a href="detail.php?id=<?php echo $con["id"]?>&mid=<?php echo $con["mid"]?>"><?php echo $con["title"]?></a></li>
					    	<?php
					    	}
					    }else{
					    	echo "该分类暂无信息显示!";
					    }
					    	?>
					    </ul>
					  </div>

				</div>
  			</div>
	  	</div>
		<!-- footer -->
		<?php
include 'footer.php';
?>