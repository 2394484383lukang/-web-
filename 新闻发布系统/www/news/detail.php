<?php 
include 'header.php';
?>
	  <!-- 面包屑导航 -->
				<ol class="breadcrumb" style="margin:15px 0px">
				  <li><a href="index.php">首页</a></li>
				  <li>
				  	<?php
				  	$mid = $_GET["mid"];
				  	$sqlMname = "select name from menu where id=$mid";
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
				<div class="panel panel-default"> 
				  <div class="panel-body">
				  		<?php
				  		$id = $_GET["id"];
				  		$sqlH = "update content set hit=hit+1 where id=$id";
				  		modifyOrInsert($sqlH);
				  		$sqlNewsC = "select * from content as c,ncontent as n where c.id = n.cid and id = $id";
				  		$resultNewsC = fetchOne($sqlNewsC);
				  		?>
				  		<h2 align="center"><?php echo $resultNewsC["title"]?> </h2>
				  		<p align="center"><span>编辑:<?php echo $resultNewsC["source"]?></span> <span>时间:<?php echo date("Y-m-d H:i:s",$resultNewsC["cdate"])?></span><span>查看次数:<?php echo $resultNewsC["hit"]?></span></p>
				  		<?php echo $resultNewsC["content"]?>
				  </div>
				</div>
				<?php
				if(isset($_POST["submit"])){
					$fid = $_POST["fid"];
					$username = $_POST["username"];
					$content = $_POST["content"];
					$cdate = time();
					$sqlM = "insert into msg(username,content,fid,cdate) values('$username','$content',$fid,$cdate)";
					$result = modifyOrInsert($sqlM);
					if($result){
						printText("发表评论完成!","detail.php?id=$id&mid=$mid");
					}
				}
				?>
			<!-- 发表评论start-->
  			<div class="panel panel-info">
			  <div class="panel-heading">发表评论</div>
			  <div class="panel-body">
			   <!-- 表单-->
			   <form class="form-horizontal" method="post" action="">
				  <div class="form-group">
				    <label for="username" class="col-sm-2 control-label">用户</label>
				    <div class="col-sm-10">
				    	<input type="hidden" name="fid" value="<?php echo $resultNewsC["id"]?>">
				      <input type="text" class="form-control" id="username" name="username" placeholder="请输入用户名">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="content" class="col-sm-2 control-label">内容</label>
				    <div class="col-sm-10">
				      <textarea name="content" id="content" class="form-control" rows="5" placeholder="请输入评论内容"></textarea>
				    </div>
				  </div>
				 
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" name="submit" class="btn btn-default">发表评论</button>
				      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">查看评论</button>
				    </div>
				  </div>
				</form>
				<!-- 表单结束 -->
			  </div>
			</div>

  			<!-- 发表评论end-->
  			</div>

  			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">显示评论</h4>
			      </div>
			      <div class="modal-body">
			       <?php
			       $sql = "select * from msg where fid=$id and tp = 0";
			       $resultMsg = fetchAll($sql);
			       foreach($resultMsg as $res){
			       ?>
			       <table class="table">
			       	<tr>
			       		<td>用户:</td>
			       		<td><?php echo $res["username"]?></td>
			       		<td>发表时间:</td>
			       		<td><?php echo date("Y-m-d H:i:s",$res["cdate"])?></td>
			       	</tr>
			       	<tr>
			       		<td>评论内容:</td>
			       		<td colspan="3"><?php echo $res["content"]?></td>
			       		
			       	</tr>

			       </table>
			       <?php
			       }
			       ?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        
			      </div>
			    </div>
			  </div>
			</div>
  			
	  	</div>
		<!-- footer -->
		<?php
include 'footer.php';
?>