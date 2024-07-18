<?php
/*
Template Name: about-us
*/
?>
<?php get_header(); ?>
<main>
  <section id="l-internalTop">
    <div class="l-internalTop__ornamentLeft">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/about-us/ornamentLeft.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/ornamentLeft.png" alt="">
      </picture>
    </div>
    <div class="l-internalTop__ornamentRight">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/about-us/ornamentRight.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/ornamentRight.png" alt="">
      </picture>
    </div>
    <h1 class="l-internalTop__title">
      <div class="l-internalTop__text">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/about-us/pageTitle.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/pageTitle.png" alt="">
        </picture>
      </div>
      <div class="l-internalTop__underLine">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/about-us/ornamentLine.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/ornamentLine.png" alt="当社のご案内">
        </picture>
      </div>
    </h1>
  </section>

  <section id="p-aboutUsContents">
    <div class="p-aboutUsContents__infoArea">
      <div class="p-aboutUsContents p-aboutUsContents__company">
        <div class="p-aboutUsContents__infoArea-title">
            <h2>会社概要</h2>
        </div>
        <div class="p-aboutUsContents__infoArea-box1">
          <dl class="p-aboutUsContents__item">
            <dt class="p-profile__list-head">社名</dt>
            <dd class="p-profile__list-body">株式会社ATAC</dd>
            <dt class="p-profile__list-head">住所</dt>
            <dd class="p-profile__list-body">〒292-0014千葉県木更津市高柳1-8-1</dd>
            <dt class="p-profile__list-head">TEL</dt>
            <dd class="p-profile__list-body">0438-41-6011</dd>
            <dt class="p-profile__list-head">FAX</dt>
            <dd class="p-profile__list-body">0438-41-6006</dd>
            <dt class="p-profile__list-head">E-mail</dt>
            <dd class="p-profile__list-body">info.6011@atac.jp</dd>
            <dt class="p-profile__list-head">定休日</dt>
            <dd class="p-profile__list-body">日曜・祝日（ご予約頂いた場合はＯＫです。）</dd>

            <dt class="p-profile__list-head">代表者</dt>
            <dd class="p-profile__list-body">青木　亮</dd>
            <dt class="p-profile__list-head">事業内容</dt>
            <dd class="p-profile__list-body">
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
        <div class="p-aboutUsContents p-aboutUsContents__infoArea-box2">
            <b>取扱保険会社</b>
            <ul class="l-footer__top-companyLogo">
            <a href="https://www.ms-ins.com/">
              <li>
              <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/sumitomokaijyo.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/sumitomokaijyo.png" alt="">
              </picture>
              </li>
            </a>
            <a href="https://www.msa-life.co.jp/">
              <li>
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/aioiseimei.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/aioiseimei.png" alt="">
                </picture>
              </li>
            </a>
            </ul>
        </div>
      </div>

      <div class="p-aboutUsContents p-aboutUsContents__policy">
        <div class="p-aboutUsContents__infoArea-title">
          <h2>経営方針</h2>
        </div>
          <ul class="p-aboutUsContents__infoArea-box1 p-aboutUsContents__policy-list">
            <li>
              <span>01</span>
              <p>保険業務知識はもとよりその周辺知識を貪欲に吸収し、真のプロを目指す</p>
            </li>
            <li>
              <span>02</span>
              <p>保険／金融のプロとしてお客さまの願いや価値観をしっかり聞き、お客さまが描く未来予想図の実現のお手伝いをする</p>
            </li>
            <li>
              <span>03</span>
              <p>常に、コンプライアンス遵守を最優先とし、お客さまの信頼に応えていく</p>
            </li>
            <li>
              <span>04</span>
              <p>自由に意見の云える明るいアットホームな職場環境を整備していく</p>
            </li>
            <li>
              <span>05</span>
              <p>地域社会から必要とされるライフプランナーを目指す</p>
            </li>
          </ul>
      </div>

      <div class="p-aboutUsContents p-aboutUsContents__philosophy">
        <div class="p-aboutUsContents__infoArea-title">
          <h2>経営理念</h2>
        </div>
        <div class="p-aboutUsContents__infoArea-box1 p-aboutUsContents__inner">
          <div class="p-aboutUsContents__inner-text1">
            <p>
            時には、良きアドバイザーとして… <br class="sp">時には、良きコンシェルジュとして… <br>
            お客様と信頼で結ばれた『人生のパートナー』であり続けたい。<br class="pc">
            ATACは、ライフプランニングから始まる、お客様への生涯サポートを安心とともにお届けします。
            </p>
          </div>
          <div class="p-aboutUsContents__inner-text2">
            <p class="p-aboutUsContents__inner-weightBold">保険は目に見えない“将来の保証”を買うもの。</p>
            <p>だから良い買い物をしたのかどうかは、いざその時になってみないとわかりません。 <br>
              保険を選ぶ時点で、重要となるポイントは『なぜこの保険設計になったのか？』ということを、<br class="pc">
              ご自身が十分納得できているかどうかではないでしょうか？
            </p>
          </div>
        </div>
        <div class="p-aboutUsContents__comment">
          <div class="p-aboutUsContents__comment-textBox">
            <p class="p-aboutUsContents__comment-title">我々にお任せ下さい！！</p>
            <p class="p-aboutUsContents__comment-sentence">ATACは、保険業務知識はもとより周辺知識を貧欲に吸収し、保険・金融のプロとして
                お客様の経済的変化を把握し、一人ひとりに適したアドバイスをさせていただきます。 
                万一の際の迅速な対応はもちろん、ご家族のゆく末までしっかりと見守り続けます。
            </p>
          </div>
          <div class="p-aboutUsContents__comment-illustBox">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/illust.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/illust.png" alt="">
            </picture>
          </div>
          
        </div>
      </div>
      <div class="p-aboutUsContents p-aboutUsContents__staff">
        <h1 class="l-staff__title">
          <div class="l-staff__text">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/about-us/staff_title.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/staff_title.png" alt="">
            </picture>
          </div>
          <div class="l-staff__underLine">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/about-us/ornamentLine.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/ornamentLine.png" alt="スタッフ紹介">
            </picture>
          </div>
        </h1>
      </div>
    </div>
  </section>


</main>
<?php get_footer(); ?>
