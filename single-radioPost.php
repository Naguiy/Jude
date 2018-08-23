<?php
/* Template Name: Aloha */
get_header("single");
?>

	<div id="wrapper">
		<div class="container bread">
			<?php dynamic_sidebar('sidebar-6'); ?>
		</div>

		<div id="top" class="container clearfix">

      <div id="contents">
        <section class="article-list">

					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post();?>

						<article class="article clearfix">

							<p class="date-info">
								<span style="margin-right:1rem;"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i><?php the_time('Y.m.d'); ?></span>
								<i class="fas fa-redo-alt fa-fw fa-rotate-180" aria-hidden="true"></i><?php the_modified_date('Y.m.d'); ?>
							</p>

							<!--<h2 class="title"><?php the_title(); ?></h2>-->

						  <div class="thumb">
						      <?php the_post_thumbnail('high_ratio'); ?>
						  </div>

							<ul class="top-shareList disapearPC">

								<li class="shareList__item">
									<a class="shareList__link icon-twitter" href="https://twitter.com/share?url=<?php the_permalink(); ?>" target="_blank" title="Twitter"></a>
								</li>
								<li class="shareList__item">
									<a class="shareList__link icon-facebook" href="http://www.facebook.com/sharer.php?src=bm&u=<?php the_permalink(); ?>" target="_blank" title="Facebook"></a>
								</li>
								<li class="shareList__item">
									<a class="shareList__link icon-hatebu" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>" target="_blank" title="はてなブックマーク"></a>
								</li>
								<li class="shareList__item">
									<a class="shareList__link icon-pocket" href="http://getpocket.com/edit?url=<?php the_permalink(); ?>&title=<?php the_title_attribute(); ?>" target="_blank" title="Pocket"></a>
								</li>
								<li class="shareList__item">
									<a class="shareList__link icon-line" href="http://line.me/R/msg/text/?<?php the_permalink(); ?>" target="_blank" title="LINE"></a>
								</li>

							</ul>

						  <div class="description">
						      <p class="post-content">
						        <?php the_content(); ?>
						      </p>
						  </div>

						</article>

					<?php endwhile; ?>
					<?php else : ?>
						<p>Sorry, there is no post.</p>
					<?php endif; ?>

					<h3 id="meta-title">
						<i class="fas fa-paper-plane fa-fw"></i> おたよりはこちらから
					</h3>

					<iframe id="googleForm"
					src="https://docs.google.com/forms/d/e/1FAIpQLSfUNri-j3PmhW4-ALuLjbytfrzLZ0_8PeRqiAKZm8NArnW3sw/viewform?embedded=true"
					width="750"	height="520" frameborder="0" marginheight="0" marginwidth="0">
						読み込んでいます...
					</iframe>

        </section>

				<div class="ads">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!--モバイルディスプレイ-->
					<ins class="adsbygoogle"
		   			style="display:block"
		     		data-ad-client="ca-pub-2428103905476518"
		     		data-ad-slot="3521835207"
		     		data-ad-format="auto"></ins>
					<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>

				<div class="share-button">
					<h2 style="font-size:1.2rem;">
						\ ティーラジをシェア！ /
					<!--
					<i class="fas fa-chevron-left" style="padding-right: 0.5rem;"></i>

					<i class="fas fa-chevron-right" style="padding-left: 0.5rem;"></i>
					-->
					</h2>
					<ul>
						<li class="twitter">
							<a class="faa-parent animated-hover" href="https://twitter.com/share?url=<?php the_permalink(); ?>" target="_blank" title="Twitterで共有" data-dnt="true">
								<i class="fab fa-twitter fa-fw faa-wrench"></i><span> ツイート</span>
							</a>
						</li>
						<li class="facebook">
							<a class="faa-parent animated-hover" href="http://www.facebook.com/sharer.php?src=bm&u=<?php the_permalink(); ?>" target="_blank">
								<i class="fab fa-facebook-f fa-fw faa-wrench"></i><span> シェア</span>
							</a>
						</li>
						<li class="googleplus">
							<a class="faa-parent animated-hover" href="https://plusone.google.com/_/+1/confirm?hl=ja&url=<?php the_permalink(); ?>" target="_blank">
								<i class="fab fa-google-plus-g fa-fw faa-wrench"></i><span> Google+</span>
							</a>
						</li>
						<li class="hatebu">
							<a class="faa-parent animated-hover" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>" target="_blank">
								<span class="hatebu-logo faa-wrench">B!</span><span> はてブ</span>
							</a>
						</li>
						<li class="line">
							<a class="faa-parent animated-hover" href="http://line.me/R/msg/text/?<?php the_permalink(); ?>" target="_blank">
								<i class="fab fa-line fa-fw faa-wrench"></i><span> LINE</span>
							</a>
						</li>
					</ul>
				</div>

				<section class="who-wrote">
					<?php get_template_part('profile'); ?>
				</section>

				<section id="nearPost">
					<div class="prev">
						<?php previous_post_link('%link', '<i class="fas fa-backward fa-fw"></i>前回の放送<br>%title'); ?>
					</div>
					<div class="next">
						<?php next_post_link('%link', '次回の放送<i class="fas fa-forward fa-fw"></i><br>%title'); ?>
					</div>
				</section>

			</div>

			<?php get_sidebar(); ?>

			<section class="article-related">
				<h3 id="meta-title" class="meta-related-posts">
					<i class="fas fa-tag fa-fw"></i> おすすめの記事
				</h3>
				<div class="related-entries">
					<?php get_template_part('related','posts'); ?>
				</div>
			</section>

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
