<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-08-08 17:13:45
         compiled from "./templates/keyword_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9981483956f0a29ddf5092-37195449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6919a1750fdd4a6f6276bdfeecdfd81ce5d44ee1' => 
    array (
      0 => './templates/keyword_result.tpl',
      1 => 1502179927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9981483956f0a29ddf5092-37195449',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f0a29def25f6_76652021',
  'variables' => 
  array (
    'searchParam' => 0,
    'searchWord' => 0,
    'jobs' => 0,
    'row' => 0,
    'pageInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f0a29def25f6_76652021')) {function content_56f0a29def25f6_76652021($_smarty_tpl) {?><!DOCTYPE html>
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
<?php echo '<script'; ?>
 src="/js/vender/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/vender/underscore.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/vender/jquery.magnific-popup.js" type="text/javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="/js/vender/magnific-popup.css" type="text/css" media="screen">
<?php echo '<script'; ?>
 src="/js/like.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/job_list.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/keyword_result.js" type="text/javascript"><?php echo '</script'; ?>
>
<title>求人一覧-ホテルズワーク</title>
<meta name="description" content="ホテル・旅館・リゾート求人の「ホテルズワーク」。宿泊施設に特化したアルバイト・正社員求人サイト">
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
</head>
<body>

<!-- ヘッダー -->
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('HTDOCS_DIR'))."/templates/header_common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- / ヘッダー -->

<div class="searchBox">
        <div class="listHeaderSearchBox"> 
<div class="wrapperSearch" data-jc="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchParam']->value['jobCategory'], ENT_QUOTES, 'UTF-8', true);?>
" data-jd="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchParam']->value['department'], ENT_QUOTES, 'UTF-8', true);?>
">
<form>
<div class="freeword listHeaderFW">
    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchWord']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="keyword" id="s" placeholder="勤務地や職種等キーワードで探す">
    <input type="button" id="searchsubmit" class="jsSearchBtn" value="&#xf002;">
</div>
</form>
</div>

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
            <div class="col-sm-6 col-md-3" itemscope itemtype="http://schema.org/JobPosting"><a href="/job/detail/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
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
                    <div>
                        <i class="fa fa-jpy fa-fw"></i><span itemprop="baseSalary"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['salary_unit'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['row']->value['salary_min']), ENT_QUOTES, 'UTF-8', true);?>
円～</span>
                    </div>
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


    <ul class="pagerBox">
        <li class="pagerLeftBox">
            <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['prev']) {?>
            <a href="/search/result<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['prevParam'], ENT_QUOTES, 'UTF-8', true);?>
"><div class="pre pageNaviOn">前の<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['listNumByPage'], ENT_QUOTES, 'UTF-8', true);?>
件</div></a>
            <?php } else { ?>
            <div class="pre pageNaviOff">前の<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['listNumByPage'], ENT_QUOTES, 'UTF-8', true);?>
件</div>
            <?php }?>
            
        </li>
        <li class="pagerMainBox">
                <span class="all"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['recordsNum'], ENT_QUOTES, 'UTF-8', true);?>
</span>件 <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['page'], ENT_QUOTES, 'UTF-8', true);?>
</span>/<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['pageNum'], ENT_QUOTES, 'UTF-8', true);?>
</span>
        </li>
        <li class="pagerRightBox">
            <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['next']) {?>
                <a href="/search/result/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['nextParam'], ENT_QUOTES, 'UTF-8', true);?>
"><div class="next pageNaviOn">次の<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['listNumByPage'], ENT_QUOTES, 'UTF-8', true);?>
件</div></a>
            <?php } else { ?>
                <div class="next pageNaviOff">次の<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageInfo']->value['listNumByPage'], ENT_QUOTES, 'UTF-8', true);?>
件</div>
            <?php }?>
        </li>
    </ul>
</div>
<!-- / WRAPPER --> 

<!-- フッター -->
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('HTDOCS_DIR'))."/templates/footer_common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- / フッター -->

</body>
</html><?php }} ?>
