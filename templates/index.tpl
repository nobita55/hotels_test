<!DOCTYPE html>
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
<script src="/js/vender/jquery.min.js" type="text/javascript"></script>
<script src="/js/vender/underscore.js" type="text/javascript"></script>
<script src="/js/index.js" type="text/javascript"></script>
<link rel="stylesheet" href="/js/vender/sliderpro/slider-pro.css" type="text/css" media="screen">
<script src="/js/vender/sliderpro/jquery.sliderPro.min.js"></script>
<title>ホテルズワーク-ホテル旅館リゾート求人</title>
<meta name="description" content="ホテル・旅館・リゾート求人の「ホテルズワーク」。宿泊施設に特化したアルバイト・正社員求人サイト">
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
</head>
<body>
<!-- ヘッダー -->
{include file="`$smarty.const.HTDOCS_DIR`/templates/header_common.tpl"}
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
    {foreach from=$specialsForKanban item=row }     
    <div class="sp-slide">
      <a href="/special/contens/{$row.id}"><img class="sp-image" src="{$row.img.fileName}" alt=""/></a>
    </div>   
    {/foreach}
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
                {foreach from=$list.prefecture item=row }
                    <option value="{$row.itemVal}">{$row.itemName}</option>
                {/foreach}
            </select>
            
            <!-- Select -->
            
            <select id="selectJobCategory" class="topSB jsSelectJobCategory">
                <option value="0" selected="selected">職種</option>
                    {foreach from=$list.jobCategory item=fcat }
                        <optgroup label="{$fcat.catName}">
                        {foreach from=$fcat.item item=row }
                        <option value="{$row.itemVal}">{$row.itemName}</option>
                        {/foreach}
                    {/foreach}
            </select>
            <div class="freeword topFW">
            <input type="text" value="" name="keyword" id="s" placeholder="こだわりのキーワードで探す">
            <input type="button" id="searchsubmit" class="jsSearchBtn" value="&#xf002;">
            </div> </div>
    </div>
    <ul class="keywordBt">
        {foreach from=$keywords item=row }
        <li><a href="/keyword/search?keyword={$row.wordUrlEn}">{$row.word}</a></li>
        {/foreach}
    </ul>
    
    <!--<a class="middleBn" href="http://www.skibaito.net/" target="_blank"><img src="/img/top/banner_skii.jpg" alt="2017-2018 SEASON スキー場バイト"/></a>-->
    
    <h2 class="recommendH2"><i class="fa fa-flag-o"></i>おすすめのお仕事</h2>
    <div class="cards-simple-wrapper">
        <div class="row">
            
            {foreach from=$recommendJobs item=row }
            <div class="col-sm-6 col-md-3" itemscope itemtype="http://schema.org/JobPosting"> <a href="/job/detail/{$row.id}">
                {if $row.img.fileName}
                    <div class="card-simple" data-background-image="{$row.img.fileName}" style=" background-image:url({$row.img.fileName});" itemprop="image" content="https://hotelswork.net/{$row.img.fileName}">
                {else}
                <div class="card-simple" data-background-image="/img/common/noimg/job_no_img.png" style=" background-image:url(/img/common/noimg/job_no_img.png);">
                {/if}
                    <div class="card-simple-background">
                        {if $row.isBonus}
                        <div class="card-simple-price">就労ボーナス付</div>
                        {/if}
                    </div>
                    <!-- /.card-simple-background --> 
                </div>
                <!-- /.card-simple --> 
                </a>
                        <div class="cardListInfo"><span class="cardListPref">{$row.prefecture}</span><span class="cardListCategory" itemprop="occupationalCategory
">{$row.jobCategoryText}</span></div>
                <div class="cardListTitle" itemprop="title"><a href="/job/detail/{$row.id}">{$row.title}</a></div>
                <div class="moreInfo">
                    <div><i class="fa fa-map-marker fa-fw"></i>{$row.city}</div>
                    <div class="subCardemploy" itemprop="employmentType">{$row.employmentStatusText}</div>
                    {if $row.is_live_in == 1}<div class="subCardDormOK" itemprop="employmentType">寮・社宅完備</div>
                    {else if $row.is_live_in == 0}<div class="subCardDormNG" itemprop="employmentType">通勤・通い</div>
                    {/if}
                </div>
            </div>
            <!-- /.col-* -->
            {/foreach}
     
        </div>
        <!-- /.row --> 
    </div>
    <!-- /.cards-simple-wrapper -->
    
    <h2 class="specialH2"><i class="fa fa-star-o"></i>人気のあるお仕事特集</h2>
    <div class="cards-simple-wrapper">
        <div class="row">
            {foreach from=$specials item=row }
            <div class="col-sm-6 colSpecial" itemscope itemtype="http://schema.org/JobPosting">
                {if $row.img.fileName}
                <div class="card-simple" data-background-image="{$row.img.fileName}" style=" background-image:url({$row.img.fileName});" itemprop="image" content="https://hotelswork.net/{$row.img.fileName}">
                {else}
                <div class="card-simple" data-background-image="/img/common/noimg/special_no_img.png" style=" background-image:url(/img/common/noimg/special_no_img.png);">
                {/if}
                    <a href="/special/contens/{$row.id}">
                    <div class="card-simple-background special-background"></div>
                    <!-- /.card-simple-background --> 
                    </a> </div>
                <!-- /.card-simple -->
                <div class="moreSPInfo">
                    <div class="cardListSPTitle" itemprop="title"><a href="/special/contens/{$row.id}">{$row.title|nl2br nofilter}</a></div>
                    <div class="cardListSPInfo">{$row.comment}</div>
                </div>
            </div>
            <!-- /.col-* -->
            {/foreach}
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
{include file="`$smarty.const.HTDOCS_DIR`/templates/footer_common.tpl"}
<!-- / フッター -->
{literal}
<script type="text/javascript">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || 
{widgetcode:"4ce5ff9dc1a0f0b3ab545e2cb992c06e728930689def3e98865fec7d9aa35e9d1a2010ab7b6727677d37b27582c0e9c4",values:{},ready:function(){}};
var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>
{/literal}
		
</body>
</html>