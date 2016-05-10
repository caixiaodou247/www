<?php
require_once 'include.php';
checkLogined();

$sql = "select * from foodtips";

$totalRows=getResultNum($sql);
$pageSize=5;
$totalPage=ceil($totalRows/$pageSize);
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;

if($page<1||$page==null||!is_numeric($page))
	$page=1;

if($page>$totalPage)
	$page=$totalPage;
$offset=($page-1)*$pageSize;

$rows_mid = fetchAll($sql);

$rows_temp = null;
$i=0;

foreach ($rows_mid as $key => $value) {

	$rows_mid[$i]['tipsContent'] = explode(PHP_EOL,$value['tipsContent']);

	$i++;
}

//分页处理
	$count = ($offset+$pageSize) > $totalRows ? $totalRows : ($offset+$pageSize);

	for($i=$offset; $i<$count ;++$i){
		$rows[] = $rows_mid[$i];
	}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="styles/backstage.css">
<link rel="stylesheet" href="scripts/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
<script src="scripts/jquery-ui/js/jquery-1.10.2.js"></script>
<script src="scripts/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="scripts/jquery-ui/js/jquery-ui-1.10.4.custom.min.js"></script>
</head>

<body>

<div class="details">
                    <div class="details_operation clearfix">
                        <div class="bui_select">
                            <input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addTips()">
                        </div>
                    </div>
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="8%">编号</th>
                                <th width="20%">秘笈标题</th>
                                <th width="60%">秘笈内容</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($rows as $row):?>
                            <tr>
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <td><input type="checkbox" id="c<?php echo $row['tipsId'];?>" class="check" value=<?php echo $row['tipsId'];?>><label for="c1" class="label"><?php echo $row['tipsId'];?></label></td>
                                <td><?php echo $row['tipsTitle']; ?></td>
                                <td>
                                	<ul>
                                		<?php foreach ($row['tipsContent'] as $key => $value):?>
                                		<li style="font-size:14px;">
                                			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value; ?>
                                		</li>
                                		<?php  endforeach;?>
                                	</ul>                                
                                </td>    
                                <td align="center">
                                				<input type="button" value="修改" class="btn" onclick="editTips(<?php echo $row['tipsId'];?>)">
                                				<input type="button" value="删除" class="btn"onclick="delTips(<?php echo $row['tipsId'];?>)">
                                </td>
                            </tr>
                           <?php  endforeach;?>
                           <?php if($totalRows>$pageSize):?>
                            <tr>
                            	<td colspan="8"><?php echo showPage($page, $totalPage,"keywords={$keywords}&order={$order}");?></td>
                            </tr>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
<script type="text/javascript">
function showDetail(id,t){
	$("#showDetail"+id).dialog({
		  height:"auto",
	      width: "auto",
	      position: {my: "center", at: "center",  collision:"fit"},
	      modal:true,//是否模式对话框
	      draggable:true,//是否允许拖拽
	      resizable:true,//是否允许拖动
	      title:"商品名称："+t,//对话框标题
	      show:"slide",
	      hide:"explode"
	});
}
	function addTips(){
		window.location='addTips.php';
	}
	function editTips(id){
		window.location='editTips.php?id='+id;
	}
	function delTips(id){
		if(window.confirm("您确认要删除嘛？添加一次不易，且删且珍惜!")){
			window.location="doAdminAction.php?act=delTips&id="+id;
		}
	}
	function search(){
		if(event.keyCode==13){
			var val=document.getElementById("search").value;
			window.location="listPro.php?keywords="+val;
		}
	}
	function change(val){
		window.location="listPro.php?order="+val;
	}
</script>
</body>
</html>