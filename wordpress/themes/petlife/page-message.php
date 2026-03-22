<?php
/**
 * Template Name: 店長コメント
 */
get_header(); ?>

<main class="l-main">

  <!-- MV -->
  <div class="p-message-mv">
    <div class="p-message-mv__heading">
      <?php get_template_part("template-parts/section-title", null, [
        "main"  => "MESSAGE",
        "sub"   => "メッセージ",
        "align" => "left",
        "tag"   => "h1",
      ]); ?>
    </div>
    <div class="p-message-mv__inner">
      <figure class="p-message-mv__figure">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/message-mv.webp')); ?>" alt="" width="1264" height="710" />
      </figure>
      <div class="p-message-mv__text">
        <p>ワンチャンは璃れません。</p>
        <p>大切にしてくれる家族を待っています。</p>
        <p>お迎えしてもらった方に可愛がってもらえるように</p>
        <p>私たちは日々仕事に取り組んでいます。</p>
      </div>
    </div>
  </div>

  <section class="p-message">

    <div class="p-message__inner l-inner l-inner--wide">
      <div class="p-message__grid">

        <?php get_template_part("template-parts/message/message-card", null, [
          'role'    => '店長コメント',
          'heading' => "個性や健康状態を理解し、\nその子にとって最善のケアを行う",
          'text'    => '<p>私は動物業界に携わり、17年になります。これまでトリミングをはじめ、動物看護、生体販売など幅広い業務に関わってきました。現場で多くの動物たちと接する中で、それぞれの個性や健康状態を理解し、その子にとって最善のケアを行うことの大切さを学んできました。</p><p>また、飼い主様との信頼関係を大切にしながら、動物と人がより良い関係を築けるようサポートすることを心掛けています。これまで培ってきた経験と知識を活かし、これからも動物たちの健康と幸せ、そして飼い主様の安心につながる仕事を続けていきたいと考えています。</p>',
          'img'     => get_theme_file_uri('/assets/images/message-owner.webp'),
        ]); ?>

        <?php get_template_part("template-parts/message/message-card", null, [
          'role'    => '副店長コメント',
          'heading' => "飼い主様とペットが安心して快適に暮らせるように\n知識と経験を活かしたサポートをします。",
          'text'    => '<p>ペット業界に携わり24年。トリマーB級資格を取得し、長年にわたり犬のトリミングやケアに従事してきました。また、愛玩飼養管理士1級の資格を活かし、ペットの健康管理や正しい飼育方法の普及にも努めています。</p><p>これまでの経験を通して、ペット一頭一頭の個性や体調に合わせた丁寧なケアを大切にしてきました。飼い主様とペットが安心して快適に暮らせるよう、知識と経験を活かしたサポートを心がけています。これからもお客様とわんちゃんとのご縁を大切にし、お客様とわんちゃんの笑顔の為に頑張ります。</p>',
          'img'     => get_theme_file_uri('/assets/images/message-assistant-maneger.webp'),
        ]); ?>

      </div>
    </div>

  </section>
</main>

<?php get_footer(); ?>
