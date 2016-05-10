<?php
	include '../init.php';
	$user = new userOperation();
	$phone = $_POST['account'];
	$password = $_POST['pwd'];
	$name = $_POST['name'];
	$code = $_POST['verify-code'];
	$status ='';
	if(!isset($_SESSION['code'])){
		header("Caikid-ResponseStatus:verify-error");
		echo 'null';
		return;
	}
	if($code!=$_SESSION['code'])
	{
		//echo $code;
		$status='verify-error';
		header("Caikid-ResponseStatus:".$status);
		echo 'null';
		return;
	}
	if(time()>=$_SESSION['timeout'])
	{
		$status='verify-timeout';
		header("Caikid-ResponseStatus:".$status);
		echo 'null';
		return;
	}
	else{
		//给用户类变量逐个赋值，即是转换成数据库变量名称
		$user->userTel = $phone;
		$user->userName = $name;
		$user->regTime=date("Y-m-d H:i:s");
		$user->sex="保密";
		$user->userPassword = $password . SAFE;

		//调用用户 user 类的用户注册函数 userRegister($user) 来存储信息到数据库
		$bool_isSuccess=$user->userRegister($user);
		if($bool_isSuccess){
			$status='ok';
			session_destroy();
		}

		else{

		//如果注册失败，则转到注册页面重新注册
			$status='verify-timeout';
		}
		header("Caikid-ResponseStatus:".$status);
	}





?>