<!DOCTYPE html>
<html>
    <head>
        <title>セントラルクルー | 求人申し込み一覧</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="css/company_entry.css" rel="stylesheet" type="text/css"/>
        <script src="js/vender/jquery.js" type="text/javascript"></script>
        <script src="js/vender/underscore.js" type="text/javascript"></script>
        <link href="js/vender/dist/sweetalert.css" rel="stylesheet" type="text/css">
        <script src="js/vender/dist/sweetalert.min.js"></script>
        
        <script src="js/admin.js" type="text/javascript"></script>
        <script src="js/admin_company_entry.js" type="text/javascript"></script>
    </head>
    <body>
        <header class="header">
            <h2 class="topTextJobEdit">
                <a href="./index.html" class="linkTop">求人申込書 一覧</a>
            </h2>
        </header>
        <div class="container cBg">
            <div class="contents">
                <div class="main">
                        <div class="leftBox">
                            <div class="rowTitleLarge">
                                <div class="w1100 borR">
                                    <div class="mailLinkTitle">求人情報
                                    </div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w200">日付</div>
                                <div class="w200">連絡</div>
                                <div class="w250">企業名</div>
                                <div class="w250">施設名</div>
                                <div class="w200 borR">担当者名</div>
                            </div>
                            {foreach from=$entries item=row }
                            <div class="rowContents">
                                <div class="w200">
                                    <input type="button" onclick="location.href='./company_entry_old.php?mode=detail&id={$row.id}'" value="詳細"> &nbsp;{$row.created}</div>
                                <div class="w200">
                                    {if empty($row.contact)}
                                    <select name="manager{$row.id}">
                                        {foreach from=$managers item=row2 }
                                        <option value="{$row2.itemVal}">{$row2.itemName}
                                        {/foreach}
                                    </select>&nbsp;&nbsp;
                                    <input type="button" class="jsContactBtn" data-eid="{$row.id}" value="連絡">
                                    {else}
                                        {$row.manager}<span class="contactDate">&nbsp&nbsp{$row.contactDate}</span>
                                    {/if}
                                </div>
                                <div class="w250">{$row.company_name}</div>
                                <div class="w250">{$row.facility_name}</div>
                                <div class="w200 borR">{$row.name}</div>
                            </div>
                            {/foreach}
                            <div class="rowContents">
                                <div class="w200 borB"></div>
                                <div class="w200 borB"></div>
                                <div class="w250 borB"></div>
                                <div class="w250 borB"></div>
                                <div class="w200 borR borB"></div>
                            </div>
                    </div>
            　　</div>
        　　</div>
        </div>
    </body>  
</html>