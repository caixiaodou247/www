<?php 
require_once 'include.php';
checkLogined();


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
                window.editor = K.create('#editor_id');
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
<h3>广告图片信息</h3>
<form action="doAdminAction.php?act=editAdverts" method="post" enctype="multipart/form-data">
<table width="90%"  border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
	<tr>
		<td align="center">原有图片</td>
		<td>
			&nbsp;选中删除:
			<form>
				<?php 
					$advertImgs = getAllAdvertsImg($proInfo['productId']);
					if($advertImgs){
						// var_dump($advertImgs);
					foreach($advertImgs as $img):
				?>	
				 
				<label><input name="imgName[]" type="checkbox" value="<?php echo $img['imgName']; ?>" />
					<span><?php echo $img['imgFlag']; ?></span><img width="111" height="45" src="../<?php echo $img['imgRoot'] . $img['imgName'];?>" alt=""/>&nbsp;
				 </label> 			
				<?php endforeach; }?>
			</form> 
		</td>
	</tr>
 	<tr>
		 <td align="center">上传图片</td>
			<td>
				<a href="javascript:void(0)" id="selectFileBtn">添加附件</a>
				<div id="attachList" class="clear"></div>
			</td>
	</tr>  
	<tr>
		<td colspan="2"><input type="submit"  value="编辑广告图片"/></td>
	</tr>
</table>
</form>
</body>
</html>