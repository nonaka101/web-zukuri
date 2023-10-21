<article id="post-<?php the_ID(); ?>" <?php post_class('bl_card_wrapper'); ?>>
<?php
	$card_class = 'bl_card bl_card__clickable';
	if(is_sticky()) $card_class .= ' bl_card__sticky';
?>
	<a class="<?php echo $card_class ?>" href="<?php the_permalink(); ?>">
    <div class="bl_card_body">
      <?php if(has_category()): ?>
        <?php
        $zkr_category_list = get_the_category();
        if($zkr_category_list):
        ?>
          <p class="bl_card_category">
            <?php echo esc_html($zkr_category_list[0]->name);?>
          </p>
        <?php endif; ?>
      <?php endif; ?>
      <h2 class="bl_card_title">
        <?php the_title(); ?>
      </h2>
      <?php if(has_excerpt()): ?>
        <p class="bl_card_content">
          <?php echo esc_html(get_the_excerpt()); ?>
        </p>
      <?php endif; ?>
      <time class="bl_card_date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
    </div>
		<!-- /.bl_card_body -->
  </a>
</article>
<!-- /.bl_card -->
