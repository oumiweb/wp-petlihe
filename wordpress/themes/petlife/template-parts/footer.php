<footer class="p-footer">
  <div class="p-footer__inner">
    <!-- ヘッダーと同じ構造 -->
    <div class="p-footer__main">
      <p class="p-footer__logo">
        <a href="<?php echo esc_url(home_url("/")); ?>">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/logo.svg")); ?>" alt="<?php bloginfo('name'); ?>" width="160" height="40" />
        </a>
      </p>
      <nav class="p-footer__nav">
        <ul class="p-footer__nav-list">
          <li class="p-footer__nav-item"><a href="<?php echo esc_url(home_url("/")); ?>">TOP</a></li>
          <li class="p-footer__nav-item"><a href="<?php page_path("dogs"); ?>">ワンちゃん紹介</a></li>
          <li class="p-footer__nav-item"><a href="<?php page_path("message"); ?>">店長コメント</a></li>
          <li class="p-footer__nav-item"><a href="<?php page_path("news"); ?>">お知らせ</a></li>
          <li class="p-footer__nav-item"><a href="<?php page_path("service"); ?>">サービス</a></li>
          <li class="p-footer__nav-item"><a href="<?php page_path("voice"); ?>">お客様の声</a></li>
          <li class="p-footer__nav-item"><a href="<?php page_path("contact"); ?>">contact</a></li>
        </ul>
      </nav>
    </div>
    <!-- コピーライト＋SNS -->
    <div class="p-footer__bottom">
      <p class="p-footer__copyright">&copy; petlife.promenade</p>
      <ul class="p-footer__sns">
        <li class="p-footer__sns-item">
          <a href="#" aria-label="X（旧Twitter）">
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/x.webp")); ?>" alt="X" width="50" height="50" loading="lazy" />
          </a>
        </li>
        <li class="p-footer__sns-item">
          <a href="#" aria-label="YouTube">
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/youtube.webp")); ?>" alt="YouTube" width="50" height="50" loading="lazy" />
          </a>
        </li>
        <li class="p-footer__sns-item">
          <a href="#" aria-label="Threads">
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/threads.webp")); ?>" alt="Threads" width="50" height="50" loading="lazy" />
          </a>
        </li>
        <li class="p-footer__sns-item">
          <a href="#" aria-label="Instagram">
            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/instagram.webp")); ?>" alt="Instagram" width="50" height="50" loading="lazy" />
          </a>
        </li>
      </ul>
    </div>
    <!-- プライバシーポリシー -->
    <div class="p-footer__policy">
      <a href="<?php page_path("privacy"); ?>" class="p-footer__policy-link">プライバシーポリシー</a>
      <p class="p-footer__policy-text">本ページは、中小企業庁「事業再生補助金」採択事業として実施しております。</p>
    </div>
  </div>
</footer>
