<?php
/*
Template Name: faq
*/
?>
<?php get_header(); ?>
<main>
  <section id="l-internalTop">
    <div class="l-internalTop__ornamentLeft">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/faq/glass.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/images/faq/glass.png" alt="">
      </picture>
    </div>
    <div class="l-internalTop__ornamentRight">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/faq/pen.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/images/faq/pen.png" alt="">
      </picture>
    </div>
    <div class="l-internalTop__ornamentRight2">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/faq/print.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/images/faq/print.png" alt="">
      </picture>
    </div>
    <h1 class="l-internalTop__title">
      <div class="l-internalTop__text">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/faq/pageTitle.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/images/faq/pageTitle.png" alt="よくあるご質問">
        </picture>
      </div>
      <div class="l-internalTop__underLine">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/faq/ornamentLine.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/images/faq/ornamentLine.png" alt="">
        </picture>
      </div>
    </h1>
  </section>

  <section id="p-faqContents">
    <div class="p-faqContents__faqArea">
      <div class="c-contentsLayout">
        <div class="p-faqContents__faqBox">
            <div class="p-faqContents__faqBox-title">
                <p>ここから先は、<br>
                三井住友海上火災保険会社のホームページに移動します。</p>
            </div>
            <div class="p-faqContents__faqBox-btn">
                <a href="https://www.faq.ms-ins.com/app/home" rel="noopener noreferrer" target="_blank">
                <b>上記サイトへ移動する</b>
                </a>
            </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>