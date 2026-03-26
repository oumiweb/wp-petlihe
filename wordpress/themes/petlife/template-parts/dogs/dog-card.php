<?php
/**
 * ワンちゃんカード1枚
 * 引数: post_id, is_active
 */

$post_id    = $args['post_id'] ?? get_the_ID();
$is_active  = $args['is_active'] ?? false;

$img        = get_field('dog_image', $post_id);
$img_url    = $img ? $img['url'] : get_template_directory_uri() . '/assets/images/search-card-comingsoon.webp';
$breed      = get_field('dog_breed', $post_id);
$gender     = get_field('dog_gender', $post_id);
$color      = get_field('dog_color', $post_id);
$birthday   = get_field('dog_birthday', $post_id);
$birthplace = get_field('dog_birthplace', $post_id);
?>

<li class="p-search__item<?php echo $is_active ? ' is-active' : ''; ?>">
  <button class="p-search__card" type="button"
    data-img="<?php echo esc_url($img_url); ?>"
    data-breed="<?php echo esc_attr($breed); ?>"
    data-gender="<?php echo esc_attr($gender); ?>"
    data-color="<?php echo esc_attr($color); ?>"
    data-birthday="<?php echo esc_attr($birthday); ?>"
    data-birthplace="<?php echo esc_attr($birthplace); ?>">
    <div class="p-search__card-image">
      <img src="<?php echo esc_url($img_url); ?>" alt="" width="359" height="290" loading="lazy" />
    </div>
    <dl class="p-search__card-meta">
      <div class="p-search__card-meta-row">
        <dt>種類</dt>
        <dd><?php echo esc_html($breed); ?></dd>
      </div>
      <div class="p-search__card-meta-row">
        <dt>性別</dt>
        <dd><?php echo esc_html($gender); ?></dd>
      </div>
    </dl>
    <div class="p-search__card-action">
      <span class="c-button" data-color="dark" data-shape="pill">詳細はこちら</span>
    </div>
  </button>
</li>
