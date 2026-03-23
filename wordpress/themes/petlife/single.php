<?php

/**
 * シングルページのテンプレート（汎用）
 * 通常投稿（ニュース）・カスタム投稿タイプ（制作実績など）のシングルページで使用
 */
get_header(); ?>

<?php if (have_posts()):
  while (have_posts()):

    the_post();

    $post_type = get_post_type();
?>
    <main class="l-main">
      <section class="p-news-list">
        <div class="p-news-list__inner l-inner--page">

          <div class="p-news-list__title">
            <?php get_template_part("template-parts/section-title", null, [
              "main"  => "NEWS",
              "sub"   => "ニュース",
              "align" => "left",
              "tag"   => "h2",
            ]); ?>
          </div>

          <div class="p-news-list__mv">
            <figure class="p-news-list__mv-figure">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/news-mv.webp')); ?>" alt="" width="1122" height="500" />
            </figure>
          </div>

          <div class="p-news-list__banner">
            <p>毎月11日　ワンワンデー</p>
            <p>会員カードは10%オフ　生体買った人は無料配布</p>
          </div>

          <article class="p-single p-single--<?php echo esc_attr($post_type); ?>" itemscope itemtype="https://schema.org/Article">
            <div class="p-single__inner">
              <?php get_template_part("template-parts/single/header"); ?>
              <?php get_template_part("template-parts/single/body"); ?>
              <?php get_template_part("template-parts/single/related"); ?>
              <?php get_template_part("template-parts/single/navigation"); ?>
            </div>
          </article>

        </div>
      </section>
    </main>
<?php
  endwhile;
endif; ?>

<?php get_footer(); ?>