<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-05 10:55:26
         compiled from "./templates/entry_confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45067711156f38696cd6925-76173365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6ef8f1466082da326387fbd5491a9ad11d6ea29' => 
    array (
      0 => './templates/entry_confirm.tpl',
      1 => 1517795555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45067711156f38696cd6925-76173365',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f38696eede02_72504198',
  'variables' => 
  array (
    'jobId' => 0,
    'formData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f38696eede02_72504198')) {function content_56f38696eede02_72504198($_smarty_tpl) {?><!DOCTYPE html>
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

<?php echo '<script'; ?>
>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-77015626-1', 'auto');
  ga('send', 'pageview');
<?php echo '</script'; ?>
>


<div class="pageTitle">
<div id="wrapper">
内容確認
</div>
</div>


<div id="wrapper">
<div class="entryform">
<form action="/entry/confirm" method="post" class="entryPartForm">
<input type="hidden" name="jid" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobId']->value, ENT_QUOTES, 'UTF-8', true);?>
">
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
<th>都道府県</th>
<td>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formData']->value['prefecture'], ENT_QUOTES, 'UTF-8', true);?>

</td>
</tr>
<tr>
<th>働きたい期間</th>
<td>
開始予定日 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formData']->value['termFrom'], ENT_QUOTES, 'UTF-8', true);?>
 <br>終了予定日 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formData']->value['termTo'], ENT_QUOTES, 'UTF-8', true);?>

</td>
</tr>
<tr>
<th>自己PR・その他</th>
<td>
<?php echo nl2br($_smarty_tpl->tpl_vars['formData']->value['pr']);?>

</td>
</tr>
<tr>
<th>希望する方はチェック</th>
<td>
<div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formData']->value['wish1Text'], ENT_QUOTES, 'UTF-8', true);?>
</div>
<div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formData']->value['wish2Text'], ENT_QUOTES, 'UTF-8', true);?>
</div>
</td>
</tr>
</tbody>
</table>
<div class="entryButtonBox">
<div class="backButton"><a href="/entry/change?jid=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobId']->value, ENT_QUOTES, 'UTF-8', true);?>
">修正する</a></div>
<input type="submit" name="button" id="button" value="この内容で応募する">
</div>
</form>
</div>

</div>
<!-- / WRAPPER --> 

</body>
</html><?php }} ?>
