<?php
$func_paths = array(
	// 初期設定
	'functions/init.php',

	// 各種スクリプトを呼び出す
	'functions/scripts.php',

	// カスタマイズ（WordPressのコアに関するもの）
	'functions/customize-core.php',

	// カスタマイズ（テーマカスタマイザーなど、テーマに関するもの）
	'functions/customize-theme.php',

	// 自作関数（ページネーションやアーカイブをHTML出力する）
	'functions/theme-func.php',

	// ブロック関係
	'functions/block.php',
);

foreach ($func_paths as $path){
	require_once locate_template($path, true);
}
