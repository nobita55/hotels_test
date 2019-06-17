<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-12 15:33:04
         compiled from "./templates/company_entry_edit2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48603471757d646870eb868-17436100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7d8a622db640a223c942728b41d8403a3139eb6' => 
    array (
      0 => './templates/company_entry_edit2.tpl',
      1 => 1515738779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48603471757d646870eb868-17436100',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57d6468759f862_36258525',
  'variables' => 
  array (
    'errFlag' => 0,
    'errMessage' => 0,
    'firstFlag' => 0,
    'formParams' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d6468759f862_36258525')) {function content_57d6468759f862_36258525($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>セントラルクルー | 求人申し込みフォーム</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/forcom/css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="/forcom/css/company_entry.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="/forcom/js/vender/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/forcom/js/company_entry.js" type="text/javascript"><?php echo '</script'; ?>
>



    </head>
    <body>
        <header class="header">
            <div class="headerText">
                <h2 class="topTextJobEdit">
                    求人申込書
                </h2>
            </div>
        </header>

        <form id="form1" name="form1" method="POST" action="/forcom/check" enctype="multipart/form-data">
        <div id="main">
            <table class="companyEntry">
                <!-- 企業名 -->
                <tr>
                    <td class="leftCell topCellLeft">
                        企業名
                        <div class="must">必須</div>
                    </td>
                    <td id="companyName" class="rightCell topCellRight" colspan="2" colspan="2">
                        <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['companyName']) {?>
                            <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['companyName'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                        <input type="text" name="companyName" <?php if ($_smarty_tpl->tpl_vars['firstFlag']->value||$_smarty_tpl->tpl_vars['errFlag']->value['companyName']) {?>class="redBackground"<?php }?> size="58" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyName'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="例：株式会社リゾート">
                    </td>
                </tr>
                <!-- 企業名（フリガナ） -->
                <tr>
                    <td class="leftCell">
                        企業名（フリガナ）
                        <div class="must">必須</div>
                    </td>
                    <td id="companyNameKana" class="rightCell" colspan="2">
                        <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['companyNameKana']) {?>
                            <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['companyNameKana'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                        <input type="text" name="companyNameKana" <?php if ($_smarty_tpl->tpl_vars['firstFlag']->value||$_smarty_tpl->tpl_vars['errFlag']->value['companyNameKana']) {?>class="redBackground"<?php }?> size="58" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyNameKana'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="例：カブシキガイシャリゾート">
                    </td>
                </tr>
                <!-- 施設名（部署名） -->
                <tr>
                    <td class="leftCell">
                        施設名（部署名）
                        <div class="must">必須</div>
                    </td>
                    <td id="facilityName" class="rightCell" colspan="2">
                        <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['facilityName']) {?>
                            <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['facilityName'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                        <input type="text" <?php if ($_smarty_tpl->tpl_vars['firstFlag']->value||$_smarty_tpl->tpl_vars['errFlag']->value['facilityName']) {?>class="redBackground"<?php }?> size="58" name="facilityName" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facilityName'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="例：セントラルホテル">
                    </td>
                </tr>
                <!-- ご担当者お名前 -->
                <tr>
                    <td class="leftCell" rowspan="2">
                        ご担当者お名前
                        <div class="must">必須</div>
                    </td>
                    <td class="sCellLeft">
                        氏名
                    </td>
                    <td id="name" class="sCellRight">
                        <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['name']) {?>
                            <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                        <input type="text" <?php if ($_smarty_tpl->tpl_vars['firstFlag']->value||$_smarty_tpl->tpl_vars['errFlag']->value['name']) {?>class="redBackground"<?php }?> size="30" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                    </td>
                </tr>
                <tr>
                    <td class="sCellLeft sCellBottom">フリガナ</td>
                    <td id="nameKana" class="sCellRight">
                        <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['nameKana']) {?>
                            <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['nameKana'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                        <input type="text" <?php if ($_smarty_tpl->tpl_vars['firstFlag']->value||$_smarty_tpl->tpl_vars['errFlag']->value['nameKana']) {?>class="redBackground"<?php }?> size="30" name="nameKana" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['nameKana'], ENT_QUOTES, 'UTF-8', true);?>
">
                    </td>
                </tr>
                <!-- メールアドレス -->
                <tr>
                    <td class="leftCell">
                        メールアドレス
                        <div class="must">必須</div>
                    </td>
                    <td id="mail" class="rightCell" colspan="2">
                        <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['mail']) {?>
                            <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['mail'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                        <input type="text" <?php if ($_smarty_tpl->tpl_vars['firstFlag']->value||$_smarty_tpl->tpl_vars['errFlag']->value['mail']) {?>class="redBackground"<?php }?> size="58" name="mail" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['mail'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="例：info@cchotel.com">
                        <div class="caption">
                            半角英数
                        </div>
                    </td>
                </tr>
                <!-- メールアドレス（確認） -->
                <tr>
                    <td class="leftCell">
                        メールアドレス（確認）
                        <div class="must">必須</div>
                    </td>
                    <td id="mail2" class="rightCell" colspan="2">
                        <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['mail2']) {?>
                            <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['mail2'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                        <input type="text" <?php if ($_smarty_tpl->tpl_vars['firstFlag']->value||$_smarty_tpl->tpl_vars['errFlag']->value['mail2']) {?>class="redBackground"<?php }?> size="58" name="mail2" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['mail2'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <div class="caption">
                            確認のため、もう一度入力してください。
                        </div>    
                    </td>
                </tr>
                <!-- 電話番号 -->
                <tr>
                    <td class="leftCell">
                        電話番号
                        <div class="must">必須</div>
                    </td>
                    <td id="tel" class="rightCell" colspan="2">
                        <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['tel']) {?>
                            <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['tel'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                        <input type="text" <?php if ($_smarty_tpl->tpl_vars['firstFlag']->value||$_smarty_tpl->tpl_vars['errFlag']->value['tel']) {?>class="redBackground"<?php }?> size="58" name="tel" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['tel'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="例：090-0000-0000">
                        <div class="caption">
                            半角数字ハイフンのみ
                        </div>
                    </td>
                </tr>
                <!-- 事業所の所在地 -->
                <tr>
                    <td class="leftCell" rowspan="3">
                        事業所の所在地
                        <div class="must">必須</div>
                    </td>
                    <td class="sCellLeft">
                        郵便番号
                    </td>
                    <td id="postCode" class="sCellRight">
                        <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['postCode']) {?>
                            <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['postCode'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                        〒<input type="text"  class="inputMargin <?php if ($_smarty_tpl->tpl_vars['firstFlag']->value||$_smarty_tpl->tpl_vars['errFlag']->value['postCode']) {?>redBackground<?php }?>" size="15" name="postCode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['postCode'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="例：100-0000">
                        <input type="button" class="jsBtnAddressInput1" value="住所入力">
                    </td>
                </tr>
                <tr>
                    <td class="sCellLeft">
                        都道府県
                    </td>
                    <td id="pref" class="sCellRight">
                        <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['pref']) {?>
                            <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['pref'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                        <select name="pref">
                            <option value="サンプル1">都道府県を選択</option>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['companyPrefectureList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['selected'], ENT_QUOTES, 'UTF-8', true);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="sCellLeft sCellBottom">
                        住所
                    </td>
                    <td id="address" class="sCellRight">
                        <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['address']) {?>
                            <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                        <input type="text" <?php if ($_smarty_tpl->tpl_vars['firstFlag']->value||$_smarty_tpl->tpl_vars['errFlag']->value['address']) {?>class="redBackground"<?php }?> size="70"  name="address" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="例：新宿区新宿123">
                    </td>
                </tr>   
                <!-- 就業場所 -->
                <tr>
                    <td class="leftCell">
                        就業場所
                        <div class="must">必須</div>
                    </td>
                    <td id="jobAddress" class="rightCell" colspan="2">
                        <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['jobAddress']) {?>
                               <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['jobAddress'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['jobAddressList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>  
                            <div class="holidayBox">
                                <label for="jobAddress<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <input type="checkbox" name="jobAddress[]" id="jobAddress<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['checked'], ENT_QUOTES, 'UTF-8', true);?>
>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>

                                </label>
                            </div>
                        <?php } ?>
                        <br clear="all">
                        
                        
                        <input type="text" <?php if ($_smarty_tpl->tpl_vars['firstFlag']->value||$_smarty_tpl->tpl_vars['errFlag']->value['mail']) {?>class="redBackground"<?php }?> size="58" name="jobAddressText" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['jobAddressText'], ENT_QUOTES, 'UTF-8', true);?>
">
                    </td>
                </tr>
                <!-- 職種 -->
                <tr>
                    <td class="leftCell">
                        職種
                        <div class="must">必須</div>
                    </td>
                    <td class="rightCell" colspan="2">
                        <div id="jobSection" class="jobSection">
                            <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['jobSection']) {?>
                               <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['jobSection'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                           <?php }?>
                            <select name="jobSection">
                                <option value="選択してください">選択してください</option>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['jobSection']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['selected'], ENT_QUOTES, 'UTF-8', true);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div id="jobCategory" class="jobCategory">
                            <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['jobCategory']) {?>
                               <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['jobCategory'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                           <?php }?>
                            職種<input type="text" name="jobCategory" class="inputMargin <?php if ($_smarty_tpl->tpl_vars['firstFlag']->value||$_smarty_tpl->tpl_vars['errFlag']->value['jobCategory']) {?>redBackground<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['jobCategory'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="例：フロント">
                        </div>
                    </td>
                </tr>
                <!-- 仕事の内容 -->
                <tr>
                    <td class="leftCell">
                        仕事の内容
                        <div class="must">必須</div>
                    </td>
                    <td class="rightCell" colspan="2" id="jobDetail">
                        <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['jobDetail']) {?>
                               <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['jobDetail'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                        <textarea name="jobDetail" cols="10" rows="5" wrap="soft" class="jobDetaile <?php if ($_smarty_tpl->tpl_vars['firstFlag']->value||$_smarty_tpl->tpl_vars['errFlag']->value['jobDetail']) {?>redBackground<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['jobDetail'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </td>
                </tr>
                <!-- 勤務シフト -->
                <tr>
                    <td class="leftCell">
                        勤務シフト
                        <div class="must">必須</div>
                    </td>
                    <td class="rightCell" colspan="2" id="shift">
                        <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['shift']) {?>
                               <div class="mustText"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['shift'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>
                        <textarea name="shift" cols="10" rows="5" wrap="soft" class="jobDetaile <?php if ($_smarty_tpl->tpl_vars['firstFlag']->value||$_smarty_tpl->tpl_vars['errFlag']->value['shift']) {?>redBackground<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['shift'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </td>
                </tr>
                <!-- 休日・休暇 -->
                <tr>
                    <td class="leftCell">休日・休暇</td>
                    <td class="rightCell" colspan="2">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['holidayList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>  
                            <div class="holidayBox">
                                <label for="holiday<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <input type="checkbox" name="holiday[]" id="holiday<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['checked'], ENT_QUOTES, 'UTF-8', true);?>
>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>

                                </label>
                            </div>
                        <?php } ?>

                        <br clear="all">

                        <div class="holidayTextBox">
                            <div class="holidayText shiftBottom">
                                その他
                            </div>
                            <div class="otherBox">
                                <input type="text" class="other510" name="otherHoliday" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['otherHoliday'], ENT_QUOTES, 'UTF-8', true);?>
">
                            </div>
                        </div>
                        <br clear="all">
                        <div class="holidayTextBox">
                            <div class="holidayText shiftBottom">
                                年間休日数
                            </div>
                            <div class="otherBox">
                                <input type="text" class="other510" name="yearHolidays" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['yearHolidays'], ENT_QUOTES, 'UTF-8', true);?>
">
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- 時間外労働 -->
                <tr>
                    <td class="leftCell">
                        時間外労働
                    </td>
                    <td class="rightCell" colspan="2">
                       <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['overtimeWorkList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>  
                        <label for="overtimeWork<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <input type="radio" name="overtimeWork[]" id="overtimeWork<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['checked'], ENT_QUOTES, 'UTF-8', true);?>
>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>

                        </label>
                        <?php } ?>
                        <input type="text" class="other" name="overtimeWorkText" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['overtimeWorkText'], ENT_QUOTES, 'UTF-8', true);?>
">
                    </td>
                </tr>
                <!-- 雇用形態・期間 -->
                <tr>
                    <td class="leftCell">
                        雇用形態・期間
                    </td>
                    <td class="rightCell" colspan="2">
                        <select name="formEmployment">
                            <option value="">選択してください</option>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['formEmploymentList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['selected'], ENT_QUOTES, 'UTF-8', true);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        </select>    
                        <br /><br />
                        <div class="holidayText shiftBottom">
                                その他
                        </div>
                        <input type="text" class="" name="otherEmployment" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['otherEmployment'], ENT_QUOTES, 'UTF-8', true);?>
"><br /><br />
                        <div class="holidayText shiftBottom">
                                雇用期間
                        </div>
                        <input type="text" class="" name="employmentPeriod" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['employmentPeriod'], ENT_QUOTES, 'UTF-8', true);?>
"><br /><br />
                        <div class="holidayText shiftBottom">
                                試用期間
                        </div>
                        <input type="text" class="" name="testPeriod" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['testPeriod'], ENT_QUOTES, 'UTF-8', true);?>
">
                    </td>
                </tr>
                <!-- 手当 -->
                <tr>
                    <td class="leftCell">
                        手当
                    </td>
                    <td class="rightCell" colspan="2">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['allowanceList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>  
                            <div class="dormitoryBox">
                                <label for="allowance<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <input type="checkbox" name="allowance[]" id="allowance<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['checked'], ENT_QUOTES, 'UTF-8', true);?>
>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>

                                </label>
                            </div>
                        <?php } ?>
                        <br clear="all">
                        <br />
                        <div class="holidayText shiftBottom">
                            その他
                        </div>
                        <div class="otherBox">
                            <input type="text" class="other510" name="allowanceText" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['allowanceText'], ENT_QUOTES, 'UTF-8', true);?>
">
                        </div>
                    </td>
                </tr>
                <!-- 加入保険 -->
                <tr>
                    <td class="leftCell">
                        加入保険
                    </td>
                    <td class="rightCell" colspan="2">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['insuranceList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>  
                            <div class="dormitoryBox">
                                <label for="insurance<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <input type="checkbox" name="insurance[]" id="insurance<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['checked'], ENT_QUOTES, 'UTF-8', true);?>
>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>

                                </label>
                            </div>
                        <?php } ?>
                    </td>
                </tr>
                <!-- 給与・賞与 -->
                <tr>
                    <td class="leftCell">給与・賞与</td>
                    <td class="rightCell" colspan="2">
                            <select name="salaryUnit">
                                <option value="">給与形式を選択</option>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['salaryUnitList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['selected'], ENT_QUOTES, 'UTF-8', true);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                            </select>
                            <br /><br />
                            &yen;<input type="text" size="8" name="salaryMin" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryMin'], ENT_QUOTES, 'UTF-8', true);?>
">～&yen;<input type="text" size="8" name="salaryMax" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryMax'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <br />
                        
                        <div class="dormitoryOtherBox">
                            <div class="shiftText shiftBottom">
                                賞与
                            </div>
                            <div class="otherBox">
                                <input type="text" class="other" name="bonusText" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['bonusText'], ENT_QUOTES, 'UTF-8', true);?>
">
                            </div>  
                        </div>
                        <br />
                            
                        <div class="dormitoryOtherBox">
                            <div class="shiftText shiftBottom">
                                昇給
                            </div>
                            <div class="otherBox">
                                <input type="text" class="other" name="payriseText" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['payriseText'], ENT_QUOTES, 'UTF-8', true);?>
">
                            </div>  
                        </div>
                    </td>
                </tr>
                <!-- 賃金締日・支払日 -->
                <tr>
                    <td class="leftCell">
                        賃金締日・支払日
                    </td>
                    <td class="rightCell" colspan="2">
                        締日<input type="text" class="" name="closingDay" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['closingDay'], ENT_QUOTES, 'UTF-8', true);?>
">
                        支払日<input type="text" class="" name="billingDay" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['billingDay'], ENT_QUOTES, 'UTF-8', true);?>
">
                    </td>
                </tr>
                <!-- 寮・社宅情報 -->
                <tr>
                    <td class="leftCell">寮・社宅情報</td>
                    <td class="rightCell" colspan="2">
                        寮の有無
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['dormRadioList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>  
                        <label for="dormRadio<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <input type="radio" name="dormRadio[]" id="dormRadio<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['checked'], ENT_QUOTES, 'UTF-8', true);?>
>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>

                        </label>
                        <?php } ?>

                        <div class="dormitoryOtherBox">
                            <div class="shiftText shiftBottom">
                                寮費
                            </div>
                            <div class="otherBox">
                                <input type="text" class="other" name="dormFee" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['dormFee'], ENT_QUOTES, 'UTF-8', true);?>
