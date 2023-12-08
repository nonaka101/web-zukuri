<?php

/*
* pagenation 関数
* $pages : 全ページ数
* $paged : 現在のページ
* $range : 左右に何ページ表示するか
* 使用法：if( function_exists('pagenation') ){pagenation();}
* ※注：メインクエリのみ動作保証、サブクエリは別
*/
function pagenation( $pages = '', $range = 3 ) {
  // 現在のページ番号を取得（空の場合は1）
  global $paged;
  if ( empty($paged) ) $paged = 1;

  // 全ページ数を取得（取得できなければ1）
  if ( $pages == '' ) {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if ( !$pages ) {
      $pages = 1;
    }
  }

  // 2ページ以上ある場合に表示
  if( 1 != $pages ) {
    echo '<nav class="bl_pager" aria-label="ページ割り">'."\n";
    echo '<div class="bl_pager_left">'."\n";

    // 最初へ
    if ( $paged > $range + 1 ) {
      echo '<a class="bl_pager_btn" aria-label="最初のページ" href="' .get_pagenum_link(1). '">'."\n";
      echo '<svg role="graphics-symbol img" aria-hidden="true" version="1.1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24">'."\n";
			echo '<g transform="translate(-3,-3)">'."\n";
			echo '<g transform="matrix(.9901 0 0 1 -18.274 -11.411)">'."\n";
			echo '<g transform="translate(25.178 14.411)">'."\n";
			echo '<path d="m14.498 21-9.1-9 9.1-9 1 1-7.9 8 7.9 8z" clip-path="url(#clipPath395)"/>'."\n";
			echo '</g>'."\n";
			echo '</g>'."\n";
			echo '<rect x="8" y="5" width="1.5" height="20" stroke-width="2.6643"/>'."\n";
			echo '</g>'."\n";
			echo '</svg>'."\n";
			echo '</a>'."\n";
    }

    // 前へ
    if ( $paged > 1 ) {
      echo '<a class="bl_pager_btn" aria-label="前のページ" href="' . get_pagenum_link($paged - 1) . '">'."\n";
      echo '<svg role="graphics-symbol img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" height="24" width="24">'."\n";
			echo '<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>'."\n";
			echo '</svg>'."\n";
			echo '</a>'."\n";
    }

    // ページ番号を表示（現在位置 と そうでないものとで分岐）
    for ( $i = 1; $i <= $pages; $i++ ) {
      if ( $i <= $paged + $range && $i >= $paged - $range ) {
        if ( $paged == $i ) {
          echo '</div>'."\n";  //bl_pager_left
          echo '<div class="bl_pager_center" aria-current="page">'.$i.'/'.$pages.'</div>'."\n";
          echo '<div class="bl_pager_right">'."\n";
        } else {
          echo '<a class="bl_pager_btn bl_pager_btn__extended" href="'.get_pagenum_link($i).'">'.$i.'</a>'."\n";
        }
      }
    }

    // 次へ
    if ( $paged < $pages ) {
      echo '<a class="bl_pager_btn" aria-label="次のページ" href="'.get_pagenum_link($paged + 1).'">'."\n";
      echo '<svg role="graphics-symbol img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" height="24" width="24">'."\n";
			echo '<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>'."\n";
			echo '</svg>'."\n";
			echo '</a>'."\n";
    }

    // 最後へ
    if ( $paged + $range < $pages ) {
      echo '<a class="bl_pager_btn" aria-label="最後のページ" href="'.get_pagenum_link( $pages ).'">'."\n";
      echo '<svg role="graphics-symbol img" aria-hidden="true" version="1.1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24">'."\n";
      echo '<g transform="translate(-3,-3)">'."\n";
      echo '<g transform="matrix(-.9901 0 0 -1 48.274 41.411)">'."\n";
      echo '<g transform="translate(25.178 14.411)">'."\n";
      echo '<path d="m14.498 21-9.1-9 9.1-9 1 1-7.9 8 7.9 8z" clip-path="url(#clipPath395)"/>'."\n";
      echo '</g>'."\n";
      echo '</g>'."\n";
      echo '<rect transform="scale(-1)" x="-22" y="-25" width="1.5" height="20" stroke-width="2.6643"/>'."\n";
      echo '</g>'."\n";
      echo '</svg>'."\n";
      echo '</a>'."\n";
    }
    echo '</div>'."\n";  // bl_pager_right
    echo '</nav>'."\n";  // bl_pager
  }
}





