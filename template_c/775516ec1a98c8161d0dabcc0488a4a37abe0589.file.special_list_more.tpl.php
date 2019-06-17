<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-06 16:53:10
         compiled from "./templates/special_list_more.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149072563058466e663fa114-61608848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '775516ec1a98c8161d0dabcc0488a4a37abe0589' => 
    array (
      0 => './templates/special_list_more.tpl',
      1 => 1480924633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149072563058466e663fa114-61608848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specials' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58466e664bd321_54025254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58466e664bd321_54025254')) {function content_58466e664bd321_54025254($_smarty_tpl) {?><!DOCTYPE html>
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
    <ul class="moreSpecial">
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['specials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <li>
    <a href="/special/contens/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

    </a>
    </li>
    <?php } ?>
    </ul>
    <!-- /.cards-simple-wrapper -->  
    
</div>
<!-- / WRAPPER --> 

<!-- フッター -->
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('HTDOCS_DIR'))."/templates/footer_common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- / フッター -->

</body>
</html><?php }} ?>
