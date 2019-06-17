<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-17 16:40:09
         compiled from "./templates/study.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150099948456f0a2a47a1c03-01288876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d7befeae4901df07b46165737b37d7882c4ed29' => 
    array (
      0 => './templates/study.tpl',
      1 => 1464679770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150099948456f0a2a47a1c03-01288876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f0a2a4827b98_32230181',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f0a2a4827b98_32230181')) {function content_56f0a2a4827b98_32230181($_smarty_tpl) {?><!DOCTYPE html>
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
<?php echo '<script'; ?>
 src="/js/vender/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/vender/underscore.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/like.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/study.js" type="text/javascript"><?php echo '</script'; ?>
>
<link rel="apple-touch-icon" href="/img/common/apple-touch-icon.png">
<title>気になるリスト-ホテルズワーク</title>
<meta name="description" content="ホテル・旅館・リゾート求人の「ホテルズワーク」。宿泊施設に特化したアルバイト・正社員求人サイト">
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
</head>
<body>

<!-- ヘッダー -->
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('HTDOCS_DIR'))."/templates/header_common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- / ヘッダー -->

<div class="pageTitle">
    <div id="wrapper">
        気になるリスト
    </div>
</div>
<div id="wrapper">
    <div class="studyDesc">検討したいお仕事を最大20件まで保存できます。募集が終了したお仕事は気になるリストから削除されます。</div>
    <div class="cards-simple-wrapper">
        <div class="row jsListStudy">
       
            
        </div>
        <!-- /.row --> 
    </div>
    <!-- /.cards-simple-wrapper -->

</div>
<!-- / WRAPPER --> 

<!-- フッター -->
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('HTDOCS_DIR'))."/templates/footer_common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- / フッター -->


</body>
</html><?php }} ?>
