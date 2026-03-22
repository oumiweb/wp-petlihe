<?php
/**
 * フロントページ: MV セクション
 */
?>
<section class="p-mv">
  <div class="p-mv__inner">
    <video class="p-mv__video" autoplay muted loop playsinline>
      <source src="<?php echo esc_url(get_theme_file_uri('/assets/videos/fv-video.mp4')); ?>" type="video/mp4" />
    </video>
    <div class="p-mv__overlay">
      <p class="p-mv__logo">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/logo-white.webp')); ?>" alt="PROMENADE" width="397" height="160" />
      </p>
    </div>
  </div>
</section>
