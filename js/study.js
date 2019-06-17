$(function () {
    //検討中処理
    //ページロード
    $(window).load(function () {
        jobListLoad(lsUcKey);
    });

    $(document).on('click', '.deleteStudyBt', function () {
        var jobId = $(this).attr('data-del-jn');
        delJobToStorage(lsUcKey, jobId);
        jobListLoad(lsUcKey);
        return false;
    });

});

function jobListLoad(lsUcKey) {
    var objJob = getJsonFromLS(lsUcKey);
    if (Object.keys(objJob).length != 0) {
        ajaxLoadJobs(lsUcKey, objJob);
    } else {
        displayList(".jsListStudy", objJob);
    }
}

function ajaxLoadJobs(lsUcKey, jobIds) {
    var data = {mode: 'getJobs', jobIds: jobIds};
    $.ajax({
        type: "POST",
        url: "/ajax/ajax_study.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            if (data['statusCode'] == 1) {
                var results = data['result'];
                var activeJobs = deleteNegativeJobAndEdit(lsUcKey, results);

                displayList(".jsListStudy", activeJobs);
            } else {
                return;
            }
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}

//無効な案件をストレージから削除
function deleteNegativeJobAndEdit(lsUcKey, results) {
    var activeJobs = new Array();
    var tpls = configTemplate();
    _.each(results, function (element, index, array) {
        if (element['jobStatus']) {
            if (element['img'] == false) {
                element['cvImg'] = '/img/common/noimg/job_no_img.png';
            } else {
                element['cvImg'] = element['img']['fileName'];
            }
            var sNum = element['salary_min'];
            sNum = sNum.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
            element['cvSalary'] = element['salary_unit'] + ' ' + sNum + ' 円～';

            if (element['gift_money'] != null) {
                var sBonus = element['gift_money'];
                sBonus = sBonus.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
                element['cvBonus'] = sBonus + ' 円';
            } else {
                element['cvBonus'] = '';
            }

            activeJobs.push(element);
        } else {
            //無効削除
            delJobToStorage(lsUcKey, element['id']);
        }
    });
    return activeJobs;
}

//登録案件
function displayList(refrectClass, beData) {
    var tableTags = makeTags(beData);
    $(refrectClass).html(tableTags);
}
//タグ生成
function makeTags(attacheData) {
    var tpls = configTemplate();
    var compiledTable = _.template(tpls['listStudy']);
    var compiledTableWithBonus = _.template(tpls['listStudyWithBonus']);
    var tags = '';
    _.each(attacheData, function (rowData) {
        if (rowData['isBonus']) {
            var tag = compiledTableWithBonus(rowData);
        } else {
            var tag = compiledTable(rowData);
        }
        tags = tags + tag;
    });
    return tags;
}

//テンプレート設定
function configTemplate() {
    var templates = {};
    templates['listStudy'] = '<div class="col-sm-6 col-md-3"> <a href="/job/detail/<%- id %>">' +
            '<div class="card-simple" data-background-image="<%- cvImg %>" style=" background-image:url(<%- cvImg %>);">' +
            '<div class="card-simple-background">' +
            '</div></div></a>' +
            '<div class="cardListInfo"><span class="cardListPref"><%- prefecture %></span><span class="cardListCategory"><%- jobCategoryText %></span></div>' +
            '<div class="cardListTitle"><a href="/job/detail/<%- id %>"><%- title %></a></div>' +
            '<div class="moreInfo">' +
            '<div><i class="fa fa-map-marker fa-fw"></i><%- city %></div>' +
            '<div><i class="fa fa-jpy fa-fw"></i><%- cvSalary %></div>' +
            '<div>　</div>' +
            '<div class="subCardemploy"><%- employmentStatusText %></div>' +
            '</div><div class="listBtBox">' +
            '<div class="studyListDeleteBt deleteStudyBt half" data-del-jn="<%- id %>"><a href="#"><i class="fa fa-heart"></i>削除</a></div>' +
            '<div class="listDetailBt half"><a href="/job/detail/<%- id %>">詳細</a></div>' +
            '</div></div>' + "\n";
    templates['listStudyWithBonus'] = '<div class="col-sm-6 col-md-3"> <a href="/job/detail/<%- id %>">' +
            '<div class="card-simple" data-background-image="<%- cvImg %>" style=" background-image:url(<%- cvImg %>);">' +
            '<div class="card-simple-background">' +
            '<div class="card-simple-price">就労ボーナス付</div>' +
            '</div></div></a>' +
            '<div class="cardListInfo"><span class="cardListPref"><%- prefecture %></span><span class="cardListCategory"><%- jobCategoryText %></span></div>' +
            '<div class="cardListTitle"><a href="/job/detail/<%- id %>"><%- title %></a></div>' +
            '<div class="moreInfo">' +
            '<div><i class="fa fa-map-marker fa-fw"></i><%- city %></div>' +
            '<div><i class="fa fa-jpy fa-fw"></i><%- cvSalary %></div>' +
            '<div><i class="fa fa-smile-o fa-fw"></i>祝い金<%- cvBonus %></div>' +
            '<div class="subCardemploy"><%- employmentStatusText %></div>' +
            '</div><div class="listBtBox">' +
            '<div class="studyListDeleteBt deleteStudyBt half" data-del-jn="<%- id %>"><a href="#"><i class="fa fa-heart"></i>削除</a></div>' +
            '<div class="listDetailBt half"><a href="/job/detail/<%- id %>">詳細</a></div>' +
            '</div></div>' + "\n";
    return templates;
}
