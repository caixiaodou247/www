<?php /* Smarty version 3.1.24, created on 2016-05-08 21:56:05
         compiled from "C:/wamp5/www/views/register.html" */ ?>
<?php
/*%%SmartyHeaderCode:2512572f4575200754_26157238%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bf2472ba1c3bb84e6f15ff6f2d6e7b543052cca' => 
    array (
      0 => 'C:/wamp5/www/views/register.html',
      1 => 1459775692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2512572f4575200754_26157238',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572f45752c6d50_51126143',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572f45752c6d50_51126143')) {
function content_572f45752c6d50_51126143 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2512572f4575200754_26157238';
echo $_smarty_tpl->getSubTemplate ("header_nohead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<link href="css/register.css" rel="stylesheet" type="text/css">

<?php echo '<script'; ?>
 src="js/register.js" type="text/javascript"><?php echo '</script'; ?>
>

<div class="register-headbg">

     <div class="register-head">
        <div class="login-block">
            <span>已有账号？ </span>
            <a href="index.php?route=login">登录</a>
        </div>

    </div>
</div>

<!-- register背景   -->
<div class="register-bg">
    <!--register开始-->
    <div class="register">
        <!-- register左边 -->
        <div class="register_left">

             <div class="register-logo">
                <a href="index.php?route=home">
                <h1 id="logo-img">
                  <li id="logo_name">菜小兜</li>
                  <li id="http">caixiaodou.cn</li>
               </h1>
              </a>

            </div>

            <div class="register_left-img">
                 
                <a><img src="images/adverts/advert<?php echo $_SESSION['advertImg'];?>
.jpg"/></a>            
            </div>  
                    
        </div>
        <!-- register左边 -->
        
        <!-- register右边 -->    
        <div class="register_right"> 
            <form class="register_right_down" action="index.php?route=register" method="post" onsubmit = "return checkInput()" autocomplete="off"><!--注册表单-->
                <div class="register_seg" id="mseg"> <!--表单开始-->
                    <li>
                        <span class="star">*</span>
                        <span class="text">用户名称</span>
                        <input class="frame" type="text" name="name"  />
                        <p id="name"></p>
                    </li>
           
                     <li>
                        <span class="star">*</span>
                        <span class="text">手机号码</span>
                        <input class="frame" id="phNum" type="text" name="phNum" />
                        <p id="phnum"></p>
                    </li>

                    <li id="btn">
                        <input type="button" class="btn-normal" value="免费获取短信动态码">
                    </li>

                    <li>
                        <span class="star">*</span>
                        <span class="text">动态号码</span>
                        <input class="frame" type="text" name="phP" /> 
                        <p id="phpass"></p>     
                    </li>
            
                    <li>
                        <span class="star">*</span>
                        <span class="text">创建密码</span>
                        <input class="frame" type="password" name="pass" />
                        <p id="passwd"></p>
                    </li>
                           
                    <li >
                        <span class="star">*</span>
                        <span class="text">确认密码</span>
                        <input class="frame" type="password" name="passf" />
                        <p id="frpasswd"></p>
                    </li>

                    <li>
                        <input class="submit_btn" id="submit_btn" type="submit" value="同意以下协议注册" style="cursor:pointer"/>
                    </li> 

                    <li>
                        <span>&nbsp;&nbsp;<a class="vip">《菜小兜用户协议》</a></span>
                    </li>   
                </div>
                <!--表单结束-->  
            </form>
            <!--注册表单结束-->
         </div>
         <!-- register右边 --> 

     </div>
    <!--register结束-->  
</div>
<!-- register背景   -->


  
  <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>