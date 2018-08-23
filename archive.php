<?php
/* Template Name: Aloha */
get_header();
?>

	<div id="wrapper">
		<div id="top" class="container clearfix">

      <div id="contents">
        <section class="article-list">

					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); $counter++; ?>

						<?php if($counter <= 1): ?>
							<?php get_template_part('content-new'); ?>

						<?php else: ?>
							<?php get_template_part('content'); ?>

						<?php endif; ?>
					<?php endwhile; ?>
					<?php else : ?>
						<p>Sorry, there is no post.</p>
					<?php endif; ?>

        </section>
			</div>

			<?php get_sidebar(); ?>

		</div>

	</div>

	<div class="pagetop-btn">
    <a href="#header">
      <img src="<?php echo get_template_directory_uri(); ?>/img/to_top_black.png" alt="move-to-top">
    </a>
  </div>

<?php get_footer(); ?>
