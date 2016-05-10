<?php
	include '../init.php';
	//$page=0;
	if(!isset($_GET['recipe-page']))
		$page = 0;
	else
		$page = $_GET['recipe-page'];

	if(!isset($_GET['recipe-type']))
		$type="all";
	else
		$type = $_GET['recipe-type'];

	if(!isset($_GET['recipe-order']))
		$order = "default";
	else
		$order = $_GET['recipe-order'];

	if(!isset($_GET['recipe-shop']))
		$addr= "all";
	else	
		$addr = $_GET['recipe-shop'];
	
	
	$user = new userOperation();

	$rowPid = $user->getProductId($type,$addr,$order);

	if(!$rowPid){
		header("Caikid-ResponseStatus:no-more-content");
		echo 'null';
		return;
	}
	$count = count($rowPid);
	if($page*10>=$count){
		header("Caikid-ResponseStatus:no-more-content");
		echo 'null';
		return;
	}
	header('Caikid-ResponseStatus:ok');
	echo "[" ;
	for($i=$page*10;$i<$count;$i++)
	{
		//echo $rowPid[$i]['productId']." ";
		$row = $user->getProductDetail($rowPid[$i]['productId']);
		//echo $row['name']." ";
		if($i>=($page*10+10))
			break;
		if($row['status']==true)
		{
			if($i!=$page*10)
				echo ',';
			foreach ( $row as $key => $value ) {  
        		$row[$key] = urlencode ( $value );  
    }  
			echo urldecode(json_encode($row));
		}
	}
	echo "]";


?>