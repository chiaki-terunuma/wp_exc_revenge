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
add_theme_support('post-thumbnails');

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

/**
 * 自作カスタムフィールド
 * 参考: https://leihauoli.atlassian.net/wiki/spaces/ENG/pages/1096155170
 */
function create_custom_fields(){
  //どのページに何のカスタムフィールドを出すかの定義
  if(get_post_type() === 'case'){
    add_meta_box(
      'case_TDK', //ID　（箱<div>のidに指定される）
      'TDK', //タイトル
      'insert_custom_fields', //下で定義した関数①が入る
      null,
      'normal',
    );

    add_meta_box(
      'case_shop', //ID　（箱<div>のidに指定される）
      '店舗情報', //タイトル
      'insert_custom_fields_shop',
      null,
      'normal',
    );
  }
}
add_action('add_meta_boxes', 'create_custom_fields');

function insert_custom_fields() { //関数①
  global $post;
  echo 'Title:<input type="text" name="case_title" value="'.get_post_meta($post->ID, 'case_title', true).'" />';
  echo 'Description:<input type="text" name="case_description" value="'.get_post_meta($post->ID, 'case_description', true).'" />';
}

function insert_custom_fields_shop() {
  global $post;
  echo '店舗名：<input type="text" name="case_shop_name" value="'.get_post_meta($post->ID, 'case_shop_name', true).'" />';
  echo '店舗住所：<input type="text" name="case_shop_address" value="'.get_post_meta($post->ID, 'case_shop_address', true).'" />';
}

function save_custom_fields($post_id){
  // オートセーブを防ぐ
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return $id;
  }
  // クイックポストの時は空欄で保存されるから、それを防ぐ
  if (isset($_POST['action']) && $_POST['action'] == 'inline-save') {
    return $id;
  }
  //保存

  //title
  if(!empty($_POST['case_title'])){ //書き換えたい値が空じゃない場合
    update_post_meta(
      $post_id, //投稿の番号
      'case_title', //inputのname属性
      $_POST['case_title'] // 書き換えたい値
    );
  }else{ //書き換えたい値が空の場合
    delete_post_meta(
      $post_id,
      'case_title'
    );
  }

  //description
  if(!empty($_POST['case_description'])){ //書き換えたい値が空じゃない場合
    update_post_meta(
      $post_id, //投稿の番号
      'case_description', //inputのname属性
      $_POST['case_description'] // 書き換えたい値
    );
  }else{ //書き換えたい値が空の場合
    delete_post_meta(
      $post_id,
      'case_description'
    );
  }

  //店舗名
  if(!empty($_POST['case_shop_name'])){ //書き換えたい値が空じゃない場合
    update_post_meta(
      $post_id, //投稿の番号
      'case_shop_name', //inputのname属性
      $_POST['case_shop_name'] // 書き換えたい値
    );
  }else{ //書き換えたい値が空の場合
    delete_post_meta(
      $post_id,
      'case_shop_name'
    );
  }

  //店舗住所
  if(!empty($_POST['case_shop_address'])){ //書き換えたい値が空じゃない場合
    update_post_meta(
      $post_id, //投稿の番号
      'case_shop_address', //inputのname属性
      $_POST['case_shop_address'] // 書き換えたい値
    );
  }else{ //書き換えたい値が空の場合
    delete_post_meta(
      $post_id,
      'case_shop_address'
    );
  }
}
add_action('save_post', 'save_custom_fields');