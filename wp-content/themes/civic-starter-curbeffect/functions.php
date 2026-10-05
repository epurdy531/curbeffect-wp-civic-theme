<?php
/**
 * Civic Starter CurbEffect functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Civic Starter CurbEffect 1.0
 */

if ( ! function_exists( 'civic_starter_curbeffect_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since Civic Starter CurbEffect 1.0
	 *
	 * @return void
	 */
	function civic_starter_curbeffect_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'civic_starter_curbeffect_post_format_setup' );

if ( ! function_exists( 'civic_starter_curbeffect_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since Civic Starter CurbEffect 1.0
	 *
	 * @return void
	 */
	function civic_starter_curbeffect_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'civic_starter_curbeffect_editor_style' );

if ( ! function_exists( 'civic_starter_curbeffect_enqueue_styles' ) ) :
	/**
	 * Enqueues the theme stylesheet on the front.
	 *
	 * @since Civic Starter CurbEffect 1.0
	 *
	 * @return void
	 */
	function civic_starter_curbeffect_enqueue_styles() {
		$suffix = SCRIPT_DEBUG ? '' : '.min';
		$src    = 'style' . $suffix . '.css';

		wp_enqueue_style(
			'civic-starter-curbeffect-style',
			get_parent_theme_file_uri( $src ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_style_add_data(
			'civic-starter-curbeffect-style',
			'path',
			get_parent_theme_file_path( $src )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'civic_starter_curbeffect_enqueue_styles' );

if ( ! function_exists( 'civic_starter_curbeffect_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since Civic Starter CurbEffect 1.0
	 *
	 * @return void
	 */
	function civic_starter_curbeffect_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'civic-starter-curbeffect' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'civic_starter_curbeffect_block_styles' );

if ( ! function_exists( 'civic_starter_curbeffect_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since Civic Starter CurbEffect 1.0
	 *
	 * @return void
	 */
	function civic_starter_curbeffect_pattern_categories() {

		register_block_pattern_category(
			'civic_starter_curbeffect_page',
			array(
				'label'       => __( 'Pages', 'civic-starter-curbeffect' ),
				'description' => __( 'A collection of full page layouts.', 'civic-starter-curbeffect' ),
			)
		);

		register_block_pattern_category(
			'civic_starter_curbeffect_post-format',
			array(
				'label'       => __( 'Post formats', 'civic-starter-curbeffect' ),
				'description' => __( 'A collection of post format patterns.', 'civic-starter-curbeffect' ),
			)
		);
	}
endif;
add_action( 'init', 'civic_starter_curbeffect_pattern_categories' );

if ( ! function_exists( 'civic_starter_curbeffect_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since Civic Starter CurbEffect 1.0
	 *
	 * @return void
	 */
	function civic_starter_curbeffect_register_block_bindings() {
		register_block_bindings_source(
			'civic-starter-curbeffect/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'civic-starter-curbeffect' ),
				'get_value_callback' => 'civic_starter_curbeffect_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'civic_starter_curbeffect_register_block_bindings' );

if ( ! function_exists( 'civic_starter_curbeffect_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since Civic Starter CurbEffect 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function civic_starter_curbeffect_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;
