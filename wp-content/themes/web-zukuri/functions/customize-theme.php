<?php
/**
 * テーマカスタマイザー
 * 1. 『サイト基本情報』セクション
 * 	 - 'zkr-setting-card-categories' : カテゴリ出力制限（デフォルト：3）
 *   - 'zkr-setting-card-excerpt' : 抜粋文の文字数（デフォルト：80）
 *   + ヘッダー
 *     - カスタムロゴ
 *     - タイトルテキスト出力の是非
 * 2. 『ユーティリティ ウィジェットの設定』セクション
 *   - 'zkr-setting-utils-text' : テキストエリア（備考等に使用を想定）
 *   - 'zkr-setting-utils-ex(1-5)txt' : 外部サイト名
 *   - 'zkr-setting-utils-ex(1-5)url' : 外部URL
 *   - 'zkr-setting-utils-address' : 住所
 *   - 'zkr-setting-utils-mail' : メールアドレス
 *   - 'zkr-setting-utils-tel' : 電話番号
 *   - 'zkr-setting-utils-copyright' : コピーライト文
 */
function zkr_theme_customizer($wp_customize){

	// 『サイト基本情報』セクション
	$wp_customize->add_setting(
		'zkr-setting-card-excerpt',
		array(
			'default' => '80',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-card-excerpt-ctrl',
			array(
				'label' => 'カードの抜粋文字数',
				'description' => 'カードに含まれる抜粋文の文字数を制限します。',
				'section' => 'title_tagline',
				'settings' => 'zkr-setting-card-excerpt',
				'priority' => 310,
				'type' => 'select',
				'choices' => array(
					'0' => '0（出力しない）',
					'20' => '20',
					'40' => '40',
					'60' => '60',
					'80' => '80（デフォルト）',
					'100' => '100',
					'120' => '120',
					'140' => '140',
					'160' => '160',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-card-categories',
		array(
			'default' => '3',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-card-categories-ctrl',
			array(
				'label' => 'カードのカテゴリ出力上限数',
				'description' => 'カード下部のカテゴリ出力を制限します',
				'section' => 'title_tagline',
				'settings' => 'zkr-setting-card-categories',
				'priority' => 311,
				'type' => 'select',
				'choices' => array(
					'0' => '0（出力しない）',
					'1' => '1',
					'2' => '2',
					'3' => '3（デフォルト）',
					'4' => '4',
					'5' => '5',
					'6' => '6',
					'7' => '7',
					'8' => '8',
					'9' => '9',
					'10' => '10',
				),
			)
		)
	);

	// 『ユーティリティ ウィジェットの設定』セクション
	$wp_customize->add_section(
		'zkr-setting-utils',
		array(
			'title' => 'ユーティリティ ウィジェットの設定',
			'priority' => 160,
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-utils-text',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-utils-text-ctrl',
			array(
				'label' => 'テキスト',
				'description' => 'ウィジェットに入れておきたい文章がある場合は、ここに記入してください',
				'section' => 'zkr-setting-utils',
				'settings' => 'zkr-setting-utils-text',
				'priority' => 1,
				'type' => 'textarea',
			)
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-utils-ex1txt',
		array('default' => '',)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-utils-ex1txt-ctrl',
			array(
				'label' => '外部リンク１ サイト名',
				'description' => '※URLと両方記入した場合にのみ機能します、それ以外では出力しません',
				'section' => 'zkr-setting-utils',
				'settings' => 'zkr-setting-utils-ex1txt',
				'priority' => 11,
				'type' => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-utils-ex1url',
		array('default' => '',)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-utils-ex1url-ctrl',
			array(
				'label' => '外部リンク１ URL',
				'section' => 'zkr-setting-utils',
				'settings' => 'zkr-setting-utils-ex1url',
				'priority' => 12,
				'type' => 'url',
			)
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-utils-ex2txt',
		array('default' => '',)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-utils-ex2txt-ctrl',
			array(
				'label' => '外部リンク２ サイト名',
				'section' => 'zkr-setting-utils',
				'settings' => 'zkr-setting-utils-ex2txt',
				'priority' => 13,
				'type' => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-utils-ex2url',
		array('default' => '',)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-utils-ex2url-ctrl',
			array(
				'label' => '外部リンク２ URL',
				'section' => 'zkr-setting-utils',
				'settings' => 'zkr-setting-utils-ex2url',
				'priority' => 14,
				'type' => 'url',
			)
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-utils-ex3txt',
		array('default' => '',)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-utils-ex3txt-ctrl',
			array(
				'label' => '外部リンク３ サイト名',
				'section' => 'zkr-setting-utils',
				'settings' => 'zkr-setting-utils-ex3txt',
				'priority' => 15,
				'type' => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-utils-ex3url',
		array('default' => '',)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-utils-ex3url-ctrl',
			array(
				'label' => '外部リンク３ URL',
				'section' => 'zkr-setting-utils',
				'settings' => 'zkr-setting-utils-ex3url',
				'priority' => 16,
				'type' => 'url',
			)
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-utils-ex4txt',
		array('default' => '',)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-utils-ex4txt-ctrl',
			array(
				'label' => '外部リンク４ サイト名',
				'section' => 'zkr-setting-utils',
				'settings' => 'zkr-setting-utils-ex4txt',
				'priority' => 17,
				'type' => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-utils-ex4url',
		array('default' => '',)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-utils-ex4url-ctrl',
			array(
				'label' => '外部リンク４ URL',
				'section' => 'zkr-setting-utils',
				'settings' => 'zkr-setting-utils-ex4url',
				'priority' => 18,
				'type' => 'url',
			)
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-utils-ex5txt',
		array('default' => '',)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-utils-ex5txt-ctrl',
			array(
				'label' => '外部リンク５ サイト名',
				'section' => 'zkr-setting-utils',
				'settings' => 'zkr-setting-utils-ex5txt',
				'priority' => 19,
				'type' => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-utils-ex5url',
		array('default' => '',)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-utils-ex5url-ctrl',
			array(
				'label' => '外部リンク５ URL',
				'section' => 'zkr-setting-utils',
				'settings' => 'zkr-setting-utils-ex5url',
				'priority' => 20,
				'type' => 'url',
			)
		)
	);


	$wp_customize->add_setting(
		'zkr-setting-utils-address',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-utils-address-ctrl',
			array(
				'label' => '住所',
				'description' => '※出力しない場合には、空欄にしてください',
				'section' => 'zkr-setting-utils',
				'settings' => 'zkr-setting-utils-address',
				'priority' => 31,
				'type' => 'textarea',
			)
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-utils-mail',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-utils-mail-ctrl',
			array(
				'label' => 'メールアドレス',
				'description' => '※出力しない場合には、空欄にしてください',
				'section' => 'zkr-setting-utils',
				'settings' => 'zkr-setting-utils-mail',
				'priority' => 32,
				'type' => 'email',
			)
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-utils-tel',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-utils-tel-ctrl',
			array(
				'label' => '電話番号',
				'description' => '※出力しない場合には、空欄にしてください',
				'section' => 'zkr-setting-utils',
				'settings' => 'zkr-setting-utils-tel',
				'priority' => 33,
				'type' => 'tel',
			)
		)
	);

	$wp_customize->add_setting(
		'zkr-setting-utils-copyright',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zkr-setting-utils-copyright-ctrl',
			array(
				'label' => 'コピーライト文',
				'description' => '最後部のコピーライト文用のテキストエリアです',
				'section' => 'zkr-setting-utils',
				'settings' => 'zkr-setting-utils-copyright',
				'priority' =>41,
				'type' => 'textarea',
			)
		)
	);
}
add_action('customize_register', 'zkr_theme_customizer');
