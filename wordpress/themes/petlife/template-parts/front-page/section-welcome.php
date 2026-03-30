<?php
/**
 * フロントページ: WELCOME セクション
 * dogs カスタム投稿タイプの最新9件のサムネイル（dog_image）を表示
 */

$welcome_dogs = new WP_Query([
  'post_type'      => 'dogs',
  'posts_per_page' => 9,
  'post_status'    => 'publish',
  'orderby'        => 'date',
  'order'          => 'DESC',
  'tax_query'      => [
    [
      'taxonomy' => 'dog_status',
      'field'    => 'slug',
      'terms'    => 'decided',
      'operator' => 'NOT IN',
    ],
  ],
]);
?>
<section class="p-welcome">
  <div class="p-welcome__inner l-inner">
    <div class="p-welcome__heading">
      <h2 class="p-welcome__title">WELCOME</h2>
      <p class="p-welcome__subtitle">ご家族募集中</p>
    </div>
    <ul class="p-welcome__grid">
      <?php if ($welcome_dogs->have_posts()) : ?>
        <?php while ($welcome_dogs->have_posts()) : $welcome_dogs->the_post(); ?>
          <?php
            $image   = get_field('dog_image');
            $img_url = $image ? $image['url'] : get_template_directory_uri() . '/assets/images/search-card-comingsoon.webp';
            $img_alt = $image ? $image['alt'] : get_the_title();
          ?>
          <li class="p-welcome__grid-item js-fade">
            <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($img_alt); ?>" width="551" height="446" loading="lazy" />
          </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </ul>
    <div class="p-welcome__action">
      <a href="<?php page_path('dogs'); ?>" class="c-button" data-color="primary">その他のワンちゃんはこちら</a>
    </div>
    <p class="p-welcom__notes">ワンちゃんのことを詳しく知りたい方は、お電話ください。<span data-only-device="md"><br></span>国内のグッズ取り扱っています。ニュートロ、ロイヤルカナンなども取り扱いございます。</p>
  </div>
</section>
