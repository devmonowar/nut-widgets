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

class slick_marquee extends Widget_Base {

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
		return 'slick-marquee';
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
		return __( 'Slick Marquee', 'plugin-name' );
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
		return 'eicon-slider-push';
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
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the list widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'slider', 'marquee', 'slick', 'ticker' ];
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
			'title_sec',
			[
				'label' => __( 'Slides Item', 'nut-widgets' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		

	    $repeater = new \Elementor\Repeater();

	    $repeater->add_control(
			'list_title', [
				'label' => __( 'Title', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'List Title' , 'nut-widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'simple_logo',
			[
				'label' => __( 'Choose Simple Image', 'nut-widgets' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
					'url' => PLUGIN_ROOT. 'assets/img/plus-icon.png',
				],
			]
		);



		$this->add_control(
			'list',
			[
				'label' => __( 'Repeater List', 'nut-widgets' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => __( 'Slide One', 'nut-widgets' ),
					],
					[
						'list_title' => __( 'Slide Two', 'nut-widgets' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);


		$this->end_controls_section();

        



        // Slider Settings
        $this->start_controls_section(
            'slider_settings',
            [
                'label' => __( 'Slider Settings', 'nut-widgets' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

		
        // speed
        $this->add_control(
            'speed',
            [
                'label' => __( 'speed', 'nut-widgets' ),
                'type' => Controls_Manager::NUMBER,
                'default' => 3000,
                'placeholder' => __( 'Enter the speed between to slides', 'nut-widgets' ),
            ]
        );

        // autoplay
        $this->add_control(
            'autoplay',
            [
                'label' => __( 'autoplay', 'nut-widgets' ),
                'type' => Controls_Manager::SWITCHER,
				'label_on' => __( 'True', 'nut-widgets' ),
				'label_off' => __( 'false', 'nut-widgets' ),
				'return_value' => true,
				'default' => false,
            ]
        );

        // autoplaySpeed
        $this->add_control(
            'autoplaySpeed',
            [
                'label' => __( 'autoplaySpeed', 'nut-widgets' ),
                'type' => Controls_Manager::NUMBER,
                'default' => 0,
                'placeholder' => __( 'Enter the speed between to slides', 'nut-widgets' ),
            ]
        );

        // centerMode
        $this->add_control(
            'centerMode',
            [
                'label' => __( 'centerMode', 'nut-widgets' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __( 'True', 'nut-widgets' ),
				'label_off' => __( 'false', 'nut-widgets' ),
				'return_value' => true,
				'default' => false,
            ]
        );


        // cssEase
        $this->add_control(
            'cssEase',
            [
                'label' => __( 'cssEase', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'linear' , 'nut-widgets' ),
            ]
        );

        // slidesToShow
        $this->add_control(
            'slidesToShow',
            [
                'label' => __( 'slidesToShow', 'nut-widgets' ),
                'type' => Controls_Manager::NUMBER,
                'default' => 1,
                'placeholder' => __( 'Enter the speed between to slides', 'nut-widgets' ),
            ]
        );

        // slidesToScroll
        $this->add_control(
            'slidesToScroll',
            [
                'label' => __( 'slidesToScroll', 'nut-widgets' ),
                'type' => Controls_Manager::NUMBER,
                'default' => 1,
                'placeholder' => __( 'Enter the speed between to slides', 'nut-widgets' ),
            ]
        );



		
        // variableWidth
        $this->add_control(
            'variableWidth',
            [

				'label' => __( 'variableWidth', 'nut-widgets' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => __( 'True', 'nut-widgets' ),
				'label_off' => __( 'false', 'nut-widgets' ),
				'return_value' => true,
				'default' => false,
            ]
        );


		// infinite
		$this->add_control(
			'infinite',
			[
				'label' => __( 'infinite', 'nut-widgets' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => __( 'True', 'nut-widgets' ),
				'label_off' => __( 'false', 'nut-widgets' ),
				'return_value' => true,
				'default' => false,
			]
		);

		// initialSlide
		$this->add_control(
			'initialSlide',
			[
				'label' => __( 'initialSlide', 'nut-widgets' ),
                'type' => Controls_Manager::NUMBER,
                'default' => 1,
                'placeholder' => __( 'Enter the speed between to slides', 'nut-widgets' ),
			]
		);


		
        // Show arrows
        $this->add_control(
            'arrows',
            [
                'label' => __( 'arrows', 'nut-widgets' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'nut-widgets' ),
                'label_off' => __( 'Hide', 'nut-widgets' ),
                'return_value' => true,
				'default' => false,
            ]
        );


        // show buttons
        $this->add_control(
            'buttons',
            [
                'label' => __( 'buttons', 'nut-widgets' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'nut-widgets' ),
                'label_off' => __( 'Hide', 'nut-widgets' ),
                'return_value' => true,
				'default' => false,
            ]
        );




        $this->end_controls_section();


        $this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Style', 'nut-widgets' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);


		$this->add_control(
			'margin',
			[
				'label' => esc_html__( 'Margin', 'nut-widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .slick-slide .inner' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'nut-widgets' ),
				'selector' => '{{WRAPPER}} .slick-slide .inner',
			]
		);
		
		$this->add_control(
			'width',
			[
				'label' => esc_html__( 'Width', 'nut-widgets' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 200,
				],
				'selectors' => [
					'{{WRAPPER}} .slick-slide .inner' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);


        $this->end_controls_section();





	}

/**
	 * Render widget output on the frontend.
	 
	 */
	private function style_tab() {}

	protected function render() {

		$settings = $this->get_settings_for_display(); 
		$this->add_render_attribute(
            'slick_marquee_carousel_options',
            [
                'id'          => 'slick_marquee-' . $this->get_id(),
                'data-speed'   => $settings[ 'speed' ],
                'data-autoplay'   => $settings[ 'autoplay' ],
                'data-autoplaySpeed'   => $settings[ 'autoplaySpeed' ],
                'data-centerMode'   => $settings[ 'centerMode' ],
                'data-cssEase'   => $settings[ 'cssEase' ],
                'data-slidesToShow'   => $settings[ 'slidesToShow' ],
                'data-slidesToScroll'   => $settings[ 'slidesToScroll' ],
                'data-variableWidth'   => $settings[ 'variableWidth' ],
                'data-infinite' => $settings[ 'infinite' ],
                'data-initialSlide' => $settings[ 'initialSlide' ],
                'data-arrows' => $settings[ 'arrows' ],
                'data-buttons' => $settings[ 'buttons' ],
            ]
        );
        ?>

		<div class="slick_marquee slick marquee" <?php echo $this->get_render_attribute_string( 'slick_marquee_carousel_options' ); ?>>

			<?php
        	if ( $settings['list'] ) :
				foreach (  $settings['list'] as $item ) : ?>



			<div class="slick-slide">
				<div class="inner">
					<img src="<?php echo $item['simple_logo']['url']?>">
				</div>
			</div>




			<?php	endforeach;
					
				endif;
		            ?>
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
        ?>
        <#
            view.addRenderAttribute(
                'slick_marquee_carousel_options',
                {
                    'id': 'logo-carousel-id',
                    'data-loop': settings.loop,
                    'data-dots': settings.dots,
                    'data-navs': settings.navs,
                    'data-margin': settings.margin
                }
            );
        #>
        <# if( settings.list.length ) { #>
        <div class="slick_marquee slick marquee" {{{ view.getRenderAttributeString( 'slick_marquee_carousel_options' ) }}}>
            <# _.each( settings.list, function( slide ) { #>
            <div class="item">
                <img src="{{ slide.simple_logo.url }}" alt="" />
            </div>
            <# } ) #>
        </div>
        <# } #>
        <?php
    }


	
}