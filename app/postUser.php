<?php
	include '../init.php';
	$id = $_POST['userid'];
	$pwd = $_POST['pwd'];

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
	//------------------------------------------------------------------------------

	$user = new userOperation();
	$phone = $user->getPhone($id);
	if(!$user->isRegister($phone))
	{
		header("Caikid-ResponseStatus:userId-not-exist"); 
		echo 'null';
		return;
	}
	if(!$user->userCheckLogin($phone,$pwd))
	{
		header("Caikid-ResponseStatus:pwd-incorrect"); 
		echo 'null';
		return;
	}
	if(isset($_POST['newname']))
		$arr['userName'] = $_POST['newname'];
	if(isset($_POST['newpwd']))
		$arr['userPassword'] = $_POST['newpwd'];
	if(isset($_POST['newemail']))
		$arr['email'] = $_POST['newemail'];
	if(isset($_POST['sex']))
		$arr['sex'] = $_POST['sex'];
	$where = 'userId ='.$id;
	$dao = new DB();

	$isModify = $dao->update('users',$arr,$where);
	if($isModify){
		header("Caikid-ResponseStatus:ok"); 
		// $row['userId']=$id;
		// if(isset($_POST['newname']))
		// 	$row['userName'] = $arr['userName'];
		// if(isset($_POST['newpwd']))
		// 	$row['userPassword'] = $arr['userPassword'];
		// if(isset($_POST['newemail']))
		// 	$row['email'] = $arr['email'];
		// if(isset($_POST['sex']))
		// 	$row['gender'] = $arr['sex'];

		// foreach ( $row as $key => $value )  
  //       	$row[$key] = urlencode ( $value );  
		// echo urldecode(json_encode($row));
		return;
	}
	if(!$isModify){
		header("Caikid-ResponseStatus:session-invalid"); 
		echo 'null';
		return;
	}


?>