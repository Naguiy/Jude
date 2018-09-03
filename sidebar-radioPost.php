<div class="side-search-form">
  <?php get_template_part('searchform') ?>
</div>

<div id="sidebar">

  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- サイドバーディスプレイ -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-2428103905476518"
     data-ad-slot="4525771596"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<?php if(is_single() and !wp_is_mobile()): ?>

  <h3 class="widget1-title disapearMB">出演者</h3>

  <?php
   $twitter = get_the_author_meta('twitter');
   $facebook = get_the_author_meta('facebook');
  ?>

  <div class="show-author">

    <div class="author-picture">
      <?php $authorID = get_the_author_meta('ID'); ?>
      <?php echo get_avatar($authorID); ?>
    </div>

    <div class="author-meta">

      <h3 class="author-name">
        <?php the_author(); ?>
      </h3>
      <div class="sns-follow">

        <?php if(!empty($twitter)) : ?>
          <span class="follow-button">
            <a class="twitter" href="//twitter.com/<?php echo $twitter; ?>" rel="nofollow" target="_blank" title="Twitterをフォロー">
              <i aria-hidden="true" class="fab fa-twitter fa-fw fa-size"></i>
            </a>
          </span>
        <?php endif; ?>

        <?php if(!empty($facebook)) : ?>
          <span class="follow-button">
            <a class="facebook" href="//www.facebook.com/<?php echo $facebook; ?>" rel="nofollow" target="_blank" title="Facebookをフォロー">
              <i aria-hidden="true" class="fab fa-facebook-f fa-fw fa-size"></i>
            </a>
          </span>
        <?php endif; ?>

      </div>

    </div>

    <p class="author-profile">
      <?php the_author_meta('user_description'); ?>
    </p>

    <p class="to-author-post">
      <a href="<?php echo get_author_posts_url($authorID); ?>">
        <br>
        記事一覧へ<i class="fa fa-angle-double-right fa-fw" aria-hidden="true"></i>
      </a>
    </p>

  </div>
  <?php //dynamic_sidebar('sidebar-4'); ?>

<?php endif; ?>


  <?php dynamic_sidebar('sidebar-7'); ?>

	  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- サイドバーディスプレイ -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-2428103905476518"
     data-ad-slot="4525771596"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</div>
