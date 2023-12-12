<?php
/*
Template Name: Search Page
Template Post Type: page
*/

/* TODO: 検索ページへのリンク方法について
 * 現在は href に対し、`echo esc_url(url: home_url()).'/zkr-searchpage';`としている。
 * スラッグ変更に耐えらるよう、記事IDからパーマリンクを取得する関数にすべきか考慮する。
*/

?>
<?php get_header() ;?>
<main class="ly_mainArea_content ly_mainArea_content__left" id="anchor_mainContent" tabindex="-1">
	<h1 class="el_header_lv1">サイト内検索</h1>
	<p>検索結果は検索フォームの下に表示されます。</p>
	<?php get_search_form(); ?>
</main>
<?php get_sidebar('right'); ?>
<?php get_footer() ;?>
