<?php

/**
 * Table of Contents:
 * Remove junk from head
 * Remove query strings
 * Disable the emoji's
 * Remove the tinymce emoji plugin
 * Remove emoji CDN hostname
 * Disable jQ Migrate
 * Remove Block Library CSS
 * Theme Support
 * Required Files
 * Register and Enqueue Styles
 * Register and Enqueue Scripts
 * Register Menus
 * WP Body Open
 * ACF - Options pages
 * Excerpt length
 * Excerpt "read more"
 * Register post types
 * CF7 - Remove auto P tag
 * Ajax loadmore
 */


/**
* Remove junk from head
*/
// remove WordPress version number
function crave_remove_version() {
	return '';
}
add_filter('the_generator', 'crave_remove_version');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link'); // remove really simple discovery (RSD) link
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (if you don't use rss)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 ); // remove shortlink


/**
* Remove query strings
*/
function crave_remove_script_version( $src ) {
	$parts = explode( '?ver', $src );
	return $parts[0];
}
add_filter( 'script_loader_src', 'crave_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'crave_remove_script_version', 15, 1 );


/**
* Disable the emoji's
*/
function crave_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'crave_disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'crave_disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'crave_disable_emojis' );


/**
* Filter function used to remove the tinymce emoji plugin.
*
* @param array $plugins
* @return array Difference betwen the two arrays
*/
function crave_disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}


/**
* Remove emoji CDN hostname from DNS prefetching hints.
*
* @param array $urls URLs to print for resource hints.
* @param string $relation_type The relation type the URLs are printed for.
* @return array Difference betwen the two arrays.
*/
function crave_disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
		/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}
	return $urls;
}


/**
 * Disable jQ Migrate
 */

function crave_remove_jquery_migrate( &$scripts) {
	if(!is_admin()) {
		$scripts->remove('jquery');
		$scripts->add('jquery', false, array( 'jquery-core' ), '1.12.4');
	}
}
add_action( 'wp_default_scripts', 'crave_remove_jquery_migrate' );


/**
 * Remove Block Library CSS
 */
function wpassist_remove_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );

/**
 * Theme Support
 */
function novokno_theme_support() {
  /*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
  set_post_thumbnail_size( 1200, 9999 );
  add_image_size( 'image-350x280', 350, 280, true );
  add_image_size( 'image-350x200', 350, 200, true );
  add_image_size( 'image-300x240', 300, 240, true );
  add_image_size( 'image-h-150', 9999, 150 );
  add_image_size( 'image-h-240', 9999, 240 );
  add_image_size( 'image-h-480', 9999, 480 );


	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );


	/*
	 * Adds `async` and `defer` support for scripts registered or enqueued
	 * by the theme.
	 */
	$loader = new Novokno_Script_Loader();
	add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );

}

add_action( 'after_setup_theme', 'novokno_theme_support' );

/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/template-tags.php';
// Custom script loader class.
require get_template_directory() . '/classes/class-novokno-script-loader.php';

/**
 * Register and Enqueue Styles.
 */
function novokno_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'novokno-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;display=swap&amp;subset=cyrillic', array(), null );
	// wp_enqueue_style( 'novokno-libs-style', get_template_directory_uri() . '/assets/css/libs.min.css', array(), $theme_version );
	wp_enqueue_style( 'novokno-custom-style', get_template_directory_uri() . '/assets/css/main.css', array(), $theme_version );
	wp_enqueue_style( 'novokno-style', get_stylesheet_uri(), array(), $theme_version );

}

