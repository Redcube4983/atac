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
        <div id="contents-inner">
            <div id="contents-left">
            <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php
                $cat = get_the_category();
                $catid = $cat[0]->cat_ID; // ID
                $catname = $cat[0]->name; // カテゴリ名
                $catslug = $cat[0]->category_nicename; // カテゴリスラッグ名
                $link = get_category_link($catid); // カテゴリURL
            ?>
            <div id="post" <?php post_class(); ?>>
                <div id="post_content_area">
                    <div id="post_title_area">
                        <h1><?php the_title(); ?></h1>
                        <time><?php echo get_the_date(); ?></time>
                    </div>
                    <div id="post_content">
                    <a class="category" href="<?php echo $link; ?>"><?php echo $catname; ?></a>
                    <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <!-- 投稿が無い場合の処理 -->
            <?php endif; ?>
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
