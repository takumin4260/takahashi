//ハンバーガーメニュー制御
$(".openbtn").click(function () {
  $(this).toggleClass('active');
});

function fadeAnime() {
  //ふわっと動く
  $('.fadeUpTrigger').each(function () { 
    var elemPos = $(this).offset().top + 80; 
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('fadeUp');
    } else {
      $(this).removeClass('fadeUp');
    }
  });
  
  $('.fadeDownTrigger').each(function () { 
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('fadeDown');
      
    } else {
      $(this).removeClass('fadeDown');
      
    }
  });
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  fadeAnime();
});

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  fadeAnime();
});


//クリックすると画面の一番上までスクロール
const btn = document.getElementById("btn");

btn.addEventListener("click", () => {
  window.scroll({
    top: 0,
    behavior: "smooth",
  });
});

//ヘッダースクロール時の表示制御
$(function () {
  $(".onlytop").addClass("displayOn");

  $(window).on('scroll', function () {
    if ($('.fv_container').height() < $(this).scrollTop()) {
      $('.common').addClass('displayOn');
      $('.onlytop').removeClass('displayOn');
    } else {
      $('.common').removeClass('displayOn');
      $('.onlytop').addClass('displayOn');
    }
  });
});