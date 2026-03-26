<?php
/**
 * ワンちゃん一覧セクション
 * featured（最初の1件）+ カードリスト
 */

$dogs_query = new WP_Query([
  'post_type'      => 'dogs',
  'posts_per_page' => 6,
  'paged'          => get_query_var('paged', 1),
  'tax_query'      => [
    [
      'taxonomy' => 'dog_status',
      'field'    => 'slug',
      'terms'    => 'decided',
      'operator' => 'NOT IN',
    ],
  ],
]);

if (!$dogs_query->have_posts()) : ?>
  <p>現在ご紹介できるワンちゃんはいません。</p>
<?php return; endif;

// 最初の1件をfeaturedに使う
$dogs_query->the_post();
$first_id = get_the_ID();
?>

<!-- フィーチャードカード -->
<div class="p-search__featured" data-featured>
  <div class="p-search__featured-image">
    <?php
    $img = get_field('dog_image');
    $img_url = $img ? $img['url'] : get_template_directory_uri() . '/assets/images/search-card-comingsoon.webp';
    ?>
    <img data-featured-img src="<?php echo esc_url($img_url); ?>" alt="" width="503" height="424" />
  </div>
  <div class="p-search__featured-body">
    <div class="p-search__featured-group">
      <dl class="p-search__featured-meta">
        <div class="p-search__featured-meta-row">
          <dt>種類</dt>
          <dd data-featured-breed><?php echo esc_html(get_field('dog_breed')); ?></dd>
        </div>
        <div class="p-search__featured-meta-row">
          <dt>性別</dt>
          <dd data-featured-gender><?php echo esc_html(get_field('dog_gender')); ?></dd>
        </div>
      </dl>
      <ul class="p-search__featured-info" data-featured-info>
        <?php $color = get_field('dog_color'); if ($color) : ?><li><?php echo esc_html($color); ?></li><?php endif; ?>
        <?php $birthday = get_field('dog_birthday'); if ($birthday) : ?><li><?php echo esc_html($birthday); ?>生まれ</li><?php endif; ?>
        <?php $birthplace = get_field('dog_birthplace'); if ($birthplace) : ?><li><?php echo esc_html($birthplace); ?>出身</li><?php endif; ?>
      </ul>
    </div>
  </div>
</div>

<!-- ワンちゃんリスト -->
<ul class="p-search__list">

  <!-- 最初の1件（is-active） -->
  <?php get_template_part("template-parts/dogs/dog-card", null, [
    'post_id'   => $first_id,
    'is_active' => true,
  ]); ?>

  <!-- 残りの件数 -->
  <?php while ($dogs_query->have_posts()) : $dogs_query->the_post(); ?>
    <?php get_template_part("template-parts/dogs/dog-card", null, [
      'post_id'   => get_the_ID(),
      'is_active' => false,
    ]); ?>
  <?php endwhile; ?>

</ul>

<!-- ページネーション -->
<?php if ($dogs_query->max_num_pages > 1) : ?>
  <div class="p-search__pagination">
    <?php get_template_part("template-parts/pagination", null, ['total' => $dogs_query->max_num_pages]); ?>
  </div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
