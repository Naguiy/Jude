<?php
 $twitter = get_the_author_meta('twitter');
 $facebook = get_the_author_meta('facebook');
 $googleplus = get_the_author_meta('googleplus');
 $instagram = get_the_author_meta('instagram');
?>

<?php if(!empty(get_the_author_meta('user_description'))) : ?>

	<div class="clearfix" id="profile">

		<h3 id="meta-title" class="meta-author">
      <i class="fa fa-pencil" aria-hidden="true"></i> この記事を書いた人
    </h3>

		<div id="profile-thumbnail">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
		</div>

		<div class="clearfix" id="profile-info">

      <h3 id="profile-name">
        <?php the_author_posts_link(); ?>
        <?php //the_author(); ?>
      </h3>
			<p>
        <?php the_author_meta('user_description'); ?>
      </p>

			<div id="writter-follow">

				<?php if(!empty($twitter)) : ?>
          <span class="follow-button">
            <a class="twitter" href="//twitter.com/<?php echo $twitter; ?>" rel="nofollow" target="_blank" title="Twitterをフォロー">
              <i class="fab fa-twitter fa-fw"></i>
            </a>
          </span>
        <?php endif; ?>

        <?php if(!empty($facebook)) : ?>
          <span class="follow-button">
            <a class="facebook" href="//www.facebook.com/<?php echo $facebook; ?>" rel="nofollow" target="_blank" title="Facebookをフォロー">
              <i class="fab fa-facebook-f fa-fw"></i>
            </a>
          </span>
        <?php endif; ?>

        <?php if(!empty($googleplus)) : ?>
         <span class="follow-button">
           <a class="googleplus" href="//plus.google.com/<?php echo $googleplus; ?>" rel="nofollow" target="_blank" title="Google+をフォロー">
             <i class="fab fa-google-plus-g fa-fw"></i>
           </a>
         </span>
        <?php endif; ?>

        <?php if(!empty($instagram)) : ?>
          <span class="follow-button">
            <a class="instagram" href="//www.instagram.com/<?php echo $instagram; ?>" target="_blank" title="Instagramをフォロー" rel="nofollow">
              <i class="fab fa-instagram"></i>
            </a>
          </span>
        <?php endif; ?>

			</div>
		</div>
	</div>

<?php endif; ?>
