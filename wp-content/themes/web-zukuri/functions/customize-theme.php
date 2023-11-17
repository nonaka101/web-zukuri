<?php
/**
 * テーマカスタマイザー
 * 1. 全体に関する設定
 *   + 記事について
 * 	   - 'zkr-setting-general-card-categories' : カテゴリ出力制限（デフォルト：3）
 *     - 'zkr-setting-general-card-excerpt' : 抜粋文の文字数（デフォルト：80）
 *   + ヘッダー
 *     - カスタムロゴ
 *     - タイトルテキスト出力の是非
 * 2. ウィジェットに関する設定
 *   + アドレスウィジェット
 *     - テキストエリア（備考？）
 *     - メールアドレス
 *     - ユーティリティリンク集(SNS)
 */
function zkr_theme_customizer($wp_customize){

	// 「全体に関する設定」
	$wp_customize->add_panel(
		'zkr-setting-general',
		array(
			'title' => '全体に関する設定',
			'priority' => 21,
		)
	);

	$wp_customize->add_section(
		'zkr-setting-general-card',
		array(
			'title' => '記事について',
			'panel' => 'zkr-setting-general',
			'priority' => 1,
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-general-card-excerpt',
		array(
			'default' => '80',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-general-card-excerpt-ctrl',
			array(
				'label' => '抜粋文の文字数',
				'description' => 'カードに含まれる抜粋文の文字数を制限します。' . "\n" .
												'既定値は 80で、0 にすると抜粋文を出力しません。',
				'section' => 'zkr-setting-general-card',
				'settings' => 'zkr-setting-general-card-excerpt',
				'priority' => 1,
				'type' => 'range',
				'input_attrs' => array(
					'min' => 0,
					'max' => 160,
					'step' => 20,
				),
			)
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-general-card-categories',
		array(
			'default' => '3',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-general-card-categories-ctrl',
			array(
				'label' => 'カテゴリ出力の上限数',
				'description' => 'カード下部のカテゴリ出力を制限します' . "\n" .
												'既定値は 3で、0 にするとカテゴリを出力しません。',
				'section' => 'zkr-setting-general-card',
				'settings' => 'zkr-setting-general-card-categories',
				'priority' => 2,
				'type' => 'range',
				'input_attrs' => array(
					'min' => 0,
					'max' => 10,
					'step' => 1,
				),
			)
		)
	);
}
add_action('customize_register', 'zkr_theme_customizer');
