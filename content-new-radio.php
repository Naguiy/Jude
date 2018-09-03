<article class="latest-article radio-article clearfix">
  <span class="fukidashi-outer">
    <span class="fukidashi-inner">
      <div class="date-info">
        <p class="month"><?php the_time('m') ?></p>
        <hr>
        <p class="day"><?php the_time('d') ?></p>
      </div>
    </span>
  </span>
  <div class="thumb">
    <a href="<?php the_permalink(); ?>">
      <?php if(has_post_thumbnail()): ?>
        <?php if (!wp_is_mobile()): ?>
        <?php the_post_thumbnail('cinema_scope'); ?>
        <?php elseif (wp_is_mobile()): ?>
        <?php the_post_thumbnail('high_ratio'); ?>
        <?php endif; ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/nothumbnail.jpg" alt="no image">
      <?php endif; ?>
    </a>
  </div>
</article>
