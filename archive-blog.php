<?php
/*
Template Name: archive-blog
*/
?>
<?php get_header(); ?>
<section id="p-blogContents">
<h2>Blog</h2>
<ul>
<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
    <li class="news-inner"><time class="news-time"><?php echo get_the_date('Y/m/d'); ?></time><p class="news-text"><a class="news-link" href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></p></li>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else: ?>
    <!-- 投稿が無い場合の処理 -->
    <?php endif; ?>
</ul>
</section>
    </main>
<?php get_footer(); ?>