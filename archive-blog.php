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
    <div id="breadcrumb">
        <ul class="breadcrumb_inner">
        <li class="breadcrumb"><a class="breadcrumb_link" href="/">TOP</a></li>
        <li class="breadcrumb">ブログ一覧</li>
        </ul>
    </div>
<section id="p-blogContents">
<h2 class="p-blogContents-title">
    <div class="p-blogContents-titleImg">
        <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/blog/blog_title.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/blog_title.png" alt="ブログ一覧">
        </picture>
    </div>
    <div class="p-blogContents-titleUnderline">
        <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/about-us/ornamentLine.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/ornamentLine.png" alt="">
        </picture>
    </div>
</h2>
<ul class="news-box">
<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
            'post_type' => 'post',
            'post_status' => 'publish',// 公開済の投稿を指定
            'paged' => $paged, 
            'posts_per_page' => 10 // 投稿件数の指定
            );
        $the_query = new WP_Query($args);
        if($the_query->have_posts()):?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

    <li class="news-inner">
        <?php
          // カテゴリーのデータを取得
          $cat = get_the_category();
          $cat = $cat[0];
        ?>
        <time class="news-time"><?php echo get_the_date('Y/m/d'); ?></time>
        <span class="category <?php echo $cat->slug; ?>"><?php echo $cat->cat_name;?></span>
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