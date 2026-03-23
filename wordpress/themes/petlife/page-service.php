<?php
/**
 * Template Name: サービス
 */
get_header(); ?>

<main class="l-main">

  <div class="p-service-mv">
    <div class="p-service-mv__body l-inner--page">

      <!-- MV -->
      <div class="p-service-mv__heading">
        <?php get_template_part("template-parts/section-title", null, [
          "main"  => "SERVICE",
          "sub"   => "サービス",
          "align" => "left",
          "tag"   => "h1",
        ]); ?>
      </div>
      <div class="p-service-mv__inner">
        <figure class="p-service-mv__figure">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-mv.webp')); ?>" alt="" width="1264" height="710" />
        </figure>
      </div>

      <!-- サービス -->
      <section class="p-service-page">
        <div class="p-service-page__inner">

          <div class="p-service-page__text">
            <p>ワンちゃんの健康を願う</p>
            <p>あなたの想いを大切に、</p>
            <p>私たちは</p>
            <p>「健康なワンちゃんとの出会い」から</p>
            <p>「家族として迎え入れたその先の暮らし」まで、</p>
            <p>安心して寄り添い続けられる存在でありたいと考えています。</p>
            <p>大切な家族として迎えるからこそ、</p>
            <p>日々の食事・ケア・過ごせる時間のすべてに</p>
            <p>"本当に安心できる選択"を</p>
            <p>その願いを、ひとつひとつ、かたちにしています。</p>
          </div>

          <div class="p-service-page__pricelist">
            <h2 class="p-service-page__pricelist-title">Trimming Price</h2>
            <table class="p-service-page__pricelist-table">
              <thead>
                <tr>
                  <th>犬種</th>
                  <th>シャンプーコース</th>
                  <th>カットコース</th>
                </tr>
              </thead>
              <tbody>
                <tr><td>チワワ（スムース）</td><td>¥4,950</td><td></td></tr>
                <tr><td>チワワ（ロング）</td><td>¥5,200</td><td>¥7,700</td></tr>
                <tr><td>M・ダックス（スムース）</td><td>¥4,950</td><td></td></tr>
                <tr><td>M・ダックス（ロング）</td><td>¥6,050</td><td>¥7,700</td></tr>
                <tr><td>ミニチュアピンシャー</td><td>¥5,000</td><td></td></tr>
                <tr><td>パグ</td><td>¥6,930</td><td></td></tr>
                <tr><td>フレンチブルドッグ</td><td>¥7,150</td><td></td></tr>
                <tr><td>マルチーズ</td><td>¥5,500</td><td>¥8,800</td></tr>
                <tr><td>ペキニーズ</td><td>¥6,600</td><td>¥8,800</td></tr>
                <tr><td>ポメラニアン</td><td>¥6,600</td><td>¥8,800</td></tr>
                <tr><td>パピヨン</td><td>¥6,050</td><td>¥8,250</td></tr>
                <tr><td>トイプードル（3kg以下）</td><td>¥6,600</td><td>¥9,350</td></tr>
                <tr><td>トイプードル（5kg以下）</td><td>¥7,040</td><td>¥9,900</td></tr>
                <tr><td>トイプードル（5kg以上）</td><td>¥7,480</td><td>¥10,450</td></tr>
                <tr><td>キャバリア</td><td>¥7,150</td><td>¥9,900</td></tr>
                <tr><td>ヨークシャテリア</td><td>¥5,500</td><td>¥8,800</td></tr>
                <tr><td>シーズー</td><td>¥6,600</td><td>¥8,800</td></tr>
                <tr><td>Mシュナウザー</td><td>¥7,700</td><td>¥10,450</td></tr>
                <tr><td>柴犬（豆柴）</td><td>¥7,150</td><td>¥9,350</td></tr>
                <tr><td>ビジョンフリーゼ</td><td>¥8,800</td><td>¥14,300</td></tr>
                <tr><td>アメリカンコッカー</td><td>¥7,700</td><td>¥10,450</td></tr>
                <tr><td>ウェルシュコーギー</td><td>¥7,700</td><td></td></tr>
                <tr><td>MIX</td><td>要相談</td><td>要相談</td></tr>
              </tbody>
            </table>
            <ul class="p-service-page__pricelist-notes">
              <li>※トリミングご利用の時間は、10:00から15:00までとさせていただいております。</li>
              <li>※ホテルご利用のお迎え時間は、18:30までとさせていただいております。</li>
              <li>※18:30を過ぎた場合は、1泊分のホテル料金が追加となります。</li>
            </ul>
          </div>

          <!-- フード -->
          <div class="p-service-page__food">
            <div class="p-service-page__food-heading">
              <h2 class="p-service-page__food-title">愛情から生まれる手作りフード</h2>
              <p class="p-service-page__food-lead">ペットライフプロムナードでは近内ファクトリーで無添加のオリジナルフードを丁寧に手づくりし、店内で販売しています</p>
            </div>

            <figure class="p-service-page__food-figure">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/message-food.webp')); ?>" alt="手作りフード" width="600" loading="lazy" />
            </figure>

            <div class="p-service-page__food-text">
              <p>ペットライフプロムナードは、</p>
              <p>ペットではなく「家族としてのペットライフ」を</p>
              <p>大切に考える場所です。</p>
              <p>ワンちゃんは、自分で食べるものを選ぶことができません。</p>
              <p>だからこそ、私たち人が「愛情の選択として食を選ぶ」ことが</p>
              <p>とても大切だと考えています。</p>
              <p>店内ファクトリーで丁寧に手づくりする無添加のオリジナルフードは、</p>
              <p>味付けをしていないだけで人も食べられるクオリティ。</p>
              <p>「何を食べるか」は、</p>
              <p>ワンちゃんの健康や寿命に大きく関わるからです。</p>
              <p>プロムナードは、</p>
              <p>フードを中心に、トリミングやペットホテルなども含めて</p>
              <p>ワンちゃんの一生に寄り添う場所でありたい。</p>
              <p>便利さ優先ではなく、日々の積み重ねを大切に、</p>
              <p>大切な家族と、穏やかな時間を歩いていくために。</p>
              <p>それが、プロムナードの想いです。</p>
            </div>

            <div class="p-service-page__food-cta">
              <a href="#" class="c-button" data-color="primary">お買い物はこちら</a>
            </div>

            <!-- フードバナー -->
            <div class="p-service-page__banner">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/banner-food.webp')); ?>" alt="ワンちゃんの健康を第一に考えました。安心無添加フード" width="1122" height="320" loading="lazy" />
            </div>

            <!-- 会社情報 -->
            <div class="p-service-page__company">
              <div class="c-section-title" data-align="center">
                <h2 class="c-section-title__main">COMPANY</h2>
              </div>
              <dl class="p-service-page__company-table">
                <div class="p-service-page__company-row">
                  <dt>法人名</dt>
                  <dd>ペットライフ プロムナード</dd>
                </div>
                <div class="p-service-page__company-row">
                  <dt>代表取締役</dt>
                  <dd>豊重 明寛</dd>
                </div>
                <div class="p-service-page__company-row">
                  <dt>所在地</dt>
                  <dd>〒810-0005 福岡市中央区清川3-16-13 1F</dd>
                </div>
                <div class="p-service-page__company-row">
                  <dt>TEL</dt>
                  <dd><a href="tel:0926004165">092-600-4165</a></dd>
                </div>
                <div class="p-service-page__company-row">
                  <dt>営業時間</dt>
                  <dd>10:00〜20:00</dd>
                </div>
                <div class="p-service-page__company-row">
                  <dt>事業内容</dt>
                  <dd>
                    <ul>
                      <li>ペットホテル</li>
                      <li>トリミング</li>
                      <li>ベイシング</li>
                      <li>生体販売</li>
                      <li>オリジナルフード製造販売</li>
                      <li>ペットグッズ取扱い</li>
                    </ul>
                  </dd>
                </div>
              </dl>
            </div>

          </div>
        </div>
      </section>

    </div>
  </div>

  <!-- アクセス -->
  <section class="p-service-access">
    <div class="p-service-access__inner l-inner">
      <div class="c-section-title" data-align="center">
        <h2 class="c-section-title__main">ACCESS</h2>
      </div>
      <div class="p-service-access__map">
        <iframe
          src="https://maps.google.com/maps?q=福岡県福岡市中央区清川3丁目16-13アスピーデ&output=embed&hl=ja&z=16"
          width="600"
          height="400"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="店舗地図"
        ></iframe>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
