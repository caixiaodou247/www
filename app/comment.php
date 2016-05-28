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

	$comments = new Comments();
	if(!isset($_POST['orderId'])){
		echo 'null';
		return;
	}
	$comments->orderId = $_POST['orderId'];
	if(!isset($_POST['productId'])){
		echo 'null';
		return;
	}
	$comments->productId = $_POST['productId'];
	if(!isset($_POST['content'])){
		echo 'null';
		return;
	}
	$comments->content = $_POST['content'];
	if(!isset($_POST['score'])){
		echo 'null';
		return;
	}
	$comments->score = $_POST['score'];

	$comments->userId = $caikid_id;
	$comments->date = date('Y-m-d');


	$isComment = $user->comment($comments);
	if(!$isComment)
	{
		header("Caikid-ResponseStatus:no-more-content");
		echo 'null';
		return;
	}
	if($isComment)
		header("Caikid-ResponseStatus:ok");
	return;



?>