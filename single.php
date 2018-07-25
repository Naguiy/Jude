<?php
/* Template Name: CreamPuff */
get_header("single");
?>

	<div id="wrapper">
		<div class="container bread">
			<?php dynamic_sidebar('sidebar-6'); ?>
		</div>

		<div id="top" class="container clearfix">
			<div class="cat-ribbon">
				<i class="fa fa-thumb-tack fa-fw" aria-hidden="true"></i>
				<?php $cat = get_the_category(); ?>
	      <?php $cat = $cat[0]; ?>
	      <?php echo get_cat_name($cat->term_id); ?>
			</div>

      <div id="contents">
        <section class="article-list">

					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post();?>

						<article class="article clearfix">

							<p class="date-info">
								<span style="margin-right:1rem;"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i><?php the_time('Y.m.d'); ?></span>
								<i class="fa fa-repeat fa-fw fa-rotate-180" aria-hidden="true"></i><?php the_modified_date('Y.m.d'); ?>
							</p>

							<!--<h2 class="title"><?php the_title(); ?></h2>-->

						  <div class="thumb">
						      <?php the_post_thumbnail('high_ratio'); ?>
						  </div>

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

				<!-- 記事がよかったらいいね　ここから -->
				<?php if(wp_is_mobile()) :?>
					<div class="p-shareButton p-asideList p-shareButton-bottom">
						<div class="p-shareButton__cont">
							<div class="p-shareButton__a-cont">
								<div class="p-shareButton__a-cont__img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>')"></div>
								<div class="p-shareButton__a-cont__btn">
									<p>この記事が気に入ったらいいね！しよう</p>
									<div class="p-shareButton__fb-cont p-shareButton__fb">
										<div class="fb-like" data-href="https://www.facebook.com/T-report-1509165772455564/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
										<span class="p-shareButton__fb-unable"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php else: ?>
					<div style="padding:1.5rem 0rem;"></div>
					<!-- 記事がよかったらいいねPC -->
					<div class="p-entry__push">
						<div class="p-entry__pushThumb" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>')"></div>
							<div class="p-entry__pushLike">
								<p>この記事が気に入ったら<br>いいね！しよう</p>
							<div class="p-entry__pushButton">
								<div class="fb-like" data-href="ここにFacebookページのURLを入れる" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
							</div>
							<p class="p-entry__note">最新情報をお届けします</p>
						</div>
					</div>
				<?php endif; ?>
				<!-- 記事がよかったらいいね　ここまで -->
				<div class="share-button">
					<h2>この記事をシェア！</h2>
					<ul>
						<li class="twitter">
							<a href="https://twitter.com/share?url=<?php the_permalink(); ?>" target="_blank" title="Twitterで共有" data-dnt="true">
								<i class="fa fa-twitter fa-fw" aria-hidden="true"></i><span> ツイート</span>
							</a>
						</li>
						<li class="facebook">
							<a href="http://www.facebook.com/sharer.php?src=bm&u=<?php the_permalink(); ?>" target="_blank">
								<i class="fa fa-facebook fa-fw" aria-hidden="true"></i><span> シェア</span>
							</a>
						</li>
						<li class="googleplus">
							<a href="https://plusone.google.com/_/+1/confirm?hl=ja&url=<?php the_permalink(); ?>" target="_blank">
								<i class="fa fa-google-plus fa-fw" aria-hidden="true"></i><span> Google+</span>
							</a>
						</li>
						<li class="hatebu">
							<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>" target="_blank">
								<span class="hatebu-logo">B!</span><span> はてブ</span>
							</a>
						</li>
						<li class="line">
							<a href="http://line.me/R/msg/text/?<?php the_permalink(); ?>" target="_blank">
								<i class="fa fa-comment fa-fw" aria-hidden="true"></i><span> LINE</span>
							</a>
						</li>
					</ul>
				</div>

				<section class="who-wrote">
					<?php get_template_part('profile'); ?>
				</section>
			</div>

			<?php get_sidebar(); ?>

			<section class="article-related">
				<h3 id="meta-title" class="meta-related-posts"><i class="fa fa-th-list fa-fw" aria-hidden="true"></i>おすすめの記事</h3>
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
