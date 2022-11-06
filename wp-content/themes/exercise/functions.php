<?php

/* ===================================================================================================================
WordPressデフォルト表示内容の編集
=================================================================================================================== */
/* ---------------------------------------------
* 管理画面以外にadminbarを表示しない
------------------------------------------------*/
if (! is_admin()) {
  show_admin_bar(false);
}





/*==================================================
CSS, JS
==================================================*/
function add_css_js_files() {
  //CSSの読み込み
  wp_enqueue_style('style.css', get_stylesheet_uri());

  if(is_front_page()){
    wp_enqueue_style('top.css', get_template_directory_uri().'/assets/css/top.css');
  }else if(is_singular('case')){
    wp_enqueue_style('case.css', get_template_directory_uri().'/assets/css/case.css');
  }
  //JSの読み込み
  //wp_enqueue_script('main.js', get_template_directory_uri().'/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'add_css_js_files');




/*==================================================
事例紹介（カスタムポスト）の追加
==================================================*/
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