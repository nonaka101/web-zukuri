<aside class="ly_mainArea_rightSidebar" id="anchor_desktopSubMenu" tabindex="-1">
	<div class="bl_tagMenu">
		<ul class="bl_tagMenu_list">
			<li class="bl_tagMenu_item">
				<a class="bl_tagMenu_link" href="<?php echo esc_url(home_url()).'/zkr-searchpage'; ?>">サイト内検索</a>
			</li>
			<!-- /.bl_tagMenu_item -->
		</ul>
		<!-- /.bl_tagMenu_list -->
	</div>
	<!-- /.bl_tagMenu -->

	<?php get_template_part(
		'template-parts/parts',
		'menu',
		array(
			'loc' => 'sub-menu',
			'name' => 'サブメニュー',
			'id' => 'sub_menu_in_sidebar',
			)
		);
	?>

	<?php get_template_part(
		'template-parts/parts',
		'categories-and-archives'
		);
	?>

</aside>
<!-- /.ly_mainArea_rightSidebar -->
