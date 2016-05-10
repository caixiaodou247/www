<?php 
require_once 'include.php';
checkLogined();

$tipsId=$_REQUEST['id'];

$sql = "select * from foodtips where foodtips.tipsId = '$tipsId' ";

$tips = fetchOne($sql);


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link href="./styles/global.css"  rel="stylesheet"  type="text/css" media="all" />
<script type="text/javascript" charset="utf-8" src="plugins/kindeditor/kindeditor.js"></script>
<script type="text/javascript" charset="utf-8" src="plugins/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="./scripts/jquery-1.6.4.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id1');
                window.editor = K.create('#editor_id2');
        });
        $(document).ready(function(){
        	$("#selectFileBtn").click(function(){
        		$fileField = $('<input type="file" name="thumbs[]"/>');
        		$fileField.hide();
        		$("#attachList").append($fileField);
        		$fileField.trigger("click");
        		$fileField.change(function(){
        		$path = $(this).val();
        		$filename = $path.substring($path.lastIndexOf("\\")+1);
        		$attachItem = $('<div class="attachItem"><div class="left">a.gif</div><div class="right"><a href="#" title="删除附件">删除</a></div></div>');
        		$attachItem.find(".left").html($filename);
        		$("#attachList").append($attachItem);		
        		});
        	});
        	$("#attachList>.attachItem").find('a').live('click',function(obj,i){
        		$(this).parents('.attachItem').prev('input').remove();
        		$(this).parents('.attachItem').remove();
        	});
        });
</script>
</head>
<body>
<h3>添加美食秘笈</h3>
<form action="doAdminAction.php?act=editTips&id=<?php echo $tipsId;?>" method="post" enctype="multipart/form-data">
<table width="100%"  border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">

	<tr>
		<td align="center">标题</td>
		<td>
			<textarea name="tipsTitle" id="editor_id" style="width:100%;height:30px;"><?php echo $tips['tipsTitle'];?></textarea>
		</td>
	</tr>
	<tr>
		<td align="center">内容</td>
		<td>
			<textarea name="tipsContent" id="editor_id11" style="width:100%;height:100px;"><?php echo $tips['tipsContent'];?></textarea>
		</td>
	</tr>
	
	<tr>
		<td colspan="2"><input type="submit"  value="修改秘笈"/></td>
	</tr>
</table>
</form>
</body>
</html>