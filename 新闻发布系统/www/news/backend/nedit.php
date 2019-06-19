<?php include 'verify.php' ?>
<?php
$id = $_GET["id"];
include 'config.php';
include 'inc.php';
connect($host,$user,$pwd,$db,$code);
$sql = "select * from content as c,ncontent as n where c.id = n.cid and id = $id";
$rowc = fetchOne($sql);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改新闻</title>
	<link rel="stylesheet" href="../lib/css/bootstrap.min.css">
	<script src="../lib/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../lib/kindeditor-4.1.7/themes/default/default.css" />
	<link rel="stylesheet" href="../lib/kindeditor-4.1.7/plugins/code/prettify.css" />
	<script charset="utf-8" src="../lib/kindeditor-4.1.7/kindeditor.js"></script>
	<script charset="utf-8" src="../lib/kindeditor-4.1.7/lang/zh_CN.js"></script>
	<script charset="utf-8" src="../lib/kindeditor-4.1.7/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]', {
				cssPath : '../lib/kindeditor-4.1.7/plugins/code/prettify.css',
				uploadJson : '../lib/kindeditor-4.1.7/php/upload_json.php',
				fileManagerJson : '../lib/kindeditor-4.1.7/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
</head>
<body style="padding:5px;background-color:#369;">
	<ol class="breadcrumb" style="background-color:#369;border:1px solid #fff;">
	  <li><a href="#" style="color:#fff">网站后台</a></li>
	  <li><a href="#" style="color:#fff">新闻管理</a></li>
	  <li class="active" style="color:#ddd">修改新闻</li>
	</ol>


	<div class="panel panel-default">
	  <div class="panel-heading" style="background-color:#369;color:#fff;">
	    <h3 class="panel-title">新闻信息修改:</h3>
	  </div>
	  <div class="panel-body">
	  	
		<form method="post" name="example" action="nRec.php">
		  <div class="form-group">
		    <label for="title">新闻标题</label>
		    <input type="hidden" name="id" value="<?php echo $rowc["id"] ?>">
		    <input type="text" class="form-control" id="title" name="title" placeholder="请输入新闻标题" value="<?php echo $rowc["title"]?>">
		  </div>

		  <div class="form-group">
		    <label for="source">新闻来源</label>
		    <input type="text" class="form-control" id="source" name="source" placeholder="请输入新闻来源" value="<?php echo $rowc["source"]?>">
		  </div>

		  <div class="form-group">
		    <label for="keyword">关键字</label>
		    <input type="text" class="form-control" id="keyword" name="keyword" placeholder="请输入关键字"  value="<?php echo $rowc["keyword"]?>">
		  </div>

		  <div class="form-group">
		    <label for="mid">新闻分类</label>
		    <select name="mid" id="mid" class="form-control">
		    	<option value="">请选择新闻分类</option>
		    	<?php
		    	
				$sql = "select * from menu";
				$rows = fetchAll($sql);
				foreach($rows as $row){
		    	?>
		    	<option value="<?php echo $row['id'];?>" <?php if($rowc["mid"]==$row["id"]){echo "selected";} ?> ><?php echo $row['name'];?></option>
		    	<?php
		    	}
		    	?>
		    </select>
		  </div>

		  <div class="form-group">
		    <label for="content">新闻内容</label>
		    <textarea name="content" id="content" class="form-control" rows="10" style="visibility:hidden;"><?php echo $rowc["content"];?></textarea>
		  </div>

		  <button type="submit" class="btn btn-primary">保存</button>
		</form>

	  </div>
	</div>


	
</body>
</html>