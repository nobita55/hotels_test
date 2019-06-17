<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-07 11:54:12
         compiled from "./templates/company_entry_confirm2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31154259357d64c551472d6-73032213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5694bbe8fa4fbd379f902f3582ed38094b01ef2' => 
    array (
      0 => './templates/company_entry_confirm2.tpl',
      1 => 1496804034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31154259357d64c551472d6-73032213',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57d64c55272055_18573918',
  'variables' => 
  array (
    'formParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d64c55272055_18573918')) {function content_57d64c55272055_18573918($_smarty_tpl) {?><!DOCTYPE html>
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
                    求人情報　確認画面
                </h2>
            </div>
        </header>

        <form id="form1" name="form1" method="POST" action="/forcom/confirm" enctype="multipart/form-data">
        <div id="main">
            <table class="companyEntry">
                <!-- 企業名 -->
                <tr>
                    <td class="leftCell topCellLeft">
                        企業名
                        <div class="must">必須</div>
                    </td>
                    <td id="companyName" class="rightCell topCellRight" colspan="2" colspan="2">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyName'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr>
                <!-- 企業名（フリガナ） -->
                <tr>
                    <td class="leftCell">
                        企業名（フリガナ）
                        <div class="must">必須</div>
                    </td>
                    <td id="companyNameKana" class="rightCell" colspan="2">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyNameKana'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr>
                <!-- 施設名（部署名） -->
                <tr>
                    <td class="leftCell">
                        施設名（部署名）
                        <div class="must">必須</div>
                    </td>
                    <td id="facilityName" class="rightCell" colspan="2">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facilityName'], ENT_QUOTES, 'UTF-8', true);?>

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
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr>
                <tr>
                    <td class="sCellLeft sCellBottom">フリガナ</td>
                    <td id="nameKana" class="sCellRight">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['nameKana'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr>
                <!-- メールアドレス -->
                <tr>
                    <td class="leftCell">
                        メールアドレス
                        <div class="must">必須</div>
                    </td>
                    <td id="mail" class="rightCell" colspan="2">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['mail'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr>
                <!-- 電話番号 -->
                <tr>
                    <td class="leftCell">
                        電話番号
                        <div class="must">必須</div>
                    </td>
                    <td id="tel" class="rightCell" colspan="2">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['tel'], ENT_QUOTES, 'UTF-8', true);?>

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
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['postCode'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr>
                <tr>
                    <td class="sCellLeft">
                        都道府県
                    </td>
                    <td id="pref" class="sCellRight">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['pref'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr>
                <tr>
                    <td class="sCellLeft sCellBottom">
                        住所
                    </td>
                    <td id="address" class="sCellRight">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['address'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr>
                <!-- 就業場所 -->
                <tr>
                    <td class="leftCell">
                        就業場所
                        <div class="must">必須</div>
                    </td>
                    <td id="address" class="rightCell" colspan="2">
                        <?php if ($_smarty_tpl->tpl_vars['formParams']->value['jobAddressAll']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['jobAddressAll'], ENT_QUOTES, 'UTF-8', true);
}?>
                    </td>
                </tr> 
                <!-- 職種 -->
                <tr>
                    <td class="leftCell">
                        職種
                        <div class="must">必須</div>
                    </td>
                    <td class="rightCell" colspan="2">
                        
                            部門：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['jobSection'], ENT_QUOTES, 'UTF-8', true);?>
<br />
                            職種：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['jobCategory'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr>
                
                <!-- 仕事の内容 -->
                <tr>
                    <td class="leftCell">
                        仕事の内容
                        <div class="must">必須</div>
                    </td>
                    <td class="rightCell" colspan="2">
                        <?php echo nl2br($_smarty_tpl->tpl_vars['formParams']->value['jobDetail']);?>

                    </td>
                </tr>
                
                <!-- 勤務シフト -->
                <tr>
                    <td class="leftCell">勤務シフト<div class="must">必須</div></td>
                    <td class="rightCell" colspan="2">
                        <?php echo nl2br($_smarty_tpl->tpl_vars['formParams']->value['shift']);?>

                    </td>
                </tr>
                <!-- 休日・休暇 -->
                <tr>
                    <td class="leftCell">休日・休暇</td>
                    <td class="rightCell" colspan="2">
                        <?php echo nl2br($_smarty_tpl->tpl_vars['formParams']->value['holidayText']);?>

                    </td>
                </tr>
                
                <!-- 時間外労働 -->
                <tr>
                    <td class="leftCell">時間外労働</td>
                    <td class="rightCell" colspan="2">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['overtimeWork'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr>

                <!-- 雇用形態・期間 -->
                <tr>
                    <td class="leftCell">雇用形態・期間</td>
                    <td class="rightCell" colspan="2">
                        <?php echo $_smarty_tpl->tpl_vars['formParams']->value['employmentAll'];?>

                    </td>
                </tr>                
                
                <!-- 手当 -->
                <tr>
                    <td class="leftCell">手当</td>
                    <td class="rightCell" colspan="2">
                        <?php echo $_smarty_tpl->tpl_vars['formParams']->value['allowanceAll'];?>

                    </td>
                </tr>  
                
                <!-- 加入保険 -->
                <tr>
                    <td class="leftCell">加入保険</td>
                    <td class="rightCell" colspan="2">
                        <?php echo $_smarty_tpl->tpl_vars['formParams']->value['insuranceAll'];?>

                    </td>
                </tr>  
                
                <!-- 給与・賞与 -->
                <tr>
                    <td class="leftCell">給与・賞与</td>
                    <td class="rightCell confirmSalary" colspan="2">
                            <?php if ($_smarty_tpl->tpl_vars['formParams']->value['salaryUnit']!='0') {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryUnit'], ENT_QUOTES, 'UTF-8', true);?>

                            <?php }?>
                            &yen;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryMin'], ENT_QUOTES, 'UTF-8', true);?>
～&yen;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryMax'], ENT_QUOTES, 'UTF-8', true);?>

                            <br />
                            
                            賞与：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['bonusText'], ENT_QUOTES, 'UTF-8', true);?>
<br />
                            昇給：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['payriseText'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr>
                
                <!-- 賃金締日・支払日 -->
                <tr>
                    <td class="leftCell">賃金締日・支払日</td>
                    <td class="rightCell" colspan="2">
                        <?php echo $_smarty_tpl->tpl_vars['formParams']->value['billingDayAll'];?>

                    </td>
                </tr> 
                
                <!-- 寮・社宅情報 -->
                <tr>
                    <td class="leftCell">寮・社宅情報</td>
                    <td class="rightCell" colspan="2">
                        <?php echo $_smarty_tpl->tpl_vars['formParams']->value['dormText'];?>

                    </td>
                </tr>
                
                <!-- 必要な学歴 -->
                <tr>
                    <td class="leftCell">必要な学歴</td>
                    <td class="rightCell" colspan="2">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['educational'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr> 
                
                <!-- 必要な経験・免許・資格 -->
                <tr>
                    <td class="leftCell">必要な経験・免許・資格</td>
                    <td class="rightCell" colspan="2">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['mustSkill'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr> 
                
                <!-- 年齢制限 -->
                <tr>
                    <td class="leftCell">年齢制限</td>
                    <td class="rightCell" colspan="2">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['age'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr> 
                
                <!-- 定年制 -->
                <tr>
                    <td class="leftCell">定年制</td>
                    <td class="rightCell" colspan="2">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['retirement'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr> 
                
                <!-- ホームページ -->
                <tr>
                    <td class="leftCell">ホームページ</td>
                    <td class="rightCell" colspan="2">
                       <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['website'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr> 
                
                <!-- 備考 -->
                <tr>
                    <td class="leftCell">備考</td>
                    <td class="rightCell" colspan="2">
                        <?php echo nl2br($_smarty_tpl->tpl_vars['formParams']->value['memo']);?>

                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="submit">
                        <input type="button" name="back" class="jsBackBtn" value="修正する">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" value="この内容で送信">
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>
