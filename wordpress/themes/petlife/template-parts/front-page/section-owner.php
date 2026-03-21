<?php
/**
 * フロントページ: 家族が見つかったワンちゃん セクション
 */
?>
<section class="p-owner">
  <div class="p-owner__inner l-inner">
    <div class="p-owner__heading">
      <h2 class="p-owner__title">家族が見つかったワンちゃん</h2>
    </div>
    <ul class="p-owner__list">
      <li class="p-owner__item">
        <div class="p-owner__image">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/top-card01.webp")); ?>" alt="" width="359" height="290" loading="lazy" />
        </div>
      </li>
      <li class="p-owner__item">
        <div class="p-owner__image">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/top-card02.webp")); ?>" alt="" width="359" height="290" loading="lazy" />
        </div>
      </li>
      <li class="p-owner__item">
        <div class="p-owner__image">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/top-card03.webp")); ?>" alt="" width="359" height="290" loading="lazy" />
        </div>
      </li>
    </ul>
    <div class="p-owner__action">
      <a href="<?php page_path('dogs'); ?>" class="c-button" data-color="primary">その他のワンちゃんはこちら</a>
    </div>
  </div>
</section>
