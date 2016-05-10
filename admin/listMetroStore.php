<?php 
require_once 'include.php';
$pageSize=4;
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
$rows=getMetroStoreByPage($page,$pageSize);

if(!$rows){
	alertMes("sorry,还没有店面,请添加!","addMetroStore.php");
	exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="styles/backstage.css">
</head>

<body>
<div class="details">
                    <div class="details_operation clearfix">
                        <div class="bui_select">
                            <input type="button" value="添&nbsp;&nbsp;加" class="add"  onclick="addMetroStore()">
                        </div>
                            
                    </div>
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="15%">编号</th>
                                <th width="25%">地铁店面名称</th>
                                <th width="30%">地铁店面状态</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  foreach($rows as $row):?>
                            <tr>
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <td><input type="checkbox" id="c1" class="check"><label for="c1" class="label"><?php echo $row['addrId'];?></label></td>
                                <td><?php echo $row['addrName'];?></td>
                                <td><?php echo $row['addrFlag']==="true"?"该地铁有店面":"该地铁无店面";?></td>
                                <td align="center"><input type="button" value="修改" class="btn" onclick="editMetroStore(<?php echo $row['addrId'];?>)">
                                <input type="button" value="删除" class="btn"  onclick="delMetroStore(<?php echo $row['addrId'];?>)"></td>
                            </tr>
                            <?php endforeach;?>
                            <?php if($totalRows>$pageSize):?>
                            <tr>
                            	<td colspan="4"><?php echo showPage($page, $totalPage);?></td>
                            </tr>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
</body>
<script type="text/javascript">

	function addMetroStore(){
		window.location="addMetroStore.php";	
	}
	function editMetroStore(id){
			window.location="editMetroStore.php?id="+id;
            // window.location="doAdminAction.php?act=editMetroStore&id="+id;
	}
	function delMetroStore(id){
			if(window.confirm("您确定要删除吗？删除之后不可以恢复哦！！！")){
				window.location="doAdminAction.php?act=delMetroStore&id="+id;
			}
	}
</script>
</html>