<?php
/*
Template Name: archive
*/
?>
<?php get_header(); ?>

<main>
    <section id="l-internalTop__blogArea">
        <div class="l-internalTop__titleWrap">
            <h2>Blog</h2>
            <h1>ATAC通信</h1>
            <span>保険のアレコレ配信（<?php if(is_category() || is_tag() || is_tax()): ?><?php echo single_term_title(); ?><?php elseif(is_post_type_archive()): ?><?php echo post_type_archive_title(); ?>
                <?php elseif(is_year()): ?><?php the_time("Y年"); ?><?php elseif(is_month()): ?><?php the_time("Y年n月"); ?><?php elseif(is_day()): ?><?php the_time("Y年n月j日") ?>
                <?php endif; ?>） 
            </span>
        </div>
    </section>
    <div id="breadcrumb">
        <ul class="breadcrumb_inner">
            <li class="breadcrumb"><a class="breadcrumb_link" href="/">TOP</a></li>
            <li class="breadcrumb"><a class="breadcrumb_link" href="/blog">ブログ一覧</a></li>
            <li class="breadcrumb">
            <?php if(is_category() || is_tag() || is_tax()): ?>
            <?php echo single_term_title('',false); ?>
            <?php elseif(is_post_type_archive()): ?>
                <?php echo post_type_archive_title('',false); ?>
            <?php elseif(is_year()): ?>
                <?php the_time("Y年"); ?>
            <?php elseif(is_month()): ?>
                <?php the_time("Y年n月"); ?>
            <?php elseif(is_day()): ?>
                <?php the_time("Y年n月j日") ?>
            <?php endif; ?>    
            </li>
        </ul>
    </div>
    </section>
    <section id="contents">
        <ul class="blog-list">
            <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
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
        </ul>
            <div class="pagination">
                <?php
                    $big = 9999999999;
                    $arg = array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'current' => max( 1, get_query_var('paged') ),
                        'total'   => $wp_query->max_num_pages
                    );
                    echo paginate_links($arg);
                    ?>
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
            <div class="p-categoryList">
                <div class="p-categoryList__title">
                    <h3>Category</h3><span>カテゴリー</span>
                </div>
                    <ul class="p-categoryList__category">
                    <?php wp_list_categories(array(
                        'title_li' =>'',//デフォルトで出力されるタイトルを非表示
                        'show_count=1')); //各カテゴリーに投稿数を表示する
                    ?>
                    </ul>
            </div>
        </div>
    </section>
    </main>
<?php get_footer(); ?>
