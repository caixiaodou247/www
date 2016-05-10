<?php

	/********************************************************************************************************
		caixiaodou.php文件是展示首页中商品和广告等信息的首页入口页面，其先通过数据库获取所有上架商品信息，然后
	再将数据传到前台页面，使用 smarty 打印出来

	作  者  ：黄树茂 English Name：Andy
	编写日期：30/07/2015
	
	修改人员：
	修改日期：

	**********************************************************************************************************/
	
	// //开启缓存
	// $smarty->caching = true;

	// //设置一个缓存的生成周期
	// $smarty->cache_lifetime = 10;

	// //设置 smarty 模板缓存目录。用于存储缓存文件
	// $smarty->cache_dir = './cache';

	// if(!$smarty->isCached('caixiaodouK.html' , $_GET['kind']) ){

	// $kind = $_GET['kind'];

	$productAddr = $_GET['productAddr'];
	$productKind = $_GET['foodName'];

	$_SESSION['productAddr'] = $productAddr;
	$_SESSION['productKind'] = $productKind;
	// var_dump($productAddr);

	//首页搜索入口
	if(isset($_SESSION['arr_search'])){
		// $_SESSION['searchNum'] = '';
		$search = $_SESSION['arr_search'];
		// var_dump($search);

		$strlen=mb_strlen($search);
 		while($strlen){
		    $array_search[]=mb_substr($search,0,1,'utf8');
		    $search=mb_substr($search,1,$strlen,'utf8');
		    $strlen=mb_strlen($search);
  		}
  		
  		$searchLike = '';
  		for($i=0; $i<count($array_search);++$i){

  			if($i == count($array_search)-1){
  				$searchLike = $searchLike . "productkind.productName LIKE '%$array_search[$i]%' " ;
  			}

  			else{
  				$searchLike = $searchLike . "productkind.productName LIKE '%$array_search[$i]%' OR " ;
  			}
  		}
  		// var_dump($searchLike);
  		
		if($productKind === "全部菜品"){
			// $where = "where productkind.productAddr = '$productAddr' and " ."(" . $searchLike .")";
			$where = "where" ."(" . $searchLike .")";
			// echo $where;
		}

		else{
			// $where = "where productkind.productAddr = '$productAddr' and productKind.productKind = '$productKind' ";
			$where = "where  productKind.productKind = '$productKind' ";
			// echo $where;
		}
		
		// unset($_SESSION['arr_search']);
		// echo $_SESSION['arr_search'];
	}

	else{
		if($productKind === "全部菜品"){
			$where = "where productkind.productAddr = '$productAddr' ";
			// echo $where;
		}
		else{
			$where = "where productkind.productAddr = '$productAddr' and productKind.productKind = '$productKind' ";
			// echo $where;
		}
	}
	
	// echo $where;

	//声明一个管理员对象
	$admin=new Admin();

	//通过管理员类的checkAddr()方法来检测该地铁站是否开展业务
	$_SESSION['addr'] = $admin->checkAddr($productAddr);
	
	//通过管理员类的getAllProduct()方法来获取所有商品所有信息
	$row=$admin->getAllProducts($where);
	
	// echo $_SESSION['searchNum'];
	$rows = NULL;
	//通过商品id来获取其对应商品首页图片
	if($row){
		foreach ($row as $key => $value) {
			$rows_Img = $admin->getImgsByKind($value['productId']);
			// var_dump($rows_Img);
			if($rows_Img){
				$value['imgRoot'] = $rows_Img['imgRoot'] . "image_200_220/" . $rows_Img['imgName'];
				//$value['imgName'] = $rows_Img[0]['imgName'];
			}
			
			$rows[] = $value;
		}
	}
	else{
		$rows = NULL;
	}
	// var_dump($rows);
	// var_dump($_SESSION['addr']);
	//使用 smarty 模板的assign方法给前台传值
	$smarty->assign('allProduct',$rows);
// }


	//smarty 模板打开首页 home.html
	$smarty->display('product.html');

?>
