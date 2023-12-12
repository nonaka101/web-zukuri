<?php
$is_footer = $args['is_footer'] ? true: false;
$card_class = 'bl_card bl_card__clickable';
if($is_footer) $card_class .= ' bl_card__small';
if(is_sticky()) $card_class .= ' bl_card__sticky';
?>
<article
	<?php if(! $is_footer) echo 'id="post-' . the_ID() . '" '; // フッターにはID重複を避けるため設定しない ?>
	<?php post_class($card_class); ?>
	<?php if(is_sticky()) echo ' aria-label="固定表示に設定された記事"'; ?>
>
	<a class="bl_card_main" href="<?php the_permalink() ;?>">

		<?php if(! $is_footer && (is_front_page() || is_home()) && has_post_thumbnail()): ?>
			<div class="bl_card_thumbnail">
				<?php the_post_thumbnail('thumbnail'); ?>
			</div>
			<!-- /.bl_card_thumbnail -->
		<?php endif; ?>

		<div class="bl_card_body">

			<?php // タイトル要素（タイトルがない場合は出力自体がされない）
			if($is_footer) {
				the_title('<h3 class="bl_card_title">', '</h3>', true);
			} else {
				the_title('<h2 class="bl_card_title">', '</h2>', true);
			}
			?>

			<?php // フッターでなく、かつ きちんと抜粋文が取得できた場合に出力
			if(! $is_footer){
				$limit_excerpt = intval(get_theme_mod('zkr-setting-card-excerpt', 80));
				$excerpt = get_flexible_excerpt($limit_excerpt);
				if(strlen($excerpt) > 0){
					echo '<p class="bl_card_content">'.$excerpt.'<span aria-label="記事の要旨は、ここまでです">...</span></p>';
				}
			}
			?>

			<div class="bl_card_dates">
				<div class="bl_card_date">
					<span>投稿</span>
					<time datetime="<?php echo get_the_date(format:'Y-m-d'); ?>">
						<?php echo get_the_date(); ?>
					</time>
				</div>
				<!-- /.bl_card_date -->
				<div class="bl_card_date">
					<span>更新</span>
					<time datetime="<?php echo get_the_modified_date(format:'Y-m-d'); ?>">
						<?php echo get_the_modified_date(); ?>
					</time>
				</div>
				<!-- /.bl_card_date -->
			</div>
			<!-- /.bl_card_dates -->

		</div>
		<!-- /.bl_card_body -->
	</a>
	<!-- /.bl_card_main -->

	<?php
	// メタ情報（カテゴリ）欄の出力
	if(has_category()):
	?>
		<?php
		// カテゴリが存在、かつ 出力上限数が 0 でない場合に出力する
		$categories = get_the_category();
		$limit_categories = intval(get_theme_mod('zkr-setting-card-categories', 3));
		if ((!empty($categories)) && ($limit_categories > 0)):
		?>
			<div class="bl_card_meta">
				<ul class="bl_card_categories" aria-label="カテゴリ">

				<?php
				// リンク要素の出力ループ（全て出力、もしくは出力上限数に達するまで）
				$current_categories = 1;
				foreach( $categories as $category ) {
					if($current_categories > $limit_categories){
						echo '<!-- カテゴリ出力の制限数に到達 -->'."\n";
						break;
					}

					$cat_link = get_category_link($category->term_id);
					$cat_name = $category->name;

					echo '<li><a href="'.$cat_link.'">'.$cat_name.'</a></li>'."\n";

					$current_categories++;
				}
				unset($category);
				?>
				</ul>
				<!-- /.bl_card_categories -->
			</div>
			<!-- /.bl_card_meta -->
		<?php endif; ?>
	<?php endif; ?>

</article>
<!-- /.bl_card bl_card__small bl_card__clickable -->
