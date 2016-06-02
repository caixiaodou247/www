<?php
// require_once('tool/ChuanglanSMS.php');

// /* ========== 行业短信 ========== */
// $phone=$_GET['phoneNum'];
// $code =rand(1000,9999);
// $sms=new ChuanglanSMS('N3355965','63619557');

// //发送短信
// $result=$sms->send($phone,"你的验证码是：".$code);
// // $_SESSION['phoneCode']=$code;
// setcookie($phone, $code, time()+60);
// echo "【菜小兜】你的验证码是：".$code."cookie".$_COOKIE["user"];
// // 查询余额
// //$result=$sms->queryBalance();
// var_dump($result);





/* *
 * 功能：创蓝发送信息DEMO
 * 版本：1.3
 * 日期：2014-07-16
 * 说明：
 * 以下代码只是为了方便客户测试而提供的样例代码，客户可以根据自己网站的需要，按照技术文档自行编写,并非一定要使用该代码。
 * 该代码仅供学习和研究创蓝接口使用，只是提供一个参考。
 */
require_once 'ChuanglanSmsHelper/ChuanglanSmsApi.php';
 $phone=$_GET['phoneNum'];
 //$code =rand(1000,9999);
 $code = '3145';
 $_SESSION[$phone]=$code;
$clapi  = new ChuanglanSmsApi();
$result = $clapi->sendSMS($phone, '您好，您的验证码是'.$code,'true');
$result = $clapi->execResult($result);
if($result[1]==0){
	echo '发送成功';
}else{
	echo "发送失败{$result[1]}";
}

?>