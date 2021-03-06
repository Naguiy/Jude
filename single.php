<?php
/* Template Name: Single */
get_header("single");
?>

	<div id="wrapper">
		<div class="container bread">
			<?php dynamic_sidebar('sidebar-6'); ?>
		</div>

		<div id="top" class="container clearfix">
			<div class="cat-ribbon">
				<i class="fa fa-thumbtack fa-fw" aria-hidden="true"></i>
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
								<i class="fas fa-redo-alt fa-fw fa-rotate-180" aria-hidden="true"></i><?php the_modified_date('Y.m.d'); ?>
							</p>

							<!--<h2 class="title"><?php the_title(); ?></h2>-->

						  <div class="thumb">
						      <?php the_post_thumbnail('high_ratio'); ?>
						  </div>

							<!-- GoogleAdsenseの広告ユニット貼り付け -->
							<?php dynamic_sidebar('sidebar-9'); ?>

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

					<?php if (is_single() && is_singular( 'post' )): ?>
					<?php elseif( is_single() || is_singular( 'raioPost' ) ): ?>
						<h3 id="meta-title">
							<i class="fas fa-paper-plane fa-fw"></i> おたよりはこちらから
						</h3>

						<iframe id="googleForm"
						src="https://docs.google.com/forms/d/e/1FAIpQLSfUNri-j3PmhW4-ALuLjbytfrzLZ0_8PeRqiAKZm8NArnW3sw/viewform?embedded=true"
						width="750"	height="520" frameborder="0" marginheight="0" marginwidth="0">
							読み込んでいます...
						</iframe>
					<?php endif; ?>

        </section>

				<!-- GoogleAdsenseの広告ユニット貼り付け -->
				<?php if (wp_is_mobile()) {
					// code...
				} else {
					dynamic_sidebar('sidebar-10');
				}
				?>

<!--
				<div class="ads">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!--モバイルディスプレイ--
					<ins class="adsbygoogle"
		   			style="display:block"
		     		data-ad-client="ca-pub-2428103905476518"
		     		data-ad-slot="3521835207"
		     		data-ad-format="auto"></ins>
					<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
-->
				<!-- 記事がよかったらいいね　ここから -->
				<?php if(wp_is_mobile()) :?>
					<div class="p-shareButton p-asideList p-shareButton-bottom">
						<div class="p-shareButton__cont">
							<div class="p-shareButton__a-cont">
								<div class="p-shareButton__a-cont__img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>')"></div>
								<div class="p-shareButton__a-cont__btn">
									<?php if (is_single() && is_singular( 'post' )): ?>
										<p>この記事が気に入ったらいいね！しよう</p>
									<?php elseif( is_single() || is_singular( 'raioPost' ) ): ?>
										<p>ティーラジにいいね！しよう</p>
									<?php endif; ?>
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
								<?php if (is_single() && is_singular( 'post' )): ?>
									<p>この記事が気に入ったら<br>いいね！しよう</p>
								<?php elseif( is_single() || is_singular( 'raioPost' ) ): ?>
									<p>ティーラジに<br>いいね！しよう</p>
								<?php endif; ?>
							<div class="p-entry__pushButton">
								<div class="fb-like" data-href="ここにFacebookページのURLを入れる" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
							</div>
							<p class="p-entry__note">最新情報をお届けします</p>
						</div>
					</div>
				<?php endif; ?>
				<!-- 記事がよかったらいいね　ここまで -->
				<div class="share-button">
					<h2 style="font-size:1.2rem;">
						<?php if (is_single() && is_singular( 'post' )): ?>
							\ この記事をシェア！ /
						<?php elseif( is_single() || is_singular( 'raioPost' ) ): ?>
							\ ティーラジをシェア！ /
						<?php endif; ?>
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

				<section class="article-related">
					<h3 id="meta-title" class="meta-related-posts">
						<i class="fas fa-tag fa-fw"></i> おすすめの記事
					</h3>
					<div class="related-entries">
						<?php get_template_part('related','posts'); ?>
					</div>
				</section>

				<section class="who-wrote">
					<?php get_template_part('profile'); ?>
				</section>

				<section id="nearPost">
					<?php if (is_single() && is_singular( 'post' )): ?>
						<div class="prev">
							<?php previous_post_link('%link', '<i class="fas fa-angle-double-left fa-fw"></i>前の記事<br>%title'); ?>
						</div>
						<div class="next">
							<?php next_post_link('%link', '次の記事<i class="fas fa-angle-double-right fa-fw"></i><br>%title'); ?>
						</div>
					<?php elseif( is_single() || is_singular( 'raioPost' ) ): ?>
						<div class="prev">
							<?php previous_post_link('%link', '<i class="fas fa-backward fa-fw"></i>前回の放送<br>%title'); ?>
						</div>
						<div class="next">
							<?php next_post_link('%link', '次回の放送<i class="fas fa-forward fa-fw"></i><br>%title'); ?>
						</div>
					<?php endif; ?>
				</section>

			</div>

			<?php if (is_single() && is_singular( 'post' )): ?>
				<?php get_sidebar(); ?>
			<?php elseif( is_single() || is_singular( 'raioPost' ) ): ?>
				<?php get_sidebar('radioPost'); ?>
			<?php endif; ?>
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
