<?php
/*
Template Name: archive-blog
*/
?>
<?php get_header(); ?>
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
<section id="p-blogContents">
<h2>Blog</h2>
<ul>
<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php
        $cat = get_the_category();
        $catid = $cat[0]->cat_ID; // ID
        $catname = $cat[0]->name; // カテゴリ名
        $catslug = $cat[0]->category_nicename; // カテゴリスラッグ名
        $link = get_category_link($catid); // カテゴリURL
    ?>
    <li class="news-inner">
        <time class="news-time"><?php echo get_the_date('Y/m/d'); ?></time>
        <a class="category" href="<?php echo $link; ?>"><?php echo $catname; ?></a>
        <p class="news-text">
            <a class="news-link" href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
        </p>
    </li>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else: ?>
    <!-- 投稿が無い場合の処理 -->
    <?php endif; ?>
</ul>

</section>
</main>
<?php get_footer(); ?>