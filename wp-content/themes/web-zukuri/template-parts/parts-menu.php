<?php
echo str_replace('sub-menu', 'sub-menu bl_tagMenu_list bl_tagMenu_list__indented',
  wp_nav_menu(
		array(
			'theme_location' => $args['loc'],
			'container' => 'div',
			'container_class' => 'bl_tagMenu',
			'menu_class' => 'bl_tagMenu_list',
			'item_wrap' => 'div',
			'container_aria_label' => 'メニュー',
			'depth' => 0,
			// functions.php でカスタム追加した引数
			'add_li_class' => 'bl_tagMenu_item', // liタグへclass追加
			'add_a_class' => 'bl_tagMenu_link', // aタグへclass追加
			// 一旦HTMLコードを文字列として受け取り、置換した後 echo で返す以上、ここは false
			'echo' => false,
    )
  )
);
