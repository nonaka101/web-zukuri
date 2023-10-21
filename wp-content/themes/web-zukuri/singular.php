<?php get_header() ;?>

	<main class="ly_mainArea_content ly_mainArea_content__left" id="anchor_mainContent">
	<?php if(have_posts()): ?>
		<?php
			while(have_posts()):
				the_post();
		?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1 class="el_header_lv1"><?php the_title(); ?></h1>
				<?php if(is_single()): // PostData 出力は、投稿ページのみ適用 ?>
					<!-- ブロックスキップ（キー操作用） -->
					<nav class="bl_blockSkip_wrapper" aria-label="記事本文へのスキップ">
						<div class="bl_blockSkip">
							<p class="bl_blockSkip_title">ブロックスキップ</p>
							<p class="bl_blockSkip_description">カテゴリ、タグ情報等を無視して本文までスキップします</p>
							<ul class="bl_blockSkip_linkList">
								<li class="bl_blockSkip_linkItem">
									<a href="#anchor_mainArticle" class="el_link">本文へ移動</a>
								</li>
								<!-- /.bl_blockSkip_linkItem -->
							</ul>
							<!-- /.bl_blockSkip_linkList -->
						</div>
						<!-- /.bl_blockSkip -->
					</nav>
					<!-- /.bl_blockSkip_wrapper -->

					<div class="bl_postData">
						<div class="bl_postData_item">
							<div class="bl_postData_name">公開日</div>
							<?php // 年月情報を取得し、後ろの aタグのリンク先に使用（例: http://example.com/2023/10 ）
								$zkr_post_year = get_the_date('Y');
								$zkr_post_month = get_the_date('m');
							?>
							<a href="<?php echo get_month_link($zkr_post_year, $zkr_post_month);?>">
								<time class="bl_postData_values" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
							</a>
						</div>
						<!-- /.bl_postData_item -->

						<?php if(has_category()): // カテゴリ情報の出力 ?>
							<div class="bl_postData_item">
								<div class="bl_postData_name">カテゴリ</div>
								<ul class="bl_postData_values">
									<li>
										<?php the_category('</li>'."\n".'<li>','multiple');?>
									</li>
								</ul>
								<!-- /.bl_postData_values -->
							</div>
							<!-- /.bl_postData_item -->
						<?php endif; ?>

						<?php if(has_tag()): // タグ情報の出力 ?>
							<div class="bl_postData_item">
								<div class="bl_postData_name">タグ一覧</div>
								<?php the_tags('<ul class="bl_postData_values">'."\n".'<li>', '</li>'."\n".'<li>', '</li>'."\n".'</ul>'); ?>
							</div>
							<!-- /.bl_postData_item -->
						<?php endif; ?>
					</div>
					<!-- /.bl_postData -->
				<?php endif; ?>

				<?php if(has_post_thumbnail()) : ?>
					<div class="el_thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
				<?php endif; ?>

				<div id="anchor_mainArticle" class="wp_blockContent">
					<?php the_content(); ?>
				</div>

			</article>
		<?php endwhile; ?>
	<?php endif; ?>

	</main>
	<!-- /.ly_mainArea_content -->

<?php get_sidebar('right'); ?>
<?php get_footer() ;?>
