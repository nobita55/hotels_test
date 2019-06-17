<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-08-01 18:45:18
         compiled from "./templates/company_entry_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1665026028571d8105b53296-52568460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63f7be4f7a61e87fcdb70886a55bd7fe406e7d2c' => 
    array (
      0 => './templates/company_entry_edit.tpl',
      1 => 1464153257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1665026028571d8105b53296-52568460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_571d81060fba10_00301642',
  'variables' => 
  array (
    'errFlag' => 0,
    'formParams' => 0,
    'errMessage' => 0,
    'row' => 0,
    'fcat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571d81060fba10_00301642')) {function content_571d81060fba10_00301642($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>セントラルクルー | 求人申し込みフォーム</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/forcom/css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="/forcom/css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="/forcom/css/company_entry.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="/forcom/js/vender/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
    </head>
    <body>
        <header class="header">
            <h2 class="topTextJobEdit">
                求人申込書
            </h2>
        </header>
        <div class="container cBg">
            <div class="contents">
                <form id="form1" name="form1" method="POST" action="/forcom/check" enctype="multipart/form-data">
                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['master']) {?>
                    <div class="masterError">入力内容にエラーがあります</div>
                    <?php }?>
                    <div class="main">
                        <div class="leftBox">
                            <div class="rowTitleLarge">
                                <div class="w900 borR">
                                    <div class="mailLinkTitle">求人情報
                                    </div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>企業名</div>
                                <div class="w450 borR"><span class="must">【必須】 </span>施設名(勤務先)</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <input type="text" class="companyName" size="58" maxlength="100" name="companyName" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyName'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['companyName']) {?>
                                        <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['companyName'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                                <div class="w450 borR">
                                    <input type="text" class="facilityName" size="58" maxlength="100" name="facilityName" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facilityName'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['facilityName']) {?>
                                        <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['facilityName'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>本社住所</div>
                                <div class="w450 borR"><span class="must">【必須】 </span>勤務先住所 <input type="checkbox" name="facilitySame" value="1" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facilitySameChecked'], ENT_QUOTES, 'UTF-8', true);?>
>本社住所と同じ</div>

                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <table>
                                        <tr><td class="leftCell">郵便番号</td>
                                            <td class="rightCell">
                                                <div class="jsFormPostcode">
                                                    <input type="text" name="companyPostcode" size="10" maxlength="10"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyPostcode'], ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <span class="caution"> ※半角数字ハイフンのみ</span> <input type="button" class="jsBtnAddressInput1" value="住所入力">
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['companyPostcode']) {?>
                                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['companyPostcode'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php }?>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">都道府県</td>
                                            <td class="rightCell">
                                                <div class="companyPrefecture">
                                                <select name="companyPrefecture">
                                                    <option value="">選択してください</option>
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
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['companyPrefecture']) {?>
                                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['companyPrefecture'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php }?>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">住所</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <textarea name="companyAddress" class="companyAddress"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyAddress'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['companyAddress']) {?>
                                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['companyAddress'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php }?>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">TEL</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <input type="text" name="companyTel" size="15" maxlength="20"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyTel'], ENT_QUOTES, 'UTF-8', true);?>
">
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['companyTel']) {?>
                                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['companyTel'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php }?>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">FAX</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <input type="text" name="companyFax" size="15" maxlength="20"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyFax'], ENT_QUOTES, 'UTF-8', true);?>
">
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['companyFax']) {?>
                                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['companyFax'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php }?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="w450 borR">
                                    <table>
                                        <tr><td class="leftCell">郵便番号</td>
                                            <td class="rightCell">
                                                <div class="jsFormPostcode">
                                                    <input type="text" name="facilityPostcode" size="10" maxlength="10"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facilityPostcode'], ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <span class="caution"> ※半角数字ハイフンのみ</span> <input type="button" class="jsBtnAddressInput2" value="住所入力">
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['facilityPostcode']) {?>
                                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['facilityPostcode'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php }?>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">都道府県</td>
                                            <td class="rightCell">
                                                <div class="jsFormPrefecture">
                                                <select name="facilityPrefecture">
                                                    <option value="">選択してください</option>
                                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['facilityPrefectureList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                                <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['facilityPrefecture']) {?>
                                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['facilityPrefecture'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php }?>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">住所</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <textarea name="facilityAddress" class="facilityAddress"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facilityAddress'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['facilityAddress']) {?>
                                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['facilityAddress'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php }?>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">TEL</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <input type="text" name="facilityTel" size="15" maxlength="20"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facilityTel'], ENT_QUOTES, 'UTF-8', true);?>
">
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['facilityTel']) {?>
                                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['facilityTel'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php }?>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">FAX</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <input type="text" name="facilityFax" size="15" maxlength="20"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facilityFax'], ENT_QUOTES, 'UTF-8', true);?>
">
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['facilityFax']) {?>
                                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['facilityFax'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php }?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w900 borR">
                                    <div class="mailLinkTitle">ご担当者様情報
                                    </div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w200">部署</div>
                                <div class="w200">役職</div>
                                <div class="w250"><span class="must">【必須】 </span>担当者名</div>
                                <div class="w250 borR">携帯番号</div>
                            </div>
                            <div class="rowContents">
                                <div class="w200">
                                    <input type="text" name="department" size="20" maxlength="30"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['department'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['department']) {?>
                                        <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['department'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                                <div class="w200">
                                    <input type="text" name="title" size="20" maxlength="30"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['title']) {?>
                                        <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                                <div class="w250">
                                    <input type="text" name="name" size="30" maxlength="30"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['name']) {?>
                                        <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                                <div class="w250 borR">
                                    <input type="text" name="mobile" size="30" maxlength="30"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['mobile'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['mobile']) {?>
                                        <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['mobile'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w900 borR">
                                    <div class="mailLinkTitle">募集要件
                                    </div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w300"><span class="must">【必須】 </span>求人数</div>
                                <div class="w600 borR"><span class="must">【必須】 </span>有効求人期間<span class="caution"> ※半角数字のみ</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w300">
                                    <input type="text" name="needNum" size="10" maxlength="30"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['needNum'], ENT_QUOTES, 'UTF-8', true);?>
"> 人
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['needNum']) {?>
                                        <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['needNum'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                                <div class="w600 borR">
                                    <input type="text" name="termFromYear" size="6" maxlength="30"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['termFromYear'], ENT_QUOTES, 'UTF-8', true);?>
">年
                                    <input type="text" name="termFromMonth" size="4" maxlength="30"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['termFromMonth'], ENT_QUOTES, 'UTF-8', true);?>
">月
                                    <input type="text" name="termFromDay" size="4" maxlength="30"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['termFromDay'], ENT_QUOTES, 'UTF-8', true);?>
">日～
                                    <input type="text" name="termToYear" size="6" maxlength="30"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['termToYear'], ENT_QUOTES, 'UTF-8', true);?>
">年
                                    <input type="text" name="termToMonth" size="4" maxlength="30"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['termToMonth'], ENT_QUOTES, 'UTF-8', true);?>
">月
                                    <input type="text" name="termToDay" size="4" maxlength="30"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['termToDay'], ENT_QUOTES, 'UTF-8', true);?>
">日
                                    <input type="checkbox" name="termOpen" id="termOpen" value="1" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['termOpenChecked'], ENT_QUOTES, 'UTF-8', true);?>
> <label for="termOpen">随時相談可能</label>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['term']) {?>
                                        <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['term'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w900 borR">勤怠情報</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w900 borR"><span class="must">【必須】 </span>雇用形態</div>
                            </div>
                            <div class="rowContents">
                                <div class="w900 borR">
                                    <ul class="checkBoxListSmall">
                                        <label for="employmentStatus1">
                                            <li>
                                                <input type="radio" name="employmentStatus" id="employmentStatus1" value="1" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['employmentStatusChecked'][1], ENT_QUOTES, 'UTF-8', true);?>
>
                                                社員紹介
                                            </li>
                                        </label>
                                        <label for="employmentStatus2">
                                            <li>
                                                <input type="radio" name="employmentStatus" id="employmentStatus2" value="2" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['employmentStatusChecked'][2], ENT_QUOTES, 'UTF-8', true);?>
