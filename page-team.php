<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/team.css">
<main>
  <section class="estate_container">
    <h2 class="f-50 block mb-20 fm tc">Team</h2>
    <p class="f-16 block mb-70 tc">高橋建築の人と想い</p>
    <div class="president_wrap mb-60">
      <h3 class="f-22 block lh1 fm mb-60">社長・専務</h3>
      <div class="president_box">
        <div class="president_img">
          <img class="img-cover" src="<?php echo get_template_directory_uri(); ?>/img/top/lineup_room.png" alt="">
        </div>
        <div class="president_item">
          <h4 class="f-16 block lh1 fm mb-30">高橋裕和</h4>
          <p class="f-14 block lh2 fm">当社は、おかげさまで創業117年を迎えることができました。<br>
            これもひとえに地域の皆様のおかげと感謝しております。<br>
            初代より地域中心に一般住宅を業としている会社でございましたが、今は『宿泊業』『新築リフォーム』『分譲開発』『新築分譲』などの業態を中心に地域に貢献する会社を目指しております。<br>
            営業エリアは三重県全域にひろがっております。<br>
            高橋建築は創業以来『ものづくり』を通じお客様の『しあわせ』を追求し、常に時代の変化と共に地域に貢献し、お役に立てることをモットーに『使命感』を感じております。<br>
            これから弊社社員一丸となって『力を共有する』『地域に貢献する』会社の実現を目指していきます。<br>
            創業117年を迎えられた感謝とこれからの責任の重さを感じ更に邁進してまいります。<br>
            今後も引き続き高橋建築に対するご理解とご支援を賜わりますようお願い申し上げます。<br>
          </p>
        </div>
      </div>
    </div>
    <div class="staff_wrap">
      <h3 class="f-22 block lh1 fm mb-40">スタッフ</h3>
      <div class="staff_box">
        <div class="staff_item mb-70">
          <button class="popup_button tl" id="modalOpen">
            <div class="staff_img mb-20">
              <img class="img-cover" src="<?php echo get_template_directory_uri(); ?>/img/top/lineup_room.png" alt="">
            </div>
          </button>
          <div class="info">
            <p class="f-16 block lh2 mb-10">高橋隼<span class="slash">/</span><span>総務</span></p>
          </div>
        </div>
        <div class="staff_item mb-70">
          <a href="">
            <div class="staff_img mb-20">
              <img class="img-cover" src="<?php echo get_template_directory_uri(); ?>/img/top/lineup_room.png" alt="">
            </div>
            <div class="info">
              <p class="f-16 block lh2 mb-10">高橋裕太<span>/</span><span>ハウスアドバイザー</span></p>
              <p class="f-12 block lh1.5">
                一級建築士<br>
                宅地建物取引士<br>
                賃貸不動産経営管理士
              </p>
            </div>
          </a>
        </div>
        <div class="staff_item mb-70">
          <a href="">
            <div class="staff_img mb-20">
              <img class="img-cover" src="<?php echo get_template_directory_uri(); ?>/img/top/lineup_room.png" alt="">
            </div>
            <div class="info">
              <p class="f-16 block lh2 mb-10">鳥生安俊<span>/</span><span>ハウスアドバイザー</span></p>
            </div>
          </a>
        </div>
        <div class="staff_item mb-70">
          <a href="">
            <div class="staff_img mb-20">
              <img class="img-cover" src="<?php echo get_template_directory_uri(); ?>/img/top/lineup_room.png" alt="">
            </div>
            <div class="info">
              <p class="f-16 block lh2 mb-10">阿部元紀<span>/</span><span>現場管理</span></p>
              <p class="f-12 block lh1.5">一級建築士<br>
                一級建築施工管理技士
              </p>
            </div>
          </a>
        </div>
        <div class="staff_item mb-70">
          <a href="">
            <div class="staff_img mb-20">
              <img class="img-cover" src="<?php echo get_template_directory_uri(); ?>/img/top/lineup_room.png" alt="">
            </div>
            <div class="info">
              <p class="f-16 block lh2 mb-10">森本真人<span>/</span><span>積算・現場管理</span></p>
            </div>
          </a>
        </div>
        <div class="staff_item mb-70">
          <a href="">
            <div class="staff_img mb-20">
              <img class="img-cover" src="<?php echo get_template_directory_uri(); ?>/img/top/lineup_room.png" alt="">
            </div>
            <div class="info">
              <p class="f-16 block lh2 mb-10">長谷川千尋<span>/</span><br><span>営業アシスタント・広報・宿泊管理</span></p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <div id="easyModal" class="modal">
    <div class="modal_wrap">
      <div class="modal-content">
        <button class="close_outline modalClose">
          <div class="close_button">
            <img class="img-contain" src="<?php echo get_template_directory_uri(); ?>/img/team/team_close.png" alt="">
          </div>
        </button>
        <div class="modal-body">
          <div class="modal_talk mb-70">
            <h4 class="f-16 block lh1.5 mb-30">◆貴社で働く上で一番嬉しかった瞬間や満足感を教えていただけますか？</h4>
            <p class="f-14 block lh2">
              お客様の感謝の声をお聞きする瞬間が一番うれしいです。<br>
              総務であるためお客様と直接接する機会は少ないですが、<br>
              ライフラインの手続きや数字の管理などバックアップとして関わってきたお客様に「ありがとう」の一言をいただいた時はやりがいを感じます。
            </p>
          </div>
          <div class="modal_talk mb-70">
            <h4 class="f-16 block lh1.5 mb-30">◆あなたが高橋建築で印象に残っていることを教えてください</h4>
            <p class="f-14 block lh2">
              クラスベッソ伊勢の完成が印象に残っています。<br>
              手前味噌ではありますが、クラスベッソ伊勢は展示場としても宿泊施設としても素晴らしいものになっていると考えています。<br>
              一目で高橋建築の技術力を伝えることのできる施設を作れたことを誇りに思います。
            </p>
          </div>
          <div class="modal_talk mb-70">
            <h4 class="f-16 block lh1.5 mb-30">◆貴社がお客様に提供する家づくりの特長や価値は何だと思いますか？</h4>
            <p class="f-14 block lh2">
              サウナ・トレーラー・ガレージなど、お客様の趣味に寄りそった家づくりが特徴です。<br>
              暮らしに楽しさをプラスして提供できることが高橋建築で家を建てることの価値だと思います。
            </p>
          </div>
          <div class="modal_talk">
            <h4 class="f-16 block lh1.5 mb-30">◆最後に、お客様に向けてメッセージがあればお願いします。</h4>
            <p class="f-14 block lh2">
              家というのは生活の中で一番落ち着く場所だと思うので、<br>
              妥協のない本当に満足できる素敵な家づくりを一緒にしていきたいです！
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>