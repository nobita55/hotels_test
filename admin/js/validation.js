//手動での対応が必要
var prefectureMaxNo = 48;

//郵便番号判定 nnn-nnnn形式
function checkPostCode(val) {
    if (val.match(/^\d{3}-\d{4}$/)) {
        return true;
    } else {
        return false;
    }
}

//都道府家選択判定
function checkPrefecture(val) {
    if (val == null) {
        return false;
    }
    if (val.match(/^-?[0-9]+$/)) {
        if (val >= 1 && val <= prefectureMaxNo) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
//選択判定
function checkIntRange(val, min, max) {
    if (val == null) {
        return false;
    }
    if (val.match(/^-?[0-9]+$/)) {
        if (val >= min && val <= max) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
//必須文字制限あり判定
function checkMustAndTextLimit(val, textLimit) {
    if (val == '' || val == null) {
        return false;
    }
    var len = val.length;
    if (len > textLimit) {
        return false;
    } else {
        return true;
    }
}
//文字制限判定
function checkTextLimit(val, textLimit) {
    var len = val.length;
    if (len > textLimit) {
        return false;
    } else {
        return true;
    }
}
//有効な日付判定 YYYY-MM-DD形式
function isValidDate(str) {
    var ymd = str.split('-'); // 年月日のデリミタでsplit.chrome専用
    var y = ymd[0];
    var m = parseInt(ymd[1], 10) - 1; // 0 paddingされてる文字列を整数に. "09" => 9
    var d = parseInt(ymd[2], 10);
    var vd = new Date(y, m, d);
    if (vd.toString() != 'Invalid Date' && vd.getFullYear() == y && vd.getMonth() == m && vd.getDate() == d) {
        return true;
    }
    return false;
}

//コンバーター
//全角を半角へ変換
var zenToHanConverte = (function () {
    var cclass = '[' + String.fromCharCode(0xff01) + '-' + String.fromCharCode(0xff5e) + ']';
    var re_fullwidth = new RegExp(cclass, 'g');
    var substitution = function (m) {
        return String.fromCharCode(m.charCodeAt(0) - 0xfee0);
    };
    return function (s) {
        return s.replace(re_fullwidth, substitution).replace(/[‐－―ー]/g, '-')
    };
})();
