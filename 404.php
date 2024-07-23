<?php
/*
Template Name:404
*/
?>
<?php get_header(); ?>
<main>
    <div id="first-page-visual">
        <div class="page-visual-inner">
            <div id="breadcrumb">
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/') ); ?>">トップ</a></li>
                    <li>Not Found</li>
                </ul>
            </div>
            <div id="keyvisual" class="first-page-visual-area">
                <div class="first-page-visual-area-inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/notfound.jpg" alt="企業情報img">
                    <div class="first-page-ttl">
                        <p class="first-page-ttl-en">Not Found</p>
                        <h1 class="first-page-ttl-jp">ページが見つかりません</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="notfound-contents">
     <h1 class="404-text-ttl">Not Found<br>ページが見つかりません。</h1>
       <p class="404-text-lead">ご指定のURLは、<br class="sp">このサーバーでは見つかりませんでした。<br>
      該当のURLが変更になったか、<br class="sp">あるいはタイプミスの可能性があります。<br>
      URLをご確認の上、もう一度お試しください。<br>
    なお、このページは自動的にジャンプします。</p>
    <a class="404-text-toplink" href="/">※自動的にジャンプしない場合は<br class="sp">こちらをクリックしてください。</a>
    </div>
</main>
<?php get_footer(); ?>