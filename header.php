<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="#">
  <title>#</title>
  <!-- swiper読み込み -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/animation.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/header.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/footer.css">
  <!-- フォント読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body class="body">
  <header>
    <section class="header_container">
        <a href="">
      <div class="header_logo onlytop">
        <img src="<?php echo get_template_directory_uri(); ?>/img/header/header_icon_white.png" alt="">
      </div>
        </a>
        <a href="">
      <div class="header_logo common">
        <img src="<?php echo get_template_directory_uri(); ?>/img/header/header_icon_black.png" alt="">
      </div>
        </a>
      <div class="icon_wrap">
        <div class="openbtn onlytop">
          <span></span>
          <span></span>
        </div>
        <div class="openbtn common">
          <span></span>
          <span></span>
        </div>
        <a href="">
        <div class="insta_img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/header/icon_insta.png" alt="">
        </div>
        </a>
        <a href="">
        <div class="content_item flex-center fb block lh1 arial">
          <span>Contact</span>
        </div>
        </a>
      </div>
    </section>
  </header>