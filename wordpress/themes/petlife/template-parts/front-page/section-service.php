<?php
/**
 * フロントページ: SERVICE セクション
 */
?>
<section class="p-service">
  <div class="p-service__inner">
    <div class="p-service__heading">
      <div class="c-section-title" data-align="left">
        <h2 class="c-section-title__main">SERVICE</h2>
        <p class="c-section-title__sub">サービス<span class="c-deco-line" aria-hidden="true"></span></p>
      </div>
    </div>
    <ul class="p-service__list">
      <li class="p-service__item">
        <a href="<?php echo esc_url(home_url('/service/')); ?>" class="p-service__link">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/top-service01.webp')); ?>" alt="" class="p-service__image" width="400" height="533" loading="lazy" />
          <div class="p-service__content">
            <p class="p-service__en">Shop</p>
            <p class="p-service__ja">サービス<span class="c-deco-line c-deco-line--sm" aria-hidden="true"></span></p>
          </div>
        </a>
      </li>
      <li class="p-service__item">
        <a href="<?php echo esc_url(home_url('/service/')); ?>" class="p-service__link">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/top-service02.webp')); ?>" alt="" class="p-service__image" width="546" height="410" loading="lazy" />
          <div class="p-service__content">
            <p class="p-service__en">Trimming</p>
            <p class="p-service__ja">トリミング<span class="c-deco-line c-deco-line--sm" aria-hidden="true"></span></p>
          </div>
        </a>
      </li>
      <li class="p-service__item">
        <a href="<?php echo esc_url(home_url('/service/')); ?>" class="p-service__link">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/top-service03.webp')); ?>" alt="" class="p-service__image" width="546" height="410" loading="lazy" />
          <div class="p-service__content">
            <p class="p-service__en">Food</p>
            <p class="p-service__ja">フード<span class="c-deco-line c-deco-line--sm" aria-hidden="true"></span></p>
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>
