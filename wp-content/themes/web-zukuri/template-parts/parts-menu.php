<div class="bl_tagMenu">
	<span
		class="bl_tagMenu_title"
		aria-hidden="true"
		<?php
		// 引数からのIDを spanにつけ、後ろの ul要素にアクセシブルな名前にする
		$idAria = $args['id'];
		echo 'id="' . $idAria . '"';
		?>
	>
		<?php
			// 管理画面上のメニュー名を出力（登録がなければデフォルト名）
			$locs = get_nav_menu_locations();
			$menuId = $locs[$args['loc']];
			if($menuId){
				$menu = wp_get_nav_menu_object($menuId);
				echo $menu->name;
			} else {
				echo $args['name'];
			}
		?>
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
				'items_wrap' => '<ul class="%2$s" role="list" aria-labelledby="'.$idAria.'">%3$s</ul>',
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