">
                            </div>  
                        </div>

                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['dormList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>  
                            <div class="dormitoryBox">
                                <label for="dorm<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <input type="checkbox" name="dorm[]" id="dorm<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['checked'], ENT_QUOTES, 'UTF-8', true);?>
>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>

                                </label>
                            </div>
                        <?php } ?>
                        <br clear="all">

                        <div class="dormitoryOtherBox">
                            <div class="shiftText shiftBottom">
                                その他
                            </div>
                            <div class="otherBox">
                                <input type="text" class="other" name="otherDorm" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['otherDorm'], ENT_QUOTES, 'UTF-8', true);?>
">
                            </div>  
                        </div>
                    </td>
                </tr>
                <!-- 必要な学歴 -->
                <tr>
                    <td class="leftCell">
                        必要な学歴
                    </td>
                    <td class="rightCell" colspan="2">
                        <input type="text" name="educational" size="58" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['educational'], ENT_QUOTES, 'UTF-8', true);?>
" class="width600">
                    </td>
                </tr>
                <!-- 必要な経験・免許・資格 -->
                <tr>
                    <td class="leftCell">
                        必要な経験・免許・資格
                    </td>
                    <td class="rightCell" colspan="2">
                        <textarea name="mustSkill" cols="10" rows="5" wrap="soft" class="jobDetaile"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['mustSkill'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </td>
                </tr>
                <!-- 年齢制限 -->
                <tr>
                    <td class="leftCell">
                        年齢制限
                    </td>
                    <td class="rightCell" colspan="2">
                        <input type="text" name="age" size="58" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['age'], ENT_QUOTES, 'UTF-8', true);?>
