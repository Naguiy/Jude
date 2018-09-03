<?php
//-----------------------------------------
/*-- Favicon Setting --*/
//-----------------------------------------
function blog_favicon() {
	echo '<link rel="shortcut icon" type="image/x-icon"
	href="'.get_bloginfo("template_url").'/img/favicon.ico" />'."\n";
}

add_action('wp_head','blog_favicon');

//-----------------------------------------
/*-- Favicon Setting --*/
//-----------------------------------------
add_theme_support('admin-bar', array('callback'=>'__return_false'));

//-----------------------------------------
/*-- サイドバーの追加 --*/
//-----------------------------------------
register_sidebar(array(
	'name' => __('メインサイドバー','Aloha'),
	'id' => 'sidebar-1',
	'description' => __('メインのサイドバーです','Aloha'),
	'before_widget' => '<div id="widget1-wrapper">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widget1-title">',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'name' => __('フッターエリア1','Aloha'),
	'id' => 'sidebar-2',
	'description' => __('フッターにカテゴリと検索部分を表示するウィジェット','Aloha'),
	'before_widget' => '<div id="widget2-wrapper">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widget2-title">',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'name' => __('フッタータグ','Aloha'),
	'id' => 'sidebar-3',
	'description' => __('フッターにタグを表示するウィジェット','Aloha'),
	'before_widget' => '<div id="tagcloud-wrapper">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="tagcloud-title">',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'name' => __('アーカイブ on フッター','Aloha'),
	'id' => 'sidebar-4',
	'description' => __('フッターにアーカイブを設置するウィジェット','Aloha'),
	'before_widget' => '<div id="archive-wrapper">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="archive-title">',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'name' => __('About TriangleReport','Aloha'),
	'id' => 'sidebar-5',
	'description' => __('ティーレポの説明用','Aloha'),
	'before_widget' => '<div id="about-wrapper">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="about-title">',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'name' => __('パンくずリスト','Aloha'),
	'id' => 'sidebar-6',
	'description' => __('パンくずリスト設置用ウィジェット','Aloha'),
	'before_widget' => '<div id="pankuzu-wrapper">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="pankuzu-title">',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'name' => __('ラジオサイドバー','Aloha'),
	'id' => 'sidebar-7',
	'description' => __('ラジオ用ウィジェット','Aloha'),
	'before_widget' => '<div id="widget1-wrapper">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widget1-title">',
	'after_title' => '</h3>',
));

//--------------------------------------------------------
/*-- 投稿にアーカイブ(投稿一覧)を持たせるようにします。 --*/
/*--     記載後にパーマリンク設定で「変更を保存」   --*/
//--------------------------------------------------------
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'archive'; // ページ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

//-----------------------------------------
/*-- 抜粋記事の文字数の設定 --*/
//-----------------------------------------
function my_excerpt_length($length) {
	if (wp_is_mobile()) {
		return 40;
	}
	else if (is_new_day()) {
		return 70;
	}
	else {
		return 70;
	}
}
add_filter('excerpt_length', 'my_excerpt_length');

function my_excerpt_more($more) {
    //return '<a href="'. get_permalink($more->ID). '">' . ' <i class="fa fa-angle-double-right" aria-hidden="true"></i> 続きを読む' . '</a>';
		return ' ... ' ;
}
add_filter('excerpt_more', 'my_excerpt_more');

//-----------------------------------------
/*-- サムネイルを定義 --*/
//-----------------------------------------
add_theme_support('post-thumbnails');
add_theme_support('menus');
// サムネイルのサイズを指定（追加）する
add_image_size( 'square', 500, 500, true );
add_image_size( 'high_ratio', 700, 390, true );
add_image_size( 'golden_ratio', 700, 435, true );
add_image_size( 'silver_ratio', 700, 500, true );
add_image_size( 'cinema_scope', 850, 355, true);

/*-- 最新の記事とそれ以降の記事を分岐 --*/
function isFirst() {
	global $wp_query;
	return ($wp_query -> current_post === 0);
}

//-----------------------------------------
/*-- コメントリスト 修正 --*/
//-----------------------------------------
function custom_comment_list($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>

    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div class="comment_meta">
            <span class="author">
							名前: <?php echo get_comment_author(); ?>
            </span>
            　
            <span class="post_date">
                <?php echo get_comment_date() ?> <?php echo get_comment_time() ?>
            </span>
        </div>

        <?php comment_text() ?>
    </li>
<?php
}

//-----------------------------------------
/*-- タグクラウドの設定 --*/
//-----------------------------------------
function custom_wp_tagcloud($args) {
	$myargs = array(
		'orderby' => 'count',
		'order' => 'DESC',
		'number' => 100
	);
	$args = wp_parse_args($args, $myargs);
	return $args;
}
add_filter('widget_tag_cloud_args','custom_wp_tagcloud');

//-----------------------------------------
/*----- ユーザープロフィール項目設定 -----*/
//-----------------------------------------
function user_sns_meta($sns) {
	$sns['twitter'] = 'Twitter (twitter.com/以降)';
	$sns['facebook'] = 'Facebook (facebook.com/以降)';
	$sns['googleplus'] = 'Google+ (plus.google.com/以降)';
	$sns['instagram'] = 'Instagram（instagram.com/以降）';

	return $sns;
}
add_filter('user_contactmethods','user_sns_meta',10,1);

//----------------------------------------------
/*----- ブログカードを表示するための設定 -----*/
//----------------------------------------------
function get_the_custom_excerpt($content, $length) {
 $length = ($length ? $length : 70);//デフォルトの長さを指定する
 $content =  strip_shortcodes($content);//ショートコード削除
 $content =  strip_tags($content);//タグの除去
 $content =  str_replace("&nbsp;","",$content);//特殊文字の削除（今回はスペースのみ）
 return $content;
}

//内部リンクをはてなカード風にするショートコード
function nlink_scode($atts) {
 extract(shortcode_atts(array(
 'url'=>"",
 'title'=>"",
 'excerpt'=>""
 ),$atts));

 $id = url_to_postid($url);//URLから投稿IDを取得
 $post = get_post($id);//IDから投稿情報の取得

 $img_width ="160";//画像サイズの幅指定
 $img_height = "100";//画像サイズの高さ指定
 $no_image = get_template_directory_uri().'/images/no-img.png';//アイキャッチ画像がない場合の画像を指定

 //タイトルを取得
 if(empty($title)){
 $title = esc_html(get_the_title($id));
 }

 //アイキャッチ画像を取得
 if(has_post_thumbnail($id)) {
 $img = wp_get_attachment_image_src(get_post_thumbnail_id($id),array($img_width,$img_height));
 $img_tag = "<img src='" . $img[0] . "' alt='{$title}' width=" . $img[1] . " height=" . $img[2] . " />";
 } else { $img_tag ='<img src="'.$no_image.'" alt="" width="'.$img_width.'" height="'.$img_height.'" />';
    }

 $nlink .='
<div class="blog-card"><a href="'. $url .'">
 <div class="blog-card-thumbnail">'. $img_tag .'</div>
 <div class="blog-card-content">
 <div class="blog-card-title">'. $title .' </div>
 </div>
 <div class="clear"></div>
</a></div>';

 return $nlink;
}

add_shortcode("nlink", "nlink_scode");

//-----------------------------------------
/*----- 管理編集画面にcssを適用 -----*/
//-----------------------------------------
add_editor_style(get_template_directory_uri() . "/css/editor-style.css");

//-----------------------------------------
/*----- カスタム投稿タイプの追加 -----*/
//-----------------------------------------
function create_post_type() {
	$radioPostSupports = [
		'title', 			// 記事タイトル
		'editor', 		// 記事本文
		'thumbnail', 	// アイキャッチ画像
		'revisions' 	// リビジョン
	];

	// ADD POST TYPE
	register_post_type('radioPost', // カスタム投稿名
		array(
			'label' => 'ティーラジ', 			// メニューに表示されるテキスト
			'public' => true,									// 投稿タイプをパブリックにするか
			'has_archive' => true,						// アーカイブを有効にするか
			'menu_position' => 5,							// 管理画面上でどこに配置するか
			'supports' => $radioPostSupports	// 投稿画面でどのmoduleを使うか的な設定
		)
	);

	// ADD TAXONOMY
	register_taxonomy(
		'radiopost_cat',
		'radiopost',
		array(
			'update_count_callback' => '_update_post_term_count',
			'heirarchical' => true,
			'label' => 'ラジオカテゴリー',
			'public' => true,
			'show_ui' => true
		)
	);
}

flush_rewrite_rules(false);
add_action('init', 'create_post_type');	// アクションに上記関数をフック

//---------------------------------------------------
/*----- おたより募集フォーム挿入ショートコード -----*/
//---------------------------------------------------



 ?>
