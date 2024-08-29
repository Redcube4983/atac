<?php
/*
Template Name: archive-blog
*/
?>
<?php get_header(); ?>
<main>
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
    <ul class="blog-list">
    <?php
    $args = array(
                'post_type' => 'blog',
                'post_status' => 'publish',// 公開済の投稿を指定
                'paged' => $paged, 
                'posts_per_page' => 10 // 投稿件数の指定
                );
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $the_query = new WP_Query($args);
            if($the_query->have_posts()):?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <li class="blog-inner">
            <h2 class="blog-title">
                <?php echo get_the_title(); ?>
            </h2>
            <div class="date-box">
            <?php
            // カテゴリーのデータを取得
            $cat = get_the_category();
            $cat = $cat[0];
            $link = get_category_link($catid); // カテゴリURL
            ?>
                <time class="blog-date"><?php echo get_the_date('Y/m/d'); ?></time>
                <span class="category <?php echo $cat->slug; ?>"><?php echo $cat->cat_name;?></span>
            </div>
            <p class="blog-text">
            <?php
                $remove_array = ["\r\n", "\r", "\n", " ", "　"];
                $content = wp_trim_words(strip_shortcodes(get_the_content()), 4, '…' );
                $content = str_replace($remove_array, '', $content);
                echo $content;
                ?>
            </p>
            <div class="p-blogContents__blog-linkBox">
                <div class="p-blogContents__blog-img">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <?php else : ?>
                    <img src= <?php echo catch_that_image(); ?> alt="" />
                    <?php endif ; ?>
                </div>
                <div class="p-blogContents__blog-button">
                    <a href="<?php the_permalink(); ?>" class="blog-archive-link"><span>続きを見る</span></a>
                </div>
            </div>
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