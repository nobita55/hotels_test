<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-07 11:58:26
         compiled from "./templates/company_entry_detail2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33342528157d64cdba96f69-23301708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c47b93ee6e38eff2708a3e907664a657038f72' => 
    array (
      0 => './templates/company_entry_detail2.tpl',
      1 => 1496804299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33342528157d64cdba96f69-23301708',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57d64cdbb902c9_37748495',
  'variables' => 
  array (
    'formParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d64cdbb902c9_37748495')) {function content_57d64cdbb902c9_37748495($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>セントラルクルー | 求人申込書詳細</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/forcom/css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="/admin/css/admin2.css" rel="stylesheet" type="text/css"/>   
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
                    求人申込書　詳細
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
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['company_name'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr>
                
                <!-- 企業名（フリガナ） -->
                <tr>
                    <td class="leftCell">
                        企業名（フリガナ）
                        <div class="must">必須</div>
                    </td>
                    <td id="companyNameKana" class="rightCell" colspan="2">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['company_name_kana'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr>
                
                <!-- 施設名（部署名） -->
                <tr>
                    <td class="leftCell">
                        施設名（部署名）
                        <div class="must">必須</div>
                    </td>
                    <td id="facilityName" class="rightCell" colspan="2">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facility_name'], ENT_QUOTES, 'UTF-8', true);?>

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
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['name_kana'], ENT_QUOTES, 'UTF-8', true);?>

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
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['post_code'], ENT_QUOTES, 'UTF-8', true);?>

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
                        <?php if ($_smarty_tpl->tpl_vars['formParams']->value['job_address']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['job_address'], ENT_QUOTES, 'UTF-8', true);
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
                        
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['jobSection'], ENT_QUOTES, 'UTF-8', true);?>
<br />
                            職種：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['job_category'], ENT_QUOTES, 'UTF-8', true);?>

                        
                    </td>
                </tr>
                
                <!-- 仕事の内容 -->
                <tr>
                    <td class="leftCell">
                        仕事の内容
                        <div class="must">必須</div>
                    </td>
                    <td class="rightCell" colspan="2">
                        <?php echo nl2br($_smarty_tpl->tpl_vars['formParams']->value['job_detail']);?>

                    </td>
                </tr>
                
                <!-- 勤務シフト -->
                <tr>
                    <td class="leftCell">勤務シフト<div class="must">必須</div></td>
                    <td class="rightCell workShift" colspan="2">
                        <?php echo nl2br($_smarty_tpl->tpl_vars['formParams']->value['work_shift']);?>

                    </td>
                </tr>
                
                <!-- 休日・休暇 -->
                <tr>
                    <td class="leftCell">休日・休暇</td>
                    <td class="rightCell" colspan="2">
                        <?php echo $_smarty_tpl->tpl_vars['formParams']->value['holiday'];?>

                    </td>
                </tr>
                
                <!-- 時間外労働 -->
                <tr>
                    <td class="leftCell">時間外労働</td>
                    <td class="rightCell" colspan="2">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['overtime_work'], ENT_QUOTES, 'UTF-8', true);?>

                    </td>
                </tr>
                
                <!-- 雇用形態・期間 -->
                <tr>
                    <td class="leftCell">雇用形態・期間</td>
                    <td class="rightCell" colspan="2">
                        <?php echo $_smarty_tpl->tpl_vars['formParams']->value['employment'];?>

                    </td>
                </tr>  
                
                <!-- 手当 -->
                <tr>
                    <td class="leftCell">手当</td>
                    <td class="rightCell" colspan="2">
                        <?php echo $_smarty_tpl->tpl_vars['formParams']->value['allowance'];?>

                    </td>
                </tr>  
                
                <!-- 加入保険 -->
                <tr>
                    <td class="leftCell">加入保険</td>
                    <td class="rightCell" colspan="2">
                        <?php echo $_smarty_tpl->tpl_vars['formParams']->value['insurance'];?>

                    </td>
                </tr>  
                
                <!-- 給与・賞与 -->
                <tr>
                    <td class="leftCell">給与・賞与</td>
                    <td class="rightCell" colspan="2">
                            <?php if ($_smarty_tpl->tpl_vars['formParams']->value['salary_unit']!='0') {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salary_unit'], ENT_QUOTES, 'UTF-8', true);?>

                            <?php }?>
                            &yen;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salary_min'], ENT_QUOTES, 'UTF-8', true);?>
～&yen;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salary_max'], ENT_QUOTES, 'UTF-8', true);?>

                            <br />
                            <?php if ($_smarty_tpl->tpl_vars['formParams']->value['bonus']!='0') {?> 賞与：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['bonus'], ENT_QUOTES, 'UTF-8', true);
}?>
                    </td>
                </tr>
                
                <!-- 賃金締日・支払日 -->
                <tr>
                    <td class="leftCell">賃金締日・支払日</td>
                    <td class="rightCell" colspan="2">
                        <?php echo $_smarty_tpl->tpl_vars['formParams']->value['billing_day'];?>

                    </td>
                </tr> 
                
                <!-- 寮・社宅情報 -->
                <tr>
                    <td class="leftCell">寮・社宅情報</td>
                    <td class="rightCell" colspan="2">
                        <?php echo $_smarty_tpl->tpl_vars['formParams']->value['dorm'];?>

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
                        <?php echo nl2br($_smarty_tpl->tpl_vars['formParams']->value['must_skill']);?>

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
                        <input type="button" onclick="location.href='./company_entry.php?mode=list'" value="一覧に戻る">
                    </td>
                </tr>
            </table>
            </form>


        </div>
    </body>
</html><?php }} ?>
