<?php
/**
 * フロントページ: 家族が見つかったワンちゃん セクション
 * dog_status タクソノミーの「里親決定済み」ターム がついた投稿を最新3件表示
 */

$owner_query = new WP_Query([
  'post_type'      => 'dogs',
  'posts_per_page' => 3,
  'tax_query'      => [
    [
      'taxonomy' => 'dog_status',
      'field'    => 'slug',
      'terms'    => 'decided',
    ],
  ],
]);
?>
<section class="p-owner">
  <div class="p-owner__inner l-inner">
    <div class="p-owner__heading">
      <h2 class="p-owner__title">家族が見つかったワンちゃん</h2>
    </div>
    <?php if ($owner_query->have_posts()) : ?>
      <ul class="p-owner__list">
        <?php while ($owner_query->have_posts()) : $owner_query->the_post(); ?>
          <?php $image = get_field('dog_image'); ?>
          <?php if ($image) : ?>
            <li class="p-owner__item">
              <div class="p-owner__image">
                <span class="p-owner__sold">SOLD</span>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="359" height="291" loading="lazy" />
              </div>
            </li>
          <?php endif; ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    <?php endif; ?>
    <div class="p-owner__action">
      <a href="<?php page_path('dogs'); ?>" class="c-button" data-color="primary">その他のワンちゃんはこちら</a>
    </div>
  </div>
</section>
