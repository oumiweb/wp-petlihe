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
 * タクソノミー: dog_status（ワンちゃんのステータス）
 */
function petlife_register_taxonomy_dog_status()
{
  $labels = [
    'name'          => 'ステータス',
    'singular_name' => 'ステータス',
    'add_new_item'  => 'ステータスを追加',
    'edit_item'     => 'ステータスを編集',
    'search_items'  => 'ステータスを検索',
    'all_items'     => 'すべてのステータス',
  ];

  register_taxonomy('dog_status', ['dogs'], [
    'labels'            => $labels,
    'public'            => false,
    'show_ui'           => true,
    'hierarchical'      => true,
    'show_in_rest'      => true,
  ]);
}
add_action('init', 'petlife_register_taxonomy_dog_status');

/**
 * dogsアーカイブのメインクエリを6件/ページに統一
 */
function petlife_dogs_archive_query($query)
{
  if (!is_admin() && $query->is_main_query() && $query->is_post_type_archive('dogs')) {
    $query->set('posts_per_page', 6);
    $query->set('tax_query', [
      [
        'taxonomy' => 'dog_status',
        'field'    => 'slug',
        'terms'    => 'decided',
        'operator' => 'NOT IN',
      ],
    ]);
  }
}
add_action('pre_get_posts', 'petlife_dogs_archive_query');

/**
 * dogs個別ページへのアクセスをアーカイブにリダイレクト
 */
function petlife_dogs_single_redirect()
{
  if (is_singular('dogs')) {
    wp_redirect(get_post_type_archive_link('dogs'), 301);
    exit;
  }
}
add_action('template_redirect', 'petlife_dogs_single_redirect');

