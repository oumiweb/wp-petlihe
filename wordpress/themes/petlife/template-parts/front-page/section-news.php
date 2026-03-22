<?php
/**
 * フロントページ: NEWS セクション
 */
$news_posts = get_posts([
  'post_type'      => 'post',
  'numberposts'    => 5,
  'post_status'    => 'publish',
]);
?>
<section class="p-news">
  <div class="p-news__inner">
    <div class="p-news__heading">
      <div class="c-section-title" data-align="left">
        <h2 class="c-section-title__main">NEWS</h2>
        <p class="c-section-title__sub">新着情報<span class="c-deco-line" aria-hidden="true"></span></p>
      </div>
    </div>
    <?php if ($news_posts) : ?>
      <ul class="p-news__list">
        <?php foreach ($news_posts as $post) : setup_postdata($post); ?>
          <li class="p-news__item">
            <a href="<?php the_permalink(); ?>" class="p-news__link">
              <time class="p-news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
              <span class="p-news__category"><?php echo esc_html(get_the_category_list('', '', $post->ID) ? strip_tags(get_the_category_list()) : ''); ?></span>
              <span class="p-news__title"><?php the_title(); ?></span>
            </a>
          </li>
        <?php endforeach; wp_reset_postdata(); ?>
      </ul>
    <?php endif; ?>
  </div>
</section>
