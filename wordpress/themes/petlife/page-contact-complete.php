<?php
/**
 * Template Name: Contact Complete
 */
get_header(); ?>

<main class="l-main">
  <section class="p-contact__complete l-page">
    <div class="p-contact__complete-inner l-inner">
      <div class="p-contact__complete-title">
        <div class="c-section-title" data-align="left">
          <h1 class="c-section-title__main">Thankyou</h1>
          <p class="c-section-title__sub">お問い合わせありがとうございました。<span class="c-deco-line" aria-hidden="true"></span></p>
        </div>
      </div>
      <p class="p-contact__complete-text">担当者より、通常2営業日以内にご連絡いたします。</p>
      <div class="p-contact__complete-button">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c-button" data-color="primary">TOPへ</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
