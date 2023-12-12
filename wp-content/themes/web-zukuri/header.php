<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
	<meta charset="<?php bloginfo(show: 'charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open() ; ?>
	<div class="ly_mainArea">
		<header class="ly_mainArea_header">
			<div class="bl_header">
				<a class="bl_header_siteTitle" href="<?php echo esc_url(home_url()); ?>" id="js_anchor_header">
					<?php
						// カスタムロゴの出力（ない場合はダミーを出力）
						if(has_custom_logo()){
							$custom_logo_id = get_theme_mod('custom_logo');
							$image = wp_get_attachment_image_src($custom_logo_id);
							$mylogo = $image[0];
						} else {
							$mylogo = get_template_directory_uri() . './assets/images/Dummy_logo.PNG';
						}
						echo '<img src="'.$mylogo.'" alt="サイトのロゴ">' . "\n";

						// トップページのみ h1タグ、それ以外は spanタグでサイトタイトルを構築
						$tagname = (is_home() || is_front_page()) ? 'h1' : 'span' ;
						echo '<'.$tagname.'>'.get_bloginfo('name').'</'.$tagname.'>'."\n";
					?>
				</a>
				<!-- /.bl_header_siteTitle -->

				<nav class="bl_header_mobileMenu" id="anchor_mobileMenu" aria-label="メニュー" tabindex="-1">
					<a class="bl_header_btnIcon" href="<?php echo esc_url(url: home_url()).'/zkr-searchpage'; ?>">
						<svg role="graphics-symbol img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
							height="24">
							<path d="M21 20.5L15 14.5C16.2 13.2 16.9 11.4 16.9 9.5C17 5.4 13.6 2 9.5 2C5.4 2 2 5.4
									2 9.5C2 13.6 5.3 17 9.5 17C11.2 17 12.7 16.4 14 15.5L20 21.5L21 20.5ZM3.5
									9.5C3.5 6.2 6.2 3.5 9.5 3.5C12.8 3.5 15.5 6.2 15.5 9.5C15.5 12.8 12.8 15.5
									9.5 15.5C6.2 15.5 3.5 12.8 3.5 9.5Z">
							</path>
						</svg>
						検索
					</a>
					<!-- /.bl_header_btnIcon -->
					<button type="button" aria-controls="menu" id="menu-button" class="bl_header_btnIcon">
						<svg role="graphics-symbol img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
							height="24">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M21 5.5H3V7H21V5.5ZM21 11.2998H3V12.7998H21V11.2998ZM3 17H21V18.5H3V17Z"></path>
						</svg>
						メニュー
					</button>
					<!-- /.bl_header_btnIcon -->
				</nav>
				<!-- /.bl_header_mobileMenu -->
			</div>
			<!-- /.bl_header -->
		</header>
		<!-- /.ly_mainArea_header -->

		<nav class="bl_blockSkip_wrapper" aria-label="ページ内リンク集">
			<div class="bl_blockSkip">
				<p class="bl_blockSkip_title">ブロックスキップ</p>
				<p class="bl_blockSkip_description">各種ページ位置に移動できます</p>
				<ul class="bl_blockSkip_linkList">
					<li class="bl_blockSkip_linkItem">
						<a href="#anchor_mainContent" class="el_link">このページの本文</a>
					</li>
					<!-- /.bl_blockSkip_linkItem -->
					<li class="bl_blockSkip_linkItem">
						<a href="#anchor_footer" class="el_link">フッター</a>
					</li>
					<!-- /.bl_blockSkip_linkItem -->
					<li class="bl_blockSkip_linkItem bl_blockSkip_linkItem__isMobile">
						<a href="#anchor_mobileMenu" class="el_link">メインメニュー</a>
					</li>
					<!-- /.bl_blockSkip_linkItem -->
					<?php if(is_front_page() || is_home()): // トップページのみ左サイドバーが存在する ?>
						<li class="bl_blockSkip_linkItem bl_blockSkip_linkItem__isDesktop">
							<a href="#anchor_desktopMainMenu" class="el_link">メインメニュー</a>
						</li>
						<!-- /.bl_blockSkip_linkItem -->
					<?php endif; ?>
					<li class="bl_blockSkip_linkItem bl_blockSkip_linkItem__isDesktop">
						<a href="#anchor_desktopSubMenu" class="el_link">サイドメニュー</a>
					</li>
					<!-- /.bl_blockSkip_linkItem -->
				</ul>
				<!-- /.bl_blockSkip_linkList -->
			</div>
			<!-- /.bl_blockSkip -->
		</nav>
		<!-- /.bl_blockSkip_wrapper -->

		<dialog class="ly_dialog_wrapper" id="menu">
			<div class="ly_dialog">
				<div class="bl_menuHeader">
					<h2 class="bl_menuHeader_title">メニュー</h2>
					<button class="bl_menuHeader_btnIcon" type="button" onclick="closeDialog()">
						<svg role="graphics-symbol img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 24 24" width="24" height="24">
							<path stroke-width="1.4286" d="M 22,4.0142857 19.985715,2 12,9.9857149 4.0142857,2 2,4.0142857 9.9857149,12 2,19.985715 4.0142857,22 12,14.014286 19.985715,22 22,19.985715 14.014286,12 Z"/>
						</svg>
						閉じる
					</button>
				</div>
				<!-- /.bl_menuHeader -->

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
						'id' => 'main_menu_in_dialog',
						)
					);
				?>

				<hr>

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
						'id' => 'sub_menu_in_dialog',
						)
					);
				?>
				<?php get_template_part(
					'template-parts/parts',
					'categories-and-archives'
					);
				?>

				<button class="el_btn el_btn__primary" type="button" onclick="closeDialog()">メニューを閉じる</button>
			</div>
			<!-- /.ly_dialog -->
		</dialog>
		<!-- /.ly_dialog_wrapper -->
