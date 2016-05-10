<?php 

	//声明一个管理员对象
	$admin = new Admin();

	//通过管理员类的 getTips() 方法来获取
	$row_tips = $admin->getTips();

	$num = count($row_tips);

	if( !isset($_SESSION['tipsI']) ){
		$_SESSION['tipsI'] = 0;
	}
	else{
		$_SESSION['tipsI'] += 1;

		if($_SESSION['tipsI'] >=$num){
			$_SESSION['tipsI'] = 0;
		}
	}

	$row_tip = $row_tips[$_SESSION['tipsI']];

	$_SESSION['tipsTitle'] = $row_tip['tipsTitle'];
	// var_dump($row_tip['tipsContent']);
	$tipsContents = explode(PHP_EOL,$row_tip['tipsContent']);
	// $tipsContents = preg_split("/([0-9]+)/", $row_tip['tipsContent'], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
	// var_dump($tipsContents);

	$smarty->assign('tipsContents' , $tipsContents);

	$smarty->display('tips.html');
?>