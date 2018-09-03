<?php
/* Template Name: Radio Top Page */
get_header();
?>

	<div id="wrapper">
		<div id="top" class="container clearfix">

      <div id="contents" class="radio-top-contents">
				<hr class="separate">
				<h2 class="headLines">LATEST RADIO</h2>
        <section class="article-list">
					<?php
						$args = array(
							'posts_per_page' => 1, 					//表示件数
							'post_type' => 'radioPost',			//投稿タイプ名
							'post_status' => 'publish',			//公開状態
						);
						$wp_query = new WP_Query($args);
						while($wp_query->have_posts()):$wp_query->the_post();
					?>
						<?php get_template_part('content-new-radio'); ?>
					<?php endwhile; ?>
        </section>

				<section class="article-prev-radio article-list">
					<?php
					if (wp_is_mobile()) {
						$howManyEntry = 3;
					} else {
						$howManyEntry = 4;
					}
						$args = array(
							'posts_per_page' => $howManyEntry, 					//表示件数
							'post_type' => 'radioPost',			//投稿タイプ名
							'post_status' => 'publish',			//公開状態
							'offset' => 1					//取得した記事の何番目から表示するか
						);
						$wp_query = new WP_Query($args);
						while($wp_query->have_posts()):$wp_query->the_post();
					?>
						<?php get_template_part('content-radio'); ?>
					<?php endwhile; ?>
				</section>

				<hr class="separate">
				<h2 class="headLines">PERSONALITY</h2>
				<?php $users =get_users( array('orderby'=>ID,'order'=>ASC) );
				echo '<div class="writers">';
				foreach($users as $user):
				    $uid = $user->ID;
				    $userData = get_userdata($uid);
				    echo '<div class="writer-profile">';
				        echo '<figure class="eyecatch">';
				            echo get_avatar( $uid ,300 );
				        echo '</figure>';
				        echo '<div class="profiletxt">';
				            echo '<p class="name" style="font-weight:bold;">'.$user->display_name.'</p>';
				            echo '<div class="description">'.$userData->user_description.'</div>';
				            echo '<div class="button"><a href="'.get_bloginfo(url).'/?author='.$uid.'">'.$user->display_name.'の記事一覧</a></div>';
				        echo '</div>';
				    echo '</div>';
				endforeach;
				echo '</div>'; ?>

				<hr class="separate">
				<h2 class="headLines">CORNER</h2>
				<div class="cornerPic">
					<figure class="changeTab">
						<img src="<?php echo get_template_directory_uri() ?>/img/corner1.jpg" alt="">
					</figure>
					<figure class="changeTab">
						<img src="<?php echo get_template_directory_uri() ?>/img/corner2.jpg" alt="">
					</figure>
					<figure class="changeTab">
						<img src="<?php echo get_template_directory_uri() ?>/img/corner3.jpg" alt="">
					</figure>
					<figure class="changeTab">
						<img src="<?php echo get_template_directory_uri() ?>/img/corner4.jpg" alt="">
					</figure>
				</div>
				<div class="theCorner">
					<?php if (wp_is_mobile()): ?>
						<div class="eachCorner">
							<p class="cornerTitle">ふつレポ</p>
							<p class="cornerDisc">
								ティーレポのラジオということで、普通のお便りならぬ
								普通のレポートを募集しています。周りで起こったこと、
								ティーラジへのメッセージ、MCへのメッセージなどなど、
								なんでも構いません。<br><br>
							</p>
						</div>
						<div class="eachCorner">
							<p class="cornerTitle">声優 DE アニメ当て</p>
							<p class="cornerDisc">
								このコーナーは皆さんからのクイズ形式となっています。
								声優のラインナップだけで、なんのアニメなのかを
								"二次元ヲタ界の重鎮"弥生が当てるというコーナーです。
								<br><br>
								-------------------- 例 -------------------- <br>
								- 主人公: 緒方恵美 <br>
								- ヒロイン1: 林原めぐみ <br>
								- ヒロイン2: 宮村優子 <br>
								- サブ1: 三石琴乃 <br>
								- サブ2: 石田彰<br><br>
								答え: 新世紀エヴァンゲリオン<br>
								-------------------------------------------- <br>
							</p>
						</div>
						<div class="eachCorner">
							<p class="cornerTitle">Bメロ DE 曲当て</p>
							<p class="cornerDisc">
								こちらも皆さんからのクイズ形式のコーナーです。
								歌のBメロの歌詞を見ただけで、なんの曲なのかを
								"音楽絶賛発信ブロガー"エンボが当てるというコーナーです。
								<br><br>
								-------------------- 例 -------------------- <br>
								"それなのに僕ら人間はどうしてこうも比べたがる？<br>
								ひとりひとり違うのにその中で一番になりたがる？"<br><br>
								答え: 世界に一つだけの花<br>
								-------------------------------------------- <br>
							</p>
						</div>
						<div class="eachCorner">
							<p class="cornerTitle">グルメチャレンジ</p>
							<p class="cornerDisc">
								このコーナーでは、リスナーさんから送られてきた
								"チャレンジ"に"超絶プログラマー"小金井が挑みます。
								チャレンジに失敗すると小金井は強制的に、
								1食1500円以上かけてグルメリポートに
								行かなければならない、というコーナーです。
								<br><br>
								-------------------- 例 -------------------- <br><br>
								虫の名前を英語で5つ言ってください。<br>
								制限時間は30秒です。<br><br>
								-------------------------------------------- <br>
							</p>
						</div>
					<?php else: ?>
					<div class="eachCorner">
						<p class="cornerTitle">ふつレポ</p>
						<p class="cornerDisc">
							ティーレポのラジオということで、普通のお便りならぬ<br>
							普通のレポートを募集しています。周りで起こったこと、<br>
							ティーラジへのメッセージ、MCへのメッセージなどなど、<br>
							なんでも構いません。<br><br>
						</p>
					</div>
					<div class="eachCorner">
						<p class="cornerTitle">声優 DE アニメ当て</p>
						<p class="cornerDisc">
							このコーナーは皆さんからのクイズ形式となっています。<br>
							声優のラインナップだけで、なんのアニメなのかを<br>
							"二次元ヲタ界の重鎮"弥生が当てるというコーナーです。
							<br><br>
							------------------------------ 例 ------------------------------ <br>
							- 主人公: 緒方恵美 <br>
							- ヒロイン1: 林原めぐみ <br>
							- ヒロイン2: 宮村優子 <br>
							- サブ1: 三石琴乃 <br>
							- サブ2: 石田彰<br><br>
							答え: 新世紀エヴァンゲリオン<br>
							---------------------------------------------------------------- <br>
						</p>
					</div>
					<div class="eachCorner">
						<p class="cornerTitle">Bメロ DE 曲当て</p>
						<p class="cornerDisc">
							こちらも皆さんからのクイズ形式のコーナーです。<br>
							歌のBメロの歌詞を見ただけで、なんの曲なのかを<br>
							"音楽絶賛発信ブロガー"エンボが当てるというコーナーです。
							<br><br>
							------------------------------ 例 ------------------------------ <br>
							"それなのに僕ら人間はどうしてこうも比べたがる？<br>
							ひとりひとり違うのにその中で一番になりたがる？"<br><br>
							答え: 世界に一つだけの花<br>
							---------------------------------------------------------------- <br>
						</p>
					</div>
					<div class="eachCorner">
						<p class="cornerTitle">グルメチャレンジ</p>
						<p class="cornerDisc">
							このコーナーでは、リスナーさんから送られてきた<br>
							"チャレンジ"に"超絶プログラマー"小金井が挑みます。<br>
							チャレンジに失敗すると小金井は強制的に、<br>
							1食1500円以上かけてグルメリポートに<br>
							行かなければならない、というコーナーです。
							<br><br>
							------------------------------ 例 ------------------------------ <br><br>
							虫の名前を英語で5つ言ってください。<br>
							制限時間は30秒です。<br><br>
							---------------------------------------------------------------- <br>
						</p>
					</div>
					<?php endif; ?>
				</div>

				<hr class="separate">
				<h2 class="headLines">MESSAGE</h2>
				<div id="googleForm">
					<iframe id="googleForm"
					src="https://docs.google.com/forms/d/e/1FAIpQLSfUNri-j3PmhW4-ALuLjbytfrzLZ0_8PeRqiAKZm8NArnW3sw/viewform?embedded=true"
					width="750"	height="520" frameborder="0" marginheight="0" marginwidth="0">
						読み込んでいます...
					</iframe>
				</div>

				<hr class="separate">
				<h2 class="headLines recommend-entries">RECOMMEND</h2>
				<section class="recommend-entry-list">
					<?php
						if (wp_is_mobile()) {
							$howManyEntry = 4;
						} else {
							$howManyEntry = 8;
						}
						$args = array(
							'posts_per_page' => $howManyEntry, 					//表示件数
							'post_type' => 'post',					//投稿タイプ名
							'post_status' => 'publish',			//公開状態
							'tag' => array('おすすめ','音楽','アニメ'),	 //特定のタグを指定
							'orderby' => 'rand'							//ランダム表示
						);
						$wp_query = new WP_Query($args);
						while($wp_query->have_posts()):$wp_query->the_post();
					?>
						<article class="recomEntry">
							<div class="thumb">
						    <a href="<?php the_permalink(); ?>">
						      <?php if(has_post_thumbnail()): ?>
						        <?php the_post_thumbnail('golden_ratio'); ?>
						      <?php else: ?>
						        <img src="<?php echo get_template_directory_uri(); ?>/img/nothumbnail.jpg" alt="no image">
						      <?php endif; ?>
						    </a>
						  </div>
						  <div class="description">
						    <a href="<?php the_permalink(); ?>">
						      <p class="title">
						        <?php the_title(); ?>
						      </p>
						    </a>
						  </div>
						  <div class="article-info">
						    <p class="date-info">
						      <i class="fa fa-calendar fa-fw" aria-hidden="true"></i><?php the_time('Y.m.d') ?>
						    </p>
						</article>
					<?php endwhile; ?>
        </section>
				<hr class="separate">

			</div>

			<?php get_sidebar('radioPost'); ?>

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
