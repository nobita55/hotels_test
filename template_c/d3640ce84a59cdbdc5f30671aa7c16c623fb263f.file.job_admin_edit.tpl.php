<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-19 15:45:39
         compiled from "./templates/job_admin_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181924184556f0d1c8259e78-65048149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3640ce84a59cdbdc5f30671aa7c16c623fb263f' => 
    array (
      0 => './templates/job_admin_edit.tpl',
      1 => 1488180811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181924184556f0d1c8259e78-65048149',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f0d1c85370b9_17087611',
  'variables' => 
  array (
    'formType' => 0,
    'formParams' => 0,
    'errFlag' => 0,
    'errMessage' => 0,
    'row' => 0,
    'fcat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f0d1c85370b9_17087611')) {function content_56f0d1c85370b9_17087611($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>ホテルズワーク管理 | 求人情報管理</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin_job_edit.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="js/vender/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
        <link href="js/vender/dist/sweetalert.css" rel="stylesheet" type="text/css">
        <?php echo '<script'; ?>
 src="js/vender/dist/sweetalert.min.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <header class="header">
            <h2 class="topTextJobEdit"><a href="./index.html" class="linkTop">ホテルズワーク管理</a> <span class="topTextSep">|</span> 
                <span class="topToolName">
                    <?php if ($_smarty_tpl->tpl_vars['formType']->value=='edit') {?>
                    求人情報変更
                    <?php } else { ?>
                    求人情報新規入力
                    <?php }?>
                </span>
            </h2>
        </header>
        <div class="container cBg">
            <div class="contents">
                <form id="form1" name="form1" method="POST" action="/admin/job_admin_edit.php" enctype="multipart/form-data">
                    <input type="hidden" name="mode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['mode'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <input type="hidden" name="jid" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['jobId'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['master']) {?>
                    <div class="masterError">入力内容にエラーがあります</div>
                    <?php }?>
                    <div class="main">
                        <div class="leftBox">
                            <div class="rowTitleLarge">
                                <div class="w600 borR mailLinkBox">
                                    <div class="mailLinkTitle">求人情報
                                    </div>
                                    <div class="mailLink">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['formParams']->value['jobId'])) {?>
                                        <a class="euplink copyJob" href="./job_admin_edit.php?mode=copy&jid=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['jobId'], ENT_QUOTES, 'UTF-8', true);?>
">原稿コピー</a>　
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                
                                <div class="w200"><span class="must">【必須】 </span>求人ID<span class="caution">※半角英数</span></div>
                                <div class="w160">担当</div>
                                <div class="w120">ステータス</div>
                                <div class="w120 borR">リゾート指定</div>
                            </div>
                            <div class="rowContents">
                                <div class="w200">
                                    <input type="text" class="recJobId" size="20" maxlength="20" name="recJobId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['recJobId'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['recJobId']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['recJobId'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                    </div>
                                <div class="w160">
                                    <select name="centralManager" class="jsManager">
                                        <option value="0">選択してください</option>
                                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['centralManagerList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                <div class="w120">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['statusText'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                                <div class="w120 borR">
                                    <label for="isResort">
                                    <div>
                                    <input type="checkbox" name="isResort" class="isResort" id="isResort" value="1" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['isResortChecked'], ENT_QUOTES, 'UTF-8', true);?>
><label for="isResort">リゾート求人</label>
                                    </div>
                                    </label>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w200">登録日</div>
                                <div class="w400 borR">募集期限<span class="caution">※カレンダーが表示されない場合半角で入力</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w200"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['registDate'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="w400 borR">
                                    <input type="date" class="expire" name="expire" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['expire'], ENT_QUOTES, 'UTF-8', true);?>
"> 入力形式例：2016-01-01
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['expire']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['expire'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w200">更新日</div>
                                <div class="w400 borR"><span class="must">【必須】 </span>並び用日時</div>
                            </div>
                            <div class="rowContents">
                                <div class="w200"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['update'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                                <div class="w400 borR">
                                    <input type="text" class="sortDate" size="20" maxlength="20" name="sortDate" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['sortDate'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <input type="button" class="jsSortdateNowBtn" value="最新に変更">
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['sortDate']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['sortDate'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>雇用形態</div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">    
                                    <input type="radio" name="employmentStatus" id="select1" value="1" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['employmentStatusChecked'][1], ENT_QUOTES, 'UTF-8', true);?>
>
                                    <label for="select1">派遣スタッフ</label>
                                    <input type="radio" name="employmentStatus" id="select2" value="2" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['employmentStatusChecked'][2], ENT_QUOTES, 'UTF-8', true);?>
>
                                    <label for="select2">職業紹介</label>
                                    <input type="radio" name="employmentStatus" id="select3" value="3" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['employmentStatusChecked'][3], ENT_QUOTES, 'UTF-8', true);?>
>
                                    <label for="select3">紹介予定派遣</label>
                                    <input type="radio" name="employmentStatus" id="select4" value="4" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['employmentStatusChecked'][4], ENT_QUOTES, 'UTF-8', true);?>
