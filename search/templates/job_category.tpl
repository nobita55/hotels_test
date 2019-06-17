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
<link rel="stylesheet" href="/css/jobcategory.css" type="text/css" media="screen">
<title>職種一覧-ホテルズワーク</title>
<meta name="description" content="ホテル・旅館・リゾート求人の「ホテルズワーク」。宿泊施設に特化したアルバイト・正社員求人サイト">
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
</head>
<body>
<div class="pageTitle">
    <div id="wrapper">
        職種一覧
    </div>
</div>
<div id="wrapper">
    <div class="allBt"><a href="/search/result?area={$prefectureId}"  target="_parent">全ての職種から探す</a></div>
    <dl class="jobCategory js_acMenu">

    {foreach from=$jobCategoryList item=fcat }
    <dt class="jobOneCategory active">{$fcat.catName}<span class="categoryAll">
        <a href="/search/result?area={$prefectureId}&jd={$fcat.catNo}" target="_parent">{$fcat.catName}の全て</a><i class="fa fa-angle-right"></i>
    </span></dt>
    <dd>
    <ul>
      {foreach from=$fcat.item item=row }
          <li><a href="/search/result?area={$prefectureId}&jc={$row.itemVal}" target="_parent">{$row.itemName}</a></li>
      {/foreach}
    </ul>
    </dd>
    {/foreach}    
</dl>

</div>
<!-- / WRAPPER --> 
<!-- / フッター -->
</body>
</html>