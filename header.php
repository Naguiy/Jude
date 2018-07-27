<!DOCTYPE html>
<html lang="ja">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<meta charset="utf-8">

	<title>
		<?php wp_title ( '|', true,'right' ); ?><?php bloginfo('name'); ?>
	</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

	<?php wp_deregister_script('jquery'); ?>
  <!-- WordPressのjQueryを読み込ませない -->

	<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Orienta|Nunito|Share+Tech" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" media="only screen and (min-width:769px)" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" media="only screen and (max-width:768px)" href="<?php echo get_template_directory_uri(); ?>/style-mobile.css">
	<link rel="stylesheet" media="only screen and (min-width:769px)" href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css">
	<link rel="stylesheet" media="only screen and (max-width:768px)" href="<?php echo get_template_directory_uri(); ?>/css/sidebar-mobile.css">
	<?php if (!is_single()): ?>
		<link rel="stylesheet" media="only screen and (min-width:769px)" href="<?php echo get_template_directory_uri(); ?>/css/contents.css">
		<link rel="stylesheet" media="only screen and (max-width:768px)" href="<?php echo get_template_directory_uri(); ?>/css/contents-mobile.css">
	<?php elseif (is_single()): ?>
		<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
		<link rel="stylesheet" media="only screen and (min-width:769px)" href="<?php echo get_template_directory_uri(); ?>/css/contents-single.css">
		<link rel="stylesheet" media="only screen and (max-width:768px)" href="<?php echo get_template_directory_uri(); ?>/css/contents-single-mobile.css">
	<?php endif; ?>

	<?php wp_head(); ?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-101333208-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<script type='text/javascript'>var _merchantSettings=_merchantSettings || [];_merchantSettings.push(['AT', '1000lGpz']);(function(){var autolink=document.createElement('script');autolink.type='text/javascript';autolink.async=true; autolink.src= ('https:' == document.location.protocol) ? 'https://autolinkmaker.itunes.apple.com/js/itunes_autolinkmaker.js' : 'http://autolinkmaker.itunes.apple.com/js/itunes_autolinkmaker.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(autolink, s);})();
  </script>

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
	    google_ad_client: "ca-pub-2428103905476518",
	    enable_page_level_ads: true
	  });
	</script>

</head>
<body>

	<?php
    // カテゴリのIDの取得
    $music_id = get_cat_ID('ミュージック');
    $anime_id = get_cat_ID('アニメ');
    $grumet_id = get_cat_ID('グルメ');
    $programing_id = get_cat_ID('プログラミング');
 	?>

	<div id="drawer-menu-haikei">
		<div class="search-form drawer-search">
		  <?php get_template_part('searchform') ?>
		</div>
		<div id="drawer-menu">
			<ul>
				<li><a href="<?php echo home_url('/') ?>">ホーム</a></li>
				<li><a href="<?php echo get_category_link($music_id); ?>">ミュージック</a></li>
				<li><a href="<?php echo get_category_link($anime_id); ?>">アニメ</a></li>
				<li><a href="<?php echo get_category_link($programing_id); ?>">プログラミング</a></li>
				<li><a href="<?php echo get_category_link($grumet_id); ?>">グルメ</a></li>
			</ul>
		</div>
		<div id="drawer-sns">
			<ul>
				<li class="twitr">
					<a href="//twitter.com/TriangleReport" rel="nofollow" target="_blank" title="Twitterをフォロー">
						<i aria-hidden="true" class="fa fa-twitter-square fa-fw fa-2x"></i>
					</a>
				</li>
				<li class="facebk">
					<a href="//www.facebook.com/T-report-1509165772455564/" rel="nofollow" target="_blank" title="Facebookをフォロー">
						<i aria-hidden="true" class="fa fa-facebook-square fa-fw fa-2x"></i>
					</a>
				</li>
			</ul>
			<p>FOLLOW US</p>
		</div>
	</div>

	<header id="header" class="clearfix">
		<!--

		<nav id="hidden-nav">
			<div class="container">
				<div class="title-text">
					<a href="<?php echo home_url('/') ?>">
						<h2><?php bloginfo('name'); ?></h2>
					</a>
				</div>
				<ul>
					<li><a href="<?php echo home_url('/') ?>">ホーム</a></li>
					<li><a href="<?php echo get_category_link($music_id); ?>">ミュージック</a></li>
					<li><a href="<?php echo get_category_link($anime_id); ?>">アニメ</a></li>
					<li><a href="<?php echo get_category_link($programing_id); ?>">プログラミング</a></li>
					<li><a href="<?php echo get_category_link($grumet_id); ?>">グルメ</a></li>
				</ul>
			</div>
		</nav>

		-->
    <div class="header-bg"></div>

    <div class="top-header">
      <div class="container">
				<h1 class="site-title"><?php echo bloginfo('name') ?></h1>
				<p class="catch-frase">サンニン　ノ　ユウシャ　ガ、<br>マダミヌ　アスニ　ユメヲ　イダキ、<br>スキナ　コトヲ　ハッシン　スル　ブログメディア</p>
      </div>
    </div>
		<!--
		<div class="border-line">
			<ul>
				<li class="blue"></li>
				<li class="yellow"></li>
				<li class="skyblue"></li>
				<li class="white"></li>
				<li class="blue"></li>
				<li class="yellow"></li>
				<li class="skyblue"></li>
				<li class="white"></li>
			</ul>
		</div>
		-->

		<nav id="nav">
			<div class="container">

				<div id="navToggle">
					<div>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>

				<div class="title-text">
					<a href="<?php echo home_url('/') ?>">
						<h2><?php bloginfo('name'); ?></h2>
					</a>
				</div>

				<ul>
					<li><a href="<?php echo get_category_link($music_id); ?>">ミュージック</a></li>
					<li><a href="<?php echo get_category_link($anime_id); ?>">アニメ</a></li>
					<li><a href="<?php echo get_category_link($programing_id); ?>">プログラミング</a></li>
					<li><a href="<?php echo get_category_link($grumet_id); ?>">グルメ</a></li>
				</ul>
			</div>
		</nav>


	</header>
