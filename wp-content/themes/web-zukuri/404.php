<?php get_header(); ?>

<main class="ly_mainArea_content ly_mainArea_content__left" id="anchor_mainContent">
	<article>
		<h1 class="el_header_lv1">ページが見つかりません</h1>
		<p>
			お探しのページは、移動もしくは削除された可能性があります。<br>
			サイト内検索、もしくは<a class="el_link" href="<?php echo esc_url(home_url()); ?>">トップページ</a>よりお探しください。
		</p>
	</article>
</main>
<!-- /.ly_mainArea_content -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>