function echo_cat_thml($cat_ID){
  $args = array(
    'orderby' => 'name',
    'order' => 'ASC',
    'hide_empty' => false,
    'parent' => $cat_ID,
  );
  $categories = get_categories( $args );
  unset($args);
  if (empty($categories)){
    // 子が存在しない場合
  } else {
    foreach ($categories as $category) {
      $url = esc_url( get_category_link( $category -> term_id ));

      // $category に子があればdetails 、無ければdivタグで
      $args = array(
        'parent' => intval($category -> term_id),
      );
      $child_categories = get_categories( $args );
      unset($args);

      if (empty($child_categories)){
        echo '<div class="bl_accordion bl_accordion__dummy">'."\n";
				echo '<a href="'. $url .'">' . $category->name . '</a>'."\n";
				echo '</div>';
      } else {
        echo '<details class="bl_accordion">'."\n";
				echo '<summary class="bl_accordion_summary">'."\n";
				echo '<a href="'. $url .'">' . $category->name . '</a>'."\n";
				echo '</summary>'."\n";
				echo '<div class="bl_accordion_description">'."\n";
        echo_cat_thml($category->cat_ID);
        echo '</div>'."\n";
				echo '</details>'."\n";
      }
    }
  }
}

function zkr_category_list(){
  echo '<details class="bl_accordion">'."\n";
	echo '<summary class="bl_accordion_summary">カテゴリ一覧</summary>'."\n";
	echo '<div class="bl_accordion_description">';
  echo_cat_thml(0);
  echo '</div>'."\n";
	echo '</details>'."\n";
}





function zkr_archive_list(){
  echo '<details class="bl_accordion">'."\n";
	echo '<summary class="bl_accordion_summary">年月アーカイブ</summary>'."\n";
	echo '<div class="bl_accordion_description">'."\n";

  //1. 年を抽出して配列に格納
  $archives_year = strip_tags(wp_get_archives('type=yearly&show_count=0&format=custom&echo=0'));
  //年数ごとに配列$archives_year_arrayに格納
  $archives_year_array = explode("\n",$archives_year);
  //配列内の最後に空の配列ができてるので削除。
  array_pop($archives_year_array);

  //2. アーカイブ一覧を取得して配列に格納
  //月別アーカイブを取得。
  $archives = wp_get_archives('type=monthly&show_post_count=1&use_desc_for_title=0&echo=0');
  //同様に改行ごとに配列に格納。
  $archives_array = explode("\n",$archives);

  //1で抽出した年数分繰り返し
  foreach ($archives_year_array as $year_value){
    //<li><a href="/year">で年を表示
    echo '<details class="bl_accordion">'."\n";
		echo '<summary class="bl_accordion_summary">'."\n";
		echo '<a href="' . home_url( '/' ) . ltrim($year_value) . '">' .ltrim($year_value) . ' 年</a>'."\n";
		echo '</summary>'."\n";
		echo '<div class="bl_accordion_description">'."\n";

    //月別アーカイブ数分繰り返し
    foreach ( $archives_array as $archives_value) {

      //1で取得した年と、2の各月別アーカイブの文字列を比較
      if ( intval(strip_tags($archives_value)) == intval($year_value) ) {
        //2の月別アーカイブの各行のhtmlからYYYY年部分を除去して表示。
        echo str_replace(intval($year_value).'年','',ltrim($archives_value))."\n";
      }

    }
    echo '</details>'."\n";
  }
  echo '</div>'."\n";
	echo '</details>'."\n"; // summary:年月アーカイブ の details 要素
}
