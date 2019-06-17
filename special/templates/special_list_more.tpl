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
<link rel="stylesheet" href="/css/special.css" type="text/css" media="screen">
<title>特集一覧-ホテルズワーク</title>
<meta name="description" content="ホテル・旅館・リゾート求人の「ホテルズワーク」。宿泊施設に特化したアルバイト・正社員求人サイト">
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
</head>
<body>

<!-- ヘッダー -->
{include file="`$smarty.const.HTDOCS_DIR`/templates/header_common.tpl"}
<!-- / ヘッダー -->

<div class="specialPageTitle">
    <div id="wrapperSpecial">
        <h2>特集一覧</h2>
    </div>
</div>
<div id="wrapper">
    <ul class="moreSpecial">
        {foreach from=$specials item=row }
    <li>
    <a href="/special/contens/{$row.id}">
    {$row.title}
    </a>
    </li>
    {/foreach}
    </ul>
    <!-- /.cards-simple-wrapper -->  
    
</div>
<!-- / WRAPPER --> 

<!-- フッター -->
{include file="`$smarty.const.HTDOCS_DIR`/templates/footer_common.tpl"}
<!-- / フッター -->

</body>
</html>