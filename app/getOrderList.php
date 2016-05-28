<?php
	include '../init.php';
	$user = new userOperation();
	//检查是否已登录用户进行操作，同个会话
	//------------------------------------------------------------------------------
	if(!isset($_SERVER['HTTP_CAIKID_ID']))
	{
		header("Caikid-ResponseStatus:session-invalid");
		echo 'null';
		return;
	}
	$caikid_id =  $_SERVER['HTTP_CAIKID_ID'];
	if(!isset($_SESSION['userId']))
	{
		header("Caikid-ResponseStatus:session-invalid");
		echo 'null';
		return;
	}
	if($_SESSION['userId']!=$caikid_id){
		header("Caikid-ResponseStatus:userId-not-exist");
		echo 'null';
		return;
	}
	if(!isset($_GET['orderBy'])){
		header("Caikid-ResponseStatus:ok");
		$row = $user->getOrderList($caikid_id,'date');
	}
	if($_GET['orderBy']!='flag')
	{
		header("Caikid-ResponseStatus:ok");
		$row = $user->getOrderList($caikid_id,'date');
	}
	if($_GET['orderBy']=='flag')
	{
		header("Caikid-ResponseStatus:ok");
		$row = $user->getOrderList($caikid_id,'flag');
	}

	echo urldecode(json_encode($row));
	


?>