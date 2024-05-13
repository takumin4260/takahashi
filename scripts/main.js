$('.hide-text').hide();
$(".readmore").on("click", function() {
    $(this).toggleClass("on-click");
    $(this).prev().slideToggle();
});

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

//スクロール時のヘッダーの色表示制御
$(function () {
  // `fv_container` がページに存在するか確認
  if ($('.fv_container').length > 0) {
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
  }else{
    $(".common").addClass("displayOn");
  }
});

const swiper = new Swiper(".swiper",{
  loop: true, //繰り返しをする
  centeredSlides: true, //アクティブなスライドを中央に表示
  slidesPerView: 1, //スライダーコンテナにスライドを3枚同時表示
  speed: 600, //スライドの推移時間を600msに
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
  breakpoints: {
    769: { // 768px以上の画面幅で適用
      slidesPerView: 3 // スライダーコンテナにスライドを3枚同時表示
    }
  }
});
