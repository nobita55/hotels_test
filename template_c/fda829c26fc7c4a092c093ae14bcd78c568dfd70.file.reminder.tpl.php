<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-29 11:37:04
         compiled from "./templates/reminder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209337095456f4bed308c046-89694325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda829c26fc7c4a092c093ae14bcd78c568dfd70' => 
    array (
      0 => './templates/reminder.tpl',
      1 => 1458889810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209337095456f4bed308c046-89694325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f4bed313f2c8_22416378',
  'variables' => 
  array (
    'jobInfo' => 0,
    'remindInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f4bed313f2c8_22416378')) {function content_56f4bed313f2c8_22416378($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>ホテルズワーク管理 | リマインダー</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="css/reminder.css" rel="stylesheet" type="text/css"/>

        <?php echo '<script'; ?>
 src="js/vender/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/vender/underscore.js" type="text/javascript"><?php echo '</script'; ?>
>
    </head>
    <body>
        <div class="contents" data-jid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['jobId'], ENT_QUOTES, 'UTF-8', true);?>
">
            <table class="jobInfoTable">
                <tr>
                    <td class="subject" colspan="3">
                        募集原稿情報</td>
                </tr>
                <tr>
                    <td class="itemName">JID</td>
                    <td colspan="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['jobId'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
                <tr>
                    <td class="itemName">募集原稿タイトル</td>
                    <td colspan="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
            </table>
            <table class="applyCtrTable">
                <tr>
                    <td colspan="2" class="subject">
                        メモ</td>
                </tr>
                <tr>
                    <td class="itemName">登録者</td>
                    <td>
                        <select name="user">
                            <option value="1" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['remindInfo']->value['userSelected'][1], ENT_QUOTES, 'UTF-8', true);?>
>小池
                            <option value="2"  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['remindInfo']->value['userSelected'][2], ENT_QUOTES, 'UTF-8', true);?>
>長澤
                            <option value="3"  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['remindInfo']->value['userSelected'][3], ENT_QUOTES, 'UTF-8', true);?>
>梶
                            <option value="4"  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['remindInfo']->value['userSelected'][4], ENT_QUOTES, 'UTF-8', true);?>
>小林
                            <option value="5"  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['remindInfo']->value['userSelected'][5], ENT_QUOTES, 'UTF-8', true);?>
>谷澤
                            </select>
                    </td>
                </tr>
                <tr>
                    <td class="itemName">通知日</td>
                    <td>
                        <input type="date" name="remindDate" class="jsRemindDate" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['remindInfo']->value['remindDate'], ENT_QUOTES, 'UTF-8', true);?>
">
                    </td>
                </tr>
                <tr>
                    <td class="itemName">通知メッセージ</td>
                    <td>
                        <textarea class="remindMessage" name="remindMessage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['remindInfo']->value['remindMessage'], ENT_QUOTES, 'UTF-8', true);?>
</textarea><br>
                    </td>
                </tr>
                <tr>
                    <td class="itemName">管理メモ</td>
                    <td>
                        <textarea class="remindMemo" name="remindMemo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['remindInfo']->value['remindMemo'], ENT_QUOTES, 'UTF-8', true);?>
</textarea><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="btns">
                        <input type="button" name="saveBtn" class="jsSaveBtn" value="保存">　　　
                    </td>
                </tr>
            </table>
        </div> 
        <?php echo '<script'; ?>
 src="js/admin.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/reminder.js" type="text/javascript"><?php echo '</script'; ?>
>   
    </body>
</html>
<?php }} ?>
