<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-12 15:22:27
         compiled from "./templates/company_entry_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1235832679571d8157793818-17850880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '201df53a089169f23bd6289be6aa1a84b27e71a7' => 
    array (
      0 => './templates/company_entry_list.tpl',
      1 => 1473405742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1235832679571d8157793818-17850880',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_571d8157829106_73966254',
  'variables' => 
  array (
    'entries' => 0,
    'row' => 0,
    'managers' => 0,
    'row2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571d8157829106_73966254')) {function content_571d8157829106_73966254($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>セントラルクルー | 求人申し込み一覧</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="css/company_entry.css" rel="stylesheet" type="text/css"/>
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
            <h2 class="topTextJobEdit">
                <a href="./index.html" class="linkTop">求人申込書 一覧</a>
            </h2>
        </header>
        <div class="container cBg">
            <div class="contents">
                <div class="main">
                        <div class="leftBox">
                            <div class="rowTitleLarge">
                                <div class="w1100 borR">
                                    <div class="mailLinkTitle">求人情報
                                    </div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w200">日付</div>
                                <div class="w200">連絡</div>
                                <div class="w250">企業名</div>
                                <div class="w250">施設名</div>
                                <div class="w200 borR">担当者名</div>
                            </div>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <div class="rowContents">
                                <div class="w200">
                                    <input type="button" onclick="location.href='./company_entry_old.php?mode=detail&id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
'" value="詳細"> &nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['created'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="w200">
                                    <?php if (empty($_smarty_tpl->tpl_vars['row']->value['contact'])) {?>
                                    <select name="manager<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['managers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value) {
$_smarty_tpl->tpl_vars['row2']->_loop = true;
?>
                                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row2']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row2']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>

                                        <?php } ?>
                                    </select>&nbsp;&nbsp;
                                    <input type="button" class="jsContactBtn" data-eid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" value="連絡">
                                    <?php } else { ?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['manager'], ENT_QUOTES, 'UTF-8', true);?>
<span class="contactDate">&nbsp&nbsp<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['contactDate'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <?php }?>
                                </div>
                                <div class="w250"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['company_name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="w250"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['facility_name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="w200 borR"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                            </div>
                            <?php } ?>
                            <div class="rowContents">
                                <div class="w200 borB"></div>
                                <div class="w200 borB"></div>
                                <div class="w250 borB"></div>
                                <div class="w250 borB"></div>
                                <div class="w200 borR borB"></div>
                            </div>
                    </div>
            　　</div>
        　　</div>
        </div>
    </body>  
</html><?php }} ?>
