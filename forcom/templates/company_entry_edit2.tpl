<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>セントラルクルー | 求人申し込みフォーム</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/forcom/css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="/forcom/css/company_entry.css" rel="stylesheet" type="text/css"/>
        <script src="/forcom/js/vender/jquery.js" type="text/javascript"></script>
        <script src="/forcom/js/company_entry.js" type="text/javascript"></script>



    </head>
    <body>
        <header class="header">
            <div class="headerText">
                <h2 class="topTextJobEdit">
                    求人申込書
                </h2>
            </div>
        </header>

        <form id="form1" name="form1" method="POST" action="/forcom/check" enctype="multipart/form-data">
        <div id="main">
            <table class="companyEntry">
                <!-- 企業名 -->
                <tr>
                    <td class="leftCell topCellLeft">
                        企業名
                        <div class="must">必須</div>
                    </td>
                    <td id="companyName" class="rightCell topCellRight" colspan="2" colspan="2">
                        {if $errFlag.companyName}
                            <div class="mustText">{$errMessage.companyName}</div>
                        {/if}
                        <input type="text" name="companyName" {if $firstFlag || $errFlag.companyName}class="redBackground"{/if} size="58" value="{$formParams.companyName}" placeholder="例：株式会社リゾート">
                    </td>
                </tr>
                <!-- 企業名（フリガナ） -->
                <tr>
                    <td class="leftCell">
                        企業名（フリガナ）
                        <div class="must">必須</div>
                    </td>
                    <td id="companyNameKana" class="rightCell" colspan="2">
                        {if $errFlag.companyNameKana}
                            <div class="mustText">{$errMessage.companyNameKana}</div>
                        {/if}
                        <input type="text" name="companyNameKana" {if $firstFlag || $errFlag.companyNameKana}class="redBackground"{/if} size="58" value="{$formParams.companyNameKana}" placeholder="例：カブシキガイシャリゾート">
                    </td>
                </tr>
                <!-- 施設名（部署名） -->
                <tr>
                    <td class="leftCell">
                        施設名（部署名）
                        <div class="must">必須</div>
                    </td>
                    <td id="facilityName" class="rightCell" colspan="2">
                        {if $errFlag.facilityName}
                            <div class="mustText">{$errMessage.facilityName}</div>
                        {/if}
                        <input type="text" {if $firstFlag || $errFlag.facilityName}class="redBackground"{/if} size="58" name="facilityName" value="{$formParams.facilityName}" placeholder="例：セントラルホテル">
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
                        {if $errFlag.name}
                            <div class="mustText">{$errMessage.name}</div>
                        {/if}
                        <input type="text" {if $firstFlag || $errFlag.name}class="redBackground"{/if} size="30" name="name" value="{$formParams.name}">
                    </td>
                </tr>
                <tr>
                    <td class="sCellLeft sCellBottom">フリガナ</td>
                    <td id="nameKana" class="sCellRight">
                        {if $errFlag.nameKana}
                            <div class="mustText">{$errMessage.nameKana}</div>
                        {/if}
                        <input type="text" {if $firstFlag || $errFlag.nameKana}class="redBackground"{/if} size="30" name="nameKana" value="{$formParams.nameKana}">
                    </td>
                </tr>
                <!-- メールアドレス -->
                <tr>
                    <td class="leftCell">
                        メールアドレス
                        <div class="must">必須</div>
                    </td>
                    <td id="mail" class="rightCell" colspan="2">
                        {if $errFlag.mail}
                            <div class="mustText">{$errMessage.mail}</div>
                        {/if}
                        <input type="text" {if $firstFlag || $errFlag.mail}class="redBackground"{/if} size="58" name="mail" value="{$formParams.mail}" placeholder="例：info@cchotel.com">
                        <div class="caption">
                            半角英数
                        </div>
                    </td>
                </tr>
                <!-- メールアドレス（確認） -->
                <tr>
                    <td class="leftCell">
                        メールアドレス（確認）
                        <div class="must">必須</div>
                    </td>
                    <td id="mail2" class="rightCell" colspan="2">
                        {if $errFlag.mail2}
                            <div class="mustText">{$errMessage.mail2}</div>
                        {/if}
                        <input type="text" {if $firstFlag || $errFlag.mail2}class="redBackground"{/if} size="58" name="mail2" value="{$formParams.mail2}">
                        <div class="caption">
                            確認のため、もう一度入力してください。
                        </div>    
                    </td>
                </tr>
                <!-- 電話番号 -->
                <tr>
                    <td class="leftCell">
                        電話番号
                        <div class="must">必須</div>
                    </td>
                    <td id="tel" class="rightCell" colspan="2">
                        {if $errFlag.tel}
                            <div class="mustText">{$errMessage.tel}</div>
                        {/if}
                        <input type="text" {if $firstFlag || $errFlag.tel}class="redBackground"{/if} size="58" name="tel" value="{$formParams.tel}" placeholder="例：090-0000-0000">
                        <div class="caption">
                            半角数字ハイフンのみ
                        </div>
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
                        {if $errFlag.postCode}
                            <div class="mustText">{$errMessage.postCode}</div>
                        {/if}
                        〒<input type="text"  class="inputMargin {if $firstFlag || $errFlag.postCode}redBackground{/if}" size="15" name="postCode" value="{$formParams.postCode}" placeholder="例：100-0000">
                        <input type="button" class="jsBtnAddressInput1" value="住所入力">
                    </td>
                </tr>
                <tr>
                    <td class="sCellLeft">
                        都道府県
                    </td>
                    <td id="pref" class="sCellRight">
                        {if $errFlag.pref}
                            <div class="mustText">{$errMessage.pref}</div>
                        {/if}
                        <select name="pref">
                            <option value="サンプル1">都道府県を選択</option>
                            {foreach from=$formParams.companyPrefectureList item=row }
                                <option value="{$row.itemVal}" {$row.selected}>{$row.itemName}</option>
                            {/foreach}
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="sCellLeft sCellBottom">
                        住所
                    </td>
                    <td id="address" class="sCellRight">
                        {if $errFlag.address}
                            <div class="mustText">{$errMessage.address}</div>
                        {/if}
                        <input type="text" {if $firstFlag || $errFlag.address}class="redBackground"{/if} size="70"  name="address" value="{$formParams.address}" placeholder="例：新宿区新宿123">
                    </td>
                </tr>   
                <!-- 就業場所 -->
                <tr>
                    <td class="leftCell">
                        就業場所
                        <div class="must">必須</div>
                    </td>
                    <td id="jobAddress" class="rightCell" colspan="2">
                        {if $errFlag.jobAddress}
                               <div class="mustText">{$errMessage.jobAddress}</div>
                        {/if}
                        {foreach from=$formParams.jobAddressList item=row }  
                            <div class="holidayBox">
                                <label for="jobAddress{$row.itemVal}">
                                <input type="checkbox" name="jobAddress[]" id="jobAddress{$row.itemVal}" value="{$row.itemVal}" {$row.checked}>
                                {$row.itemName}
                                </label>
                            </div>
                        {/foreach}
                        <br clear="all">
                        
                        
                        <input type="text" {if $firstFlag || $errFlag.mail}class="redBackground"{/if} size="58" name="jobAddressText" value="{$formParams.jobAddressText}">
                    </td>
                </tr>
                <!-- 職種 -->
                <tr>
                    <td class="leftCell">
                        職種
                        <div class="must">必須</div>
                    </td>
                    <td class="rightCell" colspan="2">
                        <div id="jobSection" class="jobSection">
                            {if $errFlag.jobSection}
                               <div class="mustText">{$errMessage.jobSection}</div>
                           {/if}
                            <select name="jobSection">
                                <option value="選択してください">選択してください</option>
                                {foreach from=$formParams.jobSection item=row }
                                    <option value="{$row.itemVal}" {$row.selected}>{$row.itemName}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div id="jobCategory" class="jobCategory">
                            {if $errFlag.jobCategory}
                               <div class="mustText">{$errMessage.jobCategory}</div>
                           {/if}
                            職種<input type="text" name="jobCategory" class="inputMargin {if $firstFlag || $errFlag.jobCategory}redBackground{/if}" value="{$formParams.jobCategory}" placeholder="例：フロント">
                        </div>
                    </td>
                </tr>
                <!-- 仕事の内容 -->
                <tr>
                    <td class="leftCell">
                        仕事の内容
                        <div class="must">必須</div>
                    </td>
                    <td class="rightCell" colspan="2" id="jobDetail">
                        {if $errFlag.jobDetail}
                               <div class="mustText">{$errMessage.jobDetail}</div>
                        {/if}
                        <textarea name="jobDetail" cols="10" rows="5" wrap="soft" class="jobDetaile {if $firstFlag || $errFlag.jobDetail}redBackground{/if}">{$formParams.jobDetail}</textarea>
                    </td>
                </tr>
                <!-- 勤務シフト -->
                <tr>
                    <td class="leftCell">
                        勤務シフト
                        <div class="must">必須</div>
                    </td>
                    <td class="rightCell" colspan="2" id="shift">
                        {if $errFlag.shift}
                               <div class="mustText">{$errMessage.shift}</div>
                        {/if}
                        <textarea name="shift" cols="10" rows="5" wrap="soft" class="jobDetaile {if $firstFlag || $errFlag.shift}redBackground{/if}">{$formParams.shift}</textarea>
                    </td>
                </tr>
                <!-- 休日・休暇 -->
                <tr>
                    <td class="leftCell">休日・休暇</td>
                    <td class="rightCell" colspan="2">
                        {foreach from=$formParams.holidayList item=row }  
                            <div class="holidayBox">
                                <label for="holiday{$row.itemVal}">
                                <input type="checkbox" name="holiday[]" id="holiday{$row.itemVal}" value="{$row.itemVal}" {$row.checked}>
                                {$row.itemName}
                                </label>
                            </div>
                        {/foreach}

                        <br clear="all">

                        <div class="holidayTextBox">
                            <div class="holidayText shiftBottom">
                                その他
                            </div>
                            <div class="otherBox">
                                <input type="text" class="other510" name="otherHoliday" value="{$formParams.otherHoliday}">
                            </div>
                        </div>
                        <br clear="all">
                        <div class="holidayTextBox">
                            <div class="holidayText shiftBottom">
                                年間休日数
                            </div>
                            <div class="otherBox">
                                <input type="text" class="other510" name="yearHolidays" value="{$formParams.yearHolidays}">
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- 時間外労働 -->
                <tr>
                    <td class="leftCell">
                        時間外労働
                    </td>
                    <td class="rightCell" colspan="2">
                       {foreach from=$formParams.overtimeWorkList item=row }  
                        <label for="overtimeWork{$row.itemVal}">
                        <input type="radio" name="overtimeWork[]" id="overtimeWork{$row.itemVal}" value="{$row.itemVal}" {$row.checked}>
                        {$row.itemName}
                        </label>
                        {/foreach}
                        <input type="text" class="other" name="overtimeWorkText" value="{$formParams.overtimeWorkText}">
                    </td>
                </tr>
                <!-- 雇用形態・期間 -->
                <tr>
                    <td class="leftCell">
                        雇用形態・期間
                    </td>
                    <td class="rightCell" colspan="2">
                        <select name="formEmployment">
                            <option value="">選択してください</option>
                            {foreach from=$formParams.formEmploymentList item=row }
                                <option value="{$row.itemVal}" {$row.selected}>{$row.itemName}</option>
                            {/foreach}
                        </select>    
                        <br /><br />
                        <div class="holidayText shiftBottom">
                                その他
                        </div>
                        <input type="text" class="" name="otherEmployment" value="{$formParams.otherEmployment}"><br /><br />
                        <div class="holidayText shiftBottom">
                                雇用期間
                        </div>
                        <input type="text" class="" name="employmentPeriod" value="{$formParams.employmentPeriod}"><br /><br />
                        <div class="holidayText shiftBottom">
                                試用期間
                        </div>
                        <input type="text" class="" name="testPeriod" value="{$formParams.testPeriod}">
                    </td>
                </tr>
                <!-- 手当 -->
                <tr>
                    <td class="leftCell">
                        手当
                    </td>
                    <td class="rightCell" colspan="2">
                        {foreach from=$formParams.allowanceList item=row }  
                            <div class="dormitoryBox">
                                <label for="allowance{$row.itemVal}">
                                <input type="checkbox" name="allowance[]" id="allowance{$row.itemVal}" value="{$row.itemVal}" {$row.checked}>
                                {$row.itemName}
                                </label>
                            </div>
                        {/foreach}
                        <br clear="all">
                        <br />
                        <div class="holidayText shiftBottom">
                            その他
                        </div>
                        <div class="otherBox">
                            <input type="text" class="other510" name="allowanceText" value="{$formParams.allowanceText}">
                        </div>
                    </td>
                </tr>
                <!-- 加入保険 -->
                <tr>
                    <td class="leftCell">
                        加入保険
                    </td>
                    <td class="rightCell" colspan="2">
                        {foreach from=$formParams.insuranceList item=row }  
                            <div class="dormitoryBox">
                                <label for="insurance{$row.itemVal}">
                                <input type="checkbox" name="insurance[]" id="insurance{$row.itemVal}" value="{$row.itemVal}" {$row.checked}>
                                {$row.itemName}
                                </label>
                            </div>
                        {/foreach}
                    </td>
                </tr>
                <!-- 給与・賞与 -->
                <tr>
                    <td class="leftCell">給与・賞与</td>
                    <td class="rightCell" colspan="2">
                            <select name="salaryUnit">
                                <option value="">給与形式を選択</option>
                                {foreach from=$formParams.salaryUnitList item=row }
                                    <option value="{$row.itemVal}" {$row.selected}>{$row.itemName}</option>
                                {/foreach}
                            </select>
                            <br /><br />
                            &yen;<input type="text" size="8" name="salaryMin" value="{$formParams.salaryMin}">～&yen;<input type="text" size="8" name="salaryMax" value="{$formParams.salaryMax}">
                        <br />
                        
                        <div class="dormitoryOtherBox">
                            <div class="shiftText shiftBottom">
                                賞与
                            </div>
                            <div class="otherBox">
                                <input type="text" class="other" name="bonusText" value="{$formParams.bonusText}">
                            </div>  
                        </div>
                        <br />
                            
                        <div class="dormitoryOtherBox">
                            <div class="shiftText shiftBottom">
                                昇給
                            </div>
                            <div class="otherBox">
                                <input type="text" class="other" name="payriseText" value="{$formParams.payriseText}">
                            </div>  
                        </div>
                    </td>
                </tr>
                <!-- 賃金締日・支払日 -->
                <tr>
                    <td class="leftCell">
                        賃金締日・支払日
                    </td>
                    <td class="rightCell" colspan="2">
                        締日<input type="text" class="" name="closingDay" value="{$formParams.closingDay}">
                        支払日<input type="text" class="" name="billingDay" value="{$formParams.billingDay}">
                    </td>
                </tr>
                <!-- 寮・社宅情報 -->
                <tr>
                    <td class="leftCell">寮・社宅情報</td>
                    <td class="rightCell" colspan="2">
                        寮の有無
                        {foreach from=$formParams.dormRadioList item=row }  
                        <label for="dormRadio{$row.itemVal}">
                        <input type="radio" name="dormRadio[]" id="dormRadio{$row.itemVal}" value="{$row.itemVal}" {$row.checked}>
                        {$row.itemName}
                        </label>
                        {/foreach}

                        <div class="dormitoryOtherBox">
                            <div class="shiftText shiftBottom">
                                寮費
                            </div>
                            <div class="otherBox">
                                <input type="text" class="other" name="dormFee" value="{$formParams.dormFee}">
                            </div>  
                        </div>

                        {foreach from=$formParams.dormList item=row }  
                            <div class="dormitoryBox">
                                <label for="dorm{$row.itemVal}">
                                <input type="checkbox" name="dorm[]" id="dorm{$row.itemVal}" value="{$row.itemVal}" {$row.checked}>
                                {$row.itemName}
                                </label>
                            </div>
                        {/foreach}
                        <br clear="all">

                        <div class="dormitoryOtherBox">
                            <div class="shiftText shiftBottom">
                                その他
                            </div>
                            <div class="otherBox">
                                <input type="text" class="other" name="otherDorm" value="{$formParams.otherDorm}">
                            </div>  
                        </div>
                    </td>
                </tr>
                <!-- 必要な学歴 -->
                <tr>
                    <td class="leftCell">
                        必要な学歴
                    </td>
                    <td class="rightCell" colspan="2">
                        <input type="text" name="educational" size="58" value="{$formParams.educational}" class="width600">
                    </td>
                </tr>
                <!-- 必要な経験・免許・資格 -->
                <tr>
                    <td class="leftCell">
                        必要な経験・免許・資格
                    </td>
                    <td class="rightCell" colspan="2">
                        <textarea name="mustSkill" cols="10" rows="5" wrap="soft" class="jobDetaile">{$formParams.mustSkill}</textarea>
                    </td>
                </tr>
                <!-- 年齢制限 -->
                <tr>
                    <td class="leftCell">
                        年齢制限
                    </td>
                    <td class="rightCell" colspan="2">
                        <input type="text" name="age" size="58" value="{$formParams.age}" class="width600">
                    </td>
                </tr>
                <!-- 定年制 -->
                <tr>
                    <td class="leftCell">
                        定年制
                    </td>
                    <td class="rightCell" colspan="2">
                            <select name="retirement">
                                <option value="">選択して下さい▼</option>
                                {foreach from=$formParams.retirementList item=row }
                                    <option value="{$row.itemVal}" {$row.selected}>{$row.itemName}</option>
                                {/foreach}
                            </select>
                    </td>
                </tr>
                <!-- ホームページ -->
                <tr>
                    <td class="leftCell">
                        ホームページ
                    </td>
                    <td class="rightCell" colspan="2">
                        <input type="text" name="website" size="58" value="{$formParams.website}" class="width600">
                    </td>
                </tr>
                <!-- 備考 -->
                <tr>
                    <td class="leftCell">備考</td>
                    <td class="rightCell" colspan="2">
                        <textarea name="memo" cols="50" rows="10" wrap="soft" class="bikou">{$formParams.memo}</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="submit">
                        <input type="submit" value="入力内容の確認画面へ">
                    </td>
                </tr>
            </table>
            </form>


        </div>
        <script src="/forcom/js/vender/ajaxzip3.js" type="text/javascript" charset="UTF-8"></script>
        <script src="/forcom/js/admin.js" type="text/javascript"></script>
    </body>
</html>