// ホーム　スライドショー
'use strict';
$(function(){

    let count = $("#slide li").length;
    let current = 1;
    let next = 2;
    let interval = 2500;
    let duration = 750;
    let timer;
  
    $("#slide li:not(:first-child)").hide();
    timer = setInterval(slideTimer, interval);

    function slideTimer(){
      $("#slide li:nth-child(" + current + ")").fadeOut(duration);
      $("#slide li:nth-child(" + next + ")").fadeIn(duration);
  
      current = next;
      next = ++next;
  
      if(next > count){
        next = 1;
      }
      $("#button1 li a").removeClass("target");
      $("#button1 li:nth-child(" + current + ") a").addClass("target");
    }
  
    $("#button1 li a").click(function(){
      next = $(this).html();
      clearInterval(timer);
      timer = setInterval(slideTimer, interval);
  
      slideTimer();
      return false;
    });
  });
  
  // ニュース　ハンバーガーショップ
  $(function () {
    $('.Toggle').click(function () {
      $(this).toggleClass('active');

      if ($(this).hasClass('active')) {
        $('.NavMenu').addClass('active'); //クラスを付与
      } else {
        $('.NavMenu').removeClass('active'); //クラスを外す
      }
    });
  });

  $(function() {
    let $window = $(window);

    $('.content').each(function(index) {
        let $self = $(this);
        let offsetCoords = $self.offset();

        $(window).scroll(function() {
            if (($window.scrollTop() + $window.height()) > offsetCoords.top && ((offsetCoords.top + $self.height()) > $window.scrollTop())) {
                let yPos = -($window.scrollTop() / 8);
                if ($self.attr('id') != 'ipa') {
                    yPos += 126;
                }
                let coords = '50%' + yPos + 'px';
                $self.css('backgroundPosition', coords);

                $('.sprite', $self).each(function(index) {
                    let $sprite = $(this);
                    let yPos = -($window.scrollTop() / $sprite.data('speed')) + $sprite.data('offsety');
                    $sprite.css('top', yPos);
                });
            }
        });
    });
});


function fadeAnime(){

  // ふわっ
  $('.fadeUpTrigger').each(function(){ //fadeUpTriggerというクラス名が
    var elemPos = $(this).offset().top-20;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('fadeUp');// 画面内に入ったらfadeUpというクラス名を追記
    }else{
    $(this).removeClass('fadeUp');// 画面外に出たらfadeUpというクラス名を外す
    }
    });
}

// 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function (){
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
  // $(window).on('load', function(){
  //   fadeAnime();/* アニメーション用の関数を呼ぶ*/
  // });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
// 'use strict';

// const agree = Cookies.get('cookie-agree');
// if(agree === 'yes') {
//     console.log('クッキーを確認しました');
// } else {
//     console.log('クッキーを確認できません');
//     document.getElementById('agreebtn').onclick = function() {
//         Cookies.set('cookie-agree', 'yes', {expires: 7});
//     };
// }

// // クッキー削除（テスト用）
// document.getElementById('testbtn').onclick = function() {
//     Cookies.remove('cookie-agree');
// };

