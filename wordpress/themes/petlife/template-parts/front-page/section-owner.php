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
      <?php for ($i = 1; $i <= 3; $i++) : ?>
        <?php $image = get_field('owner_image_' . $i); ?>
        <?php if ($image) : ?>
          <li class="p-owner__item">
            <div class="p-owner__image">
              <span class="p-owner__sold">SOLD</span>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="359" height="291" loading="lazy" />
            </div>
          </li>
        <?php endif; ?>
      <?php endfor; ?>
    </ul>
    <div class="p-owner__action">
      <a href="<?php page_path('dogs'); ?>" class="c-button" data-color="primary">その他のワンちゃんはこちら</a>
    </div>
  </div>
</section>
