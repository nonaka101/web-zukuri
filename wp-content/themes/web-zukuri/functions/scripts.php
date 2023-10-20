<?php
function zkr_enqueue_scripts() {
	// スクリプトの読み込み
  wp_enqueue_script('jquery');

  wp_enqueue_script(
		'js-common',
		get_template_directory_uri() . '/assets/js/common.js',
		array(),
		'1.0.0',
		array('in_footer' => true)
	);

  wp_enqueue_script(
		'js-dev',
		get_template_directory_uri() . '/assets/js/devUtilities.js',
		array(),
		'1.0.0',
		array('in_footer' => true)
	);

	// スタイルシートの読み込み
  wp_enqueue_style(
		'googlefonts',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Noto+Sans:wght@400;700&display=swap',
		array(),
		'1.0.0',
		'all'
	);

  wp_enqueue_style(
		'css-normalize',
		get_template_directory_uri() . '/assets/css/normalize.css',
		array(),
		'1.0.0',
		'all');

  wp_enqueue_style(
		'css-base',
    get_template_directory_uri() . '/style.css',
    array('css-normalize'),
		'1.0.0',
		'all'
	);

  wp_enqueue_style(
		'css-dev',
		get_template_directory_uri() . '/assets/css/devUtilities.css',
		array('css-base'),
		'1.0.0',
		'all'
	);
}
add_action('wp_enqueue_scripts', 'zkr_enqueue_scripts');
