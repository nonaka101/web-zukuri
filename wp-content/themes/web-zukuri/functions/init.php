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
	// 画像サイズ（トップ、投稿ページのサムネイル（アス比 16:9）で取りうるサイズを考慮）
	add_image_size('thumbnail', 880, 495, true);

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
