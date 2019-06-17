<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-24 14:08:22
         compiled from "./templates/company_entry_list2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112723573257d64c6239ee49-25234936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b49856e27e7f2b9a96513c3f7e8cfdbf77be102' => 
    array (
      0 => './templates/company_entry_list2.tpl',
      1 => 1500872262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112723573257d64c6239ee49-25234936',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57d64c62481db5_67175240',
  'variables' => 
  array (
    'entries' => 0,
    'row' => 0,
    'managers' => 0,
    'row2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d64c62481db5_67175240')) {function content_57d64c62481db5_67175240($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>セントラルクルー | 求人申込書一覧</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/forcom/css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="/admin/css/admin2.css" rel="stylesheet" type="text/css"/>        
        <?php echo '<script'; ?>
 src="js/vender/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/vender/underscore.js" type="text/javascript"><?php echo '</script'; ?>
>
        <link href="js/vender/dist/sweetalert.css" rel="stylesheet" type="text/css">
        <?php echo '<script'; ?>
 src="js/vender/dist/sweetalert.min.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 src="js/admin.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/admin_company_entry.js" type="text/javascript"><?php echo '</script'; ?>
>   
    </head>
    <body>
        <header class="header">
            <div class="headerText">
                <h2 class="topTextJobEdit">
                    求人申込書　一覧
                </h2>
            </div>
        </header>

        <div id="main">
            <table class="entryList">
                <tr>
                    <td class="topCell id">
                        ID
                    </td>
                    <td class="created topCell">
                        日付
                    </td>
                    <td class="topCell w290 manager">
                        連絡
                    </td>
                    <td class="topCell w200">
                        企業名
                    </td>
                    <td class="topCell w200">
                        施設名
                    </td>
                    <td class="topCell w100">
                        担当者名
                    </td>
                    <td class="topCell w250">
                        チェック
                    </td>
                </tr>

                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                    <td>
                        <input type="button" onclick="location.href='./company_entry.php?mode=detail&id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
'" value="詳細"> &nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['created'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                    <td class="">
                        <select name="manager<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
                            <option>-</option>
                            <?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['managers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value) {
$_smarty_tpl->tpl_vars['row2']->_loop = true;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row2']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row2']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>

                            <?php } ?>
                        </select>&nbsp;&nbsp;
                        <input type="button" class="jsContactBtn2" data-eid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" value="連絡">

                        <?php if (!empty($_smarty_tpl->tpl_vars['row']->value['contact'])) {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['manager'], ENT_QUOTES, 'UTF-8', true);?>
<span class="contactDate">&nbsp&nbsp<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['contactDate'], ENT_QUOTES, 'UTF-8', true);?>
<br></span>
                        <?php }?>

                    </td>
                    <td>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['company_name'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                    <td>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['facility_name'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                    <td>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                    <td class="excel">
                        <label for="released<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><input type="checkbox" id="released<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-type="released" class="jsCheck" <?php if ($_smarty_tpl->tpl_vars['row']->value['released']==1) {?>checked<?php }?>>HP掲載</label>
                        <label for="jobcard<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><input type="checkbox" id="jobcard<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-type="jobcard" class="jsCheck" <?php if ($_smarty_tpl->tpl_vars['row']->value['jobcard']==1) {?>checked<?php }?>>求人票</label>
                        <a href="./company_entry_download.php?id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">エクセル出力</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
            



        </div>
    </body>
</html><?php }} ?>
