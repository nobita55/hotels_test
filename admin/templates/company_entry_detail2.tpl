<!DOCTYPE html>
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
        <script src="/forcom/js/vender/jquery.js" type="text/javascript"></script>
        <script src="/forcom/js/company_entry.js" type="text/javascript"></script>
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
                        {$formParams.company_name}
                    </td>
                </tr>
                
                <!-- 企業名（フリガナ） -->
                <tr>
                    <td class="leftCell">
                        企業名（フリガナ）
                        <div class="must">必須</div>
                    </td>
                    <td id="companyNameKana" class="rightCell" colspan="2">
                        {$formParams.company_name_kana}
                    </td>
                </tr>
                
                <!-- 施設名（部署名） -->
                <tr>
                    <td class="leftCell">
                        施設名（部署名）
                        <div class="must">必須</div>
                    </td>
                    <td id="facilityName" class="rightCell" colspan="2">
                        {$formParams.facility_name}
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
                        {$formParams.name}
                    </td>
                </tr>
                <tr>
                    <td class="sCellLeft sCellBottom">フリガナ</td>
                    <td id="nameKana" class="sCellRight">
                        {$formParams.name_kana}
                    </td>
                </tr>
                
                <!-- メールアドレス -->
                <tr>
                    <td class="leftCell">
                        メールアドレス
                        <div class="must">必須</div>
                    </td>
                    <td id="mail" class="rightCell" colspan="2">
                        {$formParams.mail}
                    </td>
                </tr>
                
                <!-- 電話番号 -->
                <tr>
                    <td class="leftCell">
                        電話番号
                        <div class="must">必須</div>
                    </td>
                    <td id="tel" class="rightCell" colspan="2">
                        {$formParams.tel}
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
                        {$formParams.post_code}
                    </td>
                </tr>
                <tr>
                    <td class="sCellLeft">
                        都道府県
                    </td>
                    <td id="pref" class="sCellRight">
                        {$formParams.pref}
                    </td>
                </tr>
                <tr>
                    <td class="sCellLeft sCellBottom">
                        住所
                    </td>
                    <td id="address" class="sCellRight">
                        {$formParams.address}
                    </td>
                </tr>  
                
                <!-- 就業場所 -->
                <tr>
                    <td class="leftCell">
                        就業場所
                        <div class="must">必須</div>
                    </td>
                    <td id="address" class="rightCell" colspan="2">
                        {if $formParams.job_address}{$formParams.job_address}{/if}
                    </td>
                </tr> 
                <!-- 職種 -->
                <tr>
                    <td class="leftCell">
                        職種
                        <div class="must">必須</div>
                    </td>
                    <td class="rightCell" colspan="2">
                        
                            {$formParams.jobSection}<br />
                            職種：{$formParams.job_category}
                        
                    </td>
                </tr>
                
                <!-- 仕事の内容 -->
                <tr>
                    <td class="leftCell">
                        仕事の内容
                        <div class="must">必須</div>
                    </td>
                    <td class="rightCell" colspan="2">
                        {$formParams.job_detail|nl2br nofilter}
                    </td>
                </tr>
                
                <!-- 勤務シフト -->
                <tr>
                    <td class="leftCell">勤務シフト<div class="must">必須</div></td>
                    <td class="rightCell workShift" colspan="2">
                        {$formParams.work_shift|nl2br nofilter}
                    </td>
                </tr>
                
                <!-- 休日・休暇 -->
                <tr>
                    <td class="leftCell">休日・休暇</td>
                    <td class="rightCell" colspan="2">
                        {$formParams.holiday nofilter}
                    </td>
                </tr>
                
                <!-- 時間外労働 -->
                <tr>
                    <td class="leftCell">時間外労働</td>
                    <td class="rightCell" colspan="2">
                        {$formParams.overtime_work}
                    </td>
                </tr>
                
                <!-- 雇用形態・期間 -->
                <tr>
                    <td class="leftCell">雇用形態・期間</td>
                    <td class="rightCell" colspan="2">
                        {$formParams.employment nofilter}
                    </td>
                </tr>  
                
                <!-- 手当 -->
                <tr>
                    <td class="leftCell">手当</td>
                    <td class="rightCell" colspan="2">
                        {$formParams.allowance nofilter}
                    </td>
                </tr>  
                
                <!-- 加入保険 -->
                <tr>
                    <td class="leftCell">加入保険</td>
                    <td class="rightCell" colspan="2">
                        {$formParams.insurance nofilter}
                    </td>
                </tr>  
                
                <!-- 給与・賞与 -->
                <tr>
                    <td class="leftCell">給与・賞与</td>
                    <td class="rightCell" colspan="2">
                            {if $formParams.salary_unit!='0'}
                                {$formParams.salary_unit}
                            {/if}
                            &yen;{$formParams.salary_min}～&yen;{$formParams.salary_max}
                            <br />
                            {if $formParams.bonus != '0'} 賞与：{$formParams.bonus}{/if}
                    </td>
                </tr>
                
                <!-- 賃金締日・支払日 -->
                <tr>
                    <td class="leftCell">賃金締日・支払日</td>
                    <td class="rightCell" colspan="2">
                        {$formParams.billing_day nofilter}
                    </td>
                </tr> 
                
                <!-- 寮・社宅情報 -->
                <tr>
                    <td class="leftCell">寮・社宅情報</td>
                    <td class="rightCell" colspan="2">
                        {$formParams.dorm  nofilter}
                    </td>
                </tr>
                
                <!-- 必要な学歴 -->
                <tr>
                    <td class="leftCell">必要な学歴</td>
                    <td class="rightCell" colspan="2">
                        {$formParams.educational}
                    </td>
                </tr> 
                
                <!-- 必要な経験・免許・資格 -->
                <tr>
                    <td class="leftCell">必要な経験・免許・資格</td>
                    <td class="rightCell" colspan="2">
                        {$formParams.must_skill|nl2br nofilter}
                    </td>
                </tr> 
                
                <!-- 年齢制限 -->
                <tr>
                    <td class="leftCell">年齢制限</td>
                    <td class="rightCell" colspan="2">
                        {$formParams.age}
                    </td>
                </tr> 
                
                <!-- 定年制 -->
                <tr>
                    <td class="leftCell">定年制</td>
                    <td class="rightCell" colspan="2">
                        {$formParams.retirement}
                    </td>
                </tr> 
                
                <!-- ホームページ -->
                <tr>
                    <td class="leftCell">ホームページ</td>
                    <td class="rightCell" colspan="2">
                       {$formParams.website}
                    </td>
                </tr>
                
                <!-- 備考 -->
                <tr>
                    <td class="leftCell">備考</td>
                    <td class="rightCell" colspan="2">
                        {$formParams.memo|nl2br nofilter}
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
</html>