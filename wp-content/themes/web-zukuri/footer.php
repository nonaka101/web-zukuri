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
          while($sq -> have_posts()):
            $sq -> the_post();
          ?>
            <article class="bl_card_wrapper">
              <a class="bl_card bl_card__clickable bl_card__s" href="<?php the_permalink() ;?>">
                <div class="bl_card_body">
                  <h2 class="bl_card_title"><?php the_title(); ?></h2>
                  <time class="bl_card_date" datetime="<?php echo get_the_date(format:'Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                </div>
								<!-- /.bl_card_body -->
              </a>
							<!-- /.bl_card bl_card__s bl_card__clickable -->
            </article>
						<!-- /.bl_card_wrapper -->
          <?php
          endwhile;
          wp_reset_postdata();
          ?>
        <?php endif; ?>
      </div>
      <!-- /.ly_footer_widget6fr -->

      <div class="ly_footer_widget3fr">
        <section>
          <h2 class="el_header__xs">アドレス</h2>
          <address>〒000-0000 A県B市C区D町123-4</address>
        </section>
				<?php get_template_part(
					'template-parts/parts',
					'sns'
					);
				?>
      </div>
      <!-- /.ly_footer_widget3fr -->
    </div>
    <!-- /.ly_footer -->
  </footer>
  <!-- /.ly_footer_wrapper -->

  <button type="button" id="pagetop" aria-label="ページトップに戻る">
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
      <input type="checkbox" name="" id="js_toolBoxChkbox">
    </div>
    <!-- /.bl_devToolBox_btn -->
    <div class="bl_devToolBox_utils">
      <div>
        <label for="js_darkMode">
          <input type="checkbox" name="darkMode" id="js_darkMode">
          Dark Mode
        </label>
      </div>
      <hr>
      <div>
        <div>
          <span>Font-Size : </span>
          <output id="js_fontSizeResult"></output>
        </div>
        <input type="range" name="size" id="js_fontSizeRange" value="16" max="32" min="10" step="1">
      </div>
    </div>
    <!-- /.bl_debToolBox_utils -->
  </div>
  <!-- /.bl_devToolBox -->
  <?php wp_footer() ; ?>
</body>
</html>
