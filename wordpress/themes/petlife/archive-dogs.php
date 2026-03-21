<?php
/**
 * ワンちゃん紹介アーカイブページのテンプレート
 * カスタム投稿タイプ「dogs」の一覧
 */
get_header(); ?>

<main class="l-main">
  <section class="p-search">

    <!-- セクションタイトル -->
    <div class="p-search__heading">
      <?php get_template_part("template-parts/section-title", null, [
        "main"  => "SEARCH",
        "sub"   => "探す",
        "align" => "left",
        "tag"   => "h1",
      ]); ?>
    </div>

    <div class="p-search__inner">
      <!-- 検索見出し -->
      <div class="p-search__search-heading">
        <h2 class="p-search__search-title">ワンちゃんを探す</h2>
        <p class="p-search__search-note">※価格については店頭スタッフにお尋ねください</p>
      </div>

      <?php get_template_part("template-parts/dogs/section-dogs"); ?>
    </div>

  </section>
</main>

<?php get_footer(); ?>
