<?php /* Smarty version 3.1.24, created on 2016-05-08 22:01:12
         compiled from "C:/wamp5/www/views/member.html" */ ?>
<?php
/*%%SmartyHeaderCode:17644572f46a808c5f9_82258097%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '590c582f95ff5f84a4ec4babd65e48bc361a6938' => 
    array (
      0 => 'C:/wamp5/www/views/member.html',
      1 => 1460261318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17644572f46a808c5f9_82258097',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572f46a81d1d87_30625483',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572f46a81d1d87_30625483')) {
function content_572f46a81d1d87_30625483 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17644572f46a808c5f9_82258097';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<link href="css/member.css" rel="stylesheet" type="text/css">

<?php echo '<script'; ?>
 src="js/member.js" type="text/javascript"><?php echo '</script'; ?>
> 

<div class="member"><!--member区开始--> 	
    <div class="mem_left "><!--订单及用户信息开始--> 
        <ul>
            <li class="_head">订单管理</li>
            <li class="_body" id="0" value="all">我&nbsp;的&nbsp;&nbsp;订单&nbsp;<span><?php echo $_SESSION['all'];?>
</span></li>
            <li class="_body" id="1" value="paying">待付款订单&nbsp;<span id="span_paying"><?php echo $_SESSION['paying'];?>
</span></li>
            <li class="_body" id="2" value="taking">待取菜订单&nbsp;<span id="span_taking"><?php echo $_SESSION['taking'];?>
</span></li>
            <li class="_body" id="3" value="done">已完成订单&nbsp;<span id="span_done"><?php echo $_SESSION['done'];?>
</span></li>
            <li class="_body" id="4" value="cancled">已取消订单&nbsp;<span id="span_cancled"><?php echo $_SESSION['cancled'];?>
</span></li>
            <li class="_head">用户信息</li>
            <li class="_user">编辑用户信息</li>
            <li class="_user">修改用户密码</li>
            <li class="_head"><a href="index.php?route=loginout">退出系统</a></li>
         </ul>

    </div><!--订单及用户信息结束-->

    <div  id ="show" class = "menu_right_order"> <!-- 个人中心右边部分 -->
       
        <div id="orderFlag">
      
        </div>   
     
    </div>    <!-- 个人中心右边部分 -->
     

    <!-- 个人中心右边部分 -->
    <div  id ="" class = "menu_right"> 
        <!-- 小右区 -->
        <div class="subRight">
            <!-- 信息区 编辑用户信息-->
            <form id="r_left" action="#" >
                <table>
                    <tbody>
                        <tr id="h3">
                            <td>编辑用户信息</td>
                        </tr>
                        <tr>
                            <td><span class="star">*</span>
                            <span>手机号码：</span></td>
                        </tr>
                        <tr>
                            <td><input type="text" id="chngInput_phNum" name="phNum" value="<?php echo $_SESSION['userTel'];?>
" readonly /></td>
                        </tr>

                        <tr>
                            <td><span class="star">*</span>
                            <span>昵称：<p id="nickName"></p></span></td>
                        </tr>
                        <tr>
                            <td><input type="text" id="chngInput_name" name="name" value="<?php echo $_SESSION['userName'];?>
" onkeypress="getKey();" /></td>
                        </tr>
                        <tr>
                            <td><span>&nbsp;&nbsp;性别：</span>
                            <input type="radio" name="salution" onkeypress="getKey();" value = "男" <?php echo $_SESSION['checkM'];?>
 /><span>男</span>
                            <input type="radio" name="salution" onkeypress="getKey();" value = "女" <?php echo $_SESSION['checkF'];?>
 /><span>女</span>
                             <input type="radio" name="salution" onkeypress="getKey();" value = "保密" <?php echo $_SESSION['checkO'];?>
 /><span>保密</span>
                            </td>
                     
                        </tr>                              
                        <tr>
                            <td>
                                <span>&nbsp;&nbsp;电子邮箱：<p id="emailAdr"></p>
                                </span>
                            </td>   
                        </tr>
                        <tr>
                            <td>
                            <input type="text" id="chngInput_exp" name="email" value="<?php echo $_SESSION['email'];?>
" onkeypress="getKey();" />
                            </td>
                        </tr>
                      
                        <tr>
                            <td>
                                <input class = "button" onclick="userModify()" onkeypress="getKey();" value="保存修改" readonly="true" />
                            </td>
                        </tr>
                    </tbody> 
                </table>
            </form>
            <!-- 信息区 -->
        </div>
        <!-- 小右区 -->
    </div>
    <!-- 个人中心右边部分 -->

    <!-- 个人中心右边部分 -->
    <div  id ="" class = "menu_right"> 
        <!-- 小右区 -->
        <div class="subRight">
            <!-- 信息区 修改密码-->
            <form id="r_left" action="#">
                <table>
                   
                    <tbody>
                        <tr id="h3">
                            <td>修改用户密码
                            </td>
                        </tr>   
                        
                        <tr>
                            <td>
                                <span class="star">*</span>
                                <span>原密码：</span>
                                <span id="boolPassTrue"><?php if (isset($_SESSION['boolRegister'])) {?> <?php echo $_SESSION['boolRegister'];?>
 <?php }?>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                             <input type="password" id="chngInput_OldPass" name="pass" value="" onkeypress="getKey1();" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <span class="star">*</span>
                            <span>新密码：</span>
                            <span id='NewPass'></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" id="chngInput_NewPass" name="Npass" value = "" onkeypress="getKey1();" />
                            </td>
                        </tr>                                                                              
                        <tr>
                            <td>
                                <span class="star">*</span>
                                <span>确认密码：</span>
                                <span id="Passf"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" id="chngInput_Passf" name="Npassf" value = "" onkeypress="getKey1();" />
                            </td>
                        </tr>
                      
                        <tr>
                            <td>
                                <input class = "button buttonPass" onclick="userPassChange()" onkeypress="getKey1();" value="保存修改" readonly="true" />
                            </td>
                        
                        </tr>
                    </tbody> 
                </table>
            </form>
            <!-- 信息区 -->
        </div>
        <!-- 小右区 -->
    </div>
    <!-- 个人中心右边部分 -->
</div>
<!--member区结束-->  


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>