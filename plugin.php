<?php
namespace NutMainWidgets;


use NutMainWidgets\Widgets\simple_table;

/**
 * Class Plugin
 *
 * Main Plugin class
 * @since 1.2.0
 */
class NutWidgets {

	/**
	 * Instance
	 *
	 * @since 1.2.0
	 * @access private
	 * @static
	 *
	 * @var Plugin The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.2.0
	 * @access public
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * widget_scripts
	 *
	 * Load required plugin core files.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function widget_scripts() {

		wp_enqueue_script('jquery');
		
        wp_register_script( 'owl-carousel-js', plugins_url( '/assets/js/owl.carousel.min.js', __FILE__ ), [ 'jquery' ], false, true );
		wp_enqueue_script( 'owl-carousel-js' );
		
        wp_register_script( 'slick-js', plugins_url( '/assets/js/slick.min.js', __FILE__ ), [ 'jquery' ], false, true );
		wp_enqueue_script( 'slick-js' );

		wp_register_script( 'nut_script', plugins_url( '/assets/js/nut-script.js', __FILE__ ), [ 'jquery' ], false, true );
		wp_enqueue_script( 'nut_script' );

	}
	
	/**
	 * widget_styles
	 *
	 * Load required plugin core files.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function widget_styles(){

		wp_register_style("owl-carousel-style",plugins_url("/assets/css/owl.carousel.min.css",__FILE__));
		wp_enqueue_style( 'owl-carousel-style' );
		
		wp_register_style("slick-style",plugins_url("/assets/css/slick.css",__FILE__));
		wp_enqueue_style( 'slick-style' );

		wp_register_style("fwe-style",plugins_url("/assets/css/style.css",__FILE__));
		wp_enqueue_style( 'fwe-style' );
	}	


	/**
	 * Register Widgets
	 *
	 * Register new Elementor widgets.
	 *
	 * @since 1.2.0
	 * @access public
	 *
	 * @param Widgets_Manager $widgets_manager Elementor widgets manager.
	 */
	public function register_widgets( $widgets_manager ) {
		// Its is now safe to include Widgets files
		require_once( __DIR__ . '/widgets/simple-table.php' );
		require_once( __DIR__ . '/widgets/slider-table.php' );
		require_once( __DIR__ . '/widgets/slick-marquee.php' );
		require_once( __DIR__ . '/widgets/read-more.php' );

		// Register Widgets
		$widgets_manager->register( new Widgets\simple_table() );
		$widgets_manager->register( new Widgets\slider_table() );
		$widgets_manager->register( new Widgets\slick_marquee() );
		$widgets_manager->register( new Widgets\read_more() );
	}




	
	//category registered
	public function add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'nut-widgets',
			[
				'title' => __( 'Nut widgets', 'nut-widgets' ),
				'icon' => 'fa fa-plug',
			]
		);
	}

	/**
	 *  Plugin class constructor
	 *
	 * Register plugin action hooks and filters
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function __construct() {

		// Enqueue widget styles
        add_action( 'elementor/frontend/after_register_styles', [ $this, 'widget_styles' ] , 100 );
        add_action( 'admin_enqueue_scripts', [ $this, 'widget_styles' ] , 100 );

		// Enqueue widget scripts
        add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_scripts' ], 100 );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );

		//category registered
		add_action( 'elementor/elements/categories_registered',  [ $this,'add_elementor_widget_categories' ]);

	}
}

// Instantiate Plugin Class
NutWidgets::instance();
