<?php

/**
 * カスタム投稿タイプ: dogs（ワンちゃん紹介）
 */
function petlife_register_cpt_dogs()
{
  $labels = [
    'name'               => 'ワンちゃん紹介',
    'singular_name'      => 'ワンちゃん',
    'add_new_item'       => 'ワンちゃんを追加',
    'edit_item'          => 'ワンちゃんを編集',
    'new_item'           => '新規ワンちゃん',
    'view_item'          => 'ワンちゃんを表示',
    'search_items'       => 'ワンちゃんを検索',
    'not_found'          => 'ワンちゃんが見つかりませんでした',
    'not_found_in_trash' => 'ゴミ箱にワンちゃんはいません',
  ];

  register_post_type('dogs', [
    'labels'      => $labels,
    'public'      => true,
    'has_archive' => true,
    'rewrite'     => [
      'slug'       => 'dogs',
      'with_front' => false,
    ],
    'supports'      => ['title'],
    'show_in_rest'  => true,
    'menu_icon'     => 'dashicons-pets',
  ]);
}
add_action('init', 'petlife_register_cpt_dogs');

/**
 * dogs の個別URLにアクセスされたらアーカイブにリダイレクト
 */
function petlife_redirect_dogs_single()
{
  if (is_singular('dogs')) {
    wp_redirect(get_post_type_archive_link('dogs'), 301);
    exit;
  }
}
add_action('template_redirect', 'petlife_redirect_dogs_single');
