<?php
/**
 * Mildthemes_Excerpt_Customizer
 *
 * Excerpt Customizer.
 *
 * @package Nectarina
 * @author Mildthemes
 * @link http://mildthemes.com
 * @version 0.0.1
 */

class Mildthemes_Excerpt_Customizer {

	protected $class_loader;
	protected $params;

	public function __construct( $class_loader, $params ) {
		
		// Initialization & default parameters
		$this->class_loader = $class_loader;

		$defaults = array (
			'type'   => 'chars',
			'length' => '500',
			'read_more' => '[...]',
			'no_custom' => false,
			'allowed_html' => array(
				'p' => array(),
				'a' => array(
					'href' => array(),
					'title' => array()
				),
				'em' => array(),
				'i' => array(),
				'strong' => array(),
			    'b' => array(),
				'code' => array(),
				'cite' => array(),
				'abbr' => array(
		        	'title' => true,
			    ),
			    'acronym' => array(
			        'title' => true,
			    ),
			    'del' => array(
			        'datetime' => true,
			    ),
			    'q' => array(
			        'cite' => true,
			    ),
			    'img' => array(
			    	'src' => array(),
			    	'alt' => array(),
			    	'width' => array(),
			    	'height' => array(),
			    	'class' => array(),
		    	),
			),
		);

		$this->params = wp_parse_args( $params, $defaults )	;
	}

	public function define_admin_hooks() {

		// Define which admin hooks has to be applied by the Class Loader
		$this->class_loader->remove_filter( 'get_the_excerpt', $this, 'wp_trim_excerpt' );
		$this->class_loader->add_filter( 'get_the_excerpt', $this, 'excerpt_customizer' );
		if ($this->params['no_custom']) {
			$this->class_loader->add_action( 'admin_menu', $this, 'remove_excerpt_box' );
		}
	}

	public function run() {

		// All the methods to be run
		$this->define_admin_hooks();
	}

	public function remove_excerpt_box(){
		remove_meta_box('postexcerpt', 'post', 'side');
	}

	public function excerpt_customizer( $excerpt ) {

		// Customizing the excerpt
		$new_excerpt = $excerpt;

		if ( '' == $excerpt || $this->params['no_custom']) { // If the excerpt has not been customized by the user
			global $post;

			$new_excerpt = get_the_content('');
			$new_excerpt = wp_kses($new_excerpt, $this->params['allowed_html']);
			if (!array_key_exists('p', $this->params['allowed_html'])) {
				$new_excerpt = str_replace(array("\r\n", "\r", "\n"), " ", $new_excerpt);
			}

			if ( $this->params['type'] == "paragraph" ) {
				return $this->paragraph_excerpt_customizer( $new_excerpt );
			} else if ( $this->params['type'] == "chars" ) {
				$new_excerpt = $this->chars_excerpt_customizer( $new_excerpt, $this->params['length'] );
			} else if ( $this->params['type'] == "words" ) {
				$new_excerpt = $this->words_excerpt_customizer( $new_excerpt, $this->params['length'] );
			} 
		}

		return apply_filters('excerpt_customizer', $new_excerpt, $excerpt);
	}

	public function paragraph_excerpt_customizer($new_excerpt) {
		$new_excerpt = strip_shortcodes( $new_excerpt );
		$new_excerpt = apply_filters( 'the_content', $new_excerpt );
		$new_excerpt = substr( $new_excerpt, 0, strpos( $new_excerpt, '</p>' ) );
		$new_excerpt = str_replace( ']]>', ']]&gt;', $new_excerpt );

		//If excerpt ends with a ., delete it if $params['read_more'] is not false
		if (($this->params['read_more'] != '') && ($new_excerpt[strlen($new_excerpt)-1] == '.')) {
			$new_excerpt = substr($new_excerpt,0,strlen($new_excerpt)-1);
		}
		$new_excerpt .= ' ' . $this->params['read_more'];

		return $new_excerpt;
	}

	public function chars_excerpt_customizer( $new_excerpt, $length ) {
		$new_excerpt = strip_shortcodes( $new_excerpt );
		$new_excerpt = apply_filters( 'the_content', $new_excerpt );

		if ( mb_strlen( $new_excerpt ) > $length ) {
			$subex = mb_substr( $new_excerpt, 0, $length - 5 );
			$exwords = explode( ' ', $subex );
			$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
			if ( $excut < 0 ) {
				$new_excerpt = mb_substr( $subex, 0, $excut );
			} else {
				$new_excerpt = $subex;
			}
			$new_excerpt = $new_excerpt . '[...]';

		}

		return $new_excerpt;
	}

	public function words_excerpt_customizer( $new_excerpt, $length ) {
		$new_excerpt = explode(' ', $new_excerpt, ($length + 1));
		if(count($new_excerpt) > $length)
		array_pop($new_excerpt);
		return implode(' ', $new_excerpt);
	}

}
?>