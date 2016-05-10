<?php 
require_once 'include.php';
checkLogined();

$id=$_REQUEST['id'];

$sql="select * from addr where addr.addrId= '$id' ";

$row=fetchOne($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<h3>修改地铁店面</h3>
<form action="doAdminAction.php?act=editMetroStore&id=<?php echo $id;?>" method="post">
<table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
	<tr>
		<td align="right">地铁的名称</td>
		<td><input type="text" name="addrName" value="<?php echo $row['addrName'];?>"/></td>
	</tr>
	
	<tr>
		<td align="right">是否有店面</td>
		<td><input type="text" name="addrFlag" value="<?php echo $row['addrFlag'];?>"/></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit"  value="确认修改"/></td>
	</tr>

</table>
</form>
</body>
</html>