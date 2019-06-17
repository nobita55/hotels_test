<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/common.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/font-awesome.css" type="text/css" media="screen">
<link rel="apple-touch-icon" href="/img/common/apple-touch-icon.png">
<link rel="stylesheet" href="/css/entry.css" type="text/css" media="screen">
<title>内容確認-ホテルズワーク</title>
<meta name="description" content="ホテル・旅館・リゾート求人の「ホテルズワーク」。宿泊施設に特化したアルバイト・正社員求人サイト">
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
</head>
<body>
{literal}
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-77015626-1', 'auto');
  ga('send', 'pageview');
</script>
{/literal}

<div class="pageTitle">
<div id="wrapper">
内容確認
</div>
</div>


<div id="wrapper">
<div class="entryform">
<form action="/free_entry/confirm" method="post" class="entryPartForm">
<input type="hidden" name="jid" value="{$jobId}">
<table>
<tbody>
<tr>
<th>
氏名</th>
<td>
{$formData.name}
</td>
</tr>
<tr>
<th>ふりがな</th>
<td>
{$formData.kana}
</td>
</tr>
<tr>
<th>電話番号</th>
<td>
{$formData.tel}
</td>
</tr>
<tr>
<th>メールアドレス</th>
<td>
{$formData.email}
</td>
</tr>
<tr>
<th>生年月日</th>
<td>
{$formData.birth}
</td>
</tr>
<tr>
<th>都道府県</th>
<td>
{$formData.prefecture}
</td>
</tr>
<tr>
<th>働きたい期間</th>
<td>
{$formData.termFrom}から{$formData.termTo}
</td>
</tr>
<tr>
<th>自己PR・その他</th>
<td>
{$formData.pr|nl2br nofilter}
</td>
</tr>
<tr>
<th>希望する方はチェック</th>
<td>
<div>{$formData.wish1Text}</div>
<div>{$formData.wish2Text}</div>
</td>
</tr>
</tbody>
</table>
<div class="entryButtonBox">
<div class="backButton"><a href="/free_entry/change?jid={$jobId}">修正する</a></div>
<input type="submit" name="button" id="button" value="この内容で応募する">
</div>
</form>
</div>

</div>
<!-- / WRAPPER --> 

</body>
</html>