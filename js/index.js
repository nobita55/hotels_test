$(function () {
    $(".jsSelectPrefecture").change(function () {
        var prefecturId = $(".jsSelectPrefecture option:selected").val();

        location.href = "/search/result?area=" + prefecturId;
    });

    $(".jsSelectJobCategory").change(function () {
        var jobCategoryId = $(".jsSelectJobCategory option:selected").val();
        location.href = "/search/result?jc=" + jobCategoryId;
    });

    $(document).on('click', '.jsSearchBtn', function () {
        var keyword = $("input[name='keyword']").val();
        location.href = "/keyword/search?cf=1&keyword=" + encodeURIComponent(keyword);
    });

    $('#wide').sliderPro({
        width: 980, //横幅
        height: 430,
        arrows: true, //左右の矢印
        fadeArrows: false,
        slideDistance: 0, //スライド同士の距離
        autoplayDelay: 2500,
        visibleSize: '100%', //前後のスライドを表示
        touchSwipe: false
    });
    
    //エンター無効
    $("input"). keydown(function(e) {
        if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
            return false;
        } else {
            return true;
        }
    });

});