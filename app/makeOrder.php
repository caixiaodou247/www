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
	//------------------------------------------------------------------------------

	// $id0 = "GZBYJXMYJ";
	// $id1 = substr(date("Ymd"), 2);
	// $id2 = $arr_Info['phone'];
	// $id  = $id0 . $id1 . $id2 ;
	//date("Y-m-d");

	/*-----------------------------------------------------------------------------
	获取请求的购物车数据 json 通过"php://input" 由于$_POST会对数据先进行urlencode，故不能直接用$_POST获取
	-----------------------------------------------------------------------------*/

	$in = urldecode(file_get_contents("php://input"));
	$flag_from = "[";
	$flag_to = "]";
	$index_from = strpos($in,$flag_from);
	$index_to =strrpos($in,$flag_to);
	$arr_cart = substr($in, $index_from, $index_to-$index_from+1);
	$cart = json_decode($arr_cart,true);
	$count = count($cart);
	for($i=0;$i<$count;$i++)
	{
		$productId_arr[$i]=$cart[$i]['id'];
		$quantity_arr[$i]=$cart[$i]['count'];
	}

	$order = new Order();
	$order->orderNumber = "GZBYJXMYJ".substr(date("Ymd"), 2).$user->getPhone($caikid_id);
	$order->orderAddress = $_POST['addr'];
	$order->userPhone = $_POST['phone'];
	$order->userName = $_POST['name'];
	//取菜时间
	$order->orderTime = $_POST['receiveTime'];
	$order->orderAmount = $user->getTotalPrice($cart);
	$order->orderDate = date('Y-m-d');
	$order->orderFlag = "待付款";
	$order->userTel = $user->getPhone($caikid_id);
	$order->productId = $productId_arr;
	$order->quantity = $quantity_arr;
	$isAdd = $user->userMakeOrder($order);

	if(!$isAdd){
		header("Caikid-ResponseStatus:order-false");
		echo 'null';
		return;
	}
	header("Caikid-ResponseStatus:ok");
	echo $isAdd;
	return;

?>