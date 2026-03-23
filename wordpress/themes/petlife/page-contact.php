<?php
/*
Template Name: Contact
*/
get_header(); ?>
<main class="l-main">
  <section class="p-contact l-page">
    <div class="p-contact__inner l-inner">
      <div class="p-contact__title">
        <?php get_template_part("template-parts/section-title", null, [
          "main" => "CONTACT",
          "sub" => "お問い合わせ",
          "align" => "left",
          "tag" => "h2",
        ]); ?>
      </div>
      <?php
      /*
       * CF7フォームエディタに以下を貼り付けてください：
       *
       * <div class="p-contact-form__row">
       *   <div class="p-contact-form__label-wrap">
       *     <span class="p-contact-form__badge">必須</span>
       *     <label class="p-contact-form__label" for="your-name">氏名</label>
       *   </div>
       *   <div class="p-contact-form__field">[text* your-name id:your-name placeholder "例：山田 太郎"]</div>
       * </div>
       * <div class="p-contact-form__row">
       *   <div class="p-contact-form__label-wrap">
       *     <span class="p-contact-form__badge">必須</span>
       *     <label class="p-contact-form__label" for="your-message">お問い合わせ内容</label>
       *   </div>
       *   <div class="p-contact-form__field">[textarea* your-message id:your-message placeholder "お問い合わせ内容をご記入ください"]</div>
       * </div>
       * <div class="p-contact-form__row">
       *   <div class="p-contact-form__label-wrap">
       *     <span class="p-contact-form__badge">必須</span>
       *     <label class="p-contact-form__label" for="your-email">メールアドレス</label>
       *   </div>
       *   <div class="p-contact-form__field">[email* your-email id:your-email placeholder "例：example@example.com"]</div>
       * </div>
       * <div class="p-contact-form__row">
       *   <div class="p-contact-form__label-wrap">
       *     <span class="p-contact-form__badge">必須</span>
       *     <label class="p-contact-form__label" for="your-tel">電話番号</label>
       *   </div>
       *   <div class="p-contact-form__field">[tel* your-tel id:your-tel placeholder "例：090-1234-5678"]</div>
       * </div>
       * <div class="p-contact-form__submit">[submit "送信する"]</div>
       */
      ?>
      <div class="p-contact__form">
        <?php echo do_shortcode('[contact-form-7 id="c86f2bc" title="Contact form 1"]'); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
