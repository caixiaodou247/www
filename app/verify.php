<?php
	include '../init.php';
	
 	//?
	$phone=$_POST['account'];
	

	$code =rand(1000,9999);
	$user = new userOperation();
	
	// //header('account:'.$phone);

	$status = '';

	if($user->isRegister($phone)){
		header("Caikid-ResponseStatus:account-registred"); 
		echo 'null';
		return;
	}
	if(!$user->isRegister($phone)){
		//echo "enter if";
		$_SESSION['code']=$code;
		$_SESSION['timeout']=time()+3600;
		header("Caikid-ResponseStatus:ok");
		require_once ('../ChuanglanSmsHelper/ChuanglanSmsApi.php');
		$clapi  = new ChuanglanSmsApi();
		$result = $clapi->sendSMS($phone, '您好，您的验证码是'.$code,'true');
		$result = $clapi->execResult($result);
		echo $_SESSION['code'];
	}
	//$_SESSION['timeout']=time()+3600;
?>