<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>セントラルクルー | 求人申込書一覧</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/forcom/css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="/admin/css/admin2.css" rel="stylesheet" type="text/css"/>        
        <script src="js/vender/jquery.js" type="text/javascript"></script>
        <script src="js/vender/underscore.js" type="text/javascript"></script>
        <link href="js/vender/dist/sweetalert.css" rel="stylesheet" type="text/css">
        <script src="js/vender/dist/sweetalert.min.js"></script>
        
        <script src="js/admin.js" type="text/javascript"></script>
        <script src="js/admin_company_entry.js" type="text/javascript"></script>   
    </head>
    <body>
        <header class="header">
            <div class="headerText">
                <h2 class="topTextJobEdit">
                    求人申込書　一覧
                </h2>
            </div>
        </header>

        <div id="main">
            <table class="entryList">
                <tr>
                    <td class="topCell id">
                        ID
                    </td>
                    <td class="created topCell">
                        日付
                    </td>
                    <td class="topCell w290 manager">
                        連絡
                    </td>
                    <td class="topCell w200">
                        企業名
                    </td>
                    <td class="topCell w200">
                        施設名
                    </td>
                    <td class="topCell w100">
                        担当者名
                    </td>
                    <td class="topCell w250">
                        チェック
                    </td>
                </tr>

                {foreach from=$entries item=row }
                <tr>
                    <td>
                        {$row.id}
                    </td>
                    <td>
                        <input type="button" onclick="location.href='./company_entry.php?mode=detail&id={$row.id}'" value="詳細"> &nbsp;{$row.created}
                    </td>
                    <td class="">
                        <select name="manager{$row.id}">
                            <option>-</option>
                            {foreach from=$managers item=row2 }
                            <option value="{$row2.itemVal}">{$row2.itemName}
                            {/foreach}
                        </select>&nbsp;&nbsp;
                        <input type="button" class="jsContactBtn2" data-eid="{$row.id}" value="連絡">

                        {if !empty($row.contact)}
                            {$row.manager}<span class="contactDate">&nbsp&nbsp{$row.contactDate}<br></span>
                        {/if}

                    </td>
                    <td>
                        {$row.company_name}
                    </td>
                    <td>
                        {$row.facility_name}
                    </td>
                    <td>
                        {$row.name}
                    </td>
                    <td class="excel">
                        <label for="released{$row.id}"><input type="checkbox" id="released{$row.id}" data-id="{$row.id}" data-type="released" class="jsCheck" {if $row.released == 1}checked{/if}>HP掲載</label>
                        <label for="jobcard{$row.id}"><input type="checkbox" id="jobcard{$row.id}" data-id="{$row.id}" data-type="jobcard" class="jsCheck" {if $row.jobcard == 1}checked{/if}>求人票</label>
                        <a href="./company_entry_download.php?id={$row.id}">エクセル出力</a>
                    </td>
                </tr>
                {/foreach}
            </table>
            



        </div>
    </body>
</html>