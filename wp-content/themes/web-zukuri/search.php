<?php get_header(); ?>
<main class="ly_mainArea_content ly_mainArea_content__left" id="anchor_mainContent" tabindex="-1">
	<h1 class="el_heading_lv1">サイト内検索</h1>
	<p>検索結果は検索フォームの下に表示されます。</p>
	<?php get_search_form(); ?>
	<hr>
	<h2 class="el_heading_lv2">検索結果</h2>

	<?php if(have_posts()): ?>
		<p>
			<?php
			// キーワードテキストによる見出し（空文字なら全件表示）
			if (get_search_query()){
				echo '「'.get_search_query().'」の検索結果';
			} else {
				echo '全件表示';
			}
			?>
			<span>
				<?php // "（全{1}件中、{2}～{3}件を表示）" の文字を形成

				// {1}
				$allPostNum = $wp_query->found_posts;

				// {2} : (表示件数 - 1) * (ページ数 - 1) + 1
				if(isset($_GET['n'])){
					$currentSelectNum = $_GET['n'];
				} else {
					$currentSelectNum = '5';
				};
				$currentPagedNum = get_query_var('paged', 1) ? get_query_var('paged', 1) : 1 ;
				$currentArticleStart = (($currentPagedNum - 1) * $currentSelectNum) + 1;

				// {3} : {2} + ポスト表示件数 - 1
				$currentPostCount = $wp_query->post_count;
				$currentArticleEnd = $currentArticleStart + $currentPostCount - 1;
				echo '（全'.$allPostNum.'件中、'.$currentArticleStart.'～'.$currentArticleEnd,'件を表示）';
				?>
			</span>
		</p>
		<div class="bl_cardUnit bl_cardUnit__1col">

		<?php
		while(have_posts()){
			the_post();
			get_template_part('template-parts/loop','post',array('is_footer'=>false));
		}
		get_template_part('template-parts/parts', 'pagenation');
		?>

		</div>
	<?php else: // 検索がヒットしない場合の出力（空文字は全件表示なので、ここでの場合分けは不要） ?>
		<p>「<?php the_search_query(); ?>」の検索結果</p>
		<p>検索単語に一致するものがありませんでした。他のキーワードで再度お試しください。</p>
	<?php endif; ?>
</main>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>
