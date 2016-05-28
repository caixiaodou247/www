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

	if(!isset($_POST['orderId'])){
		echo 'null';
		return;
	}
	$orderId = $_POST['orderId'];

	$isModify = $user->cancelOrder($orderId);
	if($isModify){
		header("Caikid-ResponseStatus:ok");
	}
	else{
		header("Caikid-ResponseStatus:no-more-content");
		echo 'cancel error';
	}


?>