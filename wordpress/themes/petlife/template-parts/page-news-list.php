<?php
/**
 * ニュース一覧のメインコンテンツ
 * home.php / archive-news.php から利用
 */
?>
<main class="l-main">
  <section class="p-news-list">
    <div class="p-news-list__inner l-inner--page">
      <div class="p-news-list__title">
        <?php get_template_part("template-parts/section-title", null, [
          "main" => "NEWS",
          "sub" => "ニュース",
          "align" => "left",
          "tag" => "h1",
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

    </div>

    <div class="p-news-list__container-wrap l-inner--news">
      <?php get_template_part("template-parts/archive/news-list"); ?>
    </div>

  </section>
</main>
