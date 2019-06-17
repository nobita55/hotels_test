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
<link rel="stylesheet" href="/css/privacy.css" type="text/css" media="screen">
<title>無料応募フォーム-ホテルズワーク</title>
<meta name="description" content="ホテル・旅館・リゾート求人の「ホテルズワーク」。宿泊施設に特化したアルバイト・正社員求人サイト">
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
</head>
<body>

<!-- ヘッダー -->
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

<!-- / ヘッダー -->

<div class="pageTitle">
<div id="wrapper">
無料応募フォーム<div class="returnBt"><a href="javascript:history.back();">前のページに戻る</a></div>
</div>
</div>


<div id="wrapper">
<div class="entryform">
<form action="/free_entry/check" method="post" class="entryPartForm">
<input type="hidden" name="jid" value="{$jobId}">
{if $isError.master}
<div class="req"><i class="fa fa-exclamation-triangle"></i>入力内容にエラーがあります。<br>
赤い文字の指示に従って入力し直してください。</div>
{/if}
<table>
<tbody>
<tr>
<th>
氏名<span class="require">必須</span></th>
<td class="{if $isError.name}redBackground{/if}">
    {if $isError.name}
    <div class="req">{$errMessage.name}</div>
    {/if}
<input type="text" name="name" value="{$formData.name}">
</td>
</tr>
<tr>
<th>ふりがな<span class="require">必須</span></th>
<td class="{if $isError.kana}redBackground{/if}">
    {if $isError.kana}
    <div class="req">{$errMessage.kana}</div>
    {/if}
<input type="text" name="kana" value="{$formData.kana}">
</td>
</tr>
<tr>
<th>電話番号<span class="require">必須</span></th>
<td class="{if $isError.tel}redBackground{/if}">
    {if $isError.tel}
    <div class="req">{$errMessage.tel}</div>
    {/if}
<input type="text" name="tel" value="{$formData.tel}"><br>
※ハイフンは不要
</td>
</tr>
<tr>
<th>メールアドレス<span class="require">必須</span></th>
<td class="{if $isError.email}redBackground{/if}">
    {if $isError.email}
    <div class="req">{$errMessage.email}</div>
    {/if}
<input type="text" name="email" value="{$formData.email}"><br>
※半角英数字
</td>
</tr>
<tr>
<th>生年月日<span class="require">必須</span></th>
<td class="{if $isError.birth}redBackground{/if}">
    {if $isError.birth}
    <div class="req">{$errMessage.birth}</div>
    {/if}
<input type="date" placeholder="例：2016年1月1日" name="birth" id="date" value="{$formData.birth}"><br>
※西暦から入力してください。例：1990/10/05
</td>
</tr>
<tr>
<th>都道府県<span class="require">必須</span></th>
<td class="{if $isError.prefecture}redBackground{/if}">
{if $isError.prefecture}
<div class="req">{$errMessage.prefecture}</div>
{/if}
<select name="prefecture">
<option value="0">選択してください</option>
{foreach from=$formData.prefectureList item=row }
 <option value="{$row.itemVal}" {$row.selected}>{$row.itemName}</option>
{/foreach}
</select>
</td>
</tr>
<tr>
<th>働きたい期間<span class="require">開始日のみ必須</span></th>
<td class="{if $isError.term}redBackground{/if}">
    {if $isError.term}
    <div class="req">{$errMessage.term}</div>
    {/if}  

<input type="text" name="termFrom" value="{$formData.termFrom}" placeholder="開始予定日を入力してください。例2016年4月">
<div class="">から</div>
<input type="text" name="termTo"  value="{$formData.termTo}" placeholder="終了予定日を入力してください。例：2016年9月">
<br>
※長期での就労を希望される方は、未入力
</td>
</tr>
<tr>
<th>自己PR・その他<span class="optional">任意</span></th>
<td class="{if $isError.pr}redBackground{/if}">
    {if $isError.pr}
    <div class="req">{$errMessage.pr}</div>
    {/if}  