" class="width600">
                    </td>
                </tr>
                <!-- 定年制 -->
                <tr>
                    <td class="leftCell">
                        定年制
                    </td>
                    <td class="rightCell" colspan="2">
                            <select name="retirement">
                                <option value="">選択して下さい▼</option>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['retirementList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['selected'], ENT_QUOTES, 'UTF-8', true);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                            </select>
                    </td>
                </tr>
                <!-- ホームページ -->
                <tr>
                    <td class="leftCell">
                        ホームページ
                    </td>
                    <td class="rightCell" colspan="2">
                        <input type="text" name="website" size="58" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['website'], ENT_QUOTES, 'UTF-8', true);?>
" class="width600">
                    </td>
                </tr>
                <!-- 備考 -->
                <tr>
                    <td class="leftCell">備考</td>
                    <td class="rightCell" colspan="2">
                        <textarea name="memo" cols="50" rows="10" wrap="soft" class="bikou"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['memo'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="submit">
                        <input type="submit" value="入力内容の確認画面へ">
                    </td>
                </tr>
            </table>
            </form>


        </div>
        <?php echo '<script'; ?>
 src="/forcom/js/vender/ajaxzip3.js" type="text/javascript" charset="UTF-8"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/forcom/js/admin.js" type="text/javascript"><?php echo '</script'; ?>
>
    </body>
</html><?php }} ?>
