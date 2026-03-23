<?php
/**
 * フロントページ: WELCOME セクション
 * ACF: welcome_image_1 〜 welcome_image_9（画像フィールド × 9）
 */
?>
<section class="p-welcome">
  <div class="p-welcome__inner l-inner">
    <div class="p-welcome__heading">
      <h2 class="p-welcome__title">WELCOME</h2>
      <p class="p-welcome__subtitle">ご家族募集中</p>
    </div>
    <ul class="p-welcome__grid">
      <?php for ($i = 1; $i <= 9; $i++) : ?>
        <?php $image = get_field('welcome_image_' . $i); ?>
        <?php if ($image) : ?>
          <li class="p-welcome__grid-item">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="551" height="446" loading="lazy" />
          </li>
        <?php endif; ?>
      <?php endfor; ?>
    </ul>
    <div class="p-welcome__action">
      <a href="<?php page_path('dogs'); ?>" class="c-button" data-color="primary">その他のワンちゃんはこちら</a>
    </div>
    <p class="p-welcom__notes">ワンちゃんのことを詳しく知りたい方は、お電話ください。<span data-only-device="md"><br></span>国内のグッズ取り扱っています。ニュートロ、ロイヤルカナンなども取り扱いございます。</p>
  </div>
</section>
