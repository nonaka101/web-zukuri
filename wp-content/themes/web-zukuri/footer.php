	</div>
  <!-- /.ly_mainArea -->
  <footer class="ly_footer_wrapper" id="anchor_footer">
    <div class="ly_footer">
      <div class="ly_footer_widget3fr">
        <div class="ly_footer_headerTitle">
          <?php // 似たコードが header.php にもあるが、imgのクラスが違う
            if( has_custom_logo() ){
              $custom_logo_id = get_theme_mod('custom_logo');
              $image = wp_get_attachment_image_src($custom_logo_id);
              $mylogo = $image[0];
						} else {
							$mylogo = get_template_directory_uri() . './assets/images/Dummy_logo.PNG';
						}
            echo '<img class="ly_footer_headerLogo" src="'.$mylogo.'" alt="Logo">'."\n";
						echo '<span>'.get_bloginfo('name').'</span>'."\n";
          ?>
        </div>
        <!-- /.ly_footer_headerTitle -->

				<div class="bl_tagMenu">
					<ul class="bl_tagMenu_list">
						<li class="bl_tagMenu_item">
							<a class="bl_tagMenu_link" href="<?php echo esc_url(home_url()); ?>">Home</a>
						</li>
						<!-- /.bl_tagMenu_item -->
					</ul>
					<!-- /.bl_tagMenu_list -->
				</div>
				<!-- /.bl_tagMenu -->

				<?php get_template_part(
					'template-parts/parts',
					'menu',
					array('loc'=>'main-menu')
					);
				?>
      </div>
      <!-- /.ly_footer_widget3fr -->

      <div class="ly_footer_widget6fr">
        <h2 class="ly_footer_headerTitle">最新の投稿</h2>
				<div class="bl_cardUnit bl_cardUnit__1col">

        <?php
				// 最新の投稿3件を取り出し、カード形式で出力
        $sq_args = array(
          'post__not_in' => get_option('sticky_posts'),
          'post_type' => 'post',
          'posts_per_page' => 3,
          'orderby' => 'date',
          'ignore_sticky_posts' => 1,
        );
        $sq = new WP_Query($sq_args);
        if($sq -> have_posts()):
        ?>
          <?php
          while($sq -> have_posts()){
            $sq -> the_post();
						get_template_part('template-parts/loop','post',array('is_footer'=>true));
					}
          wp_reset_postdata();
          ?>
        <?php endif; ?>

				</div>
      </div>
      <!-- /.ly_footer_widget6fr -->

      <div class="ly_footer_widget3fr">
				<h2 class="ly_footer_headerTitle">ユーティリティ</h2>
				<?php
				$utilText = get_theme_mod('zkr-setting-utils-text', '');
				if(strlen($utilText) > 0):
				?>
					<small>
						<?php echo nl2br($utilText); ?>
					</small>
				<?php endif; ?>

				<?php
				// カスタマイザー上で外部URL（テキストとURLセットで登録されているもの）を取得
				$arr = [];
				for($i = 1; $i <= 5; $i++){
					$txt = get_theme_mod('zkr-setting-utils-ex'.$i.'txt', '');
					$url = get_theme_mod('zkr-setting-utils-ex'.$i.'url', '');
					if(($txt) && ($url)){
						array_push($arr, array('txt'=>$txt, 'url'=>$url));
					}
				}
				if($arr):
				?>
					<div class="bl_tagMenu">
						<span class="bl_tagMenu_title">外部リンク</span>
						<ul class="bl_tagMenu_list">

						<?php
						// 取得した外部URLを出力
						foreach($arr as $element){
							echo '<li class="bl_tagMenu_item">';
							echo '<a class="bl_tagMenu_link" href="' . esc_url($element['url']) . '">';
							echo esc_html($element['txt']);
							echo '</a></li>' . "\n" . '<!-- /.bl_tagMenu_item -->';
						}
						?>

						</ul>
						<!-- /.bl_tagMenu_list -->
					</div>
					<!-- /.bl_tagMenu -->
				<?php endif; ?>

				<div class="bl_tagMenu">
          <span class="bl_tagMenu_title">サイトナビゲーション</span>
          <ul class="bl_tagMenu_list">
            <li class="bl_tagMenu_item">
              <a href="#" class="bl_tagMenu_link">サイトマップ</a>
            </li>
            <!-- /.bl_tagMenu_item -->
            <li class="bl_tagMenu_item">
              <a href="#" class="bl_tagMenu_link">各種ポリシー</a>
            </li>
            <!-- /.bl_tagMenu_item -->
            <li class="bl_tagMenu_item">
              <a href="#" class="bl_tagMenu_link">ご意見・お問い合わせ</a>
            </li>
            <!-- /.bl_tagMenu_item -->
          </ul>
          <!-- /.bl_tagMenu_list -->
        </div>
        <!-- /.bl_tagMenu -->

				<?php
				// カスタマイザー上で、何かしらのアドレス関係が登録されていれば出力
				$address = get_theme_mod('zkr-setting-utils-address', '');
				$tel = get_theme_mod('zkr-setting-utils-tel', '');
				$mail = get_theme_mod('zkr-setting-utils-mail', '');
				if(($address) || ($tel) || ($mail)):
				?>
					<div class="bl_address">
						<h3 class="bl_address_title">アドレス</h3>

						<?php if(strlen($address) > 0): ?>
							<address class="bl_address_item">
								<span class="bl_address_name">住所</span>
								<?php echo nl2br($address); ?>
							</address>
							<!-- /.bl_address_item -->
						<?php endif; ?>

						<?php if(strlen($tel) > 0): ?>
							<p class="bl_address_item">
								<span class="bl_address_name">Tel</span>
								<?php echo esc_html($tel); ?>
							</p>
							<!-- /.bl_address_item -->
						<?php endif; ?>

						<?php if(strlen($mail) > 0):?>
							<p class="bl_address_item">
								<span class="bl_address_name">Mail</span>
								<?php echo esc_html($mail); ?>
							</p>
							<!-- /.bl_address_item -->
						<?php endif; ?>
					</div>
					<!-- /.bl_address -->
				<?php endif; ?>

      </div>
      <!-- /.ly_footer_widget3fr -->

    </div>
    <!-- /.ly_footer -->

		<?php
		// カスタマイザー上でコピーライト文が登録されていれば出力
		$copyright = get_theme_mod('zkr-setting-utils-copyright', '');
		if(strlen($copyright) > 0):
		?>
			<div class="ly_footer_copyright">
				<p class="el_copyright">
					<?php echo esc_html($copyright); ?>
				</p>
				<!-- /.el_copyright -->
			</div>
			<!-- /.el_footer_copyright -->
		<?php endif; ?>

  </footer>
  <!-- /.ly_footer_wrapper -->

  <button type="button" id="js_pageTop" aria-label="ページトップに戻る">
    <svg role="graphics-symbol" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
      viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0
        .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z">
      </path>
    </svg>
  </button>
  <!-- /#pagetop -->

  <div class="bl_devToolBox" id="js_toolBox">
    <div class="bl_devToolBox_btn">
      <input type="checkbox" name="is-show" id="js_toolBox_chkbox">
    </div>
    <!-- /.bl_devToolBox_btn -->
    <div class="bl_devToolBox_utils">
			<div id="js_fontSize_controller">
				<input type="range" name="font-size" id="js_fontSize_range" value="16" max="32" min="10" step="1">
				<output id="js_fontSize_result"></output>
			</div>
      <hr>
      <div>
        <label for="js_fontSize_chkbox">
          <input type="checkbox" name="enabled-font-size" id="js_fontSize_chkbox">
          フォントサイズ
        </label>
			</div>
			<hr>
      <div>
        <label for="js_darkMode">
          <input type="checkbox" name="is-dark-mode" id="js_darkMode">
          ダークモード
        </label>
      </div>
		</div>
    <!-- /.bl_debToolBox_utils -->
  </div>
  <!-- /.bl_devToolBox -->
  <?php wp_footer() ; ?>
</body>
</html>
