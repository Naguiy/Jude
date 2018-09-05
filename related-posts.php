<?php
//カテゴリ情報から関連記事を10個ランダムに呼び出す
//wp_get_post_tagsならタグ関連の記事
//get_the_categoryならカテゴリ関連の記事を表示
$categories = get_the_category($post->ID);
$category_ID = array();
foreach ($categories as $category):
  array_push($category_ID, $category->cat_ID);
endforeach;
$args = array(
  'post__not_in' => array($post->ID),
  'posts_per_page' => 8,
  'category__in' => $category_ID,
  'orderby' => 'rand',
);
$query = new WP_Query($args); ?>
<?php if ($query->have_posts()): ?>
  <?php while ($query->have_posts()) : $query->the_post(); ?>

	<div class="related-entry">

		<div class="related-entry-thumb">
			<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
        <?php if (has_post_thumbnail()): // サムネイルを持っているとき ?>
          <?php echo get_the_post_thumbnail($post->ID, 'golden_ratio'); //サムネイルを呼び出す?>
        <?php else: // サムネイルを持っていないとき ?>
          <img alt="NO IMAGE" src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" title="NO IMAGE" width="100px">
        <?php endif; ?>
      </a>

		</div><!-- /.related-entry-thumb -->
		<div class="related-entry-content">

			<h4 class="related-entry-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); //記事のタイトル?></a>
      </h4>

			<p class="related-entry-snippet">
        <?php echo mb_substr(strip_tags($post->post_content), 0, 0).''; ?>
      </p>

      <p class="related-time">
        <i class="fa fa-calendar fa-fw" aria-hidden="true"></i><?php the_time('Y.m.d') ?>
      </p>

			<p class="related-entry-read">
        <a href="<?php the_permalink(); ?>">記事を読む</a>
      </p>

		</div><!-- /.related-entry-content -->
	</div><!-- /.new-entry -->

	<?php endwhile;?>
<?php else:?>
	<p style="padding-top:1.1rem;">このカテゴリは<br>まだまだ未開拓なので<br>今後記事が増えていきます。</p>
  <?php
    endif;
    wp_reset_postdata();
	?>
  <br style="clear:both;">
