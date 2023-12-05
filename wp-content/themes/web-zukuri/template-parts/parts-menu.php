<div class="bl_tagMenu">
	<span class="bl_tagMenu_title">
		<?php echo $args['name'] ?>
	</span>

	<?php
	// コンテナなし、li要素やa要素にクラス付けした状態でメニューを出力（ul要素）
	echo str_replace('sub-menu', 'sub-menu bl_tagMenu_list bl_tagMenu_list__indented',
		wp_nav_menu(
			array(
				'theme_location' => $args['loc'],
				'menu_class' => 'bl_tagMenu_list',
				'depth' => 0,
				'container' => false,
				// functions.php でカスタム追加した引数
				'add_li_class' => 'bl_tagMenu_item', // liタグへclass追加
				'add_a_class' => 'bl_tagMenu_link', // aタグへclass追加
				// 一旦HTMLコードを文字列として受け取り、置換した後 echo で返す以上、ここは false
				'echo' => false,
			))
	);
	?>

	<!-- /.bl_tagMenu_list -->
</div>
<!-- /.bl_tagMenu -->
