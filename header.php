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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/sharebtn/css/icon.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/sharebtn/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/dotIcon/style.css">
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
    $music_id = get_cat_ID( 'ミュージック' );
    $anime_id = get_cat_ID( 'アニメ' );
    $grumet_id = get_cat_ID( 'グルメ' );
    $programing_id = get_cat_ID( 'プログラミング' );
		$radioPost_id = get_cat_ID( 'ティーラジ' );
 	?>

	<div id="drawer-menu-haikei">
		<div class="search-form drawer-search">
		  <?php get_template_part( 'searchform' ) ?>
		</div>
		<div id="drawer-menu">
			<ul>
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
						<i aria-hidden="true" class="fab fa-twitter-square fa-fw fa-2x"></i>
					</a>
				</li>
				<li class="facebk">
					<a href="//www.facebook.com/T-report-1509165772455564/" rel="nofollow" target="_blank" title="Facebookをフォロー">
						<i aria-hidden="true" class="fab fa-facebook-square fa-fw fa-2x"></i>
					</a>
				</li>
			</ul>
			<p>FOLLOW US</p>
		</div>
		<div class="__radioBanner">
			<a href="<?php echo home_url('/') ?>what-is-tradio/">
				<p>
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<path d="M15.929 11.517c.848-1.003 1.354-2.25 1.354-3.601s-.506-2.598-1.354-3.601l1.57-1.439c1.257 1.375 2.022 3.124 2.022 5.04s-.766 3.664-2.022 5.041l-1.57-1.44zm-10.992-10.076l-1.572-1.441c-2.086 2.113-3.365 4.876-3.365 7.916s1.279 5.802 3.364 7.916l1.572-1.441c-1.672-1.747-2.697-4.001-2.697-6.475s1.026-4.728 2.698-6.475zm1.564 11.515l1.57-1.439c-.848-1.003-1.354-2.25-1.354-3.601s.506-2.598 1.354-3.601l-1.57-1.439c-1.257 1.375-2.022 3.124-2.022 5.04s.765 3.664 2.022 5.04zm14.134-12.956l-1.571 1.441c1.672 1.747 2.697 4.001 2.697 6.475s-1.025 4.728-2.697 6.475l1.572 1.441c2.085-2.115 3.364-4.877 3.364-7.916s-1.279-5.803-3.365-7.916zm-2.552 24h-2.154c-.85-2.203-2.261-3.066-3.929-3.066-1.692 0-3.088.886-3.929 3.066h-2.113l5.042-13.268c-1.162-.414-2-1.512-2-2.816 0-1.657 1.344-3 3-3s3 1.343 3 3c0 1.304-.838 2.403-2 2.816l5.083 13.268zm-4.077-5l-2.006-5.214-2.006 5.214h4.012z"/>
					</svg>
				</p>
			</a>
			<a href="<?php echo home_url('/') ?>what-is-tradio/">
				<p>ティーラジ配信中。</p>
			</a>
		</div>
	</div>

	<header id="header" class="clearfix">

    <div class="top-header">
      <div class="container">
				<?php if ( is_front_page() || (is_archive() && is_post_type_archive( 'post' ) ) ): ?>
					<a href="<?php echo home_url('/') ?>"><h1 class="site-title"><?php echo bloginfo( 'name' ) ?></h1></a>
					<p class="catch-frase">サンニン　ノ　ユウシャ　ガ、<br>マダミヌ　アスニ　ユメヲ　イダキ、<br>スキナ　コトヲ　ハッシン　スル　ブログメディア</p>
					<a href="<?php echo home_url('/') ?>what-is-tradio/">
						<div class="__radioIcon disapearMB">
							<span>
								<i class="doticon-steam"></i>
								<i class="doticon-steam"></i>
							</span>
							<figure>
								<img src="<?php echo get_template_directory_uri() ?>/img/radio-cassette.png" alt="radio">
								<p>ティーラジ<br>配信中</p>
							</figure>
						</div>
					</a>
				<?php elseif( ( is_archive() || is_post_type_archive( 'raioPost' ) ) || ( is_page() || is_page( 'radioPost' ) ) ): ?>
					<a href="<?php echo home_url('/') ?>what-is-tradio/"><h1 class="site-title">Triangle Radio</h1></a>
					<p class="catch-frase">サンニン　ノ　ユウシャ　ガ、<br>マダミヌ　アスニ　ユメヲ　イダキ、<br>スキナ　コトヲ　ハッシン　スル　ラジオ</p>
				<?php endif; ?>
      </div>
    </div>

		<div id="radioBanner" class="disapearPC">
			<a href="<?php echo home_url('/') ?>what-is-tradio/">
				【WEBラジオ】ティーラジ配信中 <i class="fas fa-microphone-alt fa-fw"></i>
			</a>
		</div>

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
