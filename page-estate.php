<?php get_header(); ?>
<!--上のget headerの部分で style.cssの読み込んでいるはずなのに反映されない。class名の指定の仕方が間違っているかを見てほしい
あとは全体的に、ここはこういう風にやった方がいいみたいなのがあったら教えてほしい。
特にcontents_wrapの部分
-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/estate.css">
<main>
    <section class="info">
        <div class="info_container">
            <div class="label_wrap ready_built">
                <span class="f-14 block lh1">建売</span>
            </div>
            <div class="contents_wrap">
                <div class="info_box">
                    <h2 class="f-21 block mb-3">伊勢の平屋</h2>
                    <div class="tag_item">
                        <p class="f-12 block mr-13">#<span>平屋</span></p>
                        <p class="f-12 block mr-13">#<span>白い家</span></p>
                        <p class="f-12 block mr-13">#<span>ミニマル</span></p>
                    </div>
                    <div class="info_item">
                        <div class="info_category address">
                            <p class="category f-12 block block">物件概要</p>
                        </div>
                        <div class="info_content">
                            <span class="f-12">土地＋建物</span>
                        </div>
                    </div>
                    <div class="info_item">
                        <div class="info_category">
                            <p class="category f-12 block block">物件概要</p>
                        </div>
                        <div class="info_content">
                            <span class="f-12">土地＋建物</span>
                        </div>
                    </div>
                    <div class="info_item">
                        <div class="info_category">
                            <p class="category f-12 block block">土地面積</p>
                        </div>
                        <div class="info_content">
                            <span class="f-12">②273.74㎡（82.81坪）</span>
                        </div>
                    </div>
                    <div class="info_item">
                        <div class="info_category">
                            <p class="category f-12 block">建物面積</p>
                        </div>
                        <div class="info_content">
                            <span class="f-12">②273.74㎡（82.81坪）</span>
                        </div>
                    </div>
                    <div class="info_item">
                        <div class="info_category">
                            <p class="category f-12 block">価格</p>
                        </div>
                        <div class="info_content">
                            <span class="f-12">②2,240万円</span>
                        </div>
                    </div>
                    <div class="info_item">
                        <div class="info_category">
                            <p class="category f-12 block">交通</p>
                        </div>
                        <div class="info_content">
                            <span class="f-12">伊勢電鉄「〇〇駅」徒歩10分</span>
                        </div>
                    </div>
                    <div class="info_item_bigger">
                        <div class="info_content">
                            <span class="f-12">
                                砥部中学校まで徒歩2分。<br>
                                落ち着いた住環境でビジネスにレジャーにアクセス良好。<br>
                                伊予郡砥部町千足で新規分譲地が登場。<br>
                                【全3区画】<br>
                                伊予郡砥部町千足に新規分譲地が登場しました。<br>
                                全区画60坪以上で広々とした敷地が特長。<br>
                                役場や公園、温泉施設、商業施設なども近く、利便性の良い住宅地です。<br>
                                小学校、中学校が近く通学も安心です。
                            </span>
                        </div>
                    </div>
                    <div class="info_item_bigger">
                        <div class="info_category">
                            <p class="f-12 block mb-14">物件概要</p>
                        </div>
                        <ul>
                            <span class="f-12">
                                ●水道：公営水道<br>
                                ●下水道：合併浄化槽<br>
                                ●ガス：プロパンガス<br>
                                ●地目：宅地<br>
                                ●建ぺい率：60％<br>
                                ●負担金：水道負担金300,000円・固定資産税日割分・合併浄化槽申請費用<br>
                                ●用途地域：都市計画区域外<br>
                                ●容積率：200％<br>
                                ●校区：宮内小学校・砥部中学校
                            </span>
                        </ul>
                    </div>

                </div>
                <div class="img_box">
                    <!--画像が変に切れないようにするためにcontainにしているけど、左寄せにしたい-->
                    <div class="img_item">
                        <img class="img-contain" src="<?php echo get_template_directory_uri(); ?>/img/estate/estate_house.png" alt="">
                    </div>
                    <div class="img_item">
                        <img class="img-contain" src="<?php echo get_template_directory_uri(); ?>/img/estate/estate_house_display.png" alt="">
                    </div>
                </div>
            </div>

        </div>
        <div class="image_container">
            <p class="f-13 block mb-23">画像一覧</p>
            <div class="image_wrap">
                <div class="image_box">
                    <img class="img-contain" src="<?php echo get_template_directory_uri(); ?>/img/estate/estate_house_inner.png" alt="">
                </div>
                <div class="image_box">
                    <img class="img-contain" src="<?php echo get_template_directory_uri(); ?>/img/estate/estate_house_inner.png" alt="">
                </div>
                <div class="image_box">
                    <img class="img-contain" src="<?php echo get_template_directory_uri(); ?>/img/estate/estate_house_inner.png" alt="">
                </div>
                <div class="image_box">
                    <img class="img-contain" src="<?php echo get_template_directory_uri(); ?>/img/estate/estate_house_inner.png" alt="">
                </div>
                <div class="image_box">
                    <img class="img-contain" src="<?php echo get_template_directory_uri(); ?>/img/estate/estate_house_inner.png" alt="">
                </div>
                <div class="image_box">
                    <img class="img-contain" src="<?php echo get_template_directory_uri(); ?>/img/estate/estate_house_inner.png" alt="">
                </div>
                <div class="image_box">
                    <img class="img-contain" src="<?php echo get_template_directory_uri(); ?>/img/estate/estate_house_inner.png" alt="">
                </div>
                <div class="image_box">
                    <img class="img-contain" src="<?php echo get_template_directory_uri(); ?>/img/estate/estate_house_inner.png" alt="">
                </div>
            </div>
        </div>
        <div class="contact_button mxc">
            <span class="f-20 block white arial lh1">Contact</span>
            <div class="arrow_img">
                <img class="img-contain" src="<?php echo get_template_directory_uri(); ?>/img/estate/news_arrow.png" alt="">
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>