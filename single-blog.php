<?php
/*
Template Name: single-blog
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
            <li class="breadcrumb"><a class="breadcrumb_link" href="<?php echo $link; ?>"><?php echo $catname; ?></a></li>
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
                        <a href="<?php echo $link; ?>" class="category <?php echo $catslug; ?>"><?php echo $catname; ?></a>
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
                    <?php if ($prev_post): // 前の記事があれば表示 ?>
                        <li class="prev">
                            <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                                <span class="eng">次へ</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if ($next_post): // 次の記事があれば表示 ?>
                        <li class="next">
                            <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
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
                    <?php
                        // 月別アーカイブリストを表示
                        // $post_type = 'blog'; // ポストタイプを指定
                        $args = array(
                            'post_type' => $post_type,
                            'posts_per_page' => -1
                        );
                        $archive_query = new WP_Query( $args );
                        while ( $archive_query->have_posts() ) {
                            $archive_query->the_post();
                            $archive_list[ get_the_time( 'Y/n', $post->ID ) ][] = $post->post_title;
                        }
                        wp_reset_postdata();
                        if($archive_list):
                    ?>
                        <?php
                        foreach( $archive_list as $year_month => $archive ) :
                        $year_month_arr = explode( '/', $year_month );
                        ?>
                        <li>
                            <a href="<?php echo home_url( '/', 'http' ).$post_type.'/date/'.$year_month; ?>">
                            <?php echo $year_month_arr[0].'年'.$year_month_arr[1].'月' ?></a>
                        </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
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