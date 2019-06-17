$(function () {
    //ページ読み込み
    $(window).load(function () {
        $('.jsStudyBtOn').hide();
        changeAddStudyButton(lsUcKey);
    });

    //既に登録済ボタン
    $(document).on('click', '.jsStudyBtOn', function () {
        return false;
    });

    //登録ボタン
    $(document).on('click', '.jsStudyBtOff', function () {
        var jobId = $(this).attr('data-add-jid');
        setJobToStorage(lsUcKey, jobId);
        changeButtonDel(jobId);
        return false;
    });

    $(window).resize(function () {
        changeAddStudyButton(lsUcKey);
    });


});