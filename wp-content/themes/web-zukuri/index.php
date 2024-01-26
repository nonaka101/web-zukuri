<?php get_header(); ?>
<?php get_sidebar('left'); ?>

<main class="ly_mainArea_content ly_mainArea_content__middle" id="anchor_mainContent" tabindex="-1">
	<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
		<h1 class="el_heading_lv1"><?php single_post_title(); ?></h1>
	<?php elseif (is_date() || is_category() || is_tag() || is_author() || is_tax()) : ?>
		<h1 class="el_heading_lv1">
			<?php if(is_month()): ?>
				<?php echo get_the_date(format:'Y年n月'); // 月別アーカイブの場合は `single_term_title()` では取得不可のため ?>
			<?php elseif (is_year()): ?>
				<?php echo get_the_date(format:'Y年');?>
			<?php else: ?>
				<?php single_term_title(); // カテゴリアーカイブとタグアーカイブのタイトルを表示 ?>
			<?php endif; ?>
		</h1>
	<?php elseif (is_attachment() || is_single()): ?>
		<h1 class="el_heading_lv1"><?php single_post_title(); ?></h1>
	<?php endif; ?>

	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/loop', 'post');
		}
		get_template_part('template-parts', 'pagenation');
	} else {
		echo '<p>コンテンツが存在しませんでした</p>'."\n";
	}
	?>
</main>
<!-- /.ly_mainArea_content -->

<?php get_sidebar('right'); ?>

<?php get_footer(); ?>
