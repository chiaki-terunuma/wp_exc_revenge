<?php

/**
 * 事例紹介（カスタムポスト）の追加
 */
function add_case_custom_post_type() {
  register_post_type('case', array(
    'labels' => array(
      'name'               => '事例紹介',
      'singular_name'      => '事例紹介',
      'menu_name'          => '事例紹介',
      'menu_admin_bar'     => '事例紹介',
      'all_items'          => '事例一覧',
      'add_new'            => '事例を追加',
      'add_new_item'       => '事例を追加',
      'edit_item'          => '事例を編集する',
      'new_item'           => '事例を追加',
      'view_item'          => '事例紹介ページを表示',
      'search_items'       => '事例を検索',
    ),
    'public'        => true,
    'has_archive'   => true,
    'menu_position' => 5,
		'menu_icon'     => 'dashicons-format-aside',
    'show_ui'       => true,
    'show_in_menu'  => true,
    'show_in_rest'  => true,
    'supports'      => array('title', 'editor', 'auther', 'thumbnail', 'custom-fields'),
  ));
}
add_action('init', 'add_case_custom_post_type');