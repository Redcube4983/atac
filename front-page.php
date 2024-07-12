<?php
/*
Template Name: front-page
*/
?>
<?php get_header(); ?>
<main>
  <div class="p-main">
    <section id="p-firstView" class="c-contents">
      <div class="p-firstView-inner">
          <div class="p-firstView-inner--title_wrap">
            <span class="p-firstView-inner--subtitle">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/fv_subtxt.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/fv_subtxt.png" alt="人生の安心　保険の費用">
              </picture>
            </span>
            <h1 class="p-firstView-inner--title">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/fv_ttl.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/fv_ttl.png" alt="あなたの目線で、あなたの安心を一緒に考えます！">
              </picture>
            </h1>
          </div>

          <div class="p-firstView-inner--illust">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/illust.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/illust.png" alt="青ちゃん">
            </picture>
          </div>
      </div>
    </section>
    <div id="p-firstView__banner">
      <a target="_blank" href="https://mirai-compass.net/usr/kogyokuj/event/evtIndex.jsf" class="p-firstView__banner--bottomArea"></a>
    </div>
    <!-- <div class="p-background">
      <picture>
        <source srcset="images/front-page/main_background.webp" media="(min-width:768px)" type="image/webp" />
        <source srcset="images/front-page/main_background.png" media="(min-width:768px)" />
        <source srcset="images/front-page/main_background_sp.webp" type="image/webp" />
        <img src="images/front-page/main_background_sp.png" />
      </picture>
    </div> -->
    <section id="p-frontContents">
      <div class="p-main__ornament">

        <div class="p-main__ornament--parts p-main__ornament--sticky1">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/top_ornament_sticky1.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/top_ornament_sticky1.png" alt="">
          </picture>
        </div>
        <div class="p-main__ornament--parts p-main__ornament--sticky2">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/top_ornament_sticky2.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/top_ornament_sticky2.png" alt="">
          </picture>
        </div>
        <div class="p-main__ornament--parts p-main__ornament--sticky3">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/top_ornament_sticky3.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/top_ornament_sticky3.png" alt="">
          </picture>
        </div>
        <div class="p-main__ornament--parts p-main__ornament--iphone">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/top_ornament_iphone.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/top_ornament_iphone.png" alt="">
          </picture>
        </div>
        <div class="p-main__ornament--parts p-main__ornament--paper1">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/top_ornament_paper1.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/top_ornament_paper1.png" alt="">
          </picture>
        </div>
        <div class="p-main__ornament--parts p-main__ornament--paper2">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/top_ornament_paper2.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/top_ornament_paper2.png" alt="">
          </picture>
        </div>
      </div>
      <div class="p-frontContents__title">
        <span>お選びいただける理由</span>
        <h2 class="p-frontContents__title--img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/top_ttl_01.svg" alt="お客様の声">
          <div class="p-frontContents__title--underline">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/ornament_subttl_or.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/ornament_subttl_or.png" alt="">
            </picture>
          </div>
        </h2>
      </div>
        <ul class="p-contentsList">
          <li class="p-contentsList__box">
            <div class="p-contentsList__box--img">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/content_paper.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/content_paper.png" alt="">
              </picture>
            </div>
            <div class="p-contentsList__boxInner">
              <b class="p-contentsList__boxInner--name">管理組合法人　ＴＴＩ様</b>
              <div class="p-contentsList__middle">
                <div class="p-contentsList__middle--img">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/image1.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/image1.jpg" alt="">
                  </picture>
                </div>
                <div class="p-contentsList__middle--text">
                  <b>弊社受託保険</b>
                  <ul>
                    <li>●●保険</li>
                    <li>●●保険</li>
                    <li>●●保険</li>
                    <li>●●保険　他</li>
                  </ul>
                </div>
              </div>
              <p class="p-contentsList__bottom">「起こりえるリスク予想が的確で、何度も保険に助けられました」</p>
            </div>
          </li>

          <li  class="p-contentsList__box">
            <div class="p-contentsList__box--img">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/content_paper.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/content_paper.png" alt="">
              </picture>
            </div>
            <div class="p-contentsList__boxInner">
              <b class="p-contentsList__boxInner--name">メガバンクG執行役員　H様</b>
              <div class="p-contentsList__middle">
                <div class="p-contentsList__middle--img">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/image1.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/image1.jpg" alt="">
                  </picture>
                </div>
                <div class="p-contentsList__middle--text">
                  <b>弊社受託保険</b>
                  <ul>
                    <li>●●保険</li>
                    <li>●●保険</li>
                    <li>●●保険</li>
                    <li>●●保険　他</li>
                  </ul>
                </div>
              </div>
              <p class="p-contentsList__bottom">「とにかく対応が早いのと、保険提案内容が的確で分かりやすい」</p>
            </div>
          </li>
          <li class="p-contentsList__box">
            <div class="p-contentsList__box--img">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/content_paper.webp" type="image/webp">
                <img src=<?php echo get_template_directory_uri(); ?>/images/front-page/content_paper.png" alt="">
              </picture>
            </div>
            <div class="p-contentsList__boxInner">
              <b class="p-contentsList__boxInner--name">イベント会社経営　N様</b>
              <div class="p-contentsList__middle">
                <div class="p-contentsList__middle--img">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/image1.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/image1.jpg" alt="">
                  </picture>
                </div>
                <div class="p-contentsList__middle--text">
                  <b>弊社受託保険</b>
                  <ul>
                    <li>●●保険</li>
                    <li>●●保険</li>
                    <li>●●保険</li>
                    <li>●●保険　他</li>
                  </ul>
                </div>
              </div>
              <p class="p-contentsList__bottom">「いざという時に、こちら側に立って親身に動いてくれ本当に頼りになります」</p>
            </div>
          </li>
          <li  class="p-contentsList__box">
            <div class="p-contentsList__box--img">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/content_paper.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/content_paper.png" alt="">
              </picture>
            </div>
            <div class="p-contentsList__boxInner">
              <b class="p-contentsList__boxInner--name">子育て世代　Ｉ様</b>
              <div class="p-contentsList__middle">
                <div class="p-contentsList__middle--img">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/image1.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/image1.jpg" alt="">
                  </picture>
                </div>
                <div class="p-contentsList__middle--text">
                  <b>弊社受託保険</b>
                  <ul>
                    <li>●●保険</li>
                    <li>●●保険</li>
                    <li>●●保険</li>
                    <li>●●保険　他</li>
                  </ul>
                </div>
              </div>
              <p class="p-contentsList__bottom">「私たちの人生設計を一緒に考えてくれて、将来の安心を見守ってもらえます」</p>
            </div>
          </li>
          <li class="p-contentsList__box">
            <div class="p-contentsList__box--img">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/content_paper.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/content_paper.png" alt="">
              </picture>
            </div>
            <div class="p-contentsList__boxInner">
              <b class="p-contentsList__boxInner--name">イベント会社経営　N様</b>
              <div class="p-contentsList__middle">
                <div class="p-contentsList__middle--img">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/image1.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/image1.jpg" alt="">
                  </picture>
                </div>
                <div class="p-contentsList__middle--text">
                  <b>弊社受託保険</b>
                  <ul>
                    <li>●●保険</li>
                    <li>●●保険</li>
                    <li>●●保険</li>
                    <li>●●保険　他</li>
                  </ul>
                </div>
              </div>
              <p class="p-contentsList__bottom">「いざという時に、こちら側に立って親身に動いてくれ本当に頼りになります」</p>
            </div>
          </li>
          <li  class="p-contentsList__box">
            <div class="p-contentsList__box--img">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/content_paper.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/content_paper.png" alt="">
              </picture>
            </div>
            <div class="p-contentsList__boxInner">
              <b class="p-contentsList__boxInner--name">子育て世代　Ｉ様</b>
              <div class="p-contentsList__middle">
                <div class="p-contentsList__middle--img">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/image1.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/image1.jpg" alt="">
                  </picture>
                </div>
                <div class="p-contentsList__middle--text">
                  <b>弊社受託保険</b>
                  <ul>
                    <li>●●保険</li>
                    <li>●●保険</li>
                    <li>●●保険</li>
                    <li>●●保険　他</li>
                  </ul>
                </div>
              </div>
              <p class="p-contentsList__bottom">「私たちの人生設計を一緒に考えてくれて、将来の安心を見守ってもらえます」</p>
            </div>
          </li>
        </ul>
    </section>
  </div>
</main>
<?php get_footer(); ?>