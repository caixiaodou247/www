<?php

	/********************************************************************************************************
		caixiaodou.php文件是展示首页中商品和广告等信息的首页入口页面，其先通过数据库获取所有上架商品信息，然后
	再将数据传到前台页面，使用 smarty 打印出来

	作  者  ：黄树茂 English Name：Andy
	编写日期：30/07/2015
	
	修改人员：
	修改日期：

	**********************************************************************************************************/

	//开启缓存
	// $smarty->caching = true;

	//设置一个缓存的生成周期
	$smarty->cache_lifetime = 60;

	//设置 smarty 模板缓存目录。用于存储缓存文件
	$smarty->cache_dir = './cache';


	$arr_search = isset($_GET['product-search'])?$_GET['product-search']:'';
	// echo $arr_search;

	if(!$smarty->isCached("home.html")){

		//声明一个管理员对象
		$admin=new Admin();

		//声明用户操作类对象
		$user=new userOperation();

		if(!isset($_SESSION['userName'])){
			if(isset($_SESSION['userTel'])){
				$row = $user->userSearch($_SESSION['userTel']);

				if($row){
					$_SESSION['userName'] = $row['userName'];
				}
			}
		}	

		//通过管理员类的 getSearchNotice() 方法来获取展示广告图片信息
		$row_notices = $admin->getSearchNotice();
		
		$num = count($row_notices);

		if( !isset($_SESSION['noticeI']) ){
			$_SESSION['noticeI'] = 0;
		}
		else{
			$_SESSION['noticeI'] += 1;

			if($_SESSION['noticeI'] >=$num){
				$_SESSION['noticeI'] = 0;
			}
		}
		// $_SESSION['i'] = isset($_SESSION['i'])?$_SESSION['i'] +1 : 0;
		// echo $_SESSION['i'];

		
		$_SESSION['notice'] = $row_notices[$_SESSION['noticeI']]['noticeContent'];
		

		//通过管理员类的 getAdvertImgs() 方法来获取展示广告图片信息
		$row_img = $admin->getAdvertImgs();

		foreach ($row_img as $key => $value) {
			$adverts[]['imgRoot'] = $value['imgRoot'] . $value['imgName'];
		}

		//使用 smarty 模板的assign方法给前台传值
		$smarty->assign('adverts' , $adverts);
		
	}
	

	//smarty 模板打开首页 home.html
	if($arr_search){	//顾客通过输入关键字搜索商品
		$_SESSION['arr_search'] = $arr_search;
		$smarty->display('searchProduct.html');
		// echo "home_search";
	}
	else{
		unset($_SESSION['arr_search']);
		$smarty->display('home.html');
	}
	

?>
