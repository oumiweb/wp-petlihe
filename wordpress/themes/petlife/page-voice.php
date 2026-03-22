<?php
/**
 * Template Name: ボイス
 */
get_header(); ?>

<main class="l-main">

  <!-- MV -->
  <div class="p-voice-mv">
    <div class="p-voice-mv__heading">
      <?php get_template_part("template-parts/section-title", null, [
        "main"  => "VOICE",
        "sub"   => "お客様の声",
        "align" => "left",
        "tag"   => "h1",
      ]); ?>
    </div>
    <div class="p-voice-mv__inner">
      <figure class="p-voice-mv__figure">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/voice-mv.webp')); ?>" alt="" width="1264" height="710" />
      </figure>
    </div>
  </div>

  <!-- カード一覧 -->
  <section class="p-voice-list">
    <div class="p-voice-list__inner l-inner">
      <div class="p-voice-list__grid">

        <?php get_template_part("template-parts/voice/card", null, [
          "image" => "voice-card01.webp",
          "name"  => "S様",
          "breed" => "トイプードル",
          "text"  => "おもちのトリミングはいつもプロムナードさんにお願いしています。他のサロンでは嫌がっていたおもちが、ここでは大人しくしているのが不思議でした。スタッフさんの技術はもちろん、わんちゃんへの接し方がとても優しくて安心です。仕上がりもいつも可愛くて、毎回お迎えが楽しみです。",
        ]); ?>

        <?php get_template_part("template-parts/voice/card", null, [
          "image" => "voice-card02.webp",
          "name"  => "M様",
          "breed" => "トイプードル",
          "text"  => "プロムナードさんでショコラと出会えて本当に良かったです。スタッフの方が一頭一頭の性格や特徴を丁寧に教えてくださり、安心してお迎えすることができました。お迎え後のフォローも手厚く、初めての犬育てでも心強かったです。ショコラは今では家族の中心で、毎日たくさんの笑顔をくれています。",
        ]); ?>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
