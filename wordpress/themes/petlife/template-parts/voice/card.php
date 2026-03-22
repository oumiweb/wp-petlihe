<?php
/**
 * ボイスカード
 *
 * @param string $image  画像ファイル名 (例: voice-card01.webp)
 * @param string $name   お客様名 (例: S様)
 * @param string $breed  犬種 (例: トイプードル)
 * @param string $text   本文
 */
$image = $args['image'] ?? '';
$name  = $args['name']  ?? '';
$breed = $args['breed'] ?? '';
$text  = $args['text']  ?? '';
?>
<article class="p-voice-card">
  <div class="p-voice-card__avatar">
    <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/' . $image)); ?>" alt="<?php echo esc_attr($name); ?>" width="120" height="120" loading="lazy" />
  </div>
  <div class="p-voice-card__body">
    <p class="p-voice-card__name"><?php echo esc_html($name); ?><span class="p-voice-card__breed"> | <?php echo esc_html($breed); ?></span></p>
    <hr class="p-voice-card__divider" />
    <p class="p-voice-card__text"><?php echo esc_html($text); ?></p>
  </div>
</article>
