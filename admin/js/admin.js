/*
 * 設定
 */
/*
 //小カテゴリー設定
 var jobCategory = [];
 jobCategory[1] = [
 {text: '選択してください', value: '0'},
 {text: 'フロント', value: '1'},
 {text: '番頭', value: '2'},
 {text: '予約', value: '3'},
 {text: '販売・ショップ', value: '4'},
 {text: 'ドア', value: '5'},
 {text: 'コンシェルジュ', value: '6'},
 {text: 'ゲストリレーションズ', value: '7'},
 {text: 'ナイトマネージャー', value: '8'},
 {text: '仲番', value: '9'},
 {text: '布団敷き', value: '10'},
 {text: 'オペレーター', value: '11'},
 {text: 'ハウスキーパー', value: '12'},
 {text: 'レベニューマネージャー', value: '13'},
 {text: 'バトラー', value: '14'},
 {text: 'その他', value: '99'}
 ];
 jobCategory[2] = [
 {text: '選択してください', value: '0'},
 {text: 'レストランサービス', value: '1'},
 {text: '仲居・和装サービス', value: '2'},
 {text: 'ルームサービス', value: '3'},
 {text: 'バーテンダー', value: '3'},
 {text: 'ソムリエ', value: '3'},
 {text: 'キャッシャー', value: '3'},
 {text: 'レセプション', value: '3'},
 {text: 'スチュワード', value: '3'},
 {text: 'その他', value: '99'}
 ];
 jobCategory[3] = [
 {text: '選択してください', value: '0'},
 {text: '新規セールス', value: '1'},
 {text: 'プランナー・コーディネーター', value: '2'},
 {text: 'ドレスコーディネーター', value: '3'},
 {text: 'フラワーコーディネーター', value: '4'},
 {text: 'ヘア＆メイク', value: '5'},
 {text: 'カメラマン', value: '6'},
 {text: '音響＆照明', value: '7'},
 {text: 'その他', value: '99'}
 ];
 jobCategory[4] = [
 {text: '選択してください', value: '0'},
 {text: '宴会サービス', value: '1'},
 {text: '宴会予約', value: '2'},
 {text: '宴会手配', value: '3'},
 {text: '宴会クローク', value: '4'},
 {text: 'その他', value: '99'}
 ];
 jobCategory[5] = [
 {text: '選択してください', value: '0'},
 {text: 'フランス', value: '1'},
 {text: 'イタリアン', value: '2'},
 {text: '和食', value: '3'},
 {text: '中華', value: '4'},
 {text: '寿司', value: '5'},
 {text: '鉄板焼き', value: '6'},
 {text: 'パティシエ', value: '7'},
 {text: 'ベーカー', value: '8'},
 {text: '調理補助', value: '9'},
 {text: 'その他', value: '99'}
 ];
 jobCategory[6] = [
 {text: '選択してください', value: '0'},
 {text: '宿泊セールス', value: '1'},
 {text: '宴会セールス', value: '2'},
 {text: 'インバンドセールス', value: '3'},
 {text: 'MICEセールス', value: '4'},
 {text: 'その他', value: '99'}
 ];
 jobCategory[7] = [
 {text: '選択してください', value: '0'},
 {text: '総務', value: '1'},
 {text: '経理', value: '2'},
 {text: '人事', value: '3'},
 {text: '購買', value: '4'},
 {text: '企画・広報・マーケティング', value: '5'},
 {text: 'ＩＴ', value: '6'},
 {text: '施設管理', value: '7'},
 {text: '法務', value: '8'},
 {text: 'その他', value: '99'}
 ];
 jobCategory[8] = [
 {text: '選択してください', value: '0'},
 {text: 'スパ受付', value: '1'},
 {text: 'エステ受付', value: '2'},
 {text: 'フィットネス受付', value: '3'},
 {text: 'セラピスト', value: '4'},
 {text: 'エステティシャン', value: '5'},
 {text: 'インストラクター', value: '6'},
 {text: 'その他', value: '99'}
 ];
 jobCategory[99] = [
 {text: '選択してください', value: '0'},
 {text: '送迎ドライバー', value: '1'},
 {text: '秘書', value: '2'},
 {text: 'コンサルタント', value: '3'},
 {text: 'その他', value: '99'}
 ];
 */
/*
 * ajax通信
 * 
 * 
 */
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


/*ユーティリティー系*********************************************************/
//テキストカウンター
function textCounter(obj, limit, element, color, errColor) {
    var remain = stringRemainNum(obj, limit);
    $("." + element).html(remain);
    if (remain < 0) {
        $("." + element).css('color', errColor);
    } else {
        $("." + element).css('color', color);
    }
}

//登録案件取得

