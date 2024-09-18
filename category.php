<?php
/**
* Template Name: category
*/
?>
<?php
    $current_category = single_cat_title('', false);
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
        <li class="breadcrumb"><a class="breadcrumb_link" href="/blog">ブログ一覧</a></li>
        <li class="breadcrumb"><?php echo $current_category; ?></li>
        </ul>
    </div>
	<div class="inner-container">
	<div id="inner-container">
		<div id="main" class="second_layer">
		<div class="right-wrap">
            <div class="ttl-area">
                <h2 class="page-ttl"><?php echo $current_category; ?></h2>
            </div>
            <div class="blog-list-warp">
                <ul>
                    <?php if (have_posts()): ?>
                    <?php while (have_posts()) : $the_query->the_post(); ?>
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
                                    $remove_array = ["\r\n", "\r", "\n", " ", "　"];
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
                </ul>
            </div>
        <?php endwhile; ?>
        <?php else: ?>
        <!-- 投稿が無い場合の処理 -->
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>
</main>
<?php get_footer(); ?>