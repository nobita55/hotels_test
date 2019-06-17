<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-06 16:46:08
         compiled from "./templates/special_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16366747756f0a2b1e4e1b9-00982648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '705d09021b641e9714c3b068851eefd4b4acf385' => 
    array (
      0 => './templates/special_list.tpl',
      1 => 1480925667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16366747756f0a2b1e4e1b9-00982648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f0a2b1f21136_13510851',
  'variables' => 
  array (
    'specials' => 0,
    'row' => 0,
    'pageInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f0a2b1f21136_13510851')) {function content_56f0a2b1f21136_13510851($_smarty_tpl) {?><!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/common.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/header.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/footer.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/searchpanel.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/font-awesome.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/listingcards.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/card.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/pager.css" type="text/css" media="screen">
<link rel="apple-touch-icon" href="/img/common/apple-touch-icon.png">
<link rel="stylesheet" href="/css/special.css" type="text/css" media="screen">
<title>特集一覧-ホテルズワーク</title>
<meta name="description" content="ホテル・旅館・リゾート求人の「ホテルズワーク」。宿泊施設に特化したアルバイト・正社員求人サイト">
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
</head>
<body>

<!-- ヘッダー -->
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('HTDOCS_DIR'))."/templates/header_common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- / ヘッダー -->

<div class="specialPageTitle">
    <div id="wrapperSpecial">
        <h2>特集一覧</h2>
    </div>
</div>
<div id="wrapper">
    <div class="cards-simple-wrapper">
        <div class="row">
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['specials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <div class="col-sm-6 colSpecial" itemscope itemtype="http://schema.org/JobPosting">
                <?php if ($_smarty_tpl->tpl_vars['row']->value['img']['fileName']) {?>
                <div class="card-simple" data-background-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['img']['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" style=" background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['img']['fileName'], ENT_QUOTES, 'UTF-8', true);?>
);" itemprop="image" content="https://hotelswork.net/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['img']['fileName'], ENT_QUOTES, 'UTF-8', true);?>
">
                <?php } else { ?>
                <div class="card-simple" data-background-image="/img/common/noimg/special_no_img.png" style=" background-image:url(/img/common/noimg/special_no_img.png);">
                <?php }?>
                    <a href="/special/contens/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <div class="card-simple-background special-background"></div>
                    <!-- /.card-simple-background --> 
                    </a> </div>
                <!-- /.card-simple -->
                <div class="moreSPInfo">
                    <div class="cardListSPTitle" itemprop="title"><a href="/special/contens/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></div>
                    <div class="cardListSPInfo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                </div>
            </div>
            <!-- /.col-* -->
            <?php } ?>            
        </div>
        <!-- /.row --> 
        
        <div class="specialListMoreBt"><a href="/special/more">もっと見る</a></div>
        
    </div>
    <!-- /.cards-simple-wrapper -->
    <ul class="pagerBox">
        <li class="pagerLeftBox">
            <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['prev']) {?>
            <a href="/special/list/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['prev'], ENT_QUOTES, 'UTF-8', true);?>
"><div class="pre pageNaviOn">前の<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['listNumByPage'], ENT_QUOTES, 'UTF-8', true);?>
件</div></a>
            <?php } else { ?>
            <div class="pre pageNaviOff">前の<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['listNumByPage'], ENT_QUOTES, 'UTF-8', true);?>
件</div>
            <?php }?>
            
        </li>
        <li class="pagerMainBox">
                <span class="all"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['recordsNum'], ENT_QUOTES, 'UTF-8', true);?>
</span>件 <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['page'], ENT_QUOTES, 'UTF-8', true);?>
</span>/<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['pageNum'], ENT_QUOTES, 'UTF-8', true);?>
</span>
        </li>
        <li class="pagerRightBox">
            <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['next']) {?>
                <a href="/special/list/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['next'], ENT_QUOTES, 'UTF-8', true);?>
"><div class="next pageNaviOn">次の<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['listNumByPage'], ENT_QUOTES, 'UTF-8', true);?>
件</div></a>
            <?php } else { ?>
                <div class="next pageNaviOff">次の<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['listNumByPage'], ENT_QUOTES, 'UTF-8', true);?>
件</div>
            <?php }?>
        </li>
    </ul>
   
    
</div>
<!-- / WRAPPER --> 

<!-- フッター -->
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('HTDOCS_DIR'))."/templates/footer_common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- / フッター -->

</body>
</html><?php }} ?>
