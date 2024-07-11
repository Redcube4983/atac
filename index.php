<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width,initial-scale=1" name="viewport">
<title>ATAC</title>
<meta name="format-detection" content="telephone=no,address=no,email=no">

<!--404ページ-->
<!--<meta http-equiv="refresh" content="10 ; URL=/">-->

<!--ファビコン-->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/common/images/logo.svg">

<!--スタイルシート-->
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">

<!--front-page-->
<?php if( is_front_page() ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css">
<?php else: ?>
<?php endif; ?>
<!--jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--fontawesome-->
<!--<script src="https://kit.fontawesome.com/f01c716632.js"></script>-->

<!--googlefont-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-xxxxxxxxxx-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-xxxxxxxxxx-1');
</script>

</head>

<body>
<div class="wrapper">
<header class="l-header">
<h1 class="l-header__title">
  <a href="/" class="l-header__link">
    <img class="l-header__sitelogo" src="<?php echo get_template_directory_uri(); ?>/common/images/logo.svg" alt="総合保険代理店 ATAC">
  </a>
</h1>
<!--下層ページ
<div class="l-header__title">
  <a href="/" class="l-header__title__link">
    <img class="l-header__title__sitelogo" src="common/images/kogyokusha_logo.svg" alt="攻玉社 中学校・高等学校">
  </a>
</div>
-->
<div class="l-header__right">
<nav class="l-subnav">
  <div class="l-subnav__inner">
    <p>ご相談はこちら</p>
      <ul class="l-subnav__list">
        <li>
          <a class="l-subnav__link" href="#">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/common/images/icon_tel.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/common/images/icon_tel.png" alt="電話">
            </picture>
          </a>
        </li>
        <li
          <a class="l-subnav__link" href="#">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/common/images/icon_mail.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/common/images/icon_mail.png" alt="メール">
            </picture>
          </a>
        </li>
      </ul>
    </div>
</nav>
<div class="l-header__toggle js-navSwitch">
  <div class="l-header__inner">
    <span class="l-header__inner--bar1"></span>
    <span class="l-header__inner--bar2"></span>
    <span class="l-header__inner--bar3"></span>
  </div>
  <p class="l-header__text js-navText">MENU</p>
</div>
<nav class="l-globalnav js-globalNav">
    <ul class="l-globalnav__inner">
      <li class="l-globalnav__list l-globalnav__list--parent">
        <div class="l-globalnav__block">
          <a class="l-globalnav__link" href="#">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/common/images/icon_ATAC.webp" type="image/webp">
              <img class="icon_img" src="<?php echo get_template_directory_uri(); ?>/common/images/icon_ATAC.png" alt="">
            </picture>
            <span>当社のご案内</span>
          </a>
          <span class="js-globalnavlinkArrow l-globalnav__link--arrow"></span>
        </div>
        <ul class="l-globalnav__child">
          <li class="l-globalnav__granchild">
            <a class="l-globalnav__link" href="#">BLOG</a>
          </li>
        </ul>
      </li>
      <li class="l-globalnav__list l-globalnav__list--single last">
        <a href="#">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/common/images/icon_insurance.webp" type="image/webp">
            <img class="icon_img" src="<?php echo get_template_directory_uri(); ?>/common/images/icon_insurance.png" alt="">
          </picture>
          <span>保険のご案内</span>
        </a>
      </li>
      <li class="l-globalnav__list l-globalnav__list--single last">
        <a href="#">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/common/images/icon_Q.webp" type="image/webp">
            <img class="icon_img" src="<?php echo get_template_directory_uri(); ?>/common/images/icon_Q.png" alt="">
          </picture>
          <span>よくあるご質問</span>
        </a>
      </li>
      <li class="l-globalnav__list l-globalnav__list--single last">
        <a href="#">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/common/images/icon_info.webp" type="image/webp">
            <img class="icon_img" src="<?php echo get_template_directory_uri(); ?>/common/images/icon_info.png" alt="">
          </picture>
          <span>お役立ち情報</span>
        </a>
      </li>
      <li class="l-globalnav__list l-globalnav__list--parent l-globalnav__list--pc">
        <div class="l-globalnav__block"><a class="l-globalnav__link l-globalnav__contact__link" href="#">ご相談はこちら</a><span class="js-globalnavlinkArrow l-globalnav__link--arrow"></span></div>
      </li>
    </ul>
</nav>
</div>
</header>
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
<footer class="l-footer">
    <section class="l-footer__contact p-frontContents">
      <div class="l-contactBox">
        <div class="p-frontContents__title">
          <h2 class="p-frontContents__title--img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/top_ttl_02.svg" alt="今すぐ相談">
            <div class="p-frontContents__title--underline">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/ornament_subttl_ye.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/images/front-page/ornament_subttl_ye.png" alt="">
              </picture>
            </div>
          </h2>
        </div>
        <ul class="l-contact">
          <li class="l-contact__link">
            <a class="l-contact__link--inner" href="/contact/">
              <b>メールでのお問い合わせ</b>
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_mail_white.svg" alt="" class="icon">
            </a>
          </li>
          <li class="l-contact__link">
            <a class="l-contact__link--inner" href="tel:000-1234-5678">
              <b>電話でのお問い合わせ</b>
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_tel_white.svg" alt="" class="icon">
            </a>
          </li>
        </ul>
      </div>
      <div class="l-footer__top">
        <div class="l-footer__top--inner">
          <div class="l-footer__top--address">
            <img class="" src="<?php echo get_template_directory_uri(); ?>/common/images/logo.svg" alt="総合保険代理店 ATAC">
            <span class="">〒292-0014千葉県木更津市高柳1-8-1</span>
          </div>
          <ul class="l-footer__top--link">
            <li>
              <a href="">
                <b>Blog</b>
                <p><span>ATAC通信</span>　保険のアフレコ配信中！</p>
              </a>
            </li>
            <li>
              <a href="">
                <b>Face book</b>
                <p><span>ATAC通信</span>　青木の日常ブログ</p>
              </a>
            </li>
            <li>
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
            </li>
          </ul>
        </div>
      </div>
      <nav class="l-footernav">
        <ul class="l-footernav__inner">
          <li class="l-footernav__inner__list">
              <ul class="l-footernav__inner__list--child">
                    <li class="l-footernav__list single first">
                      <div class="l-footernav__block"><a class="l-footernav__link" href="#">HOME</a></div>
                    </li>
              </ul>
          </li>
          <li class="l-footernav__list l-footernav__inner__list js-footerNav parent">
            <div class="l-footernav__block"><a class="l-footernav__link" href="#">当社のご案内</a><span class="js-linkArrow l-footernav__link--arrow"></span></div>
            <ul class="l-footernav__child">
              <li class="l-footernav__granchild">
                <a class="l-footernav__granchild--link" href="#">Blog</a>
              </li>
            </ul>
          </li>
          <li class="l-footernav__list l-footernav__inner__list">
            <div class="l-footernav__block"><a class="l-footernav__link" href="#">保険のご案内</a><span class="js-linkArrow l-footernav__link--arrow"></span></div>
          </li>
          <li class="l-footernav__list l-footernav__inner__list">
            <div class="l-footernav__block"><a class="l-footernav__link" href="#">よくあるご質問</a><span class="js-linkArrow l-footernav__link--arrow"></span></div>
          </li>
          <li class="l-footernav__list l-footernav__inner__list">
            <div class="l-footernav__block"><a class="l-footernav__link" href="#">お役立ち情報</a><span class="js-linkArrow l-footernav__link--arrow"></span></div>
          </li>
          <li class="l-footernav__inner__list">
              <ul class="l-footernav__inner__list--child">
                  <li class="l-footernav__list single">
                      <div class="l-footernav__block"><a class="l-footernav__link" href="#">ご相談/お問い合わせ</a></div>
                      <div class="l-footernav__block"><a class="l-footernav__link" href="#">個人情報保護法/勧誘方針</a></div>
                      <div class="l-footernav__block"><a class="l-footernav__link" href="#">業務運営方針</a></div>
                  </li>
              </ul>
          </li>
        </ul>
      </nav>
    </section>
    <p class="l-copyright">Copyright © KOGYOKUSHA GAKUEN, All rights reserved.</p>
  </footer>
  </div>
  <!--object fit images-->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/ofi.min.js"></script>
  <!--scrollreveal-->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/scrollreveal.min.js"></script>
  <!--swiper-->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/swiper.min.js"></script>
  <!--共通javascript-->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/common.js"></script>
  <!--各javascript-->
  <script>
  $(function() {
    var i = $(window).scrollTop();
      var headH = $('header').height();
        $('main').append('<div class="l-tagetTop "><a href="#" class="smooth"><span></span></a></div>');
      $('#tagetTop').css('display', 'none' );
      $(window).bind('scroll load',function(){
          var i = $(window).scrollTop();
          var headH = $('header').height();
      var footH = $('footer').height();
      var documentHeight = $('body').height();
      var windowHeight = window.innerHeight;
          var keyvisualH = $('#first_view').height();
      var tagetTop = $('#tagetTop').height();
      var footBottom = $('#footer-bottom').height(); 
      var contact = $('#contact').height(); 
      var main = $('main').height(); 
          if ( i >= keyvisualH ) {
              $('#tagetTop').fadeIn();
          }else {
              $('#tagetTop').fadeOut();
          }
      if ( i >= (keyvisualH - headH) ) {
        $('header').addClass("shadow");
          }else {
        $('header').removeClass("shadow");
          }
      if ((documentHeight - (footH + tagetTop + windowHeight)) < i) {
        $('#tagetTop').removeClass("fixed");
      }else{
        $('#tagetTop').addClass("fixed"); 
      }
      if (i >= (main - contact)) {
        $('#float_menu').fadeOut();
      }else{
        $('#float_menu').fadeIn();
      }
      });
      
      var header = $('header');
      $('.smooth').click(function(){
        var gap = header.outerHeight();
        var speed = 500;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? "html" : href);
        var position = target.offset().top - gap;
        $("html, body").animate({ scrollTop: position }, speed, "swing");
        return false;
      });
      
  });
      $(window).on('load resize', function() {  
      const setFillHeight = () => {
        const vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
      }
      let vw = window.innerWidth; 
      window.addEventListener('resize', () => {
        if (vw === window.innerWidth) {
        // 画面の横幅にサイズ変動がないので処理を終える
          return;
        }
        // 画面の横幅のサイズ変動があった時のみ高さを再計算する
        vw = window.innerWidth;
        setFillHeight();
      });
      // 初期化
      setFillHeight();
      });
  $(document).ready(function() {
    var list = $('#breadcrumb ul').innerWidth();
    var panNavi = $('#breadcrumb').innerWidth();
    var scrollLeft = list - panNavi;
    $('#breadcrumb ul').scrollLeft(list - scrollLeft);
  });
  </script>
  </body>
  </html>