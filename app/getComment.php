<?php
	include '../init.php';
	if(!isset($_GET['productId'])){
		header("Caikid-ResponseStatus:no-more-content");
		echo 'null';
		return;
	}
	if(!isset($_GET['page']))
		$page = 0;
	else
		$page = $_GET['page'];
	$productId = $_GET['productId'];
	
	$user = new userOperation();
	$row = $user->getComment($productId);
	if(!$row){
		header("Caikid-ResponseStatus:no-more-content");
		echo 'null';
		return;
	}
	$count = count($row);
	if($page*10>=$count){
		header("Caikid-ResponseStatus:no-more-content");
		echo 'null';
		return;
	}
	header('Caikid-ResponseStatus:ok');
	//echo $count;
	echo "[" ;
	for($i=$page*10;$i<$count;$i++){
		$comment = $row[$i];
		if($i>=($page*10+10))
			break;
		if($i!=$page*10)
			echo ',';
		$userName = $user->getNameByID($comment['userId']);
		$arr = array('commentId'=>$comment['commentId'],'productId'=>$comment['productId'],'userName'=>$userName,'score'=>$comment['score'],'content'=>$comment['content'],'date'=>$comment['date']);
		foreach ( $arr as $key => $value )  
        	$arr[$key] = urlencode ( $value );  
        echo urldecode(json_encode($arr));
	}
	echo "]";


?>