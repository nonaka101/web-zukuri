<?php

// サイト内検索の際、表示件数を反映（メインクエリでのポスト取得時のフックを使用）
function my_pre_get_posts( $query ) {
  // メインクエリ外（管理画面含む）は除外
  if ( is_admin() || !$query->is_main_query() ) {
    return;
  }
  // search.php を使用時、フォームの表示件数(name='n') の情報があればクエリに反映
  if ( $query->is_search() ) {
    if(isset($_GET['n'])){
      $query->set('posts_per_page', intval($_GET['n']));
    }
  }
}
add_action('pre_get_posts','my_pre_get_posts');




// メニューのカスタマイズ
// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args){
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1,3);

// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args){
  if (isset($args->add_a_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);



function get_flexible_excerpt($number){
  // 抜粋文を取得（無ければ本文の内容を取得）
  $value = get_the_excerpt();
  // 第三引数は末尾の文字列
  $value = wp_trim_words(
		$value,
		$number,
		''
	);
  return $value;
}

// 抜粋に改行コードを適用させるためのコード
function apply_excerpt_br($value){
  return nl2br($value);
}
add_filter('get_the_excerpt', 'apply_excerpt_br');
