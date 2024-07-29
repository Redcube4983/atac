<?php
/*
Template Name: archive-blog
*/
?>
<?php get_header(); ?>
<section id="l-internalTop__blogArea">
<div class="l-internalTop__titleWrap">
    <h2>Blog</h2>
    <h1>ATAC通信</h1>
    <span>保険のアレコレ配信</span>
</div>
</section>
<section id="p-blogContents">
<h2 class="p-blogContents-title">
    <div class="p-blogContents-titleImg">
        <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/about-us/staff_title.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/staff_title.png" alt="スタッフ紹介">
        </picture>
    </div>
    <div class="p-blogContents-titleUnderline">
        <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/about-us/ornamentLine.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/ornamentLine.png" alt="">
        </picture>
    </div>
</h2>
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