>
                                                紹介予定派遣
                                            </li>
                                        </label>
                                        <label for="employmentStatus3">
                                            <li>
                                                <input type="radio" name="employmentStatus" id="employmentStatus3" value="3" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['employmentStatusChecked'][3], ENT_QUOTES, 'UTF-8', true);?>
>
                                                常用目的紹介 
                                            </li>
                                        </label>
                                    </ul>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['employmentStatus']) {?>
                                        <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['employmentStatus'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle jsGeneralParam">
                                <div class="w900 borR"><span class="must">【必須】 </span>職種 <span class="caution"> ※複数選択可</span></div>
                            </div>
                            <div class="rowContents jsGeneralParam">
                                <div class="w900 borR">
                                    <ul class="checkBoxListSmall">
                                        <?php  $_smarty_tpl->tpl_vars['fcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['jobCategoryCkList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fcat']->key => $_smarty_tpl->tpl_vars['fcat']->value) {
$_smarty_tpl->tpl_vars['fcat']->_loop = true;
?>
                                        <!-- サブカテゴリー分ループ -->
                                        <li class="checkBoxListCategory"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fcat']->value['catName'], ENT_QUOTES, 'UTF-8', true);?>
 <a href="" class="euplinkSmall jsJcCheckAll<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fcat']->value['catNo'], ENT_QUOTES, 'UTF-8', true);?>
">[全て]</a>　<a href="" class="euplinkSmall jsJcCheckClear<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fcat']->value['catNo'], ENT_QUOTES, 'UTF-8', true);?>
">[解除]</a></li>
                                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fcat']->value['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                        <!-- チェックボックス分ループ -->
                                        <label for="jobCategory<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <li><input type="checkbox" class="jsDepartmentCheck<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fcat']->value['catNo'], ENT_QUOTES, 'UTF-8', true);?>
" name="jobCategory[]" id="jobCategory<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['checked'], ENT_QUOTES, 'UTF-8', true);?>
>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
 
                                        </li></label>
                                        <?php } ?>
                                        <!-- チェックボックス分ループ -->
                                        <!-- サブカテゴリー分ループ -->
                                        <?php } ?>  
                                     </ul>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['jobCategory']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['jobCategory'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>仕事内容</div>
                                <div class="w450 borR"><span class="must">【必須】 </span>勤務時間</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <textarea  name="description" class="description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <div class="textRemainNum">残り<span class="remainDescription">600</span>文字</div>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['description']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                                <div class="w450 borR">
                                    <textarea  name="workingHours" class="workingHours"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['workingHours'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <div class="textRemainNum">残り<span class="remainWorkingHours">600</span>文字</div>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['workingHours']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['workingHours'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>休日・ 休暇</div>
                                <div class="w450 borR">必要な経験・資格 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <textarea  name="holiday" class="holiday"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['holiday'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <div class="textRemainNum">残り<span class="remainHoliday">600</span>文字</div>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['holiday']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['holiday'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                                <div class="w450 borR">
                                    <textarea  name="qualifications" class="qualifications"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['qualifications'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <div class="textRemainNum">残り<span class="remainQualifications">600</span>文字</div>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['qualifications']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['qualifications'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>給与形態</div>
                                <div class="w450 borR">福利厚生・待遇</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <select name="salaryUnit" class="jsSalaryUnit">
                                        <option value="0">選択してください</option>
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
                                    <input type="text" name="salaryMin" size="7" maxlength="10" class="salaryMin" placeholder="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryMin'], ENT_QUOTES, 'UTF-8', true);?>
"> 円
                                    ～
                                    <input type="text" name="salaryMax" size="7" maxlength="10" class="salaryMax" placeholder="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryMax'], ENT_QUOTES, 'UTF-8', true);?>
"> 円
                                    <textarea  name="salaryInfo" class="salaryInfo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryInfo'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <div class="textRemainNum">残り<span class="remainSalaryInfo">600</span>文字</div>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['salary']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['salary'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                                <div class="w450 borR">
                                    <textarea  name="conditionInfo" class="conditionInfo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['conditionInfo'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <div class="textRemainNum">残り<span class="remainConditionInfo">600</span>文字</div>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['conditionInfo']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['conditionInfo'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450">就労時必要物</div>
                                <div class="w450 borR">その他特記事項</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <textarea  name="needItem" class="needItem"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['needItem'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <div class="textRemainNum">残り<span class="remainNeedItem">600</span>文字</div>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['needItem']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['needItem'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                                <div class="w450 borR">
                                    <textarea  name="memo" class="memo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['memo'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <div class="textRemainNum">残り<span class="remainMemo">600</span>文字</div>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['memo']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['memo'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w900 borR">寮・社宅の情報</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450">寮・社宅のポイント</div>
                                <div class="w450 borR">寮・社宅の情報</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <ul class="checkBoxListSmall">
                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['dormPointCkList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>  
                                    <label for="dormPoint<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <li><input type="checkbox" name="dormPoint[]" id="dormPoint<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['checked'], ENT_QUOTES, 'UTF-8', true);?>
>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>

                                    </li></label>
                                    <?php } ?>
                                    </ul>
                                </div>
                                <div class="w450 borR">
                                    <textarea  name="dormInfo" class="dormInfo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['dormInfo'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <div class="textRemainNum">残り<span class="remainDormInfo">600</span>文字</div>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['dormInfo']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['dormInfo'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>    
                            <div class="rowContents">
                                <div class="w900 borR borB btnArea">
                                    <div>
                                        <input type="submit" name="submit" value="入力内容の確認画面へ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php echo '<script'; ?>
 src="/forcom/js/admin.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/forcom/js/company_entry.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/forcom/js/vender/ajaxzip3.js" type="text/javascript" charset="UTF-8"><?php echo '</script'; ?>
>
    </body>  
</html>
<?php }} ?>
