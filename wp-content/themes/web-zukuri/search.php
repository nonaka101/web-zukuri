<?php get_header(); ?>
<main class="ly_mainArea_content ly_mainArea_content__left" id="anchor_mainContent">
	<h1 class="el_header_lv1">サイト内検索</h1>
	<p>検索結果は検索フォームの下に表示されます。</p>
  <?php get_search_form(); ?>
	<hr>
	<h2 class="el_header_lv2">検索結果</h2>
	<p>「<?php the_search_query(); ?>」の検索結果</p>

  <?php if(have_posts()): ?>
		<div class="bl_cardUnit bl_cardUnit__1col">

		<?php
		while(have_posts()){
			the_post();
			get_template_part('template-parts/loop','post',array('is_footer'=>false));
		}
    get_template_part('template-parts/parts', 'pagenation');
		?>

		</div>
  <?php else: // 検索がヒットしない場合の出力 ?>
    <p>検索単語に一致するものがありませんでした。他のキーワードで再度お試しください。</p>
  <?php endif; ?>
</main>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>
