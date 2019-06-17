$(function () {
    $(document).on('click', '.jsJobCategorySelect', function () {
        var prefecturId = $(".jsSelectPrefecture option:selected").val();
        $.magnificPopup.open({
            items: {src: '/search/jobCategory?area=' + prefecturId},
            type: 'iframe'
        }, 0);
        return false;
    });

    $(".jsSelectPrefecture").change(function () {
        var prefecturId = $(".jsSelectPrefecture option:selected").val();
        var jc = $('#wrapper').attr('data-jc');
        var jd = $('#wrapper').attr('data-jd');
        location.href = "/search/result?area=" + prefecturId + "&jc=" + jc + "&jd=" +jd;
    });

    $(document).on('click', '.jsSearchBtn', function () {
        var keyword = $("input[name='keyword']").val();
        location.href = "/keyword/search?cf=1&keyword="  + encodeURIComponent(keyword);
    });

});
