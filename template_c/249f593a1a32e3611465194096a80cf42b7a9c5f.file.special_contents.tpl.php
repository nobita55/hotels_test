<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-08-08 16:56:01
         compiled from "./templates/special_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54626069556f112a7dc7b83-57696065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '249f593a1a32e3611465194096a80cf42b7a9c5f' => 
    array (
      0 => './templates/special_contents.tpl',
      1 => 1502177474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54626069556f112a7dc7b83-57696065',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f112a81c4715_30611015',
  'variables' => 
  array (
    'specialInfo' => 0,
    'jobs' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f112a81c4715_30611015')) {function content_56f112a81c4715_30611015($_smarty_tpl) {?><!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/common.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/header.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/footer.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/searchpanel.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/font-awesome.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/listingcards.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/card.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/pager.css" type="text/css" media="screen">
<link rel="apple-touch-icon" href="/img/common/apple-touch-icon.png">
<link rel="stylesheet" href="/css/special.css" type="text/css" media="screen">
<?php echo '<script'; ?>
 src="/js/vender/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/vender/underscore.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/like.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/job_list.js" type="text/javascript"><?php echo '</script'; ?>
>
<title><?php if ($_smarty_tpl->tpl_vars['specialInfo']->value['page_title']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['specialInfo']->value['page_title'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['specialInfo']->value['title'], ENT_QUOTES, 'UTF-8', true);
}?>-ホテルズワーク</title>
<meta name="description" content="ホテル・旅館・リゾート求人の「ホテルズワーク」。宿泊施設に特化したアルバイト・正社員求人サイト">
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
</head>
<body>

<!-- ヘッダー -->
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('HTDOCS_DIR'))."/templates/header_common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- / ヘッダー -->

<div class="specialBox">
    <div class="specialBoxInner">
    <?php if ($_smarty_tpl->tpl_vars['specialInfo']->value['img']) {?>
    <div id="mainBanner">
        <div class="mainBannerFlame">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['specialInfo']->value['img']['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" alt=""/>
        </div>
    </div>
    <?php }?>
        
    <div class="specialTitle"><h2><?php if ($_smarty_tpl->tpl_vars['specialInfo']->value['page_title']) {
echo nl2br($_smarty_tpl->tpl_vars['specialInfo']->value['page_title']);
} else {
echo nl2br($_smarty_tpl->tpl_vars['specialInfo']->value['title']);
}?></h2></div>
    <p><?php echo nl2br($_smarty_tpl->tpl_vars['specialInfo']->value['comment']);?>
</p>
    </div>
</div>
 
<div id="wrapper">
    <div class="cards-simple-wrapper">
        <div class="row">
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            <div class="col-sm-6 col-md-3" itemscope itemtype="http://schema.org/JobPosting"> <a href="/job/detail/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
                <?php if ($_smarty_tpl->tpl_vars['row']->value['img']['fileName']) {?>
                <div class="card-simple" data-background-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['img']['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" style=" background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['img']['fileName'], ENT_QUOTES, 'UTF-8', true);?>
);" itemprop="image" content="https://hotelswork.net/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['img']['fileName'], ENT_QUOTES, 'UTF-8', true);?>
">
                <?php } else { ?>
                <div class="card-simple" data-background-image="/img/common/noimg/job_no_img.png" style=" background-image:url(/img/common/noimg/job_no_img.png);">
                <?php }?>
                    <div class="card-simple-background">
                        <?php if ($_smarty_tpl->tpl_vars['row']->value['isBonus']) {?>
                        <div class="card-simple-price">就労ボーナス付</div>
                        <?php }?>
                    </div>
                    <!-- /.card-simple-background --> 
                </div>
                <!-- /.card-simple --> 
                </a>
                <div class="cardListInfo"><span class="cardListPref"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['prefecture'], ENT_QUOTES, 'UTF-8', true);?>
</span><span class="cardListCategory" itemprop="occupationalCategory"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['jobCategoryText'], ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                <div class="cardListTitle" itemprop="title"><a href="/job/detail/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></div>
                <div class="moreInfo">
                    <div><i class="fa fa-map-marker fa-fw"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['city'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div itemprop="baseSalary"><i class="fa fa-jpy fa-fw"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['salary_unit'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['row']->value['salary_min']), ENT_QUOTES, 'UTF-8', true);?>
円～</div>
                    <div><?php if ($_smarty_tpl->tpl_vars['row']->value['gift_money']!=null) {?><i class="fa fa-smile-o fa-fw"></i>祝い金 
                            <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['row']->value['gift_money']), ENT_QUOTES, 'UTF-8', true);?>
 円
                        <?php } else { ?>
                        &nbsp;
                        <?php }?>
                    </div>
                    <div class="subCardemploy" itemprop="employmentType"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['employmentStatusText'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['is_live_in']==1) {?><div class="subCardDormOK" itemprop="employmentType">寮・社宅完備</div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['is_live_in']==0) {?><div class="subCardDormNG" itemprop="employmentType">通勤・通い</div>
                    <?php }?>
                </div>
                <div class="listBtBox">
                <div class="listStudyBt jsStudyBtOff half" data-add-jid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><a href="#"><i class="fa fa-heart"></i>気になる</a></div>
                <div class="listStudyBt listStudyBtOn jsStudyBtOn half" data-del-jid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><a href="#"><i class="fa fa-heart"></i>気になる</a></div>
                <div class="listTelBt half"><a href="tel:0120979188">電話相談</a></div>
                <div class="listDetailBt half"><a href="/job/detail/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">詳細</a></div>
                </div>
                
            </div>
            <!-- /.col-* -->
            <?php } ?>
            



            

            

            

            
        </div>
        <!-- /.row --> 
    </div>
    <!-- /.cards-simple-wrapper -->

</div>
<!-- / WRAPPER --> 


<!-- フッター -->
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('HTDOCS_DIR'))."/templates/footer_common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- / フッター -->
</body>
</html><?php }} ?>
