<?php
/**
 * ニュース一覧1件表示
 * news-list のループ内で呼ぶ。the_post() 済み前提。
 */
$categories = get_the_category();
$category_name = !empty($categories) ? $categories[0]->name : "";
?>
<a href="<?php echo esc_url(get_permalink()); ?>" class="p-news-list__item">
  <article class="p-news-list__card">
    <div class="p-news-list__card-body">
      <div class="p-news-list__meta">
        <time class="p-news-list__date" datetime="<?php echo esc_attr(get_the_date("c")); ?>">
          <?php echo esc_html(get_the_date("Y-m-d")); ?>
        </time>
        <?php if ($category_name): ?>
          <span class="p-news-list__separator">•</span>
          <span class="p-news-list__category"><?php echo esc_html($category_name); ?></span>
        <?php endif; ?>
      </div>
      <div class="p-news-list__content">
        <div class="p-news-list__main">
          <h2 class="p-news-list__title"><?php echo esc_html(get_the_title()); ?></h2>
          <?php
            $excerpt = wp_strip_all_tags(get_the_excerpt());
            if ($excerpt):
              $excerpt = mb_strimwidth($excerpt, 0, 70, '…');
          ?>
            <p class="p-news-list__excerpt"><?php echo esc_html($excerpt); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php if (has_post_thumbnail()): ?>
      <div class="p-news-list__thumbnail">
        <?php the_post_thumbnail('medium', ['loading' => 'lazy']); ?>
      </div>
    <?php else: ?>
      <div class="p-news-list__thumbnail"></div>
    <?php endif; ?>
  </article>
</a>
