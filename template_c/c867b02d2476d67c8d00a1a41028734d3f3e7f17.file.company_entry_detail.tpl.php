<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-25 11:33:22
         compiled from "./templates/company_entry_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:639689323571d81f2e46177-39391078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c867b02d2476d67c8d00a1a41028734d3f3e7f17' => 
    array (
      0 => './templates/company_entry_detail.tpl',
      1 => 1461548166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '639689323571d81f2e46177-39391078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formParams' => 0,
    'fcat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_571d81f30234b7_60350949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571d81f30234b7_60350949')) {function content_571d81f30234b7_60350949($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>セントラルクルー | 求人申し込み詳細</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="css/company_entry.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="js/vender/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
    </head>
    <body>
        <header class="header">
            <h2 class="topTextJobEdit">
                <a href="./index.html" class="linkTop">求人申込書 詳細</a>
            </h2>
        </header>
        <div class="container cBg">
            <div class="contents">
                    <div class="main">
                        <div class="leftBox">
                            <div class="rowTitleLarge">
                                <div class="w900 borR">
                                    <div class="mailLinkTitle">求人情報
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;申込日
                                        &nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['created'], ENT_QUOTES, 'UTF-8', true);?>

                                    </div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>企業名</div>
                                <div class="w450 borR"><span class="must">【必須】 </span>施設名(勤務先)</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyName'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                                <div class="w450 borR">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facilityName'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>本社住所</div>
                                <div class="w450 borR"><span class="must">【必須】 </span>勤務先住所</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <table>
                                        <tr><td class="leftCell">郵便番号</td>
                                            <td class="rightCell">
                                                <div class="jsFormPostcode">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyPostcode'], ENT_QUOTES, 'UTF-8', true);?>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">都道府県</td>
                                            <td class="rightCell">
                                                <div class="companyPrefecture">
                                                 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyPrefecture'], ENT_QUOTES, 'UTF-8', true);?>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">住所</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyAddress'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php echo nl2br($_tmp1);?>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">TEL</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyTel'], ENT_QUOTES, 'UTF-8', true);?>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">FAX</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                     <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyFax'], ENT_QUOTES, 'UTF-8', true);?>

                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                   
                                </div>
                                <div class="w450 borR">
                                    <?php if ($_smarty_tpl->tpl_vars['formParams']->value['facilitySame']) {?>
                                        <div>本社住所と同じ</div>
                                    <?php }?>
                                    <table>
                                        <tr><td class="leftCell">郵便番号</td>
                                            <td class="rightCell">
                                                <div class="jsFormPostcode">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facilityPostcode'], ENT_QUOTES, 'UTF-8', true);?>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">都道府県</td>
                                            <td class="rightCell">
                                                <div class="jsFormPrefecture">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facilityPrefecture'], ENT_QUOTES, 'UTF-8', true);?>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">住所</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                   <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facilityAddress'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp2=ob_get_clean();?><?php echo nl2br($_tmp2);?>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">TEL</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facilityTel'], ENT_QUOTES, 'UTF-8', true);?>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">FAX</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facilityFax'], ENT_QUOTES, 'UTF-8', true);?>

                                                </div>
                                            </td>
                                        </tr>
                                    </table>
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
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['department'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                                <div class="w200">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                                <div class="w250">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                                <div class="w250 borR">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['mobile'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w300"><span class="must">【必須】 </span>求人数</div>
                                <div class="w600 borR"><span class="must">【必須】 </span>有効求人期間</div>
                            </div>
                            <div class="rowContents">
                                <div class="w300">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['needNum'], ENT_QUOTES, 'UTF-8', true);?>
 人
                                </div>
                                <div class="w600 borR">
                                    <?php if ($_smarty_tpl->tpl_vars['formParams']->value['termOpen']) {?>
                                        随時相談可能<br>
                                    <?php }?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['termFrom'], ENT_QUOTES, 'UTF-8', true);?>
　～　<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['termTo'], ENT_QUOTES, 'UTF-8', true);?>

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
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['employmentStatus'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                            </div>
                            <div class="rowTitle jsGeneralParam">
                                <div class="w900 borR"><span class="must">【必須】 </span>職種 </div>
                            </div>
                            <div class="rowContents jsGeneralParam">
                                <div class="w900 borR">
                                <?php  $_smarty_tpl->tpl_vars['fcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['jobCategoryCkList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fcat']->key => $_smarty_tpl->tpl_vars['fcat']->value) {
$_smarty_tpl->tpl_vars['fcat']->_loop = true;
?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['fcat']->value['margeParams'])) {?>
                                    <div class="tdh"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fcat']->value['catName'], ENT_QUOTES, 'UTF-8', true);?>
</strong><br><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fcat']->value['margeParams'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <?php }?>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>仕事内容</div>
                                <div class="w450 borR"><span class="must">【必須】 </span>勤務時間</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp3=ob_get_clean();?><?php echo nl2br($_tmp3);?>

                                </div>
                                <div class="w450 borR">
                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['workingHours'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp4=ob_get_clean();?><?php echo nl2br($_tmp4);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>休日・ 休暇</div>
                                <div class="w450 borR">必要な経験・資格 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['holiday'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp5=ob_get_clean();?><?php echo nl2br($_tmp5);?>

                                </div>
                                <div class="w450 borR">
                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['qualifications'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp6=ob_get_clean();?><?php echo nl2br($_tmp6);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>給与形態</div>
                                <div class="w450 borR">福利厚生・待遇</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryUnit'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryMin'], ENT_QUOTES, 'UTF-8', true);?>
円<?php if (!empty($_smarty_tpl->tpl_vars['formParams']->value['salaryMax'])) {?>～<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryMax'], ENT_QUOTES, 'UTF-8', true);?>
円<?php }?>
                                    <br>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryInfo'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                                <div class="w450 borR">
                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['conditionInfo'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp7=ob_get_clean();?><?php echo nl2br($_tmp7);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450">就労時必要物</div>
                                <div class="w450 borR">その他特記事項</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['needItem'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp8=ob_get_clean();?><?php echo nl2br($_tmp8);?>

                                </div>
                                <div class="w450 borR">
                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['memo'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp9=ob_get_clean();?><?php echo nl2br($_tmp9);?>

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
                                <div class="w450 borB">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['dormPointCkList'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                                <div class="w450 borR borB">
                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['dormInfo'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp10=ob_get_clean();?><?php echo nl2br($_tmp10);?>

                                </div>
                            </div>    
                        </div>
                    </div>
            </div>
        </div>
    </body>  
</html>
<?php }} ?>
