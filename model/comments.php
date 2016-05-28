<?php

	//声明评论类
	class Comments{

		public $orderId;		//订单编号
		var $productId;
		var $userId;
		var $content;
		var $score;
		var $date;


		
		
		function _construct(){

			//初始化订单信息变量为 NULL
			$this->orderId=NULL;
			$this->productId=NULL;
			$this->content=NULL;
			$this->score=NULL;
			$this->date=NULL;
			$this->userId=NULL;
		}
		
	}
	

?>