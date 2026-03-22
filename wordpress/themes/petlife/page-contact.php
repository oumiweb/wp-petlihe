<?php
/*
Template Name: Contact
*/
get_header(); ?>
<main class="l-main">
  <section class="p-contact">
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
       *     <label class="p-contact-form__label">氏名</label>
       *   </div>
       *   <div class="p-contact-form__field">[text* your-name]</div>
       * </div>
       * <div class="p-contact-form__row">
       *   <div class="p-contact-form__label-wrap">
       *     <span class="p-contact-form__badge">必須</span>
       *     <label class="p-contact-form__label">お問い合わせ種別</label>
       *   </div>
       *   <div class="p-contact-form__field">[text* your-type]</div>
       * </div>
       * <div class="p-contact-form__row">
       *   <div class="p-contact-form__label-wrap">
       *     <span class="p-contact-form__badge">必須</span>
       *     <label class="p-contact-form__label">お問い合わせ内容</label>
       *   </div>
       *   <div class="p-contact-form__field">[textarea* your-message]</div>
       * </div>
       * <div class="p-contact-form__row">
       *   <div class="p-contact-form__label-wrap">
       *     <span class="p-contact-form__badge">必須</span>
       *     <label class="p-contact-form__label">メールアドレス</label>
       *   </div>
       *   <div class="p-contact-form__field">[email* your-email]</div>
       * </div>
       * <div class="p-contact-form__row">
       *   <div class="p-contact-form__label-wrap">
       *     <span class="p-contact-form__badge">必須</span>
       *     <label class="p-contact-form__label">電話番号</label>
       *   </div>
       *   <div class="p-contact-form__field">[tel* your-tel]</div>
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