>
                                    <label for="select4">常用目的紹介</label>
                                    <input type="radio" name="employmentStatus" id="select5" value="5" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['employmentStatusChecked'][5], ENT_QUOTES, 'UTF-8', true);?>
>
                                    <label for="select5">社員紹介</label>
                                    <!--
                                    <input type="radio" name="employmentStatus" id="select6" value="6" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['employmentStatusChecked'][6], ENT_QUOTES, 'UTF-8', true);?>
>
                                    <label for="select6">その他</label>
                                    -->
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['employmentStatus']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['employmentStatus'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle jsGeneralParam">
                                <div class="w600 borR"><span class="must">【必須】 </span>職種</div>
                            </div>
                            <div class="rowContents jsGeneralParam">
                                <div class="w600 borR">
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
                                <div class="w600 borR">役職</div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <ul class="checkBoxList">
                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['positionCkList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <label for="position<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <li><input type="checkbox" name="position[]" id="position<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['checked'], ENT_QUOTES, 'UTF-8', true);?>
>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
 
                                    </li></label>
                                    <?php } ?>
                                     </ul>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['position']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['position'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w600 borR">勤務先情報</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">親会社 施設等<span class="caution">※管理用</span><span class="notes">　※残り<span class="remainCompanyNameHush">100</span>文字</span>
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <input type="text" name="companyNameHush" size="80" maxlength="200" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyNameHush'], ENT_QUOTES, 'UTF-8', true);?>
" class="w600input">
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['companyNameHush']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['companyNameHush'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">施設名<span class="caution">※表示用</span><span class="notes">　※残り<span class="remainHotelsName">60</span>文字</span>
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <input type="text" name="hotelsName" size="80" maxlength="200" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['hotelsName'], ENT_QUOTES, 'UTF-8', true);?>
" class="w600input">
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['hotelsName']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['hotelsName'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>施設区分
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <ul class="checkBoxList">
                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['facilityCategoryCkList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <label for="facility<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <li><input type="checkbox" name="facilityCategory[]" id="facility<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['checked'], ENT_QUOTES, 'UTF-8', true);?>
>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
 
                                    </li>
                                    </label>
                                    <?php } ?>
                                     </ul>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['facilityCategory']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['facilityCategory'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                              <div class="rowTitle">
                                <div class="w200"><span class="must">【必須】 </span>都道府県</div>
                                <div class="w400 borR"><span class="must">【必須】 </span>勤務地(市町村名等)<span class="notes">　※残り<span class="remainCity">12</span>文字</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w200">
                                    <select name="prefecture" class="prefecture">
                                    <option value="0">選択してください</option>
                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['prefectureList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['selected'], ENT_QUOTES, 'UTF-8', true);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <?php } ?>
                                    </select>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['prefecture']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['prefecture'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                    </div>
                                <div class="w400 borR">
                                    <input type="text" name="city" size="30" maxlength="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['city'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['city']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['city'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>                              
                            <div class="rowTitle">
                                <div class="w600 borR">交通機関<span class="notes">　※残り<span class="remainAccess">200</span>文字</span>
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <input type="text" name="access" size="80" maxlength="200" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['access'], ENT_QUOTES, 'UTF-8', true);?>
" class="w600input">
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['access']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['access'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w600 borR">タイトルおよび仕事アピール情報</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>タイトル <span class="notes">※残り<span class="remainTitle">58</span>文字</span>
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <input type="text" name="title" size="80" maxlength="200" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="w600input">
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['title']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>サブタイトル <span class="notes">※残り<span class="remainSubTitle">58</span>文字</span>
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <input type="text" name="subTitle" size="80" maxlength="200" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['subTitle'], ENT_QUOTES, 'UTF-8', true);?>
" class="w600input">
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['subTitle']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['subTitle'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">メインの本文 <span class="notes">※300文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR borB">
                                    <textarea  name="jobPr"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['jobPr'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['jobPr']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['jobPr'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                    <div class="textRemainNum">残り<span class="remainJobPr">300</span>文字</div>
                                </div>
                            </div>
                        </div>
                        <div class="centerBox">
                            <div class="rowTitlesLarge">
                            <div class="w600 borR">募集要項</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">仕事内容 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <textarea  name="description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['description']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                    <div class="textRemainNum">残り<span class="remainDescription">600</span>文字</div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">勤務期間
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <ul class="checkBoxList">
                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['workingTermCkList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <label for="workingTerm<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
">
                                     <li><input type="checkbox" name="workingTerm[]" id="workingTerm<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['checked'], ENT_QUOTES, 'UTF-8', true);?>
>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
 
                                    </li></label>
                                    <?php } ?>
                                     </ul>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['workingTerm']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['workingTerm'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>勤務時間 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <textarea  name="workingHours"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['workingHours'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['workingHours']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['workingHours'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                    <div class="textRemainNum">残り<span class="remainWorkingHours">600</span>文字</div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>休日・休暇 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <textarea  name="holiday"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['holiday'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['holiday']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['holiday'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                    <div class="textRemainNum">残り<span class="remainHoliday">600</span>文字</div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>応募資格・応募条件 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <textarea  name="qualifications"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['qualifications'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['qualifications']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['qualifications'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                    <div class="textRemainNum">残り<span class="remainQualifications">600</span>文字</div>
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w600 borR">給与・待遇</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>給与の下限と上限<span class="caution">※半角数字で入力。上限を設けない場合、上限は空欄可</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
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
                                    <input type="text" name="salaryMin" size="7" maxlength="7" class="textLineInput80" placeholder="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryMin'], ENT_QUOTES, 'UTF-8', true);?>
"> 円
                                        ～
                                    <input type="text" name="salaryMax" size="7" maxlength="7" class="textLineInput80" placeholder="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryMax'], ENT_QUOTES, 'UTF-8', true);?>
"> 円
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['salary']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['salary'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">給与説明 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <textarea  name="salaryInfo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryInfo'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['salaryInfo']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['salaryInfo'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                    <div class="textRemainNum">残り<span class="remainSalaryInfo">600</span>文字</div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>福利厚生・待遇 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <textarea  name="conditionInfo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['conditionInfo'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['conditionInfo']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['conditionInfo'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                    <div class="textRemainNum">残り<span class="remainConditionInfo">600</span>文字</div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">試用期間 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <textarea  name="trial"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['trial'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['trial']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['trial'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                    <div class="textRemainNum">残り<span class="remainTrial">600</span>文字</div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">就労ボーナス<span class="caution">※半角数字で入力</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <input type="text" name="giftMoney" size="7" maxlength="7" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['giftMoney'], ENT_QUOTES, 'UTF-8', true);?>
"> 円
                                   <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['giftMoney']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['giftMoney'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">就労ボーナス説明 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR borB">
                                    <textarea  name="giftMoneyInfo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['giftMoneyInfo'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['giftMoneyInfo']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['giftMoneyInfo'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                    <div class="textRemainNum">残り<span class="remainGiftMoneyInfo">600</span>文字</div>
                                </div>
                            </div>
                           
                        </div>

                        <div class="rightBox">
                             <div class="rowTitleLarge">
                                <div class="w400 borR">寮・社宅の情報</div>
                            </div>    
                            <div class="rowTitle">
                                <div class="w400 borR">住み込み</div>
                            </div>
                            <div class="rowContents">
                                <div class="w400 borR">
                                    <input type="checkbox" class="jsIsLiveIn" name="isLiveIn" id="isLiveIn" value="1" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['isLiveInChecked'], ENT_QUOTES, 'UTF-8', true);?>
>
                                    <label for="isLiveIn">
                                    住み込み可（寮・社宅完備または館内住み込み）
                                    </label>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w400 borR">寮・社宅のポイント</div>
                            </div>
                            <div class="rowContents">
                                <div class="w400 borR">
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
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['dormPoint']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['dormPoint'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>    
                                <div class="rowTitle">
                                <div class="w400 borR">寮・社宅の情報</div>
                            </div>
                            <div class="rowContents">
                                <div class="w400 borR">
                                    <textarea  name="dormInfo" class="rightTextArea"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['dormInfo'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['dormInfo']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['dormInfo'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                    <div class="textRemainNum">残り<span class="remainDormInfo">600</span>文字</div>
                                </div>
                            </div>    
                                
                            <div class="rowTitleLarge">
                                <div class="w400 borR">特長</div>
                            </div>
                            <div class="rowTitle jsGeneralParam">
                                <div class="w400 borR">特徴</div>
                            </div>
                            <div class="rowContents jsGeneralParam">
                                <div class="w400 borR">
                                    <ul class="checkBoxListSmall">
                                        <?php  $_smarty_tpl->tpl_vars['fcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['featureCkList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fcat']->key => $_smarty_tpl->tpl_vars['fcat']->value) {
$_smarty_tpl->tpl_vars['fcat']->_loop = true;
?>
                                        <!-- サブカテゴリー分ループ -->
                                        <li class="checkBoxListCategory"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fcat']->value['catName'], ENT_QUOTES, 'UTF-8', true);?>
</li>
                                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fcat']->value['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                        <!-- チェックボックス分ループ -->
                                        <label for="feature<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <li><input type="checkbox" name="feature[]" id="feature<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
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
                                    <?php if ($_smarty_tpl->tpl_vars['errFlag']->value['feature']) {?>
                                    <div class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errMessage']->value['feature'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w400 borR">操作</div>
                            </div>
                            <div class="rowContents">
                                <div class="w400 borR borB btnArea">
                                    <div>
                                        <?php if ($_smarty_tpl->tpl_vars['formType']->value=='edit') {?>
                                    　　<input type="submit" class="jsDelBtn" name="submit" value="削除">　　　　
                                        <?php }?>
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
 src="./js/admin.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="./js/job_admin_edit.js" type="text/javascript"><?php echo '</script'; ?>
>
    </body>  
</html>
<?php }} ?>
