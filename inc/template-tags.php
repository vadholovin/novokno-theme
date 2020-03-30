<?php
/**
 * Custom template tags.
 */

/**
 * Icon
 *
 * @param string  $name Icon name.
 * @param string  $mods Comma + space separated modifiers.
 * @param string  $class Additional class.
 * @param bool    $wrap Icon with wrapper (true) or not (false).
 * @param bool    $sprite Icon is in a sprite or as a separate file.
 * @param bool    $echo Icon is in a sprite or as a separate file.
 * 
 * @return string $html Compiled HTML based on our arguments.
 */
function novokno_icon( $name, $mods = null, $class = null, $sprite = true, $wrap = true, $echo = true ) {
  $args = array(
    'wrapper'         => '<span class="%1$s">%2$s</span>',
    'svg_no_class'    => '<svg aria-hidden="true" focusable="false">%1$s</svg>',
    'svg_with_class'  => '<svg class="%1$s" aria-hidden="true" focusable="false">%2$s</svg>',
    'img'             => '<img class="%1$s" src="%2$s" aria-hidden="true" focusable="false">',
    'src_sprite'      => get_template_directory_uri() . '/assets/img/sprites/icons.svg',
    'src_individual'  => get_template_directory_uri() . '/assets/img/icons/' . $name . '.svg',
  );

  $src = $sprite ? $args['src_sprite'] : $args['src_individual'];
  $svg_inner = '<use xlink:href=' . $src . '#' . $name . '></use>';

  $classname = 'icon icon-' . $name;

  if ( $mods ) {
    $mods_list = explode(', ', $mods);

    foreach ( $mods_list as $value ) {
      $classname .= ' icon--' . $value;
    }
  }

  if ( $class ) $classname .= ' ' . $class;

  if ( $sprite ) {
    if ( $wrap ) {
      $svg = sprintf( $args['svg_no_class'], $svg_inner );
      $html = sprintf( $args['wrapper'], $classname, $svg );
    } else {
      $svg = sprintf( $args['svg_with_class'], $classname, $svg_inner );
      $html = $svg;
    }
  } else {
    $html = sprintf( $args['img'], $classname, $src );
  }

  if ( ! $echo ) {
		return $html;
	}

	echo $html;
}

