<?php
/*
Template Name: single-blog
*/
?>
<?php get_header(); ?>
<main>
    <div id="contents-inner">
        <div id="contents-left">
            <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
            <div id="post" <?php post_class(); ?>>
                <div id="post_content_area">
                    <div id="post_title_area">
                        <h1><?php the_title(); ?></h1>
                        <time><?php echo get_the_date(); ?></time>
                    </div>
                    <div id="post_content">
                    <a class="category" href="<?php echo $link; ?>"><?php echo $catname; ?></a>
                    <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <!-- 投稿が無い場合の処理 -->
            <?php endif; ?>
            <div class="paging">
            <?php if (get_previous_post()):?>
                <div class="prev">≪<?php previous_post_link('%link','%title',TRUE); ?></div>
            <?php endif; ?>
            <?php if (get_next_post()):?>
                <div class="next"><?php next_post_link('%link','%title',TRUE); ?>≫</div>
            <?php endif; ?>
            </div>
        </div>
        <div id="post_archive_area">
                <h3>年別アーカイブ</h3>
                <ul class="post_archive">
                <?php // 年別アーカイブのリストを出力
                wp_get_archives( array(
                'type' => 'yearly'
                ) ); ?>
                </ul>
        </div>
    </div>
</main>
<?php get_footer(); ?>