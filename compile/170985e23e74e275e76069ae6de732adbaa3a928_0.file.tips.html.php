<?php /* Smarty version 3.1.24, created on 2016-05-10 15:41:18
         compiled from "C:/wamp5/www/views/tips.html" */ ?>
<?php
/*%%SmartyHeaderCode:73235731909e584500_45354002%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '170985e23e74e275e76069ae6de732adbaa3a928' => 
    array (
      0 => 'C:/wamp5/www/views/tips.html',
      1 => 1449380346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73235731909e584500_45354002',
  'variables' => 
  array (
    'tipsContents' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5731909f0f1f19_02208398',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5731909f0f1f19_02208398')) {
function content_5731909f0f1f19_02208398 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '73235731909e584500_45354002';
?>
<tr id="tips-head">
    <td colspan="2" class="tips-head" align="left"><?php echo $_SESSION['tipsTitle'];?>
</td>
   
</tr>
 <?php if ($_smarty_tpl->tpl_vars['tipsContents']->value) {?>  
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['content'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['content']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['name'] = 'content';
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tipsContents']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['content']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['content']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['content']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['content']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['content']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['content']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['content']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['content']['total']);
?> 
        <tr>
            <td class="tips" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['tipsContents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['content']['index']];?>
</td>
        </tr>
    <?php endfor; endif; ?>
<?php }
}
}
?>