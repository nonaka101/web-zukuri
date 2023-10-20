<?php

function zkr_theme_setup() {
  // タイトルタグを出力
  add_theme_support('title-tag');
  // カスタムロゴを追加
  add_theme_support('custom-logo');
  // アイキャッチ画像の出力機能を有効化
  add_theme_support('post-thumbnails');
  // 検索フォームのマークアップをHTML5に対応
  add_theme_support('html5', array('search-form'));

  // アイキャッチ画像サイズの指定（ここで決めたサイズ名は、`the_post_thumbnails()`関数でキーワードとして使用）
	/* ここどうする？
  add_image_size(name: 'page_eyecatch', width: 1100, height: 610, crop: true);
  // アーカイブページのサムネイル画像
  add_image_size(name: 'archive_thumbnail', width: 200, height: 150, crop: true);
	*/
	
  // カスタムメニューの有効化（識別子と名前の登録のみここで行っている）
  register_nav_menus(
		array(
			'main-menu' => 'メインメニュー',
			'sub-menu' => 'サブメニュー',
		)
	);
}
add_action('after_setup_theme', 'zkr_theme_setup');

// テーマカスタマイザーを有効化（カスタムロゴ等のため）
add_action( 'customize_register', '__return_true' );
