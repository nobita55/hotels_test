<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-25 11:36:34
         compiled from "./templates/inquiry_confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150050159556f4a432a7c652-01725281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b3d1b6730a9c933e98c3c30727d25b535c6f6f' => 
    array (
      0 => './templates/inquiry_confirm.tpl',
      1 => 1458181964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150050159556f4a432a7c652-01725281',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f4a432cf0fd3_50253041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f4a432cf0fd3_50253041')) {function content_56f4a432cf0fd3_50253041($_smarty_tpl) {?><!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/common.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/font-awesome.css" type="text/css" media="screen">
<link rel="apple-touch-icon" href="/img/common/apple-touch-icon.png">
<link rel="stylesheet" href="/css/entry.css" type="text/css" media="screen">
<title>内容確認-ホテルズワーク</title>
<meta name="description" content="ホテル・旅館・リゾート求人の「ホテルズワーク」。宿泊施設に特化したアルバイト・正社員求人サイト">
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
</head>
<body>

<div class="pageTitle">
<div id="wrapper">
内容確認
</div>
</div>


<div id="wrapper">
<div class="entryform">
<form action="/inquiry/confirm" method="post" class="inquiryForm">
<table>
<tbody>
<tr>
<th>
氏名</th>
<td>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formData']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

</td>
</tr>
<tr>
<th>ふりがな</th>
<td>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formData']->value['kana'], ENT_QUOTES, 'UTF-8', true);?>

</td>
</tr>
<tr>
<th>電話番号</th>
<td>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formData']->value['tel'], ENT_QUOTES, 'UTF-8', true);?>

</td>
</tr>
<tr>
<th>メールアドレス</th>
<td>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formData']->value['email'], ENT_QUOTES, 'UTF-8', true);?>

</td>
</tr>
<tr>
<th>生年月日</th>
<td>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formData']->value['birth'], ENT_QUOTES, 'UTF-8', true);?>

</td>
</tr>
<tr>
<th>相談内容</th>
<td>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formData']->value['detail'], ENT_QUOTES, 'UTF-8', true);?>

</td>
</tr>
</tbody>
</table>
<div class="entryButtonBox">
<div class="backButton"><a href="/inquiry/change">修正する</a></div>
<input type="submit" name="button" id="button" value="この内容で送信する">
</div>
</form>
</div>

</div>
<!-- / WRAPPER --> 

</body>
</html><?php }} ?>
