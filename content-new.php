<article class="latest-article clearfix">

  <div class="thumb">
    <div class="ribbon-area">
      <span class="new-ribbon">NEW</span>
    </div>
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
    <div class="post-category">
      <?php $cat = get_the_category(); ?>
      <?php $cat = $cat[0]; ?>
      <?php echo get_cat_name($cat->term_id); ?>
    </div>
  </div>

  <div class="description">
    <a href="<?php the_permalink(); ?>">
      <p class="title">
        <?php the_title(); ?>
      </p>
      <p class="excerpt">
        <?php the_excerpt(); ?>
      </p>
    </a>
  </div>

  <div class="article-info">

    <div class="author-info">
      <?php $authorID = get_the_author_meta('ID'); ?>
      <?php echo get_avatar($authorID); ?>
      <?php the_author(); ?>
    </div>

    <div class="date-info">
      <i class="fa fa-calendar fa-fw" aria-hidden="true"></i><?php the_time('Y.m.d') ?>
    </div>

  </div>


</article>
