//画像
//var selectedFileBin = null;
//var imgFileBin = [];

/*画像制御*******************************************************/
/*================================================
 選択画像キャンセル処理
 =================================================*/
function fileCancel(imgNo) {
    $('.imgFileName' + imgNo).html('');
    //リアルタイムプレビュー
    if (imgNo != 0) {
        $('.jsDragImg' + imgNo).css('background-image', 'url("/admin/img/img_drag_bg.jpg")');
    } else {
        $('.jsDragImg' + imgNo).css('background-image', 'url("/admin/img/img_drag_bg_square.jpg")');
    }
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
