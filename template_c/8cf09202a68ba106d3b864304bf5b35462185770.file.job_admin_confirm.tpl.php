<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-28 12:03:08
         compiled from "./templates/job_admin_confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72185555756f0d8cac652f3-70679847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cf09202a68ba106d3b864304bf5b35462185770' => 
    array (
      0 => './templates/job_admin_confirm.tpl',
      1 => 1460344122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72185555756f0d8cac652f3-70679847',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f0d8cae40191_53646007',
  'variables' => 
  array (
    'formType' => 0,
    'formParams' => 0,
    'fcat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f0d8cae40191_53646007')) {function content_56f0d8cae40191_53646007($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>ホテルズワーク管理 | 求人情報管理</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin_job_confirm.css" rel="stylesheet" type="text/css"/>
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
                    求人情報変更 確認画面
                    <?php } else { ?>
                    求人情報新規入力 確認画面
                    <?php }?>
                </span>
            </h2>
        </header>
        <div class="container cBg">
            <div class="contents">
                <form name="form1" method="POST" action="/admin/job_admin_edit.php" enctype="multipart/form-data">
                    <input type="hidden" name="mode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['mode'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <input type="hidden" name="jid" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['jobId'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <div class="main">
                        <div class="leftBox">
                            <div class="rowTitleLarge">
                                <div class="w600 borR mailLinkBox">
                                    <div class="mailLinkTitle">求人情報 
                                    </div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w200">求人情報ID</div>
                                <div class="w160">担当</div>
                                <div class="w120">ステータス</div>
                                <div class="w120 borR">リゾート指定</div>
                            </div>
                            <div class="rowContents">
                                <div class="w200"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['recJobId'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="w160"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['centralManager'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="w120"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['statusText'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="w120 borR">
                                    <?php if ($_smarty_tpl->tpl_vars['formParams']->value['isResort']) {?>
                                    リゾート求人
                                    <?php } else { ?>
                                    一般求人
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w200">登録日</div>
                                <div class="w400 borR">募集期限</div>
                            </div>
                            <div class="rowContents">
                                <div class="w200"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['registDate'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="w400 borR"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['expire'], ENT_QUOTES, 'UTF-8', true);?>
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
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['sortDate'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>雇用形態</div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">    
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['employmentStatus'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                            </div>
                            <div class="rowTitle jsGeneralParam">
                                <div class="w600 borR">職種[一般求人]</div>
                            </div>
                            <div class="rowContents jsGeneralParam">
                                <div class="w600 borR">
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
                            <div class="rowTitleLarge">
                                <div class="w600 borR">勤務先情報</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">親会社 施設等<span class="caution">※管理用</span>
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['companyNameHush'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">施設名<span class="caution">※表示用</span>
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['hotelsName'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>施設区分
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['facilityCategoryCkList'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                            </div>
                              <div class="rowTitle">
                                <div class="w200"><span class="must">【必須】 </span>都道府県</div>
                                <div class="w400 borR"><span class="must">【必須】 </span>勤務地(市町村名等)</div>
                            </div>
                            <div class="rowContents">
                                <div class="w200">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['prefecture'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                                <div class="w400 borR">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['city'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                            </div>                              
                            <div class="rowTitle">
                                <div class="w600 borR">交通機関
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                     <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['access'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w600 borR">タイトルおよび仕事アピール情報</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>タイトル 
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>サブタイトル 
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['subTitle'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">メインの本文 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR borB">
                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['jobPr'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php echo nl2br($_tmp1);?>

                                </div>
                            </div>
                        </div>
                        <div class="centerBox">
                            <div class="rowTitleLarge">
                            <div class="w600 borR">募集要項</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">仕事内容 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp2=ob_get_clean();?><?php echo nl2br($_tmp2);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">勤務期間
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['workingTermCkList'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>勤務時間 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                     <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['workingHours'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp3=ob_get_clean();?><?php echo nl2br($_tmp3);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>休日・休暇 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                     <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['holiday'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp4=ob_get_clean();?><?php echo nl2br($_tmp4);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>応募資格・応募条件 </span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                     <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['qualifications'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp5=ob_get_clean();?><?php echo nl2br($_tmp5);?>

                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w600 borR">給与・待遇</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>給与の下限と上限</div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryUnit'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryMin'], ENT_QUOTES, 'UTF-8', true);?>
円<?php if (!empty($_smarty_tpl->tpl_vars['formParams']->value['salaryMax'])) {?>～<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryMax'], ENT_QUOTES, 'UTF-8', true);?>
円<?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">給与説明 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['salaryInfo'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp6=ob_get_clean();?><?php echo nl2br($_tmp6);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>福利厚生・待遇 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['conditionInfo'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp7=ob_get_clean();?><?php echo nl2br($_tmp7);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">試用期間 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['trial'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp8=ob_get_clean();?><?php echo nl2br($_tmp8);?>

                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">就労ボーナス</div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['formParams']->value['giftMoney'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['giftMoney'], ENT_QUOTES, 'UTF-8', true);?>
円<?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">就労ボーナス説明 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR borB">
                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['giftMoneyInfo'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp9=ob_get_clean();?><?php echo nl2br($_tmp9);?>

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
                                    <?php if ($_smarty_tpl->tpl_vars['formParams']->value['isLiveIn']) {?>
                                    住み込み可（寮・社宅完備または館内住み込み） 
                                    <?php }?>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w400 borR">寮・社宅のポイント</div>
                            </div>
                            <div class="rowContents">
                                <div class="w400 borR">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['dormPointCkList'], ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                            </div>    
                            <div class="rowTitle">
                                <div class="w400 borR">寮・社宅の情報</div>
                            </div>
                            <div class="rowContents">
                                <div class="w400 borR">
                                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formParams']->value['dormInfo'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp10=ob_get_clean();?><?php echo nl2br($_tmp10);?>

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
                                <?php  $_smarty_tpl->tpl_vars['fcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formParams']->value['featureCkList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                            <div class="rowTitleLarge">
                                <div class="w400 borR">操作</div>
                            </div>
                            <div class="rowContents">
                                <div class="w400 borR borB btnArea">
                                    <div>
                                    <input type="submit" name="submit" value="戻る">　　　
                                    <input type="submit" name="submit" value="この内容で保存する">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php echo '<script'; ?>
 src="js/admin.js" type="text/javascript"><?php echo '</script'; ?>
>
    </body>  
</html>
<?php }} ?>
