<?php
	include '../init.php';
	$user = new userOperation();

	if(!isset($_POST['code'])){
		echo 'null';
		return;
	}
	$code = $_POST['code'];
	if(!isset($_POST['password'])){
		echo 'null';
		return;
	}
	$password = $_POST['password'];
	if(!isset($_POST['phone'])){
		echo 'null';
		return;
	}
	$phone = $_POST['phone'];

	if(!isset($_SESSION['code'])){
		header("Caikid-ResponseStatus:verify-error");
		echo '1';
		return;
	}
	if($code!=$_SESSION['code'])
	{
		//echo $code;
		$status='verify-error';
		header("Caikid-ResponseStatus:".$status);
		echo '2';
		return;
	}
	if(time()>=$_SESSION['timeout'])
	{
		$status='verify-timeout';
		header("Caikid-ResponseStatus:".$status);
		echo '3';
		return;
	}

	$isSucceed = $user->forgetPass($phone,$password);
	if(!$isSucceed){
		header("Caikid-ResponseStatus:verify-error");
		echo '4';
		return;
	}
	header("Caikid-ResponseStatus:ok");
	return;

?>