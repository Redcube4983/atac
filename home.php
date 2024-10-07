<?php
/*
Template Name: home
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
        <li class="blog-inner">
                <?php
                    // カテゴリーのデータを取得
                    $cat = get_the_category();
                    $cat = $cat[0];
                ?>
                <div class="p-blogContents__blog-img">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(thumbnail); ?>
                    <?php else : ?>
                    <iframe src= <?php echo catch_post_movie(); ?> frameborder="0" allowfullscreen=""></iframe>
                    <img src= <?php echo catch_that_image(); ?> alt="" />
                    <?php endif ; ?>
                </div>
            <div class="p-blogContents__blog-linkBox">
                <h2 class="blog-title">
                    <?php echo get_the_title(); ?>
                </h2>
                <div class="date-box">
                    <time class="blog-date"><?php the_time('Y/m/d'); ?></time>
                    <span class="category <?php echo $cat->slug; ?>"><?php echo $cat->cat_name;?></span>
                </div>
                <p class="blog-text">
                <?php
                    $remove_array = ["\r\n", "\r", "\n", " ", " "];
                    $content = wp_trim_words(strip_shortcodes(get_the_content()), 30, '…' );
                    $content = str_replace($remove_array, '', $content);
                    echo $content;
                    ?>
                </p>
                    <div class="p-blogContents__blog-button">
                        <a href="<?php the_permalink(); ?>" class="blog-archive-link"><span>続きを見る</span></a>
                    </div>
            </div>
        </li>
        <?php endwhile; ?>
        <?php else: ?>
        <!-- 投稿が無い場合の処理 -->
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </ul>
    <!-- ページネーションの作成 -->
        <div class="pagination">
            <?php
            // グローバル変数$wp_queryを宣言
            global $wp_query;

            // ページネーションを作成し出力
            echo paginate_links(array(
                // ページネーションのカスタマイズ
                'mid_size' => 1, // 現在のページ番号の両端にいくつ数字を表示するか
                'prev_next' => false, // 「前へ」「次へ」を表示するか
                'current' => max(1, get_query_var('paged')), // 現在のページ番号
                'total' => $wp_query -> max_num_pages // 全ページ数
            ));
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