function ajaxLoadJobs(url, searchJobId, searchRecJobId,searchCentralManager) {
    var data = {mode: 'getJobs', searchJobId: searchJobId, searchRecJobId: searchRecJobId,centralManager:searchCentralManager};
    $.ajax({
        type: "POST",
        url: url,
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            displayList('tableJob', ".jsJobList", data);
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            swal("エラーが発生しました");
            //alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}

/*
 *関数 
 */

function searchJob(url) {
    var searchJobId = $(':text[name="searchJobId"]').val();
    var searchRecJobId = $(':text[name="searchRecJobId"]').val();
    var searchCentralManager = $('.formCentralManager').val();
    ajaxLoadJobs(url, searchJobId, searchRecJobId,searchCentralManager);
}

/*
 * 画面更新
 * 
 */

//登録案件

function getJobLink(data) {
    var tag = makeTag(data, 'jobNumberLink');
    return tag;
}

//登録案件

function displayList(tagTemp, refrectClass, beData) {
    var tableTags = makeTags(beData, tagTemp);
    $(refrectClass).html(tableTags);
}

//タグ生成
function makeTags(attacheData, selectedTpl) {
    var tpls = configTemplate();

    var compiledTable = _.template(tpls[selectedTpl]);
    var tags = '';
    _.each(attacheData, function (rowData) {
        var tag = compiledTable(rowData);
        tags = tags + tag;
    });
    return tags;
}

//タグ生成
function makeTag(attacheData, selectedTpl) {
    var tpls = configTemplate();
    var compiledTag = _.template(tpls[selectedTpl]);
    var tag = compiledTag(attacheData);
    return tag;
}

//テンプレート設定
function configTemplate() {
    var templates = {};
    //急募リストテンプレート
    templates['tableUrgent'] = '<tr class="<%- job_id %>"><td class="sortRank">' +
            '<%- sort_rank %></td>' +
            '<td class="jobNo"><%- job_id %></td>' +
            '<td class="boshuId"><%- rec_job_id %></td>' +
            '<td class="title"><%- title %></td>' +
            '<td class="catch"><%- catchcopy %></td>' +
            '<td class="open"><%- is_open_mark %></td>' +
            '</tr>' + "\n";
    //注目の仕事[sp]リストテンプレート
    templates['tableRecommend'] = '<tr class="<%- job_id %>"><td class="sortRank">' +
            '<%- sort_rank %></td>' +
            '<td class="jobNo"><%- job_id %></td>' +
            '<td class="boshuId"><%- rec_job_id %></td>' +
            '<td class="title"><%- title %></td>' +
            '<td class="catch"><%- catchcopy %></td>' +
            '<td class="open"><%- is_open_mark %></td>' +
            '</tr>' + "\n";
    //PRリストテンプレート
    templates['tablePr'] = '<tr class="<%- Job_id %>"><td class="sortRank">' +
            '<%- Sort_rank %></td>' +
            '<td class="campany"><%- Name %></td>' +
            '<td class="jobNo"><%- Number %></td>' +
            '<td class="boshuId"><%- Job_id %></td>' +
            '<td class="catch"><%- Catch %></td>' +
            '<td class="open"><%- Open_flag %></td>' +
            '</tr>' + "\n";
    //仕事リストテンプレート
    templates['tableJob'] = '<tr class="<%- jobId %>">' +
            '<td class="jobNo"><a class="euplink" href="/job/detail/<%- jobId %>" target="_blank"><%- jobId %></a></td>' +
            '<td class="boshuId"><%- recJobId %></td>' +
            '<td class="jobName"><%- title %></td>' +
            '<td class="city"><%- prefecture %></td>' +
            '</tr>' + "\n";
    //案件実ページリンク
    templates['jobNumberLink'] = '<%- rec_job_id %> [<a class="euplink" href="/job/detail/<%- id %>" target="_blank">詳細表示</a>]';
    //検索ワードリストテンプレート
    templates['tableSearchWord'] = '<tr class="<%- id %>"><td class="count">' +
            '<%- count %></td>' +
            '<td class="searchWord"><%- search_word %></td>' +
            '</tr>' + "\n";
    //検索ワードリストテンプレート
    templates['tableKeyword'] = '<tr class="<%- id %>"><td class="sortRank">' +
            '<%- sort_rank %></td>' +
            '<td class="keywordCell"><%- word %></td>' +
            '</tr>' + "\n";
    //特集スマホ管理(全て)テンプレート
    templates['tableSpecial'] = '<tr class="<%- id %>"><td class="title  <%- registedClass %>">' +
            '<%- title %></td>' +
            '<td class="num"><%- Num %></td>' +
            '</tr>' + "\n";
    //特集(スマフォ表示)テンプレート
    templates['tableTopSpecial'] = '<tr class="<%- special_id %>"><td class="sortRank">' +
            '<%- sort_rank %></td>' +
            '<td class="specialTitle"><%- title %></td>' +
            '<td class="catch"><%- catchcopy %></td>' +
            '<td class="open"><%- is_open %></td>' +
            '<td class="topBanner"><%- is_top %></td>' +
            '<td class="topBanner"><%- is_img %></td>' +
            '</tr>' + "\n";
    //トピックステンプレート
    templates['tableNews'] = '<tr class="<%- Number %>"><td class="date">' +
            '<%- Date %></td>' +
            '<td class="title"><%- Title %></td>' +
            '<td class="comment"><%- Comment %></td>' +
            '</tr>' + "\n";
    //特集管理テンプレート
    templates['tableSpecials'] = '<tr class="<%- id %>"><td class="specialId">' +
            '[<a class="euplink" href="/special/contens/<%- id %>" target="_blank">PV</a>] <%- id %></td>' +
            '<td class="specialTitle"><%- title %></td>' +
            '<td class="specialRegNum textAr"><%- Num %></td>' +
            '</tr>' + "\n";
    //特集案件管理特集内案件テンプレート
    templates['tableSpJobsInSp'] = '<tr class="<%- job_id %>">' +
            '<td class="jobInSpSN"><%- sort %></td>' +
            '<td class="jobInSpJobId"><a href="/job/detail/<%- job_id %>" class="euplink"  target="_blank"><%- job_id %></a></td>' +
            '<td class="jobInSpHotelsName"><div><%- company_name_hush %></div></td>' +
            '<td class="jobInSpTitle"><div><%- title %></div></td>' +
            '<td class="jobInSpPref"><%- prefecture %></td>' +
            '<td class="jobInSpSort"><input type="text" name="newSort_<%- job_id %>" value=""></td>' +
            '</tr>' + "\n";
    //特集案件管理元案件リストテンプレート
    templates['tableSpJobs'] = '<tr class="<%- id %>">' +
            '<td class="jobId"><a href="/job/detail/<%- id %>" class="euplink"  target="_blank"><%- id %></a></td>' +
            '<td class="recJobId <%- registedClass %>"><%- rec_job_id %></td>' +
            '<td class="hotelsName "><%- company_name_hush %></td>' +
            '<td class="jobTitle "><%- title %></td>' +
            '<td class="jobPref"><%- prefecture %></td>' +
            '</tr>' + "\n";
    //案件検索案件リストテンプレート
    templates['tableSearchJobs'] = '<tr class="<%- id %>">' +
            '<td class="jobNumber"><%- id %></td>' +
            '<td class="jobCtrButtons ">' +
            '<a href="/job/detailAll/<%- id %>" class="euplink"  target="_blank">SITE</a> ' +
            '<a href="./job_admin_edit.php?mode=edit&jid=<%- id %>" class="euplink" target="_blank">編集</a> ' +
            '<a href="./job_admin_image.php?jid=<%- id %>" class="euplink"  target="_blank">画像</a> ' +
            '<a href="./job_admin_edit.php?mode=copy&jid=<%- id %>" class="euplink"  target="_blank">コピー</a> ' +
            '<a href="#" class="euplink jsMemoCtr">メモ</a></td>' +
            '<td class="jobId"><%- rec_job_id %></td>' + "\n" +
            '<td class="jobManager"><%- centralManager %></td>' + "\n" +
            '<td class="jobStatus"><a href="#" class="euplink <%- jobStatusSwitch %>" ><%- jobStatus %></a></td>' + "\n" +
            '<td class="jobDeleted "><%- jobDeleted %></td>' + "\n" +
            '<td class="jobMemo "><%- memoExist %></td>' +
            '<td class="jobPref"><%- prefecture %></td>' +
            '<td class="jobHotel"><%- company_name_hush %></td>' +
            '<td class="jobTitle "><%- title %></td>' +
            '<td class="jobShokushu"><%- jobCategory %></td>' +
            '<td class="jobKoyo"><%- koyoText %></td>' +
            '<td class="jobRegistDate "><%- jobRegdate %></td>' +
            '<td class="jobModifyDate "><%- jobUpdate %></td>' +
            '<td class="jobSortdate "><%- jobSortdate %></td>' +
            '</tr>' + "\n";

    return templates;
}

/*util*/
function stringRemainNum(obj, limit) {
    var len = $(obj).val().length;
    var r = limit - len;
    return r;
}

function stringRemainNumNotIncRetuern(obj, limit) {
    
    var val = $(obj).val();
    val = val.replace(/\r?\n/g, "");
    var len = val.length;
    var r = limit - len;
    return r;
}