add_action( 'wp_enqueue_scripts', 'novokno_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function novokno_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

  wp_enqueue_script( 'novokno-libs-js', get_template_directory_uri() . '/assets/js/libs.min.js', array('jquery'), $theme_version, true );
  wp_script_add_data( 'novokno-libs-js', 'defer', true );

  if (is_page('kontakty')) {
    wp_enqueue_script( 'novokno-yandex-js', 'https://api-maps.yandex.ru/2.1/?apikey=592b3f53-b8ee-4d79-9ab4-174b61acadad&lang=ru_RU', array(), $theme_version, true );
  }

	wp_enqueue_script( 'novokno-js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), $theme_version, true );
	wp_script_add_data( 'novokno-js', 'defer', true );

}

add_action( 'wp_enqueue_scripts', 'novokno_register_scripts' );

/**
 * Fix skip link focus in IE11.
 */
function novokno_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'novokno_skip_link_focus_fix' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function novokno_menus() {

	$locations = array(
		'primary'  => __( 'Меню в шапке', 'novokno' ),
		'footer'   => __( 'Меню в подвале', 'novokno' ),
	);

	register_nav_menus( $locations );
}
// add_action( 'init', 'novokno_menus' );


if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backwards compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}


/**
 * ACF - Options pages
 */
function register_acf_options_pages() {

  if( !function_exists('acf_add_options_page') ) {
    return;
  }

  acf_add_options_page(array(
      'page_title'    => __('ОБЩИЙ КОНТЕНТ'),
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
  ));

  acf_add_options_sub_page(array(
		'page_title' 	=> __('Настройки шапки сайта'),
		'menu_title'	=> __('Шапка сайта'),
		'parent_slug'	=> 'theme-general-settings',
	));
  acf_add_options_sub_page(array(
		'page_title' 	=> __('Настройки подвала сайта'),
		'menu_title'	=> __('Подвал сайта'),
		'parent_slug'	=> 'theme-general-settings',
	));
  acf_add_options_sub_page(array(
		'page_title' 	=> __('Настройки верхнего слайдера'),
		'menu_title'	=> __('Верхний слайдер'),
		'parent_slug'	=> 'theme-general-settings',
	));
  acf_add_options_sub_page(array(
		'page_title' 	=> __('Настройки блока контактов'),
		'menu_title'	=> __('Блок контактов'),
		'parent_slug'	=> 'theme-general-settings',
	));
  acf_add_options_sub_page(array(
		'page_title' 	=> __('Настройки соцсетей'),
		'menu_title'	=> __('Соцсети'),
		'parent_slug'	=> 'theme-general-settings',
	));
  acf_add_options_sub_page(array(
		'page_title' 	=> __('Настройки платежных систем'),
		'menu_title'	=> __('Платежные системы'),
		'parent_slug'	=> 'theme-general-settings',
  ));
  acf_add_options_sub_page(array(
		'page_title' 	=> __('Настройки общего баннера для заявки'),
		'menu_title'	=> __('Баннер для заявки'),
		'parent_slug'	=> 'theme-general-settings',
	));
  acf_add_options_sub_page(array(
		'page_title' 	=> __('Настройки для Инфо баннера'),
		'menu_title'	=> __('Баннер Инфо'),
		'parent_slug'	=> 'theme-general-settings',
	));
  acf_add_options_sub_page(array(
		'page_title' 	=> __('Настройки баннера для рассрочки'),
		'menu_title'	=> __('Баннер для рассрочки'),
		'parent_slug'	=> 'theme-general-settings',
	));
  

}

add_action('acf/init', 'register_acf_options_pages');


/**
 * Filter the excerpt length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/**
 * Register post types
 */
function novokno_register_post_types() {

  // Projects
  register_post_type('projects', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Проекты', // основное название для типа записи
			'singular_name'      => 'Проект', // название для одной записи этого типа
			'add_new'            => 'Добавить Проект', // для добавления новой записи
			'add_new_item'       => 'Добавление Проекта', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Проекта', // для редактирования типа записи
			'new_item'           => 'Новый Проект', // текст новой записи
			'view_item'          => 'Смотреть Проект', // для просмотра записи этого типа.
			'search_items'       => 'Искать Проект', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Проекты', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-status',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','thumbnail', 'editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => array('slug' => 'projects', 'with_front' => false ),
		'query_var'           => true,
  ) );


  // Windows for flat
  register_post_type('window-flat', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Окна в квартиру', // основное название для типа записи
			'singular_name'      => 'Окно в квартиру', // название для одной записи этого типа
			'add_new'            => 'Добавить Окно', // для добавления новой записи
			'add_new_item'       => 'Добавление Окна', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Окна', // для редактирования типа записи
			'new_item'           => 'Новое Окно', // текст новой записи
			'view_item'          => 'Смотреть Окно', // для просмотра записи этого типа.
			'search_items'       => 'Искать Окно', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Окна в квартиру', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-status',
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => true,
		'supports'            => array('title','thumbnail'),
		'taxonomies'          => array( 'brand' ),
		'has_archive'         => false,
		'rewrite'             => array('slug' => 'windows', 'with_front' => false ),
		'query_var'           => true,
  ) );


  // Windows for house
  register_post_type('window-house', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Окна в дом', // основное название для типа записи
			'singular_name'      => 'Окно в дом', // название для одной записи этого типа
			'add_new'            => 'Добавить Окно', // для добавления новой записи
			'add_new_item'       => 'Добавление Окна', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Окна', // для редактирования типа записи
			'new_item'           => 'Новое Окно', // текст новой записи
			'view_item'          => 'Смотреть Окно', // для просмотра записи этого типа.
			'search_items'       => 'Искать Окно', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Окна в дом', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-status',
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => true,
		'supports'            => array('title','thumbnail'),
		'taxonomies'          => array( 'brand' ),
		'has_archive'         => false,
		'rewrite'             => array('slug' => 'windows', 'with_front' => false ),
		'query_var'           => true,
  ) );


  // Windows for dacha
  register_post_type('window-dacha', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Окна на дачу', // основное название для типа записи
			'singular_name'      => 'Окно на дачу', // название для одной записи этого типа
			'add_new'            => 'Добавить Окно', // для добавления новой записи
			'add_new_item'       => 'Добавление Окна', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Окна', // для редактирования типа записи
			'new_item'           => 'Новое Окно', // текст новой записи
			'view_item'          => 'Смотреть Окно', // для просмотра записи этого типа.
			'search_items'       => 'Искать Окно', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Окна на дачу', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-status',
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => true,
		'supports'            => array('title','thumbnail'),
		'taxonomies'          => array( 'brand' ),
		'has_archive'         => false,
		'rewrite'             => array('slug' => 'windows', 'with_front' => false ),
		'query_var'           => true,
  ) );


  // Windows for dacha
  register_post_type('product', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Продукция', // основное название для типа записи
			'singular_name'      => 'Продукт', // название для одной записи этого типа
			'add_new'            => 'Добавить Продукт', // для добавления новой записи
			'add_new_item'       => 'Добавление Продукта', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Продукта', // для редактирования типа записи
			'new_item'           => 'Новый Продукт', // текст новой записи
			'view_item'          => 'Смотреть Продукт', // для просмотра записи этого типа.
			'search_items'       => 'Искать Продукт', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Продукция', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-status',
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => true,
		'supports'            => array( 'title' ),
		'taxonomies'          => array( 'maker', 'colors' ),
		'has_archive'         => false,
		'rewrite'             => array('slug' => 'products', 'with_front' => false ),
		'query_var'           => true,
  ) );


  register_taxonomy( 'brand', array( 'window-flat', 'window-house', 'window-dacha' ), array(
    'hierarchical' => true,
    'label' => 'Бренды',
    'singular_label' => 'Бренд',
    'rewrite' => array( 'slug' => 'brand', 'with_front'=> false )
    )
  );

  register_taxonomy( 'maker', array( 'product' ), array(
    'hierarchical' => true,
    'label' => 'Бренды',
    'singular_label' => 'Бренд',
    'rewrite' => array( 'slug' => 'brand', 'with_front'=> false )
    )
  );

  register_taxonomy( 'color', array( 'product' ), array(
    'hierarchical' => true,
    'label' => 'Расцветки',
    'singular_label' => 'Цвет',
    'rewrite' => array( 'slug' => 'color', 'with_front'=> false )
    )
  );


  // Doors
  register_post_type('door', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Двери', // основное название для типа записи
			'singular_name'      => 'Дверь', // название для одной записи этого типа
			'add_new'            => 'Добавить Дверь', // для добавления новой записи
			'add_new_item'       => 'Добавление Двери', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Двери', // для редактирования типа записи
			'new_item'           => 'Новая Дверь', // текст новой записи
			'view_item'          => 'Смотреть Дверь', // для просмотра записи этого типа.
			'search_items'       => 'Искать Дверь', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Двери', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-status',
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => true,
		'supports'            => array('title','thumbnail'),
		'taxonomies'          => array( 'categories' ),
		'has_archive'         => false,
		'rewrite'             => array('slug' => 'doors', 'with_front' => false ),
		'query_var'           => true,
  ) );

  register_taxonomy( 'categories', array('door'), array(
    'hierarchical' => true,
    'label' => 'Категории',
    'singular_label' => 'Категория',
    'rewrite' => array( 'slug' => 'categories', 'with_front'=> false )
    )
  );


  // Reviews
  register_post_type('reviews', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Отзывы', // основное название для типа записи
      'singular_name'      => 'Отзыв', // название для одной записи этого типа
      'add_new'            => 'Добавить Отзыв', // для добавления новой записи
      'add_new_item'       => 'Добавление Отзыва', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование Отзыва', // для редактирования типа записи
      'new_item'           => 'Новый Отзыв', // текст новой записи
      'view_item'          => 'Смотреть Отзыв', // для просмотра записи этого типа.
      'search_items'       => 'Искать Отзыв', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Отзывы', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => true, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => null,
    'menu_icon'           => 'dashicons-format-status',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => array('title','thumbnail', 'editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => array('slug' => 'reviews', 'with_front' => false ),
    'query_var'           => true,
  ) );


}
add_action( 'init', 'novokno_register_post_types' );

