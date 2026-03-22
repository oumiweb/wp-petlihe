<?php
/**
 * ニュース一覧のメインコンテンツ
 * home.php / archive-news.php から利用
 */
?>
<main class="l-main">
  <section class="p-news-list">
    <div class="p-news-list__inner l-inner l-inner--wide">
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
        <p class="p-news-list__mv-label">ニュース</p>
      </div>

      <div class="p-news-list__banner">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/news-banner.webp')); ?>" alt="毎月11日 ワンワンデー 会員カードは10%オフ 生体買った人は無料配布" width="1122" height="160" loading="lazy" />
      </div>

      <?php get_template_part("template-parts/archive/news-list"); ?>
    </div>
  </section>
</main>
