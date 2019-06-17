<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-05-29 18:43:22
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214602771956f09cee5645d6-42421973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2805267879fece2e3884461691890fdb8ea97fe' => 
    array (
      0 => './templates/index.tpl',
      1 => 1519808092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214602771956f09cee5645d6-42421973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f09cee684190_40557169',
  'variables' => 
  array (
    'specialsForKanban' => 0,
    'row' => 0,
    'list' => 0,
    'fcat' => 0,
    'keywords' => 0,
    'recommendJobs' => 0,
    'specials' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f09cee684190_40557169')) {function content_56f09cee684190_40557169($_smarty_tpl) {?><!DOCTYPE html>
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
<link rel="stylesheet" href="/css/top.css" type="text/css" media="screen">
<?php echo '<script'; ?>
 src="/js/vender/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/vender/underscore.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/index.js" type="text/javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="/js/vender/sliderpro/slider-pro.css" type="text/css" media="screen">
<?php echo '<script'; ?>
 src="/js/vender/sliderpro/jquery.sliderPro.min.js"><?php echo '</script'; ?>
>
<title>ホテルズワーク-ホテル旅館リゾート求人</title>
<meta name="description" content="ホテル・旅館・リゾート求人の「ホテルズワーク」。宿泊施設に特化したアルバイト・正社員求人サイト">
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
</head>
<body>
<!-- ヘッダー -->
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('HTDOCS_DIR'))."/templates/header_common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- / ヘッダー -->

<!--<div class="mainImgBox">
<img src="img/top/kan02.jpg" width="980" height="430" alt=""/><img src="img/top/kan01.jpg" width="980" height="430" alt=""/><img src="img/top/kan03.jpg" width="980" height="430" alt=""/>
</div>-->
<!--
<div id="kariWrapper">
    <div id="mainBanner" class="mainImg">
    <img src="img/top/kan01.jpg" width="980" alt="">
    </div>
</div>
-->

<div id="wide" class="slider-pro">
  <div class="sp-slides">
    <!--<div class="sp-slide">
        <a href="http://www.skibaito.net/" target="_blank">
        <img class="sp-image" src="/img/top/kan_skii2017.jpg" alt="スキー場バイト"/>
      </a>
    </div>-->
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['specialsForKanban']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>     
    <div class="sp-slide">
      <a href="/special/contens/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><img class="sp-image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['img']['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" alt=""/></a>
    </div>   
    <?php } ?>
    <!--<div class="sp-slide">
      <img class="sp-image" src="/img/top/kan01.jpg" alt=""/>
    </div>-->
    <div class="sp-slide">
      <a href="/free_entry/input/"><img class="sp-image" src="/img/top/kan02.jpg" alt=""/></a>
    </div>
    <!--
    <div class="sp-slide">
      <img class="sp-image" src="/img/top/kan03.jpg" alt=""/>
    </div>-->
    <div class="sp-slide">
      <a href="/lp/okinawa.html">
        <img class="sp-image" src="/img/top/kan_lp.jpg" alt=""/>
      </a>
    </div>
    
  <!--/ sp-slides--></div>
<!--/ wide--></div>

<div id="wrapper">
    <div class="searchBox">
        <div class="topSearchBox"> 
            
            <!-- Select -->
            <select id="selectPlace" class="topSB jsSelectPrefecture">
                <option value="0" selected="selected">都道府県</option>
                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['prefecture']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                <?php } ?>
            </select>
            
            <!-- Select -->
            
            <select id="selectJobCategory" class="topSB jsSelectJobCategory">
                <option value="0" selected="selected">職種</option>
                    <?php  $_smarty_tpl->tpl_vars['fcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['jobCategory']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fcat']->key => $_smarty_tpl->tpl_vars['fcat']->value) {
$_smarty_tpl->tpl_vars['fcat']->_loop = true;
?>
                        <optgroup label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fcat']->value['catName'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fcat']->value['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                        <?php } ?>
                    <?php } ?>
            </select>
            <div class="freeword topFW">
            <input type="text" value="" name="keyword" id="s" placeholder="こだわりのキーワードで探す">
            <input type="button" id="searchsubmit" class="jsSearchBtn" value="&#xf002;">
            </div> </div>
    </div>
    <ul class="keywordBt">
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['keywords']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
        <li><a href="/keyword/search?keyword=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['wordUrlEn'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['word'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
        <?php } ?>
    </ul>
    
    <!--<a class="middleBn" href="http://www.skibaito.net/" target="_blank"><img src="/img/top/banner_skii.jpg" alt="2017-2018 SEASON スキー場バイト"/></a>-->
    
    <h2 class="recommendH2"><i class="fa fa-flag-o"></i>おすすめのお仕事</h2>
    <div class="cards-simple-wrapper">
        <div class="row">
            
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recommendJobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
</span><span class="cardListCategory" itemprop="occupationalCategory
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['jobCategoryText'], ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                <div class="cardListTitle" itemprop="title"><a href="/job/detail/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></div>
                <div class="moreInfo">
                    <div><i class="fa fa-map-marker fa-fw"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['city'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="subCardemploy" itemprop="employmentType"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['employmentStatusText'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['is_live_in']==1) {?><div class="subCardDormOK" itemprop="employmentType">寮・社宅完備</div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['is_live_in']==0) {?><div class="subCardDormNG" itemprop="employmentType">通勤・通い</div>
                    <?php }?>
                </div>
            </div>
            <!-- /.col-* -->
            <?php } ?>
     
        </div>
        <!-- /.row --> 
    </div>
    <!-- /.cards-simple-wrapper -->
    
    <h2 class="specialH2"><i class="fa fa-star-o"></i>人気のあるお仕事特集</h2>
    <div class="cards-simple-wrapper">
        <div class="row">
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['specials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            <div class="col-sm-6 colSpecial" itemscope itemtype="http://schema.org/JobPosting">
                <?php if ($_smarty_tpl->tpl_vars['row']->value['img']['fileName']) {?>
                <div class="card-simple" data-background-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['img']['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" style=" background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['img']['fileName'], ENT_QUOTES, 'UTF-8', true);?>
);" itemprop="image" content="https://hotelswork.net/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['img']['fileName'], ENT_QUOTES, 'UTF-8', true);?>
">
                <?php } else { ?>
                <div class="card-simple" data-background-image="/img/common/noimg/special_no_img.png" style=" background-image:url(/img/common/noimg/special_no_img.png);">
                <?php }?>
                    <a href="/special/contens/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <div class="card-simple-background special-background"></div>
                    <!-- /.card-simple-background --> 
                    </a> </div>
                <!-- /.card-simple -->
                <div class="moreSPInfo">
                    <div class="cardListSPTitle" itemprop="title"><a href="/special/contens/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo nl2br($_smarty_tpl->tpl_vars['row']->value['title']);?>
</a></div>
                    <div class="cardListSPInfo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                </div>
            </div>
            <!-- /.col-* -->
            <?php } ?>
        </div>
        <!-- /.row --> 
    </div>
    <!-- /.cards-simple-wrapper -->
    
    <div class="specialListBt"><a href="/special/list">特集の一覧へ</a></div>
    
    <!-- 採用バナー -->
    <div class="applyCc">
        <a href="/job/detail/375"><img src="img/top/cc_saiyo.jpg"></a>
    </div>
    
    <!-- SNS -->
    <div class="snsBanner">
        <a href="https://twitter.com/centralcrewcc?lang=ja" class="twBanner"><img src="img/top/twitter.jpg" alt="ツイッター"></a>
		<a href="https://www.instagram.com/central.crew/" class="igBanner"><img src="img/top/instagram.jpg" alt="インスタグラム"></a>
		<a href="https://www.facebook.com/centralcrewCC/" class="fbBanner"><img src="img/top/facebook.jpg" alt="フェイスブック">
			</div>
		    <div class="snsBannerSecond">
		<a href="https://www.instagram.com/centralcrew_oki/" class="igBanner"><img src="img/top/instagram_okinawa.jpg" alt="インスタグラム"></a>
			</div>
    </div>
    
</div>
        
        
<!-- / WRAPPER --> 

<!-- フッター -->
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('HTDOCS_DIR'))."/templates/footer_common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- / フッター -->

</body>
</html><?php }} ?>
