<?php
/* Template Name: Aloha */
get_header();
?>

	<div id="wrapper">
		<div id="top" class="container clearfix">

      <div id="contents">
        <section class="article-list">

					<?php
					$ads_infeed='5';
					$ads_infeed_count = '1';
					 ?>

					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); $counter++; ?>

						<?php
						if($ads_infeed_count == $ads_infeed){
						 ?>

						 <!-- 取得した広告コード -->
						 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						 <ins class="adsbygoogle"
						      style="display:block"
						      data-ad-format="fluid"
						      data-ad-layout-key="-ew+1o+d2-8y-77"
						      data-ad-client="ca-pub-2428103905476518"
						      data-ad-slot="7618109456"></ins>
						 <script>
						      (adsbygoogle = window.adsbygoogle || []).push({});
						 </script>
						 						 
						 <?php
					 		}
							$ads_infeed_count++;
						  ?>

						<?php if($counter <= 1): ?>
							<?php get_template_part('content-new'); ?>

						<?php else: ?>
							<?php get_template_part('content'); ?>

						<?php endif; ?>
					<?php endwhile; ?>
					<?php else : ?>
						<p class="sorry">Sorry, There is No Post.</p>
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
