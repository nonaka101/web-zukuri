<nav class="ly_mainArea_leftSidebar" id="anchor_desktopMainMenu" tabindex="-1">
	<div class="bl_tagMenu">
		<ul class="bl_tagMenu_list">
			<li class="bl_tagMenu_item">
				<a class="bl_tagMenu_link" href="<?php echo esc_url(home_url()); ?>">Home</a>
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
			'loc' => 'main-menu',
			'name' => 'メインメニュー',
			'id' => 'main_menu_in_sidebar',
			)
		);
	?>

</nav>
<!-- /.ly_mainArea_leftSidebar -->
