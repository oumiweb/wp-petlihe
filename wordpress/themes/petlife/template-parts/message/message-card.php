<?php
/**
 * メッセージカード1枚
 * 引数: role, heading, text, img
 */

$role    = $args['role']    ?? '';
$heading = $args['heading'] ?? '';
$text    = $args['text']    ?? '';
$img     = $args['img']     ?? '';
?>

<article class="p-message-card">
  <div class="p-message-card__body">
    <p class="p-message-card__role"><?php echo esc_html($role); ?></p>
    <h2 class="p-message-card__heading"><?php echo nl2br(esc_html($heading)); ?></h2>
    <div class="p-message-card__text">
      <?php echo wp_kses_post($text); ?>
    </div>
  </div>
  <figure class="p-message-card__figure">
    <img src="<?php echo esc_url($img); ?>" alt="" width="280" height="280" loading="lazy" />
  </figure>
</article>
