<?php

namespace NutMainWidgets\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Elementor Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */

class read_more extends Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'read-more';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Read More', 'nut-widgets' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-plus-square';
	}

	public function get_script_depends() {
		return [ 'jquery' ];
	}
	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'nut-widgets' ];
	}

	/**
	 * Register widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {

		$this->start_controls_section(
			'table_content',
			[
				'label' => __( 'Read More', 'nut-widgets' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		

		$this->add_control(
			'description_one',
			[
				'label' => esc_html__( 'Description One', 'nut-widgets' ),
				'type' => Controls_Manager::WYSIWYG,
				'rows' => 10,
				'default' => esc_html__( 'Content description One', 'nut-widgets' ),
				'placeholder' => esc_html__( 'Type your description here', 'nut-widgets' ),
			]
		);
		

		$this->add_control(
			'description_two',
			[
				'label' => esc_html__( 'Description Two', 'nut-widgets' ),
				'type' => Controls_Manager::WYSIWYG,
				'rows' => 10,
				'default' => esc_html__( 'Content description Two', 'nut-widgets' ),
				'placeholder' => esc_html__( 'Type your description here', 'nut-widgets' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'title_style',
			[
				'label' => esc_html__( 'Table Style', 'nut-widgets' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'text_align',
			[
				'label' => esc_html__( 'Alignment', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'plugin-name' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'plugin-name' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'plugin-name' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'left',
				'toggle' => true,
			]
		);



		$this->end_controls_section();


	}

/**
	 * Render widget output on the frontend.
	 
	 */

	protected function render() {

		$settings = $this->get_settings_for_display(); ?>
		
		
	<div class="post_read" style="text-align: <?php echo esc_attr( $settings['text_align'] ); ?>;">
		<?php echo $settings['description_one']; ?>
		<span class="dots">...</span>
		<div class="more"><?php echo $settings['description_two']; ?></div>
		 <button class="read_btn">read more</button> 
<!-- 		<a class="read_btn" href="">read more</a> -->
	</div>

	

	<?php 

	}
	

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _content_template() {
		
	}

}