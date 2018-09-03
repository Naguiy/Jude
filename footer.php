<footer id="footer" class="clearfix">

  <div class="container footer-area">

    <div class="footer-info">
      <?php dynamic_sidebar('sidebar-5') ?>
      <div id="archive-search-container">
        <?php dynamic_sidebar('sidebar-4') ?>
      </div>
      <?php dynamic_sidebar('sidebar-2') ?>
    </div>

    <div class="copyright">
      <p>
        Copyright© 2017 - <?php echo date('Y '); bloginfo('name'); ?> All rights reserved.
      </p>
    </div>

  </div>

</footer>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!--
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
-->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/header_transform.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scroll_top.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/share_on_subwindow.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/hamburger_menu.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/change_tab.js"></script>

<?php wp_footer(); ?>

</body>
</html>
