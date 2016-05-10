<?php
	
	class UserOperation extends User {  //UserOperation class extends User class
		
		public $userTel;
		
		function __construct(){
			
			parent::__construct();
		}
		
		function isRegister($phNum){

			$admin = new Admin();

			$bool_isRegister = $admin->isRegister($phNum);

			if($bool_isRegister){
				return $bool_isRegister;
			}
			else{
				return NULL;
			}
		}

		function userRegister($user){
			
			$admin = new Admin();			//create a object of the Admin class
			
			$arr_user = (array) $user;
		
			$bool_isSuccess = $admin->userRegister($arr_user);
			
			if($bool_isSuccess){	//call the userAdd member functon of the DB class
				return true;	//user register successfunlly
			}	
			else{
				return false;	//user register unsuccessfully
			}
		}

		function userCheckLogin($phNum , $pass){

			$admin = new Admin();

			$result = $admin->userCheckLogin($phNum , $pass);

			if($result){
				return $result;
			}
			else{
				return false;
			}
		}

		function userSearch($phNum){

			$admin = new DB();

			$sql_uSearch = "select userId , userTel , userName , sex , email , regTime 
							from users where userTel = '$phNum' ";

			$row = $admin->fetchOne($sql_uSearch);
		
			if($row){
				return $row;
			}
			else{
				return NULL;
			}

		}
		

		function userModify($phNum,$user){
			
			$user_db=new DB();

			$arr_uMod['userName'] = $user->userName;
			$arr_uMod['sex'] = $user->sex;
			$arr_uMod['email'] = $user->email;

			$_SESSION['userName1'] = $arr_uMod['email'];
			$where = " users.userTel = '$phNum' ";
		
			$bool_isSuccess = $user_db->update("users" , $arr_uMod , $where);

			if($bool_isSuccess){
				return true;
			}
			else{
				return false;
			}
				
		}
		
		function userChangePassword($phNum , $Pass)
		{
			$user_db=new DB();

			$arr_userPass['userPassword'] = $Pass;
			$where = "users.userTel = '$phNum' ";

			$bool_isSuccess=$user_db->update("users" , $arr_userPass , $where);
			
			if($bool_isSuccess){
				return $bool_isSuccess;
			}
			else{
				return false;
			}
		}
		function getUserID($phNum){
			$admin = new DB();

			$sql_uSearch = "select userId  from users where userTel = ".$phNum;

			$row = $admin->fetchOne($sql_uSearch);
		
			if($row){
				return $row['userId'];
			}
			else{
				return NULL;
			}
 		}
 		function getPhone($userId){
			$admin = new DB();

			$sql_uSearch = "select userTel  from users where userId = ".$userId;

			$row = $admin->fetchOne($sql_uSearch);
		
			if($row){
				return $row['userTel'];
			}
			else{
				return NULL;
			}
 		}
 		 function getName($phNum){
			$admin = new DB();

			$sql_uSearch = "select userName  from users where userTel = ".$phNum;

			$row = $admin->fetchOne($sql_uSearch);
		
			if($row){
				return $row['userName'];
			}
			else{
				return NULL;
			}
 		}

		function userMakeOrder($order){
			
			$user_db=new DB();
			// var_dump($order->productId);echo "</br>";
			// var_dump($order->quantity);exit;
			// var_dump($Info);
			$arr_order['orderNumber'] = $order->orderNumber;
			$arr_order['userPhone'] = $order->userPhone;
			$arr_order['userName'] = $order->userName;
			$arr_order['orderAmount'] = $order->orderAmount;
			$arr_order['orderDate'] = $order->orderDate;
			$arr_order['orderTime'] = $order->orderTime;
			$arr_order['orderFlag'] = $order->orderFlag;
			$arr_order['orderAddress'] = $order->orderAddress;
			// var_dump($arr_order);
			$orderId = $user_db->insert('orders' , $arr_order);

			if($orderId){
				// echo $orderId;

				$arr_uOrder['userTel'] = $order->userTel;
				$arr_uOrder['orderId'] = $orderId;

				$bool_isSuccessU = $user_db->insert('user_order' , $arr_uOrder);

				// if($bool_isSuccessU){
				// 	// echo "OK1";
				// }
				// var_dump($order);echo "</br>";
				$arr_productId = $order->productId;
				$arr_quantity = $order->quantity;
				// var_dump($arr_productId);echo "</br>";
				// var_dump($arr_quantity);echo "</br>";
			
				
				$num = count($order->productId);
				
				for($i=0; $i<$num; ++$i){
					$arr_pOrder['orderId'] = $orderId;
					$arr_pOrder['productId'] = $arr_productId[$i];
					$arr_pOrder['quantity'] = $arr_quantity[$i];
	
					$bool_isSuccessP = $user_db->insert('order_product' , $arr_pOrder);

					if(!$bool_isSuccessP){
						return "GG";
					}
				}

				return true;
			
			}
			
			else{
				return false;
			}
		}
	
		function userCheckOrder($phNum , $where=NULL){
	
			$order_db = new DB();

			$order_admin = new Admin();

			$sql_orderId = "select orderId from user_order where user_order.userTel = '$phNum' ";

			$orderIds = $order_db->fetchAll($sql_orderId);

			// var_dump($orderIds);echo "</br>";

			if(!$orderIds){
				return NULL;
			}

			$arr_orders = NULL;
			$num = count($orderIds);
			// echo $num;

			$j= 0;
			for($i=0; $i<$num; ++$i){

				$id = $orderIds[$i]['orderId'];
				$sql_order = "select * from orders where orders.orderId = '$id' " . $where ;
				// echo $sql_order;
				// $arr_orders[$i] = $order_db->fetchOne($sql_order);
				// var_dump($arr_order[$i]);

				$arr[$i] = $order_db->fetchOne($sql_order);
				
				if( $arr[$i] ){

					$arr_orders[$j] = $arr[$i];
					$arr_orderPro = $order_admin->getProductByOrder($id);
					// var_dump($arr_orderPro);

					if($arr_orderPro){

						foreach ($arr_orderPro as $key => $value) {

							$rows_Img = $order_admin->getImgsByKind($value['productId'],"cooked");
							// var_dump($rows_Img); echo "</br>";
							if($rows_Img){
							$value['imgRootS'] = $rows_Img['imgRoot'] . "image_80_80/" . $rows_Img['imgName'];
							$value['imgRootL'] = $rows_Img['imgRoot'] . "image_600_600/" . $rows_Img['imgName'];
							
							}

							$arr_orderPros[] = $value;
						}
					// var_dump($arr_orderPros);
						
						$arr_orders[$j]['orderProduct'] = $arr_orderPros;
						unset($arr_orderPros);

					}
					else{
						$arr_orders[$j]['orderProduct'] = NULL;
					}

					$j++;
				}

				// $orders[$i]['orderProduct'] = $arr_orderPro;
				// var_dump($arr_orders[$i]);
			}
			// var_dump($arr_orders);
			// var_dump($arr_orders);exit;
			return $arr_orders;
		}

		function orderDetail($id){

			$orderDetail_db = new DB();

			$sql_detail = "select * from orders where orders.orderId = '$id' ";
			$details = $orderDetail_db->fetchOne($sql_detail);

			return $details;

		}
		
		function userCancleOrder($id){
			$user_db=new DB();

			$arr_order['orderFlag'] = "已取消";

			$where = "orders.orderId = '$id' and orders.orderFlag = '待付款' ";

			$bool_isSuccess = $user_db->update("orders" , $arr_order , $where);

			if($bool_isSuccess){
				return true;
			}
			else{
				return false;
			}
		}

		function userDoneOrder($id){
			$user_db=new DB();

			$arr_order['orderFlag'] = "已完成";

			$where = "orders.orderId = '$id' and orders.orderFlag = '待取菜' ";
			// echo $where;
			$bool_isSuccess = $user_db->update("orders" , $arr_order , $where);

			if($bool_isSuccess){
				return true;
			}
			else{
				return false;
			}
		}
		
//APP操作  order:price,sales; score;
		function getProductId($type,$addr,$order){
			$user_db=new DB();
			if($type == "all"&&$addr == "all")
				$sql = 'select productId from productkind';
			if($type == "all"&&$addr !="all")
				$sql='select productId from productkind where productAddr= "'.$addr.'"';
			if($type != "all"&&$addr == "all")
				$sql='select productId from productkind where productKind="'.$type.'"';
			if($type != "all"&&$addr != "all")
				$sql='select productId from productkind where productKind= "'.$type.'" and productAddr="'.$addr.'"';
			


			if($order =="default")
				return $user_db->fetchAll($sql);
			if($order == "price"){
				$sql_1 = 'select productId,productNewPrice from products where productId in ('.$sql.') order by productNewPrice';
				return $user_db->fetchAll($sql_1);
			}
			if($order == "sales")
			{
				$sql_1 = 'select productId,productSales from productchange where productId in ('.$sql.') order by productSales ASC';
				return $user_db->fetchAll($sql_1);
			}
			if($order = 'score')
			{
				$sql_1 = 'select productId,scoreAll/commentCount score from productchange where productId in ('.$sql.') order by score ASC';
				return $user_db->fetchAll($sql_1);
			}
		}

		function getProductDetail($productId){
			$admin = new DB();

			$sql_img = "select imgRoot,imgName  from productimg where productId = ".$productId;
			$row = $admin->fetchOne($sql_img);
			//echo $row['imgRoot'];
			if(!$row)
				return false;
			$imgPath = $row['imgRoot'].$row['imgName'];
			//echo $imgPath;

			$sql_productFlg = 'select productFlag from productstate where productId = '.$productId;
			$row = $admin->fetchOne($sql_productFlg);
			if(!$row)
				return false;
			$status = $row['productFlag'];
			//echo $status;

			$sql_productInfo = 'select productName,productInfo,productOldPrice,productNewPrice from products where productId = '.$productId;
			$row = $admin->fetchOne($sql_productInfo);
			if(!$row)
				return false;
			$name = $row['productName'];
			//echo $name;
			$price = $row['productNewPrice'];
			$originPrice = $row['productOldPrice'];
			$info = $row['productInfo'];

			$sql_productOther = 'select productSales,commentCount,scoreAll from productchange where productId = '.$productId;
			$row = $admin->fetchOne($sql_productOther);
			if(!$row)
				return false;
			$sales = $row['productSales'];
			$number_comment = $row['commentCount'];
			if($row['commentCount']==0)
				$score=0;
			else
				$score = $row['scoreAll']/$row['commentCount'];
			$stock = 1;

			$arr = array('id'=>$productId,'name'=>$name,'info'=>$info,'img_path'=>$imgPath,'price'=>$price,'originPrice'=>$originPrice,
				'stock'=>$stock,'sales'=>$sales,'status'=>$status,'number_comment'=>$number_comment,'score'=>$score);
			return $arr;
		}





}

?>
