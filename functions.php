<?php

function mytheme_setup(){
	//(C)のCSSを有効化
	add_theme_support('wp-block-styles');
	
	//縦横比を維持したレスポンシブを有効化
	add_theme_support('responsive-embeds');
	
	//(E)のCSSを有効化&エディタに読み込み
	add_theme_support('editor-styles');
	add_editor_style('editor-style.css');
	
	//ページのタイトルを有効化
	add_theme_support('title-tag');
	
	//link、style、scriptのHTML5対応を有効化
	add_theme_support('html5', array(
		'style',
		'script'
	));
	
	//アイキャッチ画像を有効化
	add_theme_support('post-thumbnails');
	
	//全幅・幅広を有効化
	add_theme_support('align-wide');
	
	//メニューのロケーションを登録
	register_nav_menus(array(
		'primary' => 'ナビゲーション'
	));
	
	//２段組みを有効化
	add_theme_support('mycols');
	
}
add_action('after_setup_theme', 'mytheme_setup');

//IE11対応
function mytheme_ie() {
	global $is_IE;
	if($is_IE) {
		
		//css-var-polyfill.jsを読み込み
		wp_enqueue_script(
			'mytheme-css-var-polyfill',
			get_theme_file_uri('ie/css-var-polyfill.js'),
			array(),
			null,
			true
		);
		
		//ofi.min.jsを読み込み
		wp_encueue_script(
			'mytheme-ofi',
			get_theme_file_uri('ie/ofi.min.js'),
			array(),
			null,
			true
		);
		
		wp_add_inline_script(
			'mytheme-ofi',
			'jQuery(function($){objectFitImages()});'
		);
		
		wp_add_inline_style(
			'mytheme-style',
			'img{font-family: "object-fit: cover";}'
		);
		
		//mainに対応
		wp_add_inline_style(
			'mytheme-style',
			'main{display: block;}'
		);
	}
}
add_action('wp_enqueue_scripts', 'mytheme_ie');

function mytheme_enqueue(){
	//Google Fontsを読み込み
	wp_enqueue_style(
		'myfonts',
		'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;700&display=swap',
		array(),
		null
	);
	
	//Dashiconsを読み込み
	wp_enqueue_style(
		'dashicons'
	);
	
	//(D)テーマのCSSを読み込み
	wp_enqueue_style(
		'mytheme-style',
		get_stylesheet_uri(),
		array(),
		filemtime(get_theme_file_path('style.css'))
	);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue');

function mytheme_widgets() {
	
	//ウィジェットエリアを登録
	register_sidebar( array(
		'id' => 'sidebar-1',
		'name' => 'フッターメニュー',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>'
	));
}

add_action('widgets_init', 'mytheme_widgets');
