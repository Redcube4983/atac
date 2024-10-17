<?php
/*
Template Name: single
*/
?>
<?php get_header(); ?>
<main>
    <?php
        $cat = get_the_category();
        $catname = $cat[0]->name; // カテゴリ名
        $catslug = $cat[0]->category_nicename; // カテゴリスラッグ名
        $catid = $cat[0]->cat_ID; // ID
        $link = get_category_link($catid); // カテゴリURL
    ?>
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
            <li class="breadcrumb"><a class="breadcrumb_link" href="/blog/<?php echo $catslug; ?>/"><?php echo $catname; ?></a></li>
            <li class="breadcrumb"><?php the_title(); ?></li>
            </ul>
        </div>
<section id="p-singleContents">
  <div class="c-contentsLayout">
    <div class="p-singleContents__inner">
        <div class="p-singleContents__left">
            <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="post" <?php post_class(); ?>>
                <div class="p-postContent__area">
                    <div class="p-postTitle__area">
                        <h1><?php the_title(); ?></h1>
                        <time><?php echo get_the_date(); ?></time>
                    </div>
                    <div class="post_content">
                    <?php
                        if ( $cat ) {
                            echo '<ul class="category-wrap">';
                            foreach ( $cat as $category ) {
                                echo  '<li><a class="category '.$category->slug.'" href="/blog/'.$category->slug.'">'.$category->name.'</a></li>';
                            }
                            echo '</ul>';
                        }
                        ?>

                        
                        <div class="post_content-movie">
                         <?php the_field('add_embed'); ?>
                        </div>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <!-- 投稿が無い場合の処理 -->
             <p>投稿はまだありません</p>
            <?php endif; ?>
            <div class="paging">
                <?php
                    $prev_post = get_previous_post(); // 前の投稿を取得
                    $next_post = get_next_post(); // 次の投稿を取得
                    if( $prev_post || $next_post ): //次の記事か前の記事かどちらかあれば
                ?>
                <ul class="prev_next_list">
                    <?php if ($next_post): // 次の記事があれば表示 ?>
                        <li class="next">
                            <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                                <span class="eng">次へ</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if ($prev_post): // 前の記事があれば表示 ?>
                        <li class="prev">
                            <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                                <span class="eng">前へ</span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
                <!-- /.prev_next_list -->
                <?php endif; ?>
            </div>
        </div>
        <div id="p-archiveArea__right">
            <div class="p-archiveArea__list">
                <div class="p-archiveArea__title">
                    <h3>Archives</h3><span>アーカイブ</span>
                </div>
                <ul class="post_archive">
                <?php wp_get_archives( 'post_type=post&type=monthly&show_post_count=1' ); ?>
                </ul>
            </div>
            <div class="p-categoryList">
                <div class="p-categoryList__title">
                    <h3>Category</h3><span>カテゴリー</span>
                </div>
                    <ul class="p-categoryList__category">
                    <?php
                        $cat = get_the_category();
                        $catid = $cat[0]->cat_ID; // ID
                        $catname = $cat[0]->name; // カテゴリ名
                        $catslug = $cat[0]->category_nicename; // カテゴリスラッグ名
                        $link = get_category_link($catid); // カテゴリURL
                    ?>
                    <?php
                    $categories = get_categories(array('parent' => '0')); 
                    foreach ($categories as $cat) {
                        if ($cat->cat_name === '未分類') {
                            continue;
                        }
                        if ($cat->cat_name === $current_category) {
                            $list_item = '<li class="now_page cat">'.$cat->cat_name.'</li>';
                        } else {
                            $list_item = '<li class="cat cat-item'.$cat->cat_ID.'"><a href="/blog/'.$cat->slug.'/">'.$cat->cat_name.'</a></li>';
                        }
                        echo $list_item;
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
  </div>
</section>
</main>
<?php get_footer(); ?>