<textarea name="pr" placeholder="">{$formData.pr}</textarea>
</td>
</tr>
<tr>
<th>希望する方はチェック<span class="optional">任意</span></th>
<td>
<label class="checkbox_text">
<input type="checkbox" name="wish1" value="1" {$formData.wish1checked}>正社員・契約社員のみ希望する
</label>
<br>
<label class="checkbox_text">
<input type="checkbox" name="wish2" value="1" {$formData.wish2checked}>正社員・契約社員に興味がある
</label>

</td>
</tr>
<tr>
<th>利用規約</th>
<td>

<div class="kiyaku">
<div id="rule">
<div class="phase"> 本規約は、株式会社セントラルクルー（以下、当社といいます。）が企画運営する「ホテルズワーク」を通じて提供される一切のサービス（以下、本サービスといいます。）に適用されるものとします。</div>
<h4>第1条（定義）</h4>
<div class="phase"> 1.本サービスとは、当社が運営する「ホテルズワーク」を通じた、インターネット上の求人情報サービス及び、それに関連するサービスの総称です。 <br>
2.ユーザーとは、本サービスを利用するすべての方をいいます。</div>
<h4>第2条（禁止事項）</h4>
<div class="phase">
<p>ユーザーは、以下の行為を行うことを禁止します。</p>
<ul>
<li>1.虚偽の情報を登録する行為</li>
<li>2.公序良俗・法令・条例等に反する行為</li>
<li>3.社会常識・通念を逸脱した行為</li>
<li>4.当社、他のユーザー及び第三者の財産権（特許権、商標権、著作権等のあらゆる知的財産権を含む）またはプライバシーに関する権利等、あらゆる法的権利を侵害する行為</li>
<li>5.当社、他のユーザー、求人企業及び第三者を誹謗中傷する行為</li>
<li>6.本サービスの運営、当社の経営を妨げる恐れのある一切の行為</li>
<li>7.その他、当社が不適切と判断する一切の行為</li>
</ul>
</div>
<h4>第3条（情報の削除）</h4>
<div class="phase"> 当社は、第2条に規定された行為とみなされる情報が登録される等、登録情報を削除する必要がある場合、ユーザーに通知することなく、当該情報を削除することができます。</div>
<h4>第4条（個人情報の利用目的）</h4>
<div class="phase">
<p> 1.本サービスにおける個人情報の利用目的は以下のとおりです。当社は個人情報を必要な範囲内でユーザーの皆様から取得しています。</p>
<dl>
<dt>（1） 本サービス利用者に対するサービス提供。 <br>
（2） 本サービスにおける個人認証。 <br>
（3） 求人求職情報や求人掲載企業との適切なマッチング。 <br>
（4） 利用者の承諾にもとづく、本サービス利用企業等への個人情報開示。 <br>
（5） 当社からのお知らせ、ニュース、アンケート（一部広告を含む）の配信。 <br>
（6） モニター等への応募、プレゼント発送、記事作成等における取材対象者の募集。 <br>
（7） サービスの円滑な運営。<br>
（8） 本サービスに関するご意見、お問い合わせへの回答。


