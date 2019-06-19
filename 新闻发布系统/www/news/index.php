<?php 
include 'header.php';
?>
	  <!-- news -->
	  <div class="row" style="margin:10px 0px;">
	  	<div class="col-md-4" style="padding:0px;">
			<div class="panel panel-info" >
			  <div class="panel-heading">
			    <h3 class="panel-title"><span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>财经新闻</h3>
			  </div>
			  <div class="panel-body gs1">
			    <ul>
			    	<?php 
			    	$sqlC = "select * from content where mid = 1 order by id desc limit 10";
			    	$resultCj = fetchAll($sqlC);
			    	foreach($resultCj as $cj){
			    	?>
			    	<li><a href="detail.php?id=<?php echo $cj["id"]?>&mid=<?php echo $cj["mid"]?>"><?php echo mb_substr($cj["title"],0,22);?></a></li>
			    	<?php
			    	}
			    	?>
			    </ul>
			  </div>
			</div>
	  	</div>
  		<div class="col-md-4">
			<div class="panel panel-info">
			  <div class="panel-heading">
			    <h3 class="panel-title"><span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>军事新闻</h3>
			  </div>
			  <div class="panel-body gs1">
			    <ul>
			    	<?php 
			    	$sqlC = "select * from content where mid = 3 order by id desc limit 10";
			    	$resultCj = fetchAll($sqlC);
			    	foreach($resultCj as $cj){
			    	?>
			    	<li><a href="detail.php?id=<?php echo $cj["id"]?>&mid=<?php echo $cj["mid"]?>"><?php echo mb_substr($cj["title"],0,21);?></a></li>
			    	<?php
			    	}
			    	?>
			    </ul>
			  </div>
			</div>
  		</div>


  		<div class="col-md-4">
			<div class="panel panel-info" >
			  <div class="panel-heading" >
			    <h3 class="panel-title"><span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>体育新闻</h3>
			  </div>
			  <div class="panel-body gs1">
			    <ul>
			    	<?php 
			    	$sqlC = "select * from content where mid = 2 order by id desc limit 10";
			    	$resultCj = fetchAll($sqlC);
			    	foreach($resultCj as $cj){
			    	?>
			    	<li><a href="detail.php?id=<?php echo $cj["id"]?>&mid=<?php echo $cj["mid"]?>"><?php echo mb_substr($cj["title"],0,22);?></a></li>
			    	<?php
			    	}
			    	?>
			    </ul>
			  </div>
			</div>
  		</div>
  		</div>
  		<!-- 图片新闻 -->
	  	<div class="row" style="margin-top:15px;">
	  		<?php
	  		$sqlImg = "select * from content as c,img as i where c.id = i.tid order by id desc limit 3";
	  		$resultImg = fetchAll($sqlImg);
	  		foreach($resultImg as $img){
	  		?>
		  <div class="col-sm-6 col-md-4" >
		    <div class="thumbnail">
		      <img src="backend/<?php echo $img["path"]?>" alt="<?php echo $img['title']?>">
		      <div class="caption">
		   
		        <p><?php echo $img['title']?></p>
		        <p><a href="detail.php?id=<?php echo $img["id"]?>&mid=<?php echo $img["mid"]?>" class="btn btn-primary" role="button">详细</a> 
		      </div>
		    </div>
		  </div>
		  <?php
		  }
		  ?>
		</div>
		<!-- footer -->
<?php
include 'footer.php';
?>