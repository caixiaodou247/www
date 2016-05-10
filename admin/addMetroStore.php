<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<h3>添加地铁店面</h3>
<form action="doAdminAction.php?act=addMetroStore" method="post">
<table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
	<tr>
		<td align="right">地铁的名称</td>
		<td><input style="width:300px;" type="text" name="addrName" placeholder="请输入地铁名称，例：广州市白云区江夏地铁"/></td>
	</tr>
	<tr>
		<td align="right">是否有店面</td>
		<td><input style="width:300px; type="password" name="addrFlag" placeholder="请输入true或者false" /></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit"  value="添加地铁店面"/></td>
	</tr>

</table>
</form>
</body>
</html>