/**
 * CF7 - Remove auto P tag
 */
add_filter('wpcf7_autop_or_not', '__return_false');


/**
 * Ajax loadmore
 */
function vh_load_more_scripts() {

  global $wp_query;

  // register our main script but do not enqueue it yet
  wp_register_script('vh_loadmore', get_stylesheet_directory_uri(). '/jx/jx-loadmore.js', array('jquery'));

  // we have to pass parameters to jx-loadmore.js
  // you can define variables directly in your HTML or in wp_localize_script()
  wp_localize_script('vh_loadmore', 'vh_loadmore_params', array(
    'ajaxurl' => admin_url( 'admin-ajax.php' ), // WordPress AJAX
    'posts' => json_encode($wp_query->query_vars), // everything about your loop is here
    'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
    'max_page' => $wp_query->max_num_pages
  ));

  wp_enqueue_script( 'vh_loadmore' );
  wp_script_add_data( 'vh_loadmore', 'defer', true );
}

add_action('wp_enqueue_scripts', 'vh_load_more_scripts');


function vh_loadmore_ajax_handler() {

	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page']; // we need next page to be loaded
	$args['post_status'] = 'publish';

	// it is always better to use WP_Query but not here
	query_posts( $args );

	if( have_posts() ) :

		// run the loop
		while( have_posts() ): the_post();

      if ( is_home() || is_page( 'projects' ) ) :
        get_template_part( 'template-parts/post/card-article' );
			// for the test purposes comment the line above and uncomment the below one
      // the_title();
      endif;

		endwhile;

	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}

add_action('wp_ajax_loadmore', 'vh_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'vh_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}