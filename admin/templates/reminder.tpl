<!DOCTYPE html>
<html>
    <head>
        <title>ホテルズワーク管理 | リマインダー</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="css/reminder.css" rel="stylesheet" type="text/css"/>

        <script src="js/vender/jquery.js" type="text/javascript"></script>
        <script src="js/vender/underscore.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="contents" data-jid="{$jobInfo.jobId}">
            <table class="jobInfoTable">
                <tr>
                    <td class="subject" colspan="3">
                        募集原稿情報</td>
                </tr>
                <tr>
                    <td class="itemName">JID</td>
                    <td colspan="2">{$jobInfo.jobId}</td>
                </tr>
                <tr>
                    <td class="itemName">募集原稿タイトル</td>
                    <td colspan="2">{$jobInfo.title}</td>
                </tr>
            </table>
            <table class="applyCtrTable">
                <tr>
                    <td colspan="2" class="subject">
                        メモ</td>
                </tr>
                <tr>
                    <td class="itemName">登録者</td>
                    <td>
                        <select name="user">
                            <option value="1" {$remindInfo.userSelected.1}>小池
                            <option value="2"  {$remindInfo.userSelected.2}>長澤
                            <option value="3"  {$remindInfo.userSelected.3}>梶
                            <option value="4"  {$remindInfo.userSelected.4}>宅間
                            <option value="5"  {$remindInfo.userSelected.5}>大原
                            <option value="5"  {$remindInfo.userSelected.6}>新海
                            </select>
                    </td>
                </tr>
                <tr>
                    <td class="itemName">通知日</td>
                    <td>
                        <input type="date" name="remindDate" class="jsRemindDate" value="{$remindInfo.remindDate}">
                    </td>
                </tr>
                <tr>
                    <td class="itemName">通知メッセージ</td>
                    <td>
                        <textarea class="remindMessage" name="remindMessage">{$remindInfo.remindMessage}</textarea><br>
                    </td>
                </tr>
                <tr>
                    <td class="itemName">管理メモ</td>
                    <td>
                        <textarea class="remindMemo" name="remindMemo">{$remindInfo.remindMemo}</textarea><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="btns">
                        <input type="button" name="saveBtn" class="jsSaveBtn" value="保存">　　　
                    </td>
                </tr>
            </table>
        </div> 
        <script src="js/admin.js" type="text/javascript"></script>
        <script src="js/reminder.js" type="text/javascript"></script>   
    </body>
</html>
