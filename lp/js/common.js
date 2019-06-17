$(function () {

	/*if(module.ua.Mobile){
	 console.log('スマホの処理');
	 }else if(module.ua.Tablet){
	 console.log('タブレットの処理');
	 }else if(module.ua.ltIE9){
	 console.log('IE9のみの処理');
	 }else {
	 console.log('それ以外の処理');
	 }*/

	//スムーススクロール：#だけなら処理しない
	module.smoothScroll();

	//別ページからのスムーススクロール
	module.smoothScrollForOtherpage();
	
	//高さ揃えの設定
	module.matchHeight();
	
	//ページトップの設定
	module.pageTop();


	//初期化
	commonInit();

	//イベントの設定
	commonSetEvent();



});


//共通モジュール
var module = {

	//各種設定
	settings: {

		//spのブレイクポイント
		sp_breakpoint: 767,

		//現在のデバイス状況 (変更不可)
		is_device: null,

		//--------------------------------------------
		//ページトップの設定
		//--------------------------------------------
		pagetopSettings: {

			//ページトップボタンのセレクタ
			selector  : $('.Pagetop'),
			//ページトップが出てくるスクロールトップの値
			show_point: 100,

			//ページ下部までスクロールした時にページトップをどこで固定するか
			//デフォルトの「70」の場合、フッターが70px見えた位置でfixedに変わる。
			//表示位置は普通にcssで指定
			offsetFixPosition: 70

		},

		//--------------------------------------------
		//スムーススクロールの設定
		//--------------------------------------------
		smoothScrollSettings: {

			//fixedのヘッダーの高さに合わせてスクロール位置を調整するかどうか true or false
			adjustScrollPosition: false,

			//調整する高さ（ヘッダーの高さ）
			headerHeight: {
				pc: 80,
				sp: 50
			},

			//SPだけ適用するかどうか
			spOnly: false,

			//切り替えのブレイクポイント（ヘッダの高さが切り替わるブレイクポイント）
			breakpoint: 767,

			//アニメーションに掛ける時間
			time: 500

		}

	},

	//スムーススクロール：#だけなら処理しない
	smoothScroll: function () {
		$('a[href^=#]').add('.sScroll').not('.noscroll').on('click', function () {
			var href;
			if ($(this).data('target')) {
				href = $(this).data('target');
			} else {
				href = $(this).attr('href');
			}
			if (href != '#') {
				var p = $(href == '#top' ? 'html' : href).offset().top;
				var s = module.settings.smoothScrollSettings;
				if (s.adjustScrollPosition) {
					if (getWindowWidth() < s.breakpoint) {
						p -= s.headerHeight.sp;
					} else {
						if (!s.spOnly) {
							p -= s.headerHeight.pc;
						}
					}
				}
				module.smoothScrollBeforeStart();
				$('html, body').stop().animate({scrollTop: p}, module.settings.smoothScrollSettings.time, function () {
					module.smoothScrollAfterEnd();
				});
				return false;
			}
		});
	},

	//別ページからのスムーススクロール
	/**
	 * リンクの張り方を変更する必要あり。
	 *
	 * foo.html#bar
	 * 　↓
	 * foo.html?id=bar
	 *
	 * の様に、URLの後ろに [ ?id=【id名】 ]を付ける
	 * */
	smoothScrollForOtherpage: function () {
		$(window).on('load', function () {
			var url = $(location).attr('href');
			if (url.indexOf("?id=") != -1) {
				var id = url.split("?id=");
				var $target = $('#' + id[id.length - 1]);
				if ($target.length) {
					var p = $target.offset().top;
					var s = module.settings.smoothScrollSettings;
					if (s.adjustScrollPosition) {
						if (getWindowWidth() < s.breakpoint) {
							p -= s.headerHeight.sp;
						} else {
							if (!s.spOnly) {
								p -= s.headerHeight.pc;
							}
						}
					}
					module.smoothScrollBeforeStart();
					$("html, body").animate({scrollTop: p}, s.time, function () {
						module.smoothScrollAfterEnd();
					});
				}
			}
		})
	},

	//ユーザエージェント条件分岐
	ua: (function (u) {
		return {
			ltIE9 : document.uniqueID && typeof window.matchMedia == "undefined",
			Tablet: (u.indexOf("windows") != -1 && u.indexOf("touch") != -1)
			|| u.indexOf("ipad") != -1
			|| (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
			|| (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
			|| u.indexOf("kindle") != -1
			|| u.indexOf("silk") != -1
			|| u.indexOf("playbook") != -1,
			Mobile: (u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
			|| u.indexOf("iphone") != -1
			|| u.indexOf("ipod") != -1
			|| (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
			|| (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
			|| u.indexOf("blackberry") != -1
		}
	})(window.navigator.userAgent.toLowerCase()),


	//高さ揃えの設定
	matchHeight: function () {
		if ($('.match-height').length) {
			$('.match-height').matchHeight();
		}
		if ($('.form-header,.form-content').length) {
			$('.form-header,.form-content').matchHeight();
		}
	},

	//sp用ハンバーガーメニュー
	sp_nav: function () {
	  $('.menu-trigger').on({'click':function(){
	  	$('body').toggleClass('is-show');
  		$(this).toggleClass('active');
  		$('.md-univ-nav').toggleClass('is-show');
 	 	$('#works').toggleClass('blur');
  		$('#works_detail').toggleClass('blur');
  		$('#about').toggleClass('blur');
  		$('#contact').toggleClass('blur');
  		}
	  });
  
 	 $('.md-univ-nav li a').on({'click':function(){
  		$('.menu-trigger').removeClass('active');
  		$('.md-univ-nav').removeClass('is-show');
  		$('#works').removeClass('blur');
  		$('#works_detail').removeClass('blur');
  		$('#about').removeClass('blur');
  		$('#contact').removeClass('blur');
  		}
	  });
	},

	//ページトップの設定
	pageTop: function () {
		var s = module.settings.pagetopSettings;
		var $pagetop = s.selector;
		if(!$pagetop.length){
			return;
		}
		$pagetop.hide();
		$(window).on('scroll', function () {
			if ($(window).scrollTop() > s.show_point) {
				$pagetop.stop(true).fadeIn();
				if ($(window).scrollTop() > $('#footer').offset().top - $(window).height() + s.offsetFixPosition) {
					$pagetop.addClass('fixed');
				} else {
					$pagetop.removeClass('fixed');
				}
			} else {
				$pagetop.stop(true).fadeOut();
			}
		})
	},
	/////////////////////////////////////////////////////////
	//　コールバック関連
	/////////////////////////////////////////////////////////

	//PC表示に変わった時
	changePc: function () {

	},

	//SP表示に変わった時
	changeSp: function () {

	},

	//スムーススクロールが始まる前
	smoothScrollBeforeStart: function () {

	},

	//スムーススクロールが終わった後
	smoothScrollAfterEnd: function () {

	}

};


//初期化
function commonInit() {

}

//イベントの設定
function commonSetEvent() {
	$(window).on('load resize', function () {
		var width = getWindowWidth();
		if (width > module.settings.sp_breakpoint) {
			if (module.settings.is_device != 'pc' || module.settings.is_device == null) {
				module.settings.is_device = 'pc';
				module.changePc();
			}
		} else {
			if (module.settings.is_device == 'pc' || module.settings.is_device == null) {
				module.settings.is_device = 'sp';
				module.changeSp();
			}
		}
	});
}

//スクロールバーの除いたウィンドウの横幅を取得
function getWindowWidth() {
	return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
}

//■page topボタン
$(function(){
    var topBtn=$('#pageTop');
    topBtn.hide();

    //◇ボタンの表示設定
    $(window).scroll(function(){
      if($(this).scrollTop()>80){
        //---- 画面を80pxスクロールしたら、ボタンを表示する
        topBtn.fadeIn();
      }else{
        //---- 画面が80pxより上なら、ボタンを表示しない
        topBtn.fadeOut();
      } 
    });

    // ◇ボタンをクリックしたら、スクロールして上に戻る
    topBtn.click(function(){
      $('body,html').animate({
      scrollTop: 0},500);
      return false;
    });

});