<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/gallery.css">
<main>

  <div class="gallery_container">
    <div class="gallery_no flex-center mb-20">
      <span class="arial f-12 block">No.2</span>
    </div>
    <h2 class="f-20 block mb-40">
      ゆるミニマリストが憧れる白い家
    </h2>
    <div class="detial_wrap mb-30">
      <p class="detail f-14 mb-20 block"><span class="title block">場所</span><span class="slash">/</span><span>松山市</span></p>
      <p class="detail f-14 mb-20 block"><span class="title block">ブランド</span><span class="slash">/</span><span>PlusMe</span></p>
      <p class="detail f-14 mb-20 block"><span class="title block">建物</span><span class="slash">/</span><span>2階建</span></p>
      <p class="detail f-14 mb-20 block"><span class="title block">間取り</span><span class="slash">/</span><span>4LDK</span></p>
      <p class="detail f-14"><span class="title block">建物面積</span><span class="slash">/</span><span>〇〇m&sup2</span></p>
    </div>
    <div class="img_wrap">
      <div class="img_item">
        <img class="img-cover" src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_img.png" alt="">
      </div>
      <div class="img_item">
        <img class="img-cover" src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_img.png" alt="">
      </div>
      <div class="img_item">
        <img class="img-cover" src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_img.png" alt="">
      </div>
      <div class="img_item">
        <img class="img-cover" src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_img.png" alt="">
      </div>
      <div class="img_item">
        <img class="img-cover" src="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_img.png" alt="">
      </div>
    </div>

    <a href="">
        <div class="more_button mxc">
          <div class="arrow_img">
            <img class="img-contain" src="<?php echo get_template_directory_uri(); ?>/img/news/news_arrow.png" alt="">
          </div>
          <span class="f-20 block white arial lh1">Back</span>
        </div>
      </a>
  </div>

</main>
<?php get_footer(); ?>