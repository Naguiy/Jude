<article class="article clearfix old-radio">

  <div class="thumb">
    <a href="<?php the_permalink(); ?>">
      <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail('square'); ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/nothumbnail.jpg" alt="no image">
      <?php endif; ?>
    </a>
  </div>

  <div class="article-info">
    <p class="date-info">
      <?php the_time('m.d') ?>
    </p>
  </div>

</article>
