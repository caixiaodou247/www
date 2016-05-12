<?php
	include '../init.php';
	$account = $_POST['account'];
	$password= $_POST['pwd'];
	//声明一个用户操作类对象,装载用户基本信息
	$user = new userOperation();
	$status='';
    //判断该用户账号是否已经注册
	if( !( $user->isRegister($account) ) ){
		$status='user-not-exist';
		header("Caikid-ResponseStatus:".$status);
		echo 'null';
		return;
	}
	$isSuccess=$user->userCheckLogin($account , $password);
	if(!$isSuccess){
		$status='pwd-error';
		header("Caikid-ResponseStatus:".$status);
		echo 'null';
		return;
	}
	if($isSuccess){
		$_SESSION['account']=$account;
		$_SESSION['password']=$password;
		$status='ok';
	}
	header("Caikid-ResponseStatus:".$status);
	$id = $user->getUserID($account);
	$name = $user->getNameByPhone($account);

	
	$row = array('account'=>$account,'avatarUrl'=>'0','credit'=>0,'name'=>$name,'pwd'=>'','id'=>$id);
	foreach ( $row as $key => $value ) {  
        		$row[$key] = urlencode ( $value );  
    }  
	echo urldecode(json_encode($row));
?>