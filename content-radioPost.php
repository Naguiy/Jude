<article class="article clearfix">

  <div class="thumb">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('high_ratio'); ?>
    </a>
  </div>

  <div class="description">
    <a href="<?php the_permalink(); ?>">
      <p class="title">
        <?php the_title(); ?>
      </p>
      <p class="excerpt">
        <?php echo get_the_excerpt(); ?>
      </p>
    </a>
  </div>

  <div class="article-info">

<!--
    <p class="author-info">
      <?php $authorID = get_the_author_meta('ID'); ?>
      <?php echo get_avatar($authorID); ?>
      <?php the_author(); ?>
    </p>
-->    

    <p class="date-info">
      <i class="fa fa-calendar fa-fw" aria-hidden="true"></i><?php the_time('Y.m.d') ?>
    </p>

  </div>

</article>
