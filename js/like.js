//変数定義
//検討中最大値
var ucJobLimit = 20;
var lsUcKey = 'ucjob';

var limitWidth = 639;

//関数
//ローカルストレージにオブジェクトを保存
function setJsonToLS(lsname, obj) {
    localStorage.setItem(lsname, JSON.stringify(obj));
}

//ローカルストレージからオブジェクトを取得
function getJsonFromLS(lsname) {
    var recovObj = JSON.parse(localStorage.getItem(lsname));
    return recovObj;
}

//検討中個数取得
function getNumUcJobs(obj) {
    if (obj != null) {
        return Object.keys(obj).length;
    } else {
        return 0;
    }
}

//検討中ボタン変更
function changeAddStudyButton(lsname) {
    var jobs = getJsonFromLS(lsname);
    _.each(jobs, function (element, index, array) {

        var w = $(window).width();
        if (w <= limitWidth) {
            $('[data-add-jid="' + index + '"]').hide();
            $('[data-del-jid="' + index + '"]').hide();

        } else {
            $('[data-add-jid="' + index + '"]').hide();
            $('[data-del-jid="' + index + '"]').css('display', 'block');
        }
    });
}

//追加ボタン表示切替
function changeButtonDel(jid) {
    $('[data-add-jid="' + jid + '"]').hide();
    $('[data-del-jid="' + jid + '"]').css('display', 'block');
}

//追加ボタン表示切替
function changeButtonAdd(jid) {
    $('[data-add-jid="' + jid + '"]').css('display', 'block');
    $('[data-del-jid="' + jid + '"]').hide();
}

//検討中に追加
function setJobToStorage(lsname, jid) {

    var current = (new Date()).toLocaleString();
    var jobs = getJsonFromLS(lsname);
    if (jobs == null) {
        var jobs = new Object();
    }

    //件数確認
    if (getNumUcJobs(jobs) >= ucJobLimit) {
        var oldJob = oldestUcJob(jobs);
        delete jobs[oldJob];
    }

    //新しい仕事を登録
    jobs[jid] = current;
    setJsonToLS(lsname, jobs);
}

//検討中から削除
function delJobToStorage(lsname, jid) {
    var current = (new Date()).toLocaleString();
    var jobs = getJsonFromLS(lsname);
    if (jobs != null) {
        delete jobs[jid];
        setJsonToLS(lsname, jobs);
    }

}

//もっとも古いデータの仕事番号を取得
function oldestUcJob(obj) {
    var oldestJob;
    var oldestDate;
    _.each(obj, function (element, index, array) {
        if (oldestJob == null) {
            oldestJob = index;
            oldestDate = element;
        } else {
            var mDate = new Date(oldestDate);
            var cDate = new Date(element);
            if (mDate > cDate) {
                oldestJob = index;
                oldestDate = element;
            }
        }
    });
    return oldestJob;
}