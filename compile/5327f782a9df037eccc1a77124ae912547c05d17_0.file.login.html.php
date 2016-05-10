<?php /* Smarty version 3.1.24, created on 2016-05-08 22:00:45
         compiled from "C:/wamp5/www/views/login.html" */ ?>
<?php
/*%%SmartyHeaderCode:16239572f468d69c9a5_67284033%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5327f782a9df037eccc1a77124ae912547c05d17' => 
    array (
      0 => 'C:/wamp5/www/views/login.html',
      1 => 1459777504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16239572f468d69c9a5_67284033',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572f468d85bba2_08451426',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572f468d85bba2_08451426')) {
function content_572f468d85bba2_08451426 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16239572f468d69c9a5_67284033';
echo $_smarty_tpl->getSubTemplate ("header_nohead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<link href="css/login.css" rel="stylesheet" type="text/css">
<?php echo '<script'; ?>
 src="js/login.js" type="text/javascript"><?php echo '</script'; ?>
>

<div class="login-headbg">

     <div class="login-head">
        <!-- <div class="register-block">
            <span>没有账号？ </span>
            <a href="index.php?route=register">注册</a>
        </div> -->

    </div>
</div>

<!-- login背景 -->
<div class="login-bg">
     <!--login开始-->
    <div class="login">  

        <div class="login_left">
            
                <div class="login-logo">
                    <a href="index.php?route=home">
                    <h1 id="logo-img">
                      <li id="logo_name">菜小兜</li>
                      <li id="http">caixiaodou.cn</li>
                   </h1>
                  </a>
                </div>

                <div class="login_left-img">
                    <a><img src="images/adverts/advert<?php echo $_SESSION['advertImg'];?>
.jpg"/></a>            
                </div>
        </div>

        
        <div class="login_right">
        
            <!--注册表单-->  
            <form class="login_right_down" action="index.php?route=login" method="post" onsubmit = "return checkInput()" autocomplete="on">

                <div id="login_head">用户登录
                    <span id="phnum"><?php if (isset($_SESSION['boolLogin'])) {?>  <?php echo $_SESSION['boolLogin'];?>
 <?php }?></span>
                </div>

                <div class="login_seg"> <!--表单开始-->
                    
                   
                    <input class="frame" id="input_phNum" type="text" name="phNum"  placeholder="手机号" value="<?php if (isset($_SESSION['userTel'])) {
echo $_SESSION['userTel'];
}?>"/>
                   
                    <div class="login_tr">
                  
                    <input class="frame" id="input_pass" type="password" placeholder=""  name="pass" />
                    </div>
                    <div class="repass_tr">

                    <div class="auto-login">
                        <input type="checkbox" value="1" name="auto_login" id="autologin" class="f-check ui-checkbox">
                        <label class="normal" for="autologin">一周内自动登录</label>
                        <a target="_top" class="forget-password">忘记密码？</a>   
                    </div>
                  
                    <input class="submit_btn" type="submit" value="登录" style="cursor:pointer"/>
                    </div>
                    <p class="signup-guid">
                        &nbsp;还没有账号？
                        <a id="regNow" href="index.php?route=register">免费注册</a>
                    </p>
                  
                </div>
                <!--表单结束-->
                
            </form>
            <!--注册表单结束-->
        </div>
    </div> 
    <!--login结束-->   
</div>
<!-- login背景 -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>