<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-14 19:52:47
         compiled from "./templates/error_system.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9542918858f0a9ff8ec683-74936157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d8d4330f0b1e30c5460150251b1fae92ce5e0a8' => 
    array (
      0 => './templates/error_system.tpl',
      1 => 1458179756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9542918858f0a9ff8ec683-74936157',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58f0a9ff9af8e0_87654169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0a9ff9af8e0_87654169')) {function content_58f0a9ff9af8e0_87654169($_smarty_tpl) {?><!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
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

<link rel="stylesheet" href="/css/error.css" type="text/css" media="screen">
<title>エラー-ホテルズワーク</title>
</head>
<body>


<!-- ヘッダー -->
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('HTDOCS_DIR'))."/templates/header_common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- / ヘッダー -->

<div class="pageTitle">
<div id="wrapper">
    エラー
</div>
</div>


<div id="wrapper">

<div class="thanksTitle">エラーが発生しました</div>

<div>
    トップページへ戻り、再度操作を行ってください。</div>

<div class="toTopBt"><a href="/">トップページへ</a></div>


</div>
<!-- / WRAPPER --> 

<!-- フッター -->
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('HTDOCS_DIR'))."/templates/footer_common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- / フッター -->

</body>
</html><?php }} ?>
