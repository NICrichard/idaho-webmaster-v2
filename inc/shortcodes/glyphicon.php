<?php
/**
 * Shortcode for displaying YouTube videos.
 *
 * @link https://codex.wordpress.org/Shortcode_API
 *
 * @package Idaho_Webmaster
 */

add_shortcode( 'glyphicons', 'idaho_glyphicon_func' );

/**
 * Function for rendering youtube video.
 *
 * @param string $atts Shortcode arguments.
 * @param string $content Shortcode content.
 */
function idaho_glyphicon_func( $atts, $content = '' ) {

	/** Returnable html string. */
	$icon = (string) '';

	$name = $atts[0];

	$icon .= sprintf('<span class="glyphicons glyphicons-%1$s"></span>',
		esc_attr( $name )
	);

	/** Strip out new lines to avoid auto <p>s. */
	return $icon;
};
