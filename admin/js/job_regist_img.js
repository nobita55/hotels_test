var selectedFileBin = null;
var imgFileBin = [];

$(function () {
    //初期化    
    $(window).load(function () {
        //テキストカウンター初期化
        initTextCounter();
    });
    /*
     * イベント定義
     */
    /*================================================
     ファイル選択関係イベント設定
     =================================================*/
    $('.container').bind('drop', function (e) {
// デフォルトの挙動を停止
        e.preventDefault();
    }).bind('dragenter', function () {
// デフォルトの挙動を停止
        return false;
    }).bind('dragover', function () {
// デフォルトの挙動を停止
        return false;
    });
    for (var i = 0; i <= 4; i++) {
        initDragArea(i);
        initFileSelectBtn(i);
    }

//入力文字数カウント表示

    $("input[name='imgComment2']").keyup(function () {
        textCounter(this, 20, 'jsCtImgComment2', '#777', '#f00');
    });
    $("input[name='imgComment3']").keyup(function () {
        textCounter(this, 20, 'jsCtImgComment3', '#777', '#f00');
    });
    $("input[name='imgComment4']").keyup(function () {
        textCounter(this, 20, 'jsCtImgComment4', '#777', '#f00');
    });


    //登録
    $(document).on('click', '.jsRegistBtn', function () {
        swal({
            title: '画像登録',
            text: '',
            imageUrl: "/admin/img/gif-load.gif",
            showCancelButton: false,
            showconfirmButton: false
        });
        registImage();
    });
});
function initTextCounter() {
    textCounter($("input[name='imgComment2']"), 20, 'jsCtImgComment2', '#777', '#f00');
    textCounter($("input[name='imgComment3']"), 20, 'jsCtImgComment3', '#777', '#f00');
    textCounter($("input[name='imgComment4']"), 20, 'jsCtImgComment4', '#777', '#f00');
}

/*================================================
 選択画像キャンセル処理
 =================================================*/
function fileCancel(imgNo) {
    $('.imgFileName' + imgNo).html('');
    //リアルタイムプレビュー
    $('.jsDragImg' + imgNo).css('background-image', 'url("/admin/img/img_drag_bg_square.jpg")');
    $('.jsFileSelectImg' + imgNo).show();
    //リアルタイムプレビュー
    imgReset('img' + imgNo);
    selectedFileBin = null;
    imgFileBin[imgNo] = null;
}

function imgReset(oId) {
    var obj = document.getElementById(oId);
    var stO = obj.innerHTML;
    obj.innerHTML = stO;
    return false;
}

/*================================================
 ファイルをドロップした時の処理
 =================================================*/

function initDragArea(imgNo) {
    $('.jsDragImg' + imgNo).bind('drop', function (e) {
// デフォルトの挙動を停止
        e.preventDefault();
        // ファイル情報を取得
        var tmp = e.originalEvent.dataTransfer.files;
        selectedFileBin = Array.prototype.slice.call(tmp);
        $('.imgFileName' + imgNo).html(selectedFileBin[0].name);
        imgFileBin[imgNo] = selectedFileBin[0];

        //リアルタイムプレビュー
        var fr = new FileReader();
        fr.onload = function () {
            $('.jsDragImg' + imgNo).css('background-image', 'url(' + fr.result + ')');
        };
        fr.readAsDataURL(selectedFileBin[0]);

        $('.jsFileSelectImg' + imgNo).hide();
        //リアルタイムプレビュー

    }).bind('dragenter', function () {
// デフォルトの挙動を停止
        return false;
    }).bind('dragover', function () {
// デフォルトの挙動を停止
        return false;
    });
}

/*================================================
 ダミーボタンを押した時の処理
 =================================================*/

function initFileSelectBtn(imgNo) {
    $('.jsFileSelectImg' + imgNo).click(function () {
// ダミーボタンとinput[type="file"]を連動
        $('input[name="img' + imgNo + '"]').click();
        return false;
    });
    $('input[name="img' + imgNo + '"]').change(function () {
// ファイル情報を取得
        var tmp = this.files;
        selectedFileBin = Array.prototype.slice.call(tmp);
        $('.imgFileName' + imgNo).html(selectedFileBin[0].name);
        imgFileBin[imgNo] = selectedFileBin[0];

        //リアルタイムプレビュー
        var fr = new FileReader();
        fr.onload = function () {
            $('.jsDragImg' + imgNo).css('background-image', 'url(' + fr.result + ')');
        };
        fr.readAsDataURL(selectedFileBin[0]);

        $('.jsFileSelectImg' + imgNo).hide();
        //リアルタイムプレビュー
    });
}
/*================================================
 画像登録
 =================================================*/

function registImage() {
    var jid = $(".jsJid").val();

    var imgComment2 = $("input[name='imgComment2']").val();
    var imgComment3 = $("input[name='imgComment3']").val();
    var imgComment4 = $("input[name='imgComment4']").val();

    var imgDelete0 = $("input[name='delete0']:checked").val();
    var imgDelete1 = $("input[name='delete1']:checked").val();
    var imgDelete2 = $("input[name='delete2']:checked").val();
    var imgDelete3 = $("input[name='delete3']:checked").val();
    var imgDelete4 = $("input[name='delete4']:checked").val();

    //バリデーション
    if (!checkTextLimit(imgComment2, 20)) {
        swal("エラー", "画像1のコメントは20文字以内で入力してください", "error");
        return false;
    }

    if (!checkTextLimit(imgComment3, 20)) {
        swal("エラー", "画像2のコメントは20文字以内で入力してください", "error");
        return false;
    }

    if (!checkTextLimit(imgComment4, 20)) {
        swal("エラー", "画像3のコメントは20文字以内で入力してください", "error");
        return false;
    }



    //データ送信
    var fd = new FormData();
    fd.append("jid", jid);

    fd.append("imgComment2", imgComment2);
    fd.append("imgComment3", imgComment3);
    fd.append("imgComment4", imgComment4);

    fd.append("imgDelete0", imgDelete0);
    fd.append("imgDelete1", imgDelete1);
    fd.append("imgDelete2", imgDelete2);
    fd.append("imgDelete3", imgDelete3);
    fd.append("imgDelete4", imgDelete4);

    fd.append("imgFile0", imgFileBin[0]);
    fd.append("imgFile1", imgFileBin[1]);
    fd.append("imgFile2", imgFileBin[2]);
    fd.append("imgFile3", imgFileBin[3]);
    fd.append("imgFile4", imgFileBin[4]);

    $.ajax({
        type: "POST",
        url: "/admin/ajax/ajax_image_upload.php",
        data: fd,
        processData: false,
        contentType: false,
        dataType: 'json',
        //通信成功
        success: function (data, dataType)
        {
            //エラー判定
            if (data['statusCode'] != 1) {
                swal("エラー", data['errorMessages'], "error");
                fileCancel(0);
                fileCancel(1);
                fileCancel(2);
                fileCancel(3);
                fileCancel(4);
                return false;
            }
            //$('.fileName').html('');
            imgFileBin = [];
            selectedFileBin = null;

            swal({
                title: "画像登録",
                text: "画像の登録が完了しました。",
                showCancelButton: false,
                confirmButtonColor: "#e78a1c",
                confirmButtonText: "OK",
                closeOnConfirm: false},
            function () {
                location.reload();
                return false;
            });
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            swal("エラー", "エラーが発生しました" + textStatus, "error");
            return false;
        }
    });

}