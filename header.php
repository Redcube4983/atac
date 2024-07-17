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

<?php
    // slug名のcssがあれば読み込む
    global $post;
    $slugName = $post->post_name;
    if (isset($slugName)) :
      if (is_file(get_theme_file_path('css/' . $slugName . '.css')) && file_exists(get_theme_file_path('css/' . $slugName . '.css'))) :
    ?>
        <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/' . $slugName . '.css'); ?>" />
  <?php
    endif;
  endif;
?>


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
<?php wp_head(); ?>
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
  <div class="l-header__toggle js-navSwitch">
    <div class="l-header__inner">
      <span class="l-header__inner-bar1"></span>
      <span class="l-header__inner-bar2"></span>
      <span class="l-header__inner-bar3"></span>
    </div>
    <p class="l-header__text js-navText">MENU</p>
  </div>
  <nav class="l-globalnav js-globalNav">
      <ul class="l-globalnav__inner">
        <li class="l-globalnav__list l-globalnav__list-parent">
          <div class="l-globalnav__block">
            <a class="l-globalnav__link" href="#">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/common/images/icon_ATAC.webp" type="image/webp">
                <img class="icon_img" src="<?php echo get_template_directory_uri(); ?>/common/images/icon_ATAC.png" alt="">
              </picture>
              <span>当社のご案内</span>
            </a>
            <span class="js-globalnavlinkArrow l-globalnav__link-arrow"></span>
          </div>
          <ul class="l-globalnav__child">
            <li class="l-globalnav__granchild">
              <a class="l-globalnav__link" href="#">BLOG</a>
            </li>
          </ul>
        </li>
        <li class="l-globalnav__list l-globalnav__list-single last">
          <a href="#">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/common/images/icon_insurance.webp" type="image/webp">
              <img class="icon_img" src="<?php echo get_template_directory_uri(); ?>/common/images/icon_insurance.png" alt="">
            </picture>
            <span>保険のご案内</span>
          </a>
        </li>
        <li class="l-globalnav__list l-globalnav__list-single last">
          <a href="#">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/common/images/icon_Q.webp" type="image/webp">
              <img class="icon_img" src="<?php echo get_template_directory_uri(); ?>/common/images/icon_Q.png" alt="">
            </picture>
            <span>よくあるご質問</span>
          </a>
        </li>
        <li class="l-globalnav__list l-globalnav__list-single last">
          <a href="#">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/common/images/icon_info.webp" type="image/webp">
              <img class="icon_img" src="<?php echo get_template_directory_uri(); ?>/common/images/icon_info.png" alt="">
            </picture>
            <span>お役立ち情報</span>
          </a>
        </li>
        <li class="l-globalnav__list l-globalnav__list-parent l-globalnav__list-pc">
          <div class="l-globalnav__block"><a class="l-globalnav__link l-globalnav__contact__link" href="#">ご相談はこちら</a><span class="js-globalnavlinkArrow l-globalnav__link--arrow"></span></div>
        </li>
      </ul>
  </nav>
  <!-- <div class="l-contactNav">
    <div class="l-contactNav__inner">
      <p>ご相談はこちら</p>
        <ul class="l-contactNav__list">
          <li>
            <a class="l-contactNav__link" href="#">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/common/images/icon_tel.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/icon_tel.png" alt="電話">
              </picture>
            </a>
          </li>
          <li>
            <a class="l-contactNav__link" href="#">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/common/images/icon_mail.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/icon_mail.png" alt="メール">
              </picture>
            </a>
          </li>
        </ul>
    </div>
  </div> -->
</div>
</header>
