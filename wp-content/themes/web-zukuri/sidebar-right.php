<aside class="ly_mainArea_rightSidebar" id="anchor_desktopSubMenu">
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
		array('loc'=>'sub-menu')
		);
	?>
	
	<?php get_template_part(
		'template-parts/parts',
		'categories-and-archives'
		);
	?>

	<section>
		<h2 class="el_header__xs">アドレス</h2>
		<address>〒000-0000 A県B市C区D町123-4</address>
	</section>

	<?php get_template_part(
		'template-parts/parts',
		'sns'
		);
	?>

</aside>
<!-- /.ly_mainArea_rightSidebar -->