<dt>2.第三者への提供</dt>
<dd>当社は、最適な求職活動の支援を目的として、取得した個人情報はwebにて個人情報の取扱いに関する契約を締結した求人企業（団体・個人を含みます）、請負会社などに提供します。</dd>   
<dt>3.個人情報提供の任意性</dt>
<dd>当社は、利用目的の達成に必要な個人情報を提供していただきます。必ずしもすべての項目にお答えいただく必要はありませんが、提供いただけない場合、当社の運営するサイトやサービスが一部利用できないことがあります。</dd>
<dt>4.開示請求のお手続きについて</dt>
<dd>(1) 開示等の申出先 <br>
株式会社セントラルクルー <br>
住　　所：山梨県甲府市中央1-12-42　甲府第一法曹ビル3F <br>
電話番号：055-221-5166</dd>
<dd>(2) 開示等の請求の受付<br>
開示等の請求に関しては、電話又は直接来訪下さい。 </dd>
<dd>(3) 本人確認方法<br>
お電話：氏名・電話番号・メールアドレス<br>
ご来訪：免許証・パスポート等の身分証明 <br>
</dd>
<dd>(4) 代理人による開示等の請求方法<br>
ご本人との関係に応じて､次の証明書類をご提出下さい。 </dd>
<dd>
<ol>
<li>○法定代理人 <br>
・法定代理権があることを確認するための書類　　1通 <br>
（戸籍謄本、親権者の場合は扶養家族が記入された保険証のコピーも可） <br>
・法定代理人ご本人であることを確認するための書類　　1通 <br>
（法定代理人の運転免許証、又は健康保険証のコピー） <br>
<br>
○委任による代理人 <br>
・委任状　　1通 <br>
・代理人ご本人であることを確認するための書類　　1通 <br>
（代理人の運転免許証、又は健康保険証のコピー</li>
</ol>
</dd>
<dt>5.個人情報に関するお問合せ先</dt>
<dd>株式会社セントラルクルー　<br>
管理部
TEL ：050-5523-3567</dd>
<dd>&nbsp;</dd>
<dt>6.Cookie情報を用いた行動履歴の取り扱いについて</dt>
<dd> ①Cookie情報について
当社ではCookie情報を使用し、当サイトにアクセスしたユーザーの閲覧したページ、利用時間帯などの行動履歴情報を取得しております。
収集した行動履歴情報は、ユーザーのプライバシーの保護、利便性の向上、広告効果の最適化、及び利用状況の把握のために用いられます。これらのデータは匿名であり、氏名、住所、生年月日などの個人情報を含むものではありません。 <br>
<br>
②アクセス解析について
当社ではサイトの利用状況を解析するGoogle Analyticsを用いております。
Google Analyticsは、Cookie情報を利用して利用者の情報を収集します。
Google Analyticsの利用規約に関する説明についてはGoogle Analyticsのポリシーと原則（http://www.google.com/intl/ja/policies/）をご覧ください。<br>
</dl>
</div>
<h4>第5条（サービスの変更）</h4>
<div class="phase"> 当社は、事前の通知なく、ユーザー向けサービスを変更または一時的に中断をすることがありますが、ユーザーはそれに対して異議を申し立てないものとします。</div>
<h4>第6条（免責）</h4>
<div class="phase">
<p> 1.本サービスは、職業安定法に規定される職業紹介ではなく、当社は本サービス上の求人情報内容の正確性、有用性等について何らの保証をしないものとします。
2.当社は、ユーザーが本サービスを利用することにより発生する一切の損害に対し、何らの責任も負担しないものとします。
3.当社は本サービスの中断や停止、内容の変更や追加によってユーザーが受けた損害に関して、何ら責任も負わないものとします。


</div>
<h4>第7条（規約の変更）</h4>
<div class="phase"> 当社は、ユーザーの承諾を得ることなく、本規約を随時変更することができます。変更の内容は、本サービスに掲載し、その掲載をもって、すべてのユーザーが了承したものとみなします。</div>
<h4>第8条（損害賠償）</h4>
<div class="phase"> ユーザーが本規約に違反し、当社または第三者に対し損害を与えた場合、ユーザーは、当社または第三者に対し、損害賠償義務を負担します。 </div>
<div class="phase"> 平成28年3月　制定
<br>
株式会社セントラルクルー <br>
代表取締役小林文俊 </div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
<div class="douiTxt">利用規約に同意した上で確認画面へお進みください。</div>
<input type="submit" name="button" id="button" value="確認画面へ" class="toConfirm">
</form>
</div>

</div>
<!-- / WRAPPER --> 


</body>
</html>