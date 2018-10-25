<?php
/**
 * Shortcode for displaying iFrame.
 *
 * @link https://codex.wordpress.org/Shortcode_API
 *
 * @package Idaho_Webmaster
 */

add_shortcode( 'iframe', 'idaho_iframe_func' );

/**
 * Function for rendering youtube video.
 *
 * @param string $atts Shortcode arguments.
 * @param string $content Shortcode content.
 */
function idaho_iframe_func( $atts, $content = '' ) {

	/** Returnable html string. */
	$video = (string) '';

	/** Convert $atts to $params. Merge with defaults. */
	$params = (array) shortcode_atts( array(
		'url' 		=> 'https://www.youtube.com/watch?v=DPBU2SOSC5c',
		'aspect' 	=> '16by9',
	), $atts );


	$video .= sprintf('<iframe src="%2$s" allowfullscreen style="width:100%"></iframe>',
		esc_attr( $params['aspect'] ),
		esc_url( $params['url'] )
	);

	/** Strip out new lines to avoid auto <p>s. */
	return $video;
};
