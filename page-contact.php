
<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>
<main>
<section id="l-internalTop">
    <div class="l-internalTop__ornamentRight">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/contact/ornamentRight.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/images/contact/ornamentRight.png" alt="">
      </picture>
    </div>
    <h1 class="l-internalTop__title">
      <div class="l-internalTop__text">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/contact/pageTitle.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/images/contact/pageTitle.png" alt="">
        </picture>
      </div>
      <div class="l-internalTop__underLine">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/contact/ornamentLine.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/images/contact/ornamentLine.png" alt="ご相談・お問い合わせ">
        </picture>
      </div>
    </h1>
</section>


<section id="c-contactContents">
    <div class="p-contactContents__contactArea">
        <div class="l-container l-container--contact">
            <div class="c-contentsLayout">
                <div class="p-contactPage__main">
                    <?php if (is_page('contact')) : ?>
                    <p class="p-contactPage__lead">
                        ●●●にご関心をお寄せいただき、誠にありがとうございます。<br>
                        当社へのお問い合わせ・資料請求は、下記フォームをご利用ください。
                        以下に必要事項をご入力のうえ、【入力内容を確認する】ボタンを押してください。
                        確認画面に進みますので、内容をご確認後【送信】ボタンをクリックしてください。
                    </p>
                    <?php elseif (is_page('confirm')) : ?>
                    <p class="p-contactPage__lead">
                        まだお問い合わせは完了しておりません。<br>
                        入力内容をご確認のうえ、 【この内容で送信する】 ボタンを押してください。
                    </p>
                    <?php endif; ?>
                    <div class="p-contactPage__body">
                    <div class="p-contactPage__progress">
                        <div class="p-formIndicator">
                        <ol class="p-formIndicator__list">
                            <li class="p-formIndicator__item p-formIndicator__item--input <?php echo esc_attr(is_page('contact') ? 'is-active' : ''); ?>">入力</li>
                            <li class="p-formIndicator__item p-formIndicator__item--error <?php echo esc_attr(is_page('error') ? 'is-active' : ''); ?>">エラー</li>
                            <li class="p-formIndicator__item p-formIndicator__item--confirm <?php echo esc_attr(is_page('confirm') ? 'is-active' : ''); ?>">確認</li>
                            <li class="p-formIndicator__item p-formIndicator__item--complete <?php echo esc_attr(is_page('complete') ? 'is-active' : ''); ?>">完了</li>
                        </ol>
                        </div>
                    </div>
                    <div class="p-contactPage__content">
                        <?php if (is_page('contact') || is_page('error')) : ?>
                        <div class="p-contactPage__note">
                            <div class="p-contactPage__noteParagraph">
                            <span class="requireLabel">必須</span>
                            <span class="p-contactPage__noteText">の項目は必ずご記入ください。</span>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php
                        if (!is_page('complete')) :
                        remove_filter('the_content', 'wpautop');
                        the_content();
                        ?>
                        <?php else : ?>
                        <p class="p-contactPage__text">
                            フォームが送信されました。<br>
                            お問い合わせいただき、ありがとうございます。
                        </p>
                        <p class="p-contactPage__text">
                            なお、お問い合わせ内容につきましては、通常3営業日程度を目処に、<br class="u-hidden--sp">
                            弊社担当者よりご回答させていただきます。<br>
                            いましばらくお待ち下さいませ。
                        </p>
                        <p class="p-contactPage__text">
                            万一、ご回答メールが届かない場合は、送信トラブル等の可能性もありますので、<br class="u-hidden--sp">
                            大変お手数ではございますが、<br class="u-hidden--sp">
                            もう一度フォームよりお問い合わせいただくか、<br class="u-hidden--sp">
                            お電話にてお問い合わせをお願いいたします。
                        </p>

                        <div class="p-contactPage__btnArea">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn c-btn--gray p-contactPage__btn">トップページへ戻る</a>
                        </div>
                        <?php endif; ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php get_footer(); ?>