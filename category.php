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
                    <li class="blog_list">
                        <?php
                            $cat = get_the_category();
                            $catid = $cat[0]->cat_ID; // ID
                            $catname = $cat[0]->name; // カテゴリ名
                            $catslug = $cat[0]->category_nicename; // カテゴリスラッグ名
                            $link = get_category_link($catid); // カテゴリURL
                        ?>
                        <?php if( get_field('news_image') ):?>
                        <?php
                        $imgId=get_field('news_image');
                        $img=wp_get_attachment_image_src($imgId, 'large');// (thumbnail, medium, large, full or custom size)
                        $imgAlt = get_post_meta ( get_post ($imgId) -> ID , '_wp_attachment_image_alt' , true );
                        ?>
                        <a href="<?php the_permalink(); ?>" class="news_list_imagearea">
                        <img class="news_list_image" src="<?php echo $img[0]; ?>" alt="<?php echo $imgAlt; ?>" />
                        </a>
                        <?php else:?>
                        <a href="<?php the_permalink(); ?>" class="news_list_imagearea no_image">
                            <img class="news_list_image" src="<?php echo get_template_directory_uri(); ?>/images/common/news_noimage.jpg" alt="">
                        </a>
                        <?php endif; ?>
                        <div class="news_list_textarea">
                        <div class="news_list_inner">
                        <?php
                            if ( $cat ) {
                                echo '<ul class="category-wrap">';
                                foreach ( $cat as $category ) {
                                    echo  '<li><a class="category '.$category->slug.'" href="/news-archive/'.$category->slug.'">'.$category->name.'</a></li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                            <time><?php the_time('Y/m/d'); ?></time>
                        </div>
                        <a class="news_list_title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                        <p class="news_list_content"><?php $text = mb_substr(get_field('news_catch_phrase'),0,75,'utf-8'); echo $text.'...';?></p>
                        </div>
                    </li>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <!-- 投稿が無い場合の処理 -->
                    <?php endif; ?>
                </ul>
            </div>
            <div class="pager">
            <nav class="pagination">
                <?php
                    $big = 999999999; // need an unlikely integer
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', str_replace('page/','?paged=',esc_url( get_pagenum_link( $big ) )) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages
                    ) );
                ?>
            </nav>
            </div>
        </div>
	</div>
	</div>
</main>
<?php get_footer(); ?>