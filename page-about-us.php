<?php
/*
Template Name: about-us
*/
?>
<?php get_header(); ?>
<main>
  <section id="first_view">
    <div id="first_view_text_area">
        <img class="abut_image01" src="images/about-page/about-window.png" alt="画像1">
        <img class="abut_title" src="images/about-page/title.png" alt="当社のご案内">
        <img class="abut_image02" src="images/about-page/about-sofa.png" alt="画像2">
    </div>
  </section>




  <section id="p-aboutUsContents">
    <div class="p-aboutUsContents__infoArea">
      <div class="p-aboutUsContents__company">
        <div class="p-aboutUsContents__infoArea--title">
          <h2>会社概要</h2>
        </div>
        <div class="p-aboutUsContents__infoArea--box1">
          <dl class="p-aboutUsContents__item">
            <dt class="p-profile__list__head">社名</dt>
            <dd class="p-profile__list__body">株式会社ATAC</dd>
            <dt class="p-profile__list__head">住所</dt>
            <dd class="p-profile__list__body">〒292-0014千葉県木更津市高柳1-8-1</dd>
            <dt class="p-profile__list__head">TEL</dt>
            <dd class="p-profile__list__body">0438-41-6011</dd>
            <dt class="p-profile__list__head">FAX</dt>
            <dd class="p-profile__list__body">0438-41-6006</dd>
            <dt class="p-profile__list__head">E-mail</dt>
            <dd class="p-profile__list__body">info.6011@atac.jp</dd>
            <dt class="p-profile__list__head">定休日</dt>
            <dd class="p-profile__list__body">日曜・祝日（ご予約頂いた場合はＯＫです。）</dd>
            <dt class="p-profile__list__head">代表者</dt>
            <dd class="p-profile__list__body">青木　亮</dd>
            <dt class="p-profile__list__head">事業内容</dt>
            <dd class="p-profile__list__body">
              <ol class="p-numberlist">
                <li class="p-numberlist__item">
                  各種保険代理業（各種生命保険・各種損害保険）
                </li>
                <li class="p-numberlist__item">
                  各種セミナー講師派遣（事業継承問題・相続問題・資産運用など）
                </li>
                <li class="p-numberlist__item">
                  ファイナンシャルプランナーによる個別相談会
                </li>
              </ol>
            </dd>
          </dl>
        </div>
        <div class="p-aboutUsContents__infoArea--box2">
          <a href="">
            <b>取扱保険会社</b>
            <ul class="l-footer__top--companyLogo">
              <li>
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/aioiseimei.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/aioiseimei.png" alt="">
                </picture>
              </li>
              <li>
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/sumitomokaijyo.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/sumitomokaijyo.png" alt="">
                </picture>
              </li>
            </ul>
          </a>
        </div>
      </div>

      <div class="p-aboutUsContents__policy">
        <div class="p-aboutUsContents__infoArea--title">
          <h2>経営方針</h2>
        </div>
          <ul class="p-aboutUsContents__infoArea--box1 p-aboutUsContents__policy--list">
            <li>
              <span class="">01</span>
              <p class="">保険業務知識はもとよりその周辺知識を貪欲に吸収し、真のプロを目指す</p>
            </li>
            <li>
              <span class="">02</span>
              <p class="">保険／金融のプロとしてお客さまの願いや価値観をしっかり聞き、お客さまが描く未来予想図の実現のお手伝いをする</p>
            </li>
            <li>
              <span class="">03</span>
              <p class="">常に、コンプライアンス遵守を最優先とし、お客さまの信頼に応えていく</p>
            </li>
            <li>
              <span class="">04</span>
              <p class="">自由に意見の云える明るいアットホームな職場環境を整備していく</p>
            </li>
            <li>
              <span class="">05</span>
              <p class="">地域社会から必要とされるライフプランナーを目指す</p>
            </li>
          </ul>
      </div>

      <div class="p-aboutUsContents__philosophy">
        <div class="p-aboutUsContents__infoArea--title">
          <h2>経営方針</h2>
        </div>
      </div>
    </div>





  </section>


  <div id="l-management-content">
    <div class="management-content-innner">
      <img class="policy" src="images/about-page/about-fusen.png">
      <h2 class="p-page__lead">経営方針</h2>

      <div class="p-management__item">
        <div class="p-management__inner">
          <div class="p-management__number">
            <div class="p-management__num--round">
              <span class="num">01</span>
            </div>
            
          </div>
          <div class="p-management__number">
            <div class="p-management__num--round">
              <span class="num">02</span>
            </div>
            <p class="p-management__lead">
              
            </p>
          </div>
          <div class="p-management__number">
            <div class="p-management__num--round">
              <span class="num">03</span>
            </div>
            <p class="p-management__lead">
              
            </p>
          </div>
          <div class="p-management__number">
            <div class="p-management__num--round">
              <span class="num">04</span>
            </div>
            <p class="p-management__lead">
              
            </p>
          </div>
          <div class="p-management__number">
            <div class="p-management__num--round">
              <span class="num">05</span>
            </div>
            <p class="p-management__lead">
              地域社会から必要とされるライフプランナーを目指す
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
