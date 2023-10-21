<?php get_header(); ?>
<?php get_sidebar('left'); ?>

<main class="ly_mainArea_content ly_mainArea_content__middle" id="anchor_mainContent">
	<?php if(have_posts()): ?>
		<?php while(have_posts()):
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('bl_card_wrapper'); ?>>
			<?php
				// 記事にsticky要素が付与されている場合は、クラス追加
				$card_class = 'bl_card bl_card__clickable';
				if(is_sticky()) $card_class .= ' bl_card__sticky';
			?>
				<a class="<?php echo $card_class ?>" href="<?php the_permalink(); ?>">
					<?php if(has_post_thumbnail()) : ?>
						<div class="bl_card_thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php endif; ?>

					<div class="bl_card_body">
						<?php
						// カテゴリ名を出力（1つのみ）
						if(has_category()): ?>
							<?php
							$zkr_category_list = get_the_category();
							if($zkr_category_list):
							?>
								<span class="bl_card_category">
									<?php echo esc_html($zkr_category_list[0]->name);?>
								</span>
							<?php endif; ?>
						<?php endif; ?>

						<h2 class="bl_card_title">
							<?php the_title(); ?>
						</h2>

						<?php if(has_excerpt()): ?>
							<p class="bl_card_content">
								<?php echo esc_html(get_the_excerpt()); ?>
							</p>
						<?php endif; ?>

						<time class="bl_card_date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
					</div>
					<!-- /.bl_card_body -->
				</a>
				<!-- /.bl_card bl_card__clickable (bl_card__sticky) -->
			</article>
			<!-- /.bl_card_wrapper -->
		<?php endwhile; ?>
	<?php endif; ?>
</main>
<!-- /.ly_mainArea_content -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>
