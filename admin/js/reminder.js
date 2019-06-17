$(function () {
    $(document).on('click', '.jsSaveBtn', function (e) {
        //アラート確認
        if (!confirm('保存します。よろしいですか？')) {
            return false;
        }
        var jobId = $('div').data('jid');
        var user = $("select[name='user']").val();
        var remindDate = $('.jsRemindDate').val();
        var remindMessage = $("textarea[name='remindMessage']").val();
        var remindMemo = $("textarea[name='remindMemo']").val();

        //モーダルクローズ準備
        e.preventDefault();
        saveReminder(jobId, user, remindDate, remindMessage, remindMemo);
    });
});


function saveReminder(jobId, user, remindDate, remindMessage, remindMemo) {
    var postData = {mode: 'saveReminder', jobId: jobId,
        user: user, remindDate: remindDate, remindMessage: remindMessage,
        remindMemo: remindMemo};
    ajaxSaveReminder(postData);
}

//管理メモ保存
function ajaxSaveReminder(postData) {
    var url = "./ajax/ajax_job_reminder.php";
    //成功処理定義
    var sfunc = function (data, dataType) {
        //処理
        //---------------------------------------------------------------
        //エラー判定
        if (data['statusCode'] != 1) {
            //エラーアラート表示
            alert('エラー:' + data['errorMessages']);
            return false;
        }
        alert('保存しました');

        //モーダルクローズ
        if (window.parent == window.top) {
            //window.parent.loadApplyListPre();
            window.parent.$.magnificPopup.close();
        }

    };

    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        alert('エラーが発生しました:' + errorThrown);
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}


//ajax通信マスター
function ajaxMaster(postData, url, successFunc, errorFunc) {
    $.ajax({
        type: "POST",
        url: url,
        dataType: "json",
        data: postData,
        //通信成功
        success: function (data, dataType)
        {
            successFunc(data, dataType);
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            return errorFunc(XMLHttpRequest, textStatus, errorThrown);
        }
    });
}