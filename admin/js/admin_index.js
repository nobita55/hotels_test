$(function () {
    /*
     * イベント定義
     */
//初期化
    $(window).load(function () {
        //
        ajaxGetInitParam();
    });

    $(document).on({
        "mouseenter": function () {
            $(this).css('background-color', '#ddd');
        },
        "mouseleave": function () {
            $(this).css('background-color', '');
        }
    }, ".jsMenuCell");

    //メモ入力欄オープン
    $(document).on('dblclick', '.freeText', function () {
        $(".freeText").hide();
        $(".freeTextInputArea").show();
    });

    //メモ保存
    $(document).on('click', '.freeTextSaveBtn', function () {
        var freeText = $("textarea[name='freeTextInput']").val();
        ajaxSaveFreeText(freeText);
    });

    //メモ入力欄クローズ(キャンセル)
    $(document).on('click', '.freeTextCancelBtn', function () {
        $(".freeTextInputArea").hide();
        $(".freeText").show();
    });
});

function ajaxSaveFreeText(freeText) {
    var data = {mode: 'saveFreeText', freeText: freeText};
    $.ajax({
        type: "POST",
        url: "./ajax/ajax_admin_top.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            //エラー判定
            if (data['statusCode'] != 1) {
                alert('エラー:' + data['errorMessages']);
                return false;
            }

            freeText = freeText.replace(/\r\n/g, "<br>");
            freeText = freeText.replace(/(\n|\r)/g, "<br>");

            freeText = freeText.replace(/((http|https):\/\/[\w?=&.\/-;#~%-]+(?![\w\s?&.\/;#~%"=-]*>))/g, '<a href="$1" target="_blank">$1</a> ');

            $(".freeMemoText").html(freeText);


            $(".freeTextInputArea").hide();
            $(".freeText").show();
            return false;
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    }
    );
}

function ajaxGetInitParam() {
    var data = {mode: 'getInitParam'};
    $.ajax({
        type: "POST",
        url: "./ajax/ajax_admin_top.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            $(".jobNum").html(data['jobNum']);
            $(".jobNumPresentMonth").html(data['jobNumPresentMonth']);

            var freeMemoText = data['freeMemoText'];
            freeMemoText = freeMemoText.replace(/\r\n/g, "<br>");
            freeMemoText = freeMemoText.replace(/(\n|\r)/g, "<br>");
            freeMemoText = freeMemoText.replace(/((http|https):\/\/[\w?=&.\/-;#~%-]+(?![\w\s?&.\/;#~%"=-]*>))/g, '<a href="$1" target="_blank">$1</a> ');
            $(".freeMemoText").html(freeMemoText);
            $(".freeTextInput").val(data['freeMemoText']);
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}