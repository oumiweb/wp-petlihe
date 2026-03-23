<header class="p-header">
  <div class="p-header__inner">
    <p class="p-header__logo">
      <a href="<?php echo esc_url(home_url("/")); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/logo.svg")); ?>" alt="<?php bloginfo('name'); ?>" width="178" height="72" />
      </a>
    </p>
    <nav class="p-header__nav">
      <ul class="p-header__nav-list">
        <li class="p-header__nav-item<?php echo is_front_page() ? ' p-header__nav-item--current' : ''; ?>">
          <a href="<?php echo esc_url(home_url("/")); ?>">TOP</a>
        </li>
        <li class="p-header__nav-item<?php echo is_page('dogs') ? ' p-header__nav-item--current' : ''; ?>">
          <a href="<?php page_path("dogs"); ?>">ワンちゃん紹介</a>
        </li>
        <li class="p-header__nav-item<?php echo is_page('message') ? ' p-header__nav-item--current' : ''; ?>">
          <a href="<?php page_path("message"); ?>">店長コメント</a>
        </li>
        <li class="p-header__nav-item<?php echo is_page('news') ? ' p-header__nav-item--current' : ''; ?>">
          <a href="<?php page_path("news"); ?>">お知らせ</a>
        </li>
        <li class="p-header__nav-item<?php echo is_page('service') ? ' p-header__nav-item--current' : ''; ?>">
          <a href="<?php page_path("service"); ?>">サービス</a>
        </li>
        <li class="p-header__nav-item<?php echo is_page('voice') ? ' p-header__nav-item--current' : ''; ?>">
          <a href="<?php page_path("voice"); ?>">お客様の声</a>
        </li>
        <li class="p-header__nav-item p-header__nav-item--contact<?php echo is_page('contact') ? ' p-header__nav-item--current' : ''; ?>">
          <a href="<?php page_path("contact"); ?>">お問い合わせ</a>
        </li>
      </ul>
    </nav>
    <button class="p-header__hamburger js-hamburger" aria-label="メニューを開く" aria-expanded="false" aria-controls="drawer-menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
  <div id="drawer-menu" class="p-header__drawer js-drawer" aria-hidden="true">
    <div class="p-header__drawer-inner">
      <p class="p-header__drawer-logo">
        <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/logo.svg")); ?>" alt="<?php bloginfo('name'); ?>" width="178" height="72" />
      </p>
      <nav class="p-header__drawer-nav">
        <ul class="p-header__drawer-list">
          <li class="p-header__drawer-item">
            <a href="<?php echo esc_url(home_url("/")); ?>">TOP</a>
          </li>
          <li class="p-header__drawer-item">
            <a href="<?php page_path("dogs"); ?>">ワンちゃん紹介</a>
          </li>
          <li class="p-header__drawer-item">
            <a href="<?php page_path("message"); ?>">店長コメント</a>
          </li>
          <li class="p-header__drawer-item">
            <a href="<?php page_path("news"); ?>">お知らせ</a>
          </li>
          <li class="p-header__drawer-item">
            <a href="<?php page_path("service"); ?>">サービス</a>
          </li>
          <li class="p-header__drawer-item">
            <a href="<?php page_path("voice"); ?>">お客様の声</a>
          </li>
          <li class="p-header__drawer-item p-header__drawer-item--contact">
            <a href="<?php page_path("contact"); ?>">お問い合わせ</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
