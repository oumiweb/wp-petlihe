<?php
/**
 * ワンちゃん紹介アーカイブページ
 * /dogs/ で表示。6件ごとにページネーション。
 */

$paged = get_query_var("paged") ? get_query_var("paged") : 1;

$dogs = new WP_Query([
  "post_type"      => "dog",
  "posts_per_page" => 6,
  "paged"          => $paged,
  "orderby"        => "date",
  "order"          => "DESC",
]);

get_header();
?>

<main class="l-main">
  <section class="p-search l-page">

    <div class="p-search__heading l-inner--page">
      <div class="c-section-title" data-align="left">
        <h2 class="c-section-title__main">SEARCH</h2>
        <p class="c-section-title__sub">探す<span class="c-deco-line" aria-hidden="true"></span></p>
      </div>
    </div>

    <div class="p-search__body">
      <div class="p-search__inner">

        <div class="p-search__search-heading">
          <h3 class="p-search__search-title">ワンちゃんを探す</h3>
          <p class="p-search__search-note">※価格については店頭スタッフにお尋ねください</p>
        </div>

        <?php if ($dogs->have_posts()):
          // 最初の1件をフィーチャード表示の初期値に使用
          $first = $dogs->posts[0];
          $first_img    = get_the_post_thumbnail_url($first->ID, "large") ?: get_template_directory_uri() . "/assets/images/featured-img.webp";
          $first_breed  = get_field("dog_breed", $first->ID) ?: "";
          $first_gender = get_field("dog_gender", $first->ID) ?: "";
          $first_info   = array_filter([
            get_field("dog_color", $first->ID),
            get_field("dog_birthday", $first->ID),
            get_field("dog_birthplace", $first->ID),
          ]);
        ?>

        <!-- フィーチャードカード -->
        <div class="p-search__featured" data-featured>
          <div class="p-search__featured-image">
            <img data-featured-img src="<?php echo esc_url($first_img); ?>" alt="" width="503" height="424" />
          </div>
          <div class="p-search__featured-body">
            <div class="p-search__featured-group">
              <dl class="p-search__featured-meta">
                <div class="p-search__featured-meta-row">
                  <dt>種類</dt>
                  <dd data-featured-breed><?php echo esc_html($first_breed); ?></dd>
                </div>
                <div class="p-search__featured-meta-row">
                  <dt>性別</dt>
                  <dd data-featured-gender><?php echo esc_html($first_gender); ?></dd>
                </div>
              </dl>
              <ul class="p-search__featured-info" data-featured-info>
                <?php foreach ($first_info as $item): ?>
                  <li><?php echo esc_html($item); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>

        <!-- ワンちゃんリスト -->
        <ul class="p-search__list">
          <?php while ($dogs->have_posts()): $dogs->the_post();
            $img    = get_the_post_thumbnail_url(get_the_ID(), "medium") ?: get_template_directory_uri() . "/assets/images/search-card-comingsoon.webp";
            $breed  = get_field("dog_breed") ?: "";
            $gender = get_field("dog_gender") ?: "";
            $info   = implode(",", array_filter([
              get_field("dog_color"),
              get_field("dog_birthday"),
              get_field("dog_birthplace"),
            ]));
            $is_first = ($dogs->current_post === 0) ? " is-active" : "";
          ?>
          <li class="p-search__item<?php echo $is_first; ?>">
            <button class="p-search__card" type="button"
              data-img="<?php echo esc_url($img); ?>"
              data-breed="<?php echo esc_attr($breed); ?>"
              data-gender="<?php echo esc_attr($gender); ?>"
              data-info="<?php echo esc_attr($info); ?>">
              <div class="p-search__card-image">
                <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($breed); ?>" width="359" height="290" loading="lazy" />
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
          <?php endwhile; wp_reset_postdata(); ?>
        </ul>

        <!-- ページネーション -->
        <?php if ($dogs->max_num_pages > 1): ?>
        <div class="p-search__pagination">
          <nav class="c-pagination" aria-label="ページネーション">
            <?php
            $total = $dogs->max_num_pages;
            // 前へ
            if ($paged > 1):
            ?>
              <a href="<?php echo esc_url(get_pagenum_link($paged - 1)); ?>" class="c-pagination__item" data-state="prev" aria-label="前のページ">←</a>
            <?php else: ?>
              <span class="c-pagination__item" data-state="disabled">←</span>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total; $i++): ?>
              <?php if ($i === $paged): ?>
                <span class="c-pagination__item" data-state="current" aria-current="page"><?php echo $i; ?></span>
              <?php else: ?>
                <a href="<?php echo esc_url(get_pagenum_link($i)); ?>" class="c-pagination__item"><?php echo $i; ?></a>
              <?php endif; ?>
            <?php endfor; ?>

            <?php if ($paged < $total): ?>
              <a href="<?php echo esc_url(get_pagenum_link($paged + 1)); ?>" class="c-pagination__item" data-state="next" aria-label="次のページ">→</a>
            <?php else: ?>
              <span class="c-pagination__item" data-state="disabled">→</span>
            <?php endif; ?>
          </nav>
        </div>
        <?php endif; ?>

        <?php else: ?>
        <p class="p-search__empty">現在、ワンちゃんの情報はありません。</p>
        <?php endif; ?>

      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
