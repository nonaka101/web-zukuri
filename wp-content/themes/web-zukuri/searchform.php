<form action="<?php echo home_url(); ?>" class="bl_searchForm_wrapper">
	<div class="bl_searchForm">
		<label for="num" class="bl_searchForm_label">表示件数</label>
		<?php // 検索時の抽出件数を引継ぎ
			if(isset($_GET['n'])){
				$cntsel = $_GET['n'];
			} else {
				$cntsel = '0';
			};
		?>
		<div class="bl_searchForm_inputSelect">
			<select name="n" id="num">
				<option value="5" <?php if($cntsel === '5' || $cntsel ==='0') echo 'selected';?>>5</option>
				<option value="10" <?php if($cntsel === '10') echo 'selected';?>>10</option>
				<option value="20" <?php if($cntsel === '20') echo 'selected';?>>20</option>
				<option value="50" <?php if($cntsel === '50') echo 'selected';?>>50</option>
				<option value="100" <?php if($cntsel === '100') echo 'selected';?>>100</option>
			</select>
		</div>
		<!-- /.bl_searchForm_inputSelect -->
	</div>
	<!-- /.bl_searchForm -->

	<div class="bl_searchForm">
		<label for="txt" class="bl_searchForm_label">検索キーワード</label>
		<div class="bl_searchForm_input">
			<input type="search" name="s" id="txt" placeholder="キーワードを入力" class="bl_searchForm_inputText" value="<?php the_search_query(); ?>">
			<button type="submit" class="bl_searchForm_btn">
				<svg role="graphics-symbol img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width="24">
					<path
						d="M21 20.5L15 14.5C16.2 13.2 16.9 11.4 16.9 9.5C17 5.4 13.6 2 9.5 2C5.4 2 2 5.4 2 9.5C2 13.6 5.3 17 9.5 17C11.2 17 12.7 16.4 14 15.5L20 21.5L21 20.5ZM3.5 9.5C3.5 6.2 6.2 3.5 9.5 3.5C12.8 3.5 15.5 6.2 15.5 9.5C15.5 12.8 12.8 15.5 9.5 15.5C6.2 15.5 3.5 12.8 3.5 9.5Z">
					</path>
				</svg>
				<span>検索</span>
			</button>
			<!-- /.bl_searchForm_btn -->
		</div>
		<!-- /.bl_searchForm_input -->
	</div>
	<!-- /.bl_searchForm -->
</form>
<!-- /.bl_searchForm_wrapper -->
