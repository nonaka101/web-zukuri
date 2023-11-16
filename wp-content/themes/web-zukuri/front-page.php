<?php get_header(); ?>
<?php get_sidebar('left'); ?>

<main class="ly_mainArea_content ly_mainArea_content__middle" id="anchor_mainContent">
	<?php if(have_posts()): ?>
		<?php while(have_posts()){
			the_post();
			get_template_part('template-parts/loop','post',array('is_footer'=>false));
		}
		?>
	<?php endif; ?>
</main>
<!-- /.ly_mainArea_content -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>
