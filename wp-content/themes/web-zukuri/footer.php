	</div>
	<!-- /.ly_mainArea -->
	<footer class="ly_footer" id="anchor_footer" tabindex="-1">
		<div class="ly_footer_widgetArea">
			<div class="ly_footer_widget ly_footer_widget__3fr">
				<div class="ly_footer_headerTitle">
					<?php // 似たコードが header.php にもあるが、imgのクラスが違う
						if( has_custom_logo() ){
							$custom_logo_id = get_theme_mod('custom_logo');
							$image = wp_get_attachment_image_src($custom_logo_id);
							$mylogo = $image[0];
						} else {
							$mylogo = get_template_directory_uri() . './assets/images/Dummy_logo.PNG';
						}
						echo '<img class="ly_footer_headerLogo" src="'.$mylogo.'" alt="Logo">'."\n";
						echo '<span>'.get_bloginfo('name').'</span>'."\n";
					?>
				</div>
				<!-- /.ly_footer_headerTitle -->

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
						'id' => 'main_menu_in_footer',
						)
					);
				?>
			</div>
			<!-- /.ly_footer_widget ly_footer_widget__3fr -->

			<div class="ly_footer_widget ly_footer_widget__6fr">
				<h2 class="ly_footer_headerTitle">最新の投稿</h2>
				<div class="bl_cardUnit bl_cardUnit__1col">

				<?php
				// 最新の投稿3件を取り出し、カード形式で出力
				$sq_args = array(
					'post__not_in' => get_option('sticky_posts'),
					'post_type' => 'post',
					'posts_per_page' => 3,
					'orderby' => 'date',
					'ignore_sticky_posts' => 1,
				);
				$sq = new WP_Query($sq_args);
				if($sq -> have_posts()):
				?>
					<?php
					while($sq -> have_posts()){
						$sq -> the_post();
						get_template_part('template-parts/loop','post',array('is_footer'=>true));
					}
					wp_reset_postdata();
					?>
				<?php endif; ?>

				</div>
			</div>
			<!-- /.ly_footer_widget ly_footer_widget__6fr -->

			<div class="ly_footer_widget ly_footer_widget__3fr">
				<h2 class="ly_footer_headerTitle">ユーティリティ</h2>
				<?php
				$utilText = get_theme_mod('zkr-setting-utils-text', '');
				if(strlen($utilText) > 0):
				?>
					<p class="el_memo">
						<?php echo nl2br($utilText); ?>
					</p>
				<?php endif; ?>

				<?php
				// カスタマイザー上で外部URL（テキストとURLセットで登録されているもの）を取得
				$arr = [];
				for($i = 1; $i <= 5; $i++){
					$txt = get_theme_mod('zkr-setting-utils-ex'.$i.'txt', '');
					$url = get_theme_mod('zkr-setting-utils-ex'.$i.'url', '');
					if(($txt) && ($url)){
						array_push($arr, array('txt'=>$txt, 'url'=>$url));
					}
				}
				if($arr):
				?>
					<div class="bl_tagMenu">
						<span
							class="bl_tagMenu_title"
							aria-hidden="true"
							id="external_link_in_footer"
						>
							外部リンク
						</span>
						<ul
							class="bl_tagMenu_list"
							role="list"
							aria-labelledby="external_link_in_footer"
						>

						<?php
						// 取得した外部URLを出力
						foreach($arr as $element){
							echo '<li class="bl_tagMenu_item">';
							echo '<a class="bl_tagMenu_link" href="' . esc_url($element['url']) . '">';
							echo esc_html($element['txt']);
							echo '</a></li>' . "\n" . '<!-- /.bl_tagMenu_item -->';
						}
						?>

						</ul>
						<!-- /.bl_tagMenu_list -->
					</div>
					<!-- /.bl_tagMenu -->
				<?php endif; ?>

				<?php get_template_part(
					'template-parts/parts',
					'menu',
					array(
						'loc' => 'footer-menu',
						'name' => 'サイトナビゲーション',
						'id' => 'footer_menu_in_footer',
						)
					);
				?>

				<?php
				// カスタマイザー上で、何かしらのアドレス関係が登録されていれば出力
				$address = get_theme_mod('zkr-setting-utils-address', '');
				$tel = get_theme_mod('zkr-setting-utils-tel', '');
				$mail = get_theme_mod('zkr-setting-utils-mail', '');
				if(($address) || ($tel) || ($mail)):
				?>
					<div class="bl_address">
						<h3 class="bl_address_title">アドレス</h3>

						<?php if(strlen($address) > 0): ?>
							<address class="bl_address_item">
								<span class="bl_address_name">住所</span>
								<?php echo nl2br($address); ?>
							</address>
							<!-- /.bl_address_item -->
						<?php endif; ?>

						<?php if(strlen($tel) > 0): ?>
							<p class="bl_address_item">
								<span class="bl_address_name">Tel</span>
								<?php echo esc_html($tel); ?>
							</p>
							<!-- /.bl_address_item -->
						<?php endif; ?>

						<?php if(strlen($mail) > 0):?>
							<p class="bl_address_item">
								<span class="bl_address_name">Mail</span>
								<?php echo esc_html($mail); ?>
							</p>
							<!-- /.bl_address_item -->
						<?php endif; ?>
					</div>
					<!-- /.bl_address -->
				<?php endif; ?>

			</div>
			<!-- /.ly_footer_widget ly_footer_widget__3fr -->

		</div>
		<!-- /.ly_footer_widgetArea -->

		<?php
		// カスタマイザー上でコピーライト文が登録されていれば出力
		$copyright = get_theme_mod('zkr-setting-utils-copyright', '');
		if(strlen($copyright) > 0):
		?>
			<div class="ly_footer_copyright">
				<p class="el_copyright">
					<?php echo esc_html($copyright); ?>
				</p>
				<!-- /.el_copyright -->
			</div>
			<!-- /.ly_footer_copyright -->
		<?php endif; ?>

	</footer>
	<!-- /.ly_footer -->

	<button type="button" id="js_pageTop" aria-label="ページトップに戻る">
		<svg role="graphics-symbol img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
			viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0
				.708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z">
			</path>
		</svg>
	</button>
	<!-- /#pagetop -->

	<?php
	// 開発者ツール（運用時には除去する）
	$enableDevUtil = get_theme_mod('zkr-setting-devutils', false);
	if(($enableDevUtil) && (function_exists('zkr_enqueue_devUtils'))) {
		zkr_enqueue_devUtils();
		get_template_part('template-parts/parts', 'devutils');
	}
	wp_footer();
	?>
</body>
</html>
