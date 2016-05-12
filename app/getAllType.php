<?php
	include '../init.php';
	
	$user = new userOperation();
	$row = $user->getAllType();
	if(!$row){
		header("Caikid-ResponseStatus:no-more-content");
		echo 'null';
		return;
	}
	$count = count($row);

	header('Caikid-ResponseStatus:ok');
	//echo $count;
	echo "[" ;
	for($i=0;$i<$count;$i++){
		$arr = $row[$i];
		if($i!=0)
			echo ',';

		foreach ( $arr as $key => $value )  
        	$arr[$key] = urlencode ( $value );  
        echo urldecode(json_encode($arr));
	}
	echo "]";


?>