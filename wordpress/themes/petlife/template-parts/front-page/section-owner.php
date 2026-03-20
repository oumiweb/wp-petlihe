<?php
/**
 * フロントページ: 店長コメント セクション
 */
?>
<section class="p-owner">
  <div class="p-owner__inner l-inner">
    <div class="p-owner__heading">
      <h2 class="p-owner__title">店長が見つけた<br />サブタイトル</h2>
    </div>
    <ul class="p-owner__list">
      <li class="p-owner__item">
        <div class="p-owner__image">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/image_sample_01.webp")); ?>" alt="" width="200" height="200" loading="lazy" />
        </div>
      </li>
      <li class="p-owner__item">
        <div class="p-owner__image">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/image_sample_02.webp")); ?>" alt="" width="200" height="200" loading="lazy" />
        </div>
      </li>
      <li class="p-owner__item">
        <div class="p-owner__image">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/image_sample_03.webp")); ?>" alt="" width="200" height="200" loading="lazy" />
        </div>
      </li>
    </ul>
    <div class="p-owner__action">
      <a href="<?php page_path('dogs'); ?>" class="c-button" data-color="primary">ワンちゃんを探すならこちら</a>
    </div>
  </div>
</section>
