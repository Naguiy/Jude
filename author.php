<?php
/* Template Name: CreamPuff */
get_header();
?>

	<div id="wrapper">
		<div class="container bread">
			<?php dynamic_sidebar('sidebar-6'); ?>
		</div>

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

				<?php get_template_part('pagination'); ?>

			</div>

			<?php get_sidebar(); ?>

		</div>

	</div>

	<div class="pagetop-btn">
    <a href="#header">
      <img src="<?php echo get_template_directory_uri(); ?>/img/to_top_black.png" alt="move-to-top">
    </a>
  </div>

<?php
get_footer();
?>



<!--
<?php $userId = get_query_var('author'); ?>
<?php $user = get_userdata($userId); ?>
<h1><?php echo $user->display_name; ?><span> の投稿一覧</span></h1>

<?php if (!empty($user->description)) { ?>
    <p><?php echo $user->description; ?></p>
<?php } ?>

<?php $posts = get_posts("author=$userId&orderby=date&post_type=post&numberposts=1000"); ?>
<?php if (!empty($posts)) { ?>
    <ul>
        <?php foreach( $posts as $post ) : setup_postdata($post); ?>
            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> <?php echo get_the_date("Y/n/j");?></li>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
    </ul>
<?php } ?>
-->
