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
 * Options pages for ACF
 * Excerpt length
 * Excerpt "read more"
 * Register post types
 * Remove auto P tag in CF7
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
 * Sets up theme defaults and registers support for various WordPress features.
 */
function novokno_theme_support() {
  /*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	// set_post_thumbnail_size( 1200, 9999 );


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

  if (is_page('contacts')) {
    // wp_enqueue_script( 'novokno-yandex-js', 'https://api-maps.yandex.ru/2.1/?apikey=7f26816b-f17f-4c3a-af56-62fff3b1a738&lang=ru_RU', array(), $theme_version, true );
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
 * Options pages for ACF
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
		'page_title' 	=> __('Настройки верхнего баннера'),
		'menu_title'	=> __('Верхний баннер'),
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
  // Reviews
  register_post_type('novokno-reviews', array(
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
		'rewrite'             => ['slug' => 'reviews'],
		'query_var'           => true,
  ) );



}
add_action( 'init', 'novokno_register_post_types' );

/**
 * Remove auto P tag in CF7
 */
add_filter('wpcf7_autop_or_not', '__return_false');


/**
 * Archive Navigation
 */
function novokno_archive_navigation() {

	$settings = array(
		'count' => 6,
		'prev_text' => '&laquo;',
		'next_text' => '&raquo;'
	);

	global $wp_query;
	$current = max( 1, get_query_var( 'paged' ) );
	$total = $wp_query->max_num_pages;
	$links = array();

	// Offset for next link
	if( $current < $total )
		$settings['count']--;

	// Previous
	if( $current > 1 ) {
		$settings['count']--;
		$links[] = novokno_archive_navigation_link( $current - 1, 'prev', $settings['prev_text'] );
	}

	// Current
	$links[] = novokno_archive_navigation_link( $current, 'current' );

	// Next Pages
	for( $i = 1; $i < $settings['count']; $i++ ) {
		$page = $current + $i;
		if( $page <= $total ) {
			$links[] = novokno_archive_navigation_link( $page );
		}
	}

	// Next
	if( $current < $total ) {
		$links[] = novokno_archive_navigation_link( $current + 1, 'next', $settings['next_text'] );
	}


	echo '<nav class="navigation posts-navigation" role="navigation">';
    echo '<ul class="pagination justify-content-center">' . join( '', $links ) . '</ul>';
	echo '</nav>';
}

// add_action( 'the_content_while_after', 'novokno_archive_navigation' );

/**
 * Archive Navigation Link
 *
 * @param int $page
 * @param string $class
 * @param string $label
 * @return string $link
 */
function novokno_archive_navigation_link( $page = false, $class = '', $label = '' ) {

	if( ! $page )
		return;

	$classes = array( 'page-numbers' );
	if( !empty( $class ) )
		$classes[] = $class;
	$classes = array_map( 'sanitize_html_class', $classes );

	$label = $label ? $label : $page;
	$link = esc_url_raw( get_pagenum_link( $page ) );

	return '	<li class="page-item"><a class="page-link ' . join ( ' ', $classes ) . '" href="' . $link . '">' . $label . '</a></li>';

}