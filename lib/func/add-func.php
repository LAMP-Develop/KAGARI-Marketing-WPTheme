<?php

function taxonomy_orderby_description( $orderby, $args = '' ) {
	$args = wp_parse_args( $args );

	if ( $args['orderby'] == 'description' ) {
		$orderby = 'tt.description';
	}
	return $orderby;
}
add_filter( 'get_terms_orderby', 'taxonomy_orderby_description' );

// よくあるご質問の回答の文字数を設定
function new_excerpt_mblength($length) {
     return 200;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

// スマホ判定
function is_mobile()
{
    $useragents = array('iPhone','iPod','Android','dream','CUPCAKE','blackberry9500','blackberry9530','blackberry9520','blackberry9550','blackberry9800','webOS','incognito','webmate');
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

// 外観GAメニュー追加
function ga_theme_customize_register($wp_customize)
{
    $wp_customize->add_section('ga_id_scheme',
        array(
            'title' => 'Google Analytics ID',
            'priority' => 1,
        )
    );
    $wp_customize->add_setting('ga_id',
        array(
            'default' => '',
            'type' => 'option',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control('ga_id_origin_text',
        array(
            'settings' => 'ga_id',
            'label' => 'トラッキングID',
            'section' => 'ga_id_scheme',
            'type' => 'text',
        )
    );
}
add_action('customize_register', 'ga_theme_customize_register');

// 記事一覧アイキャッチ表示
function customize_manage_posts_columns($columns)
{
    $columns['thumbnail'] = __('Thumbnail');
    return $columns;
}
add_filter('manage_posts_columns', 'customize_manage_posts_columns');

function customize_manage_posts_custom_column($column_name, $post_id)
{
    if ('thumbnail' == $column_name) {
        $thum = get_the_post_thumbnail($post_id, 'thumbnail', array('style'=>'width:100px;height:auto'));
    }
    if (isset($thum) && $thum) {
        echo $thum;
    }
}
add_action('manage_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2);

// エディタースタイル
if (!function_exists('initialize_tinymce_styles')) {
    function initialize_tinymce_styles($init_array)
    {
        $style_formats = array(
          array(
            'title' => 'ボタン',
            'inline' => 'span',
            'classes' => 'post-btn',
          ),
          array(
            'title' => 'ポイント',
            'block' => 'p',
            'classes' => 'point',
          ),
          array(
            'title' => '囲み',
            'block' => 'p',
            'classes' => 'border-gray',
          ),
        );
        $init_array['style_formats'] = json_encode($style_formats);
        $init_array['table_resize_bars'] = false;
        $init_array['object_resizing'] = 'img';

        return $init_array;
    }
}
add_filter('tiny_mce_before_init', 'initialize_tinymce_styles', 10000);
