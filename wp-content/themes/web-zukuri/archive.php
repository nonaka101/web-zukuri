<?php get_header(); ?>

<main class="ly_mainArea_content ly_mainArea_content__left" id="anchor_mainContent">
	<h1 class="el_header_lv1">
		<?php if(is_month()): ?>
			<?php echo get_the_date(format:'Y年n月'); // 月別アーカイブの場合は `single_term_title()` では取得不可のため ?>
		<?php elseif (is_year()): ?>
			<?php echo get_the_date(format:'Y年');?>
		<?php else: ?>
			<?php single_term_title(); // カテゴリアーカイブとタグアーカイブのタイトルを表示 ?>
		<?php endif; ?>
	</h1>

  <?php if(have_posts()): ?>
		<?php
		while(have_posts()){
			the_post();
			get_template_part('template-parts/loop','post',array('is_footer'=>false));
		}
    get_template_part('template-parts/parts', 'pagenation');
		?>
	<?php else: // 記事がない場合 ?>
		<p>申し訳ありません、関連する記事がありませんでした。</p>
  <?php endif; ?>
</main>
<!-- /.ly_mainArea_content -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>
