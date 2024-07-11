
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