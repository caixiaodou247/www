<?php /* Smarty version 3.1.24, created on 2016-05-12 11:34:12
         compiled from "C:/wamp5/www/views/home.html" */ ?>
<?php
/*%%SmartyHeaderCode:161905733f9b47c6960_53252592%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fd7087ae7e1d41f65410b7b44abbae15d7af94b' => 
    array (
      0 => 'C:/wamp5/www/views/home.html',
      1 => 1462955382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161905733f9b47c6960_53252592',
  'variables' => 
  array (
    'adverts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5733f9b5d34738_38257552',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5733f9b5d34738_38257552')) {
function content_5733f9b5d34738_38257552 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '161905733f9b47c6960_53252592';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <link href="css/home.css" rel="stylesheet" type="text/css" />
  <?php echo '<script'; ?>
 src="js/home.js" type="text/javascript"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/javascript" src="js/toTop.js"><?php echo '</script'; ?>
> 

  <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/marquee2.js"><?php echo '</script'; ?>
>

  
<!-- main主页面 -->
<div class="main">

  <div id="rotation-bg">
    <!-- 轮播效果-->
    <div class="con marquee" direction="left">
      <ul>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['advert'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['advert']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['name'] = 'advert';
$_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['adverts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['advert']['total']);
?>
        <li>  <a href="index.php?route=home"><img src="<?php echo $_smarty_tpl->tpl_vars['adverts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['advert']['index']]['imgRoot'];?>
" /></a> </li>
        <?php endfor; endif; ?>
      </ul>
    </div>
  <!-- 轮播图 -->
  </div>
  
  <div class="fiter-bg">
    <div class="fiter-body">
      <!-- 选择地址和菜式 -->
      <div class="filter">
        <!-- 显示栏 -->
        <div class="f-line clearfix">

          <!-- 地址信息 -->
          <div class="f-store">
            <div class="fs-cell delivery-location">配送至</div>
            <!-- 详细地址选择 -->
            <div id="store-selector" class>
              <div id="all" class="text" onmousemove="Show('store-content')" onmouseout="Hide('store-content')" >             
                <span id="CompeleteAdrr"><?php if (isset($_SESSION['choosedAddr']) && ($_SESSION['choosedAddr'])) {
echo $_SESSION['choosedAddr'];
} else { ?>广州市番禺区大学城南地铁<?php }?></span>
                <b></b>
              </div>

              <!-- 下方全部选择展示 -->
              <div id="store-content" class="store-content" onmousemove="Show('store-content')" onmouseout="Hide('store-content')">

                <!-- 展示开始 -->
                <div id="stock" data-widget="tabs" class="m stock">

                  <div class="mt">

                    <!-- 头部 -->
                    <ul class="tab">
                      <!-- 选择城市 -->
                      <li onclick="selectStoreTab(0)" data-widget="tab-item" id="CityTab" class="curr">
                        <a href="javascript:;">
                        <span id="city">请选择</span>
                        <i></i>
                        </a>
                      </li>
                      <!-- 选择城市 -->

                      <!-- 选择城区 -->
                      <li onclick="selectStoreTab(1)" data-widget="tab-item" id="AreaTab" class=" curr hide">
                        <a href="javascript:;">
                          <span id="area">请选择</span>
                          <i></i>
                          </a>
                      </li>
                      <!-- 选择城区 -->

                      <!-- 选择地铁站 -->
                      <li onclick="selectStoreTab(2)" data-widget="tab-item" id="MetroTab" class="curr hide">
                        <a href="javascript:;">
                          <span id="metro">请选择</span>
                          <i></i>
                          </a>
                      </li>
                      <!-- 选择地铁站 -->
                    </ul>
                    <!-- 头部 -->

                    <!-- 横线 -->
                    <div class="stock-line"></div>
                    <!-- 横线 -->
                  </div>
          
                  <!-- 城市选择展开 -->
                  <div data-area="0" data-widget="tab-content" id="CityShow" class="mc">
                    <ul class="area-list">
                      <li>
                        <a data-value="1601" href="#none" onclick="selectCity(1601 , '广州市')">广州市</a>
                      </li> 
                    </ul>
                    <p class="ac hide">请选择一级地区...</p>
                  </div>
                  <!-- 城市选择展开 -->

                  <!-- 城区选择展开 -->
                  <div data-area="1" data-widget="tab-content" id="AreaShow" class="mc hide">
                    <ul class="area-list">

                      <li>
                        <a data-value="36953" href="#none" onclick="selectArea(36953 , '番禺区')">番禺区</a>
                      </li>

                      <li>
                        <a data-value="50258" href="#none" onclick="selectArea(50258 , '白云区')">白云区</a>
                      </li>

                      <li>
                        <a data-value="3633" href="#none" onclick="selectArea(3633 , '天河区')">天河区</a>
                      </li>

                      <li>
                        <a data-value="3634" href="#none" onclick="selectArea(3634 , '海珠区')">海珠区</a>
                      </li>

                      <li>
                        <a data-value="3635" href="#none" onclick="selectArea(3635 , '荔湾区')">荔湾区</a>
                      </li>

                      <li>
                        <a data-value="3636" href="#none" onclick="selectArea(3636 , '越秀区')">越秀区</a>
                      </li>

                      <li>
                        <a data-value="50256" href="#none" onclick="selectArea(50256 , '花都区')">花都区</a>
                      </li>

                       <li>
                        <a data-value="50257" href="#none" onclick="selectArea(50257 , '萝岗区')">萝岗区</a>
                      </li> 
                      <li>
                        <a data-value="50259" href="#none" onclick="selectArea(50259 , '南沙区')">南沙区</a>
                      </li>

                     <!--  <li>
                        <a data-value="50283" href="#none" onclick="selectArea(50283 , '黄浦区')">黄浦区</a>
                      </li>

                      <li>
                        <a data-value="50284" href="#none" onclick="selectArea(50284 , '增城市')">增城市</a>
                      </li>

                      <li>
                        <a data-value="50285" href="#none" onclick="selectArea(50285 , '从化市')">从化市</a>
                      </li>

                      <li>
                        <a data-value="51091" href="#none" onclick="selectArea(51091 , '广州大学城')">广州大学城</a>
                      </li> -->
                    </ul>
                    <p class="ac hide">请选择二级地区</p>
                  </div>
                  <!-- 城区选择展开 -->
                  
                  <!-- 所有地铁选择展开 -->
                  <div data-area="2" data-widget="tab-content" id="MetroShow" class="mc">

                    <!-- 番禺区 地铁选择展开 -->
                    <div data-area="3" data-widget="tab-content" id="MetroShow36953" class="mc hide">
                      <ul class="area-list">
                        <li>
                          <a data-value="369531" href="#none" onclick="onclickMetro(369531 , '大学城南地铁')">大学城南地铁</a>
                        </li>

                        <li>
                          <a data-value="369532" href="#none" onclick="onclickMetro(369532 , '大学城北地铁')">大学城北地铁</a>
                        </li>

                        <li>
                          <a data-value="369533" href="#none" onclick="onclickMetro(369533 , '新造地铁')">新造地铁</a>
                        </li>

                        <li>
                          <a data-value="369534" href="#none" onclick="onclickMetro(369534 , '石碁地铁')">石碁地铁</a>
                        </li>    

                        <li>
                          <a data-value="369535" href="#none" onclick="onclickMetro(369535 , '海傍地铁')">海傍地铁</a>
                        </li> 

                        <li>
                          <a data-value="369536" href="#none" onclick="onclickMetro(369536 , '低涌地铁')">低涌地铁</a>
                        </li> 

                        <li>
                          <a data-value="369537" href="#none" onclick="onclickMetro(369537 , '东涌地铁')">东涌地铁</a>
                        </li> 

                        <li>
                          <a data-value="369538" href="#none" onclick="onclickMetro(369538 , '厦滘地铁')">厦滘地铁</a>
                        </li> 

                        <li>
                          <a data-value="369539" href="#none" onclick="onclickMetro(369539 , '大石地铁')">汉溪长隆地铁</a>
                        </li> 

                        <li>
                          <a data-value="369540" href="#none" onclick="onclickMetro(369540 , '市桥地铁')">市桥地铁</a>
                        </li> 

                        <li>
                          <a data-value="369541" href="#none" onclick="onclickMetro(369541 , '番禺广场地铁')">番禺广场地铁</a>
                        </li> 

                        <li>
                          <a data-value="369542" href="#none" onclick="onclickMetro(369542 , '洛溪地铁')">洛溪地铁</a>
                        </li>

                        <li>
                          <a data-value="369543" href="#none" onclick="onclickMetro(369543 , '南浦地铁')">南浦地铁</a>
                        </li>  

                        <li>
                          <a data-value="369544" href="#none" onclick="onclickMetro(369544 , '会江地铁')">会江地铁</a>
                        </li>  

                        <li>
                          <a data-value="369545" href="#none" onclick="onclickMetro(369545 , '石壁地铁')">石壁地铁</a>
                        </li>  

                        <li>
                          <a data-value="369546" href="#none" onclick="onclickMetro(369546 , '广州南站地铁')">广州南站地铁</a>
                        </li>        
                      </ul>
                      <p class="ac hide">请选择您附近地铁...</p>
                    </div>
                    <!-- 番禺区 地铁选择展开 -->

                    <!-- 白云区 地铁选择展开 -->
                    <div data-area="3" data-widget="tab-content" id="MetroShow50258" class="mc hide">
                      <ul class="area-list">
                        <li>
                          <a data-value="502581" href="#none" onclick="onclickMetro(502581 , '江夏地铁')">江夏地铁</a>
                        </li>

                        <li>
                          <a data-value="502582" href="#none" onclick="onclickMetro(502582 , '嘉禾望岗地铁')">嘉禾望岗地铁</a>
                        </li>

                        <li>
                          <a data-value="502583" href="#none" onclick="onclickMetro(502583 , '黄边地铁')">黄边地铁</a>
                        </li>
                        
                        <li>
                          <a data-value="502584" href="#none" onclick="onclickMetro(502584 , '萧岗地铁')">萧岗地铁</a>
                        </li>

                        <li>
                          <a data-value="502585" href="#none" onclick="onclickMetro(502585 , '白云文化广场地铁')">白云文化广场地铁</a>
                        </li>

                        <li>
                          <a data-value="502586" href="#none" onclick="onclickMetro(502586 , '白云公园地铁')">白云公园地铁</a>
                        </li>

                        <li>
                          <a data-value="502587" href="#none" onclick="onclickMetro(502587 , '飞翔公园地铁')">飞翔公园地铁</a>
                        </li>

                        <li>
                          <a data-value="502588" href="#none" onclick="onclickMetro(502588 , '三元里地铁')">三元里地铁</a>
                        </li>

                        <li>
                          <a data-value="502589" href="#none" onclick="onclickMetro(502589, '人和地铁')">人和地铁</a>
                        </li>

                        <li>
                          <a data-value="5025810" href="#none" onclick="onclickMetro(5025810 , '龙归地铁')">龙归地铁</a>
                        </li>

                        <li>
                          <a data-value="5025811" href="#none" onclick="onclickMetro(5025811 , '白云大道北地铁')">白云大道北地铁</a>
                        </li>

                        <li>
                          <a data-value="5025812" href="#none" onclick="onclickMetro(5025812 , '永泰地铁')">永泰地铁</a>
                        </li>

                        <li>
                          <a data-value="5025813" href="#none" onclick="onclickMetro(5025813 , '同和地铁')">同和地铁</a>
                        </li>

                        <li>
                          <a data-value="5025814" href="#none" onclick="onclickMetro(5025814 , '京西南医院地铁')">京西南医院地铁</a>
                        </li>

                        <li>
                          <a data-value="5025815" href="#none" onclick="onclickMetro(5025815 , '梅花园地铁')">梅花园地铁</a>
                        </li>                   

                      </ul>
                      <p class="ac hide">请选择您附近地铁...</p>
                    </div>
                    <!-- 白云区 地铁选择展开 -->

                    <!-- 天河区 地铁选择展开 -->
                    <div data-area="3" data-widget="tab-content" id="MetroShow3633" class="mc hide">
                      <ul class="area-list">
                        <li>
                          <a data-value="36331" href="#none" onclick="onclickMetro(36331 , '广州东站地铁')">广州东站地铁</a>
                        </li>

                        <li>
                          <a data-value="36332" href="#none" onclick="onclickMetro(36332 , '体育中心地铁')">体育中心地铁</a>
                        </li>

                        <li>
                          <a data-value="36333" href="#none" onclick="onclickMetro(36333 , '天河客运站地铁')">天河客运站地铁</a>
                        </li>

                        <li>
                          <a data-value="36334" href="#none" onclick="onclickMetro(36334 , '五山地铁')">五山地铁</a>
                        </li>

                        <li>
                          <a data-value="36335" href="#none" onclick="onclickMetro(36335 , '华师地铁')">华师地铁</a>
                        </li> 

                        <li>
                          <a data-value="36336" href="#none" onclick="onclickMetro(36336 , '岗顶地铁')">岗顶地铁</a>
                        </li> 

                        <li>
                          <a data-value="36337" href="#none" onclick="onclickMetro(36337 , '石牌桥地铁')">石牌桥地铁</a>
                        </li> 

                        <li>
                          <a data-value="36338" href="#none" onclick="onclickMetro(36338 , '体育西地铁')">体育西地铁</a>
                        </li> 

                        <li>
                          <a data-value="36339" href="#none" onclick="onclickMetro(36339 , '珠江新城地铁')">珠江新城地铁</a>
                        </li> 

                        <li>
                          <a data-value="363310" href="#none" onclick="onclickMetro(363310 , '梅花园地铁')">梅花园地铁</a>
                        </li> 

                        <li>
                          <a data-value="363311" href="#none" onclick="onclickMetro(363311 , '燕塘地铁')">燕塘地铁</a>
                        </li> 

                        <li>
                          <a data-value="363312" href="#none" onclick="onclickMetro(363312 , '车陂地铁')">车陂地铁</a>
                        </li> 
                   
                        <li>
                          <a data-value="363313" href="#none" onclick="onclickMetro(363313 , '黄村地铁')">黄村地铁</a>
                        </li>

                        <li>
                          <a data-value="363314" href="#none" onclick="onclickMetro(363314 , '猎德地铁')">猎德地铁</a>
                        </li>

                        <li>
                          <a data-value="363315" href="#none" onclick="onclickMetro(363315 , '潭村地铁')">潭村地铁</a>
                        </li>

                        <li>
                          <a data-value="363316" href="#none" onclick="onclickMetro(363316 , '员村地铁')">员村地铁</a>
                        </li>

                        <li>
                          <a data-value="363317" href="#none" onclick="onclickMetro(363317 , '科韵路地铁')">科韵路地铁</a>
                        </li>

                        <li>
                          <a data-value="363318" href="#none" onclick="onclickMetro(363318 , '东圃地铁')">东圃地铁</a>
                        </li>

                        <li>
                          <a data-value="363319" href="#none" onclick="onclickMetro(363319 , '三溪地铁')">三溪地铁</a>
                        </li>  

                        <li>
                          <a data-value="363321" href="#none" onclick="onclickMetro(363321 , '林和西地铁')">林和西地铁</a>
                        </li>

                        <li>
                          <a data-value="363322" href="#none" onclick="onclickMetro(363322 , '体育中心南地铁')">体育中心南地铁</a>
                        </li>

                        <li>
                          <a data-value="363323" href="#none" onclick="onclickMetro(363323 , '黄埔大道地铁')">黄埔大道地铁</a>
                        </li>

                        <li>
                          <a data-value="363324" href="#none" onclick="onclickMetro(363324 , '妇儿中心地铁')">妇儿中心地铁</a>
                        </li>

                        <li>
                          <a data-value="363325" href="#none" onclick="onclickMetro(363325 , '花城大道地铁')">花城大道地铁</a>
                        </li> 

                        <li>
                          <a data-value="363326" href="#none" onclick="onclickMetro(363326 , '歌剧院地铁')">歌剧院地铁</a>
                        </li>

                        <li>
                          <a data-value="363327" href="#none" onclick="onclickMetro(363327 , '海心沙地铁')">海心沙地铁</a>
                        </li>   
                      </ul>
                      <p class="ac hide">请选择您附近地铁...</p>
                    </div>
                    <!-- 天河区 地铁选择展开 -->

                    <!-- 海珠区 地铁选择展开 -->
                    <div data-area="3" data-widget="tab-content" id="MetroShow3634" class="mc hide">
                      <ul class="area-list">
                        <li>
                          <a data-value="36341" href="#none" onclick="onclickMetro(36341 , '市二宫地铁')">市二宫地铁</a>
                        </li>

                        <li>
                          <a data-value="36342" href="#none" onclick="onclickMetro(36342 , '江南西地铁')">江南西地铁</a>
                        </li>

                        <li>
                          <a data-value="36343" href="#none" onclick="onclickMetro(36343 , '昌岗地铁')">昌岗地铁</a>
                        </li>

                        <li>
                          <a data-value="36344" href="#none" onclick="onclickMetro(36344 , '江泰路地铁')">江泰路地铁</a>
                        </li> 

                        <li>
                          <a data-value="36345" href="#none" onclick="onclickMetro(36345 , '东晓南地铁')">东晓南地铁</a>
                        </li> 

                        <li>
                          <a data-value="36346" href="#none" onclick="onclickMetro(36346 , '南洲地铁')">南洲地铁</a>
                        </li> 

                        <li>
                          <a data-value="36347" href="#none" onclick="onclickMetro(36347 , '凤凰新村地铁')">凤凰新村地铁</a>
                        </li> 

                        <li>
                          <a data-value="36348" href="#none" onclick="onclickMetro(36348 , '地铁')">地铁</a>
                        </li> 

                        <li>
                          <a data-value="36349" href="#none" onclick="onclickMetro(36349 , '沙园地铁')">沙园地铁</a>
                        </li>

                        <li>
                          <a data-value="36350" href="#none" onclick="onclickMetro(36350 , '宝岗大道地铁')">宝岗大道地铁</a>
                        </li>

                        <li>
                          <a data-value="36351" href="#none" onclick="onclickMetro(36351 , '晓港地铁')">晓港地铁</a>
                        </li>

                        <li>
                          <a data-value="36352" href="#none" onclick="onclickMetro(36352 , '中大地铁')">中大地铁</a>
                        </li>

                        <li>
                          <a data-value="36353" href="#none" onclick="onclickMetro(36353 , '鹭江地铁')">鹭江地铁</a>
                        </li>

                        <li>
                          <a data-value="36354" href="#none" onclick="onclickMetro(36354 , '客村地铁')">客村地铁</a>
                        </li>

                        <li>
                          <a data-value="36355" href="#none" onclick="onclickMetro(36355 , '赤岗地铁')">赤岗地铁</a>
                        </li> 

                        <li>
                          <a data-value="36356" href="#none" onclick="onclickMetro(36356 , '磨碟沙地铁')">磨碟沙地铁</a>
                        </li> 

                        <li>
                          <a data-value="36357" href="#none" onclick="onclickMetro(36357 , '新港东地铁')">新港东地铁</a>
                        </li> 

                        <li>
                          <a data-value="36358" href="#none" onclick="onclickMetro(36358 , '琶洲地铁')">琶洲地铁</a>
                        </li> 

                         <li>
                          <a data-value="36359" href="#none" onclick="onclickMetro(36359 , '万胜围地铁')">万胜围地铁</a>
                        </li>

                         <li>
                          <a data-value="36360" href="#none" onclick="onclickMetro(36360 , '官洲地铁')">官洲地铁</a>
                        </li>

                         <li>
                          <a data-value="36361" href="#none" onclick="onclickMetro(36361 , '赤岗塔地铁')">赤岗塔地铁</a>
                        </li>  

                        <li>
                          <a data-value="36362" href="#none" onclick="onclickMetro(36362, '大塘地铁')">大塘地铁</a>
                        </li>

                        <li>
                          <a data-value="36363" href="#none" onclick="onclickMetro(36363 , '沥滘地铁')">沥滘地铁</a>
                        </li>     
                      </ul>
                      <p class="ac hide">请选择您附近地铁...</p>
                    </div>
                    <!-- 海珠区 地铁选择展开 -->

                    <!-- 荔湾区 地铁选择展开 -->
                    <div data-area="3" data-widget="tab-content" id="MetroShow3635" class="mc hide">
                      <ul class="area-list">
                        <li>
                          <a data-value="36351" href="#none" onclick="onclickMetro(36351 , '中山八地铁')">中山八地铁</a>
                        </li>

                        <li>
                          <a data-value="36352" href="#none" onclick="onclickMetro(36352 , '西村地铁')">西村地铁</a>
                        </li>

                        <li>
                          <a data-value="36353" href="#none" onclick="onclickMetro(36353 , '长寿路地铁')">长寿路地铁</a>
                        </li>

                        <li>
                          <a data-value="36354" href="#none" onclick="onclickMetro(36354 , '陈家祠地铁')">陈家祠地铁</a>
                        </li>

                        <li>
                          <a data-value="36355" href="#none" onclick="onclickMetro(36355 , '坦尾地铁')">坦尾地铁</a>
                        </li>

                        <li>
                          <a data-value="36356" href="#none" onclick="onclickMetro(36356 , '窖口地铁')">窖口地铁</a>
                        </li>

                        <li>
                          <a data-value="36357" href="#none" onclick="onclickMetro(36357 , '河沙地铁')">河沙地铁</a>
                        </li>

                        <li>
                          <a data-value="36358" href="#none" onclick="onclickMetro(36358 , '如意坊地铁')">如意坊地铁</a>
                        </li>

                        <li>
                          <a data-value="36359" href="#none" onclick="onclickMetro(36359 , '西场地铁')">西场地铁</a>
                        </li>

                        <li>
                          <a data-value="36360" href="#none" onclick="onclickMetro(36360 , '黄沙地铁')">文黄沙地铁</a>
                        </li>

                        <li>
                          <a data-value="36361" href="#none" onclick="onclickMetro(36361 , '沙涌地铁')">沙涌地铁</a>
                        </li>

                        <li>
                          <a data-value="36362" href="#none" onclick="onclickMetro(36362 , '文化公园地铁')">文化公园地铁</a>
                        </li>

                        <li>
                          <a data-value="36363" href="#none" onclick="onclickMetro(36363 , '菊树地铁')">菊树地铁</a>
                        </li>

                        <li>
                          <a data-value="36364" href="#none" onclick="onclickMetro(36364 , '鹤洞地铁')">鹤洞地铁</a>
                        </li> 

                        <li>
                          <a data-value="36365" href="#none" onclick="onclickMetro(36365 , '坑口地铁')">坑口地铁</a>
                        </li>          

                        <li>
                          <a data-value="36366" href="#none" onclick="onclickMetro(36366 , '花地湾地铁')">花地湾地铁</a>
                        </li> 

                        <li>
                          <a data-value="36367" href="#none" onclick="onclickMetro(36367 , '芳村地铁')">芳村地铁</a>
                        </li> 

                        <li>
                          <a data-value="36368" href="#none" onclick="onclickMetro(36368 , '西朗地铁')">西朗地铁</a>
                        </li> 

                        <li>
                          <a data-value="36369" href="#none" onclick="onclickMetro(36369 , '龙溪地铁')">龙溪地铁</a>
                        </li> 
                      </ul>
                      <p class="ac hide">请选择您附近地铁...</p>
                    </div>
                    <!-- 荔湾区 地铁选择展开 -->

                    <!-- 越秀区 地铁选择展开 -->
                    <div data-area="3" data-widget="tab-content" id="MetroShow3636" class="mc hide">
                      <ul class="area-list">
                        <li>
                          <a data-value="36361" href="#none" onclick="onclickMetro(36361 , '西门口地铁')">西门口地铁</a>
                        </li>

                        <li>
                          <a data-value="36362" href="#none" onclick="onclickMetro(36362 , '公园前地铁')">公园前地铁</a>
                        </li>

                        <li>
                          <a data-value="36363" href="#none" onclick="onclickMetro(36363 , '农讲所地铁')">农讲所地铁</a>
                        </li>

                        <li>
                          <a data-value="36364" href="#none" onclick="onclickMetro(36364 , '烈士林园地铁')">烈士林园地铁</a>
                        </li>   

                        <li>
                          <a data-value="36364" href="#none" onclick="onclickMetro(36364 , '东山口地铁')">东山口地铁</a>
                        </li>  

                        <li>
                          <a data-value="36364" href="#none" onclick="onclickMetro(36364 , '杨箕地铁')">杨箕地铁</a>
                        </li> 

                        <li>
                          <a data-value="36364" href="#none" onclick="onclickMetro(36364 , '广州火车站地铁')">广州火车站地铁</a>
                        </li> 

                        <li>
                          <a data-value="36364" href="#none" onclick="onclickMetro(36364 , '海珠广场地铁')">海珠广场地铁</a>
                        </li> 

                        <li>
                          <a data-value="36364" href="#none" onclick="onclickMetro(36364 , '小北地铁')">小北地铁</a>
                        </li> 

                        <li>
                          <a data-value="36364" href="#none" onclick="onclickMetro(36364 , '淘金地铁')">淘金地铁</a>
                        </li>

                        <li>
                          <a data-value="36364" href="#none" onclick="onclickMetro(36364 , '区庄地铁')">区庄地铁</a>
                        </li> 

                        <li>
                          <a data-value="36364" href="#none" onclick="onclickMetro(36364 , '动物园地铁')">动物园地铁</a>
                        </li> 

                        <li>
                          <a data-value="36364" href="#none" onclick="onclickMetro(36364 , '五羊邨地铁')">五羊邨地铁</a>
                        </li>       
                      </ul>
                      <p class="ac hide">请选择您附近地铁...</p>
                    </div>
                    <!-- 越秀区 地铁选择展开 -->

                    <!-- 花都区 地铁选择展开 -->
                    <div data-area="3" data-widget="tab-content" id="MetroShow50256" class="mc hide">
                      <ul class="area-list">
                        <li>
                          <a data-value="369531" href="#none" onclick="onclickMetro(369531 , '机场南地铁')">机场南地铁</a>
                        </li>
                      </ul>
                      <p class="ac hide">抱歉，花都区尚未开张店面...</p>
                    </div>
                    <!-- 花都区 地铁选择展开 -->

                    <!-- 萝岗区 地铁选择展开 -->
                    <div data-area="3" data-widget="tab-content" id="MetroShow50257" class="mc hide">
                      <ul class="area-list">
                        
                      </ul>
                      <p class="ac">抱歉，萝岗区尚未开张店面......</p>
                    </div>
                    <!-- 萝岗区 地铁选择展开 -->

                    <!-- 南沙区 地铁选择展开 -->
                    <div data-area="3" data-widget="tab-content" id="MetroShow50259" class="mc hide">
                      <ul class="area-list">
                        <li>
                          <a data-value="502591" href="#none" onclick="onclickMetro(502591 , '黄阁汽车城地铁')">黄阁汽车城地铁</a>
                        </li>

                        <li>
                          <a data-value="502592502593" href="#none" onclick="onclickMetro(502592502593 , '黄阁地铁')">黄阁地铁</a>
                        </li>

                        <li>
                          <a data-value="502593" href="#none" onclick="onclickMetro(502593 , '蕉门地铁')">蕉门地铁</a>
                        </li>

                        <li>
                          <a data-value="502594" href="#none" onclick="onclickMetro(502594 , '金洲地铁')">金洲地铁</a>
                        </li>         
                      </ul>
                      <p class="ac hide">请选择您附近地铁...</p>
                    </div>
                    <!-- 南沙区 地铁选择展开 -->
                  </div>
                  <!-- 所有地铁选择展开 -->

                </div>
                <!-- 展示开始 -->
              </div>
              <!-- 下方全部选择展示 -->

            </div>
            <!-- 详细地址选择 -->
          </div>
          <!-- 地址信息 -->

          <!-- 菜式 -->
          <div class="f-food">

            <!-- 显示当前菜式 -->
            <div class="food-choose">菜式选择</div>
            <!-- 显示当前菜式 -->

            <!-- 详细菜式分类选择 -->
            <div class="food-selector" onmousemove="Show('food-content')" onmouseout="Hide('food-content')">
              <!-- 选定菜式显示 -->
              <div id="food-all" class="text" >
                <span id="foodchoosed"><?php if (isset($_SESSION['foodName']) && ($_SESSION['foodName'])) {
echo $_SESSION['foodName'];
} else { ?>全部菜品<?php }?></span>
                <b></b>
              </div>
              <!-- 选定菜式显示 -->

              <!-- 菜式全部选择展示 -->
              <div id="food-content" class="food-content"  >
                  <!-- 菜式展示开始 -->
                  <div id="food-stock" data-widget="tabs" class="m food-stock">
                    <!-- 头部 -->
                    <div class="mt">
                      <ul class="tab">

                        <!-- 分类 -->
                        <li onclick="selectFoodTab(0)" data-widget="tab-item" id="foodKindTab" class="curr">
                        <a href="javascript:;">
                          <span id="foodKind">请选择分类</span>
                          <i></i>
                        </a>
                        </li>
                        <!-- 分类 -->

                        <!-- 菜式 -->
                        <li onclick="selectFoodTab(1)" data-widget="tab-item" id="foodNameTab" class="curr hide">
                        <a href="javascript:;">
                          <span id="foodName">请选择菜式</span>
                        </a>
                        <i></i>
                        </li>
                        <!-- 菜式 -->
                      </ul>
                    </div>
                    <!-- 头部 -->

                    <!-- 菜式分类选择展开 -->
                    <div data-food="0" data-widget="tab-content" id="foodKindShow" class="mc">
                      <ul class="food-list">

                        <li>
                          <a href="#none" onclick="selectFoodKind(101,'全部菜品')">全部菜品

                          </a>
                        </li> 
                        
                        <li>
                          <a href="#none" onclick="selectFoodKind(202,'西餐特色')">西餐特色

                          </a>
                        </li> 

                        <li>
                          <a href="#none" onclick="selectFoodKind(303,'中式美食')">中式美食
                            
                          </a>
                        </li>

                        <li>
                          <a href="#none" onclick="selectFoodKind(404,'其他美食')">其他美食 
                            
                          </a>
                        </li>
                      </ul>
                      <!-- 横线 -->
                      <div class="stock-line"></div>
                      <!-- 横线 -->
                    </div>
                    <!-- 菜式分类选择展开 -->

                    <!-- 所有菜式展开 -->
                    <div data-area="2" data-widget="tab-content" id="foodNameShow" class="mc">

                      <!-- 全部菜品选择 -->
                        <div data-food="1" data-widget="tab-content" id="foodNameShow101" class="mc hide">
                          <ul class="food-list">
                            <li>
                              <a href="#none" onclick="selectFoodName(1011 , '全部菜品')">全部菜品
                              </a>

                            </li>
                          </ul>  
                        </div>
                      <!-- 全部菜品选择 -->

                      <!-- 西餐特色展开 -->
                        <div data-food="1" data-widget="tab-content" id="foodNameShow202" class="mc hide">
                          <ul class="food-list">
                            <li>
                              <a href="#none" onclick="selectFoodName(2021 , '鲜嫩牛排')">鲜嫩牛排
                              </a>

                            </li>

                            <li>
                              <a href="#none" onclick="selectFoodName(2022 , '美味猪排')">美味猪排
                              </a>
                              
                            </li>

                            <li>
                              <a href="#none" onclick="selectFoodName(2023 , '香脆鸡排')">香脆鸡排
                              </a>
                              
                            </li>

                            <li>
                              <a href="#none" onclick="selectFoodName(2024 , '风味羊排')">风味羊排
                              </a>
                              
                            </li>

                            <li>
                              <a href="#none" onclick="selectFoodName(2025 , '西式糕点')">西式糕点
                              </a>
                              
                            </li>

                            <li>
                              <a href="#none" onclick="selectFoodName(2026 , '特色面食')">特色面食
                              </a>
                              
                            </li>
                          </ul>  
                        </div>
                      <!-- 西餐特色展开 -->

                      <!-- 中式美食展开 -->
                        <div data-food="1" data-widget="tab-content" id="foodNameShow303" class="mc hide">
                          <ul class="food-list">
                            <li>
                              <a href="#none" onclick="selectFoodName(3031 , '清淡粤菜')">清淡粤菜
                              </a>

                            </li>

                            <li>
                              <a href="#none" onclick="selectFoodName(3032 , '酥鲜苏菜')">酥鲜苏菜
                              </a>
                              
                            </li>

                            <li>
                              <a href="#none" onclick="selectFoodName(3033 , '咸甜闽菜')">咸甜闽菜
                              </a>
                              
                            </li>

                            <li>
                              <a href="#none" onclick="selectFoodName(3034 , '烧炖徽菜')">烧炖徽菜
                              </a>
                              
                            </li>

                            <li>
                              <a href="#none" onclick="selectFoodName(3035 , '腌腊湘菜')">腌腊湘菜
                              </a>
                              
                            </li>

                            <li>
                              <a href="#none" onclick="selectFoodName(3036 , '鲜嫩浙菜')">鲜嫩浙菜
                              </a>
                              
                            </li>

                            <li>
                              <a href="#none" onclick="selectFoodName(3037 , '清香鲁菜')">清香鲁菜
                              </a>
                              
                            </li>

                            <li>
                              <a href="#none" onclick="selectFoodName(3038 , '麻辣川菜')">麻辣川菜
                              </a>
                              
                            </li>                        
                          </ul>  
                        </div>
                      <!-- 中式美食展开 -->

                      <!-- 其他美食展开 -->
                        <div data-food="1" data-widget="tab-content" id="foodNameShow404" class="mc hide">
                          <ul class="food-list">
                            <li>
                              <a href="#none" onclick="selectFoodName(4041 , '新鲜果品')">新鲜果品
                              </a>

                            </li>

                            <li>
                              <a href="#none" onclick="selectFoodName(4042 , '酒水饮料')">酒水饮料
                              </a>
                              
                            </li>

                            <li>
                              <a href="#none" onclick="selectFoodName(4043 , '其他美食')">其他美食
                              </a>
                              
                            </li>
                          </ul>  
                        </div>
                      <!-- 其他美食展开 -->
                    </div>
                    <!-- 所有菜式展开 -->
                  </div>
                <!-- 菜式展示开始 -->
              </div>
              <!-- 菜式全部选择展示 -->
            </div>
            <!-- 详细菜式分类选择 -->

          </div>
          <!-- 菜式 -->
        </div>
        <!-- 显示栏 -->
      </div>
      <!-- 选择地址和菜式 -->
    </div>

  </div>

</div>
<!-- main主页 -->
  
  <!-- 商品展示区 -->
  <div id="show-bg">
    <div id="showKind">

    </div>
  </div>
    
  <!-- 商品展示区 -->



<!-- 右下角导航 -->
<div class="right-nav" id="right-nav">
  <a href="javascript:;" id="top" >
    <span id="span-top">回到顶部</span>
  </a> 
</div>

<!-- 右下角导航 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>