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
            <?php endif; ?>
            <div class="paging">
            <?php if (get_previous_post()):?>
                <div class="prev">
                <?php previous_post_link('%link', '前へ'); ?>
                </div>
            <?php endif; ?>
            <?php if (get_next_post()):?>
                <div class="next">
                <?php next_post_link('%link', '次へ'); ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
        <div id="p-archiveArea__right">
            <div class="p-archiveArea__list">
                <div class="p-archiveArea__title">
                    <h3>Archives</h3><span>アーカイブ</span>
                </div>
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
                    <ul class="p-categoryList__category">
                    <?php wp_list_categories(array(
                        'show_count=1')); 
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
</main>
<?php get_footer(); ?>