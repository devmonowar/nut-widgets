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

class simple_table extends Widget_Base {

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
		return 'simple-table';
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
		return __( 'Simple Tabel', 'plugin-name' );
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
		return 'eicon-price-table';
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
				'label' => __( 'Simple Tabel', 'plugin-name' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);



	    $repeater = new \Elementor\Repeater();

	    $repeater->add_control(
			'package_name', [
				'label' => __( 'Package Name', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Package Name' , 'nut-widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'hr1',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'heading_price_monthly',
			[
				'label' => __( 'Heading Price(Monthly)', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( '$0.00', 'nut-widgets' ),
				'default' => "$0.00",
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'heading_price_annually',
			[
				'label' => __( 'Heading Price(Annually)', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( '$0.00', 'nut-widgets' ),
				'default' => "$0.00",
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'heading_price_biennially',
			[
				'label' => __( 'Heading Price(Biennially)', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( '$0.00', 'nut-widgets' ),
				'default' => "$0.00",
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'heading_price_triennially',
			[
				'label' => __( 'Heading Price(Triennially)', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( '$0.00', 'nut-widgets' ),
				'default' => "$0.00",
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'hr2',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'total_price_monthly',
			[
				'label' => __( 'Total Price Monthly', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( '$0.00', 'nut-widgets' ),
				'default' => "$0.00",
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'total_price_annually',
			[
				'label' => __( 'Total Price Annually', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( '$0.00', 'nut-widgets' ),
				'default' => "$0.00",
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'total_price_biennially',
			[
				'label' => __( 'Total Price Biennially', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( '$0.00', 'nut-widgets' ),
				'default' => "$0.00",
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'total_price_triennially',
			[
				'label' => __( 'Total Price Triennially', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( '$0.00', 'nut-widgets' ),
				'default' => "$0.00",
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'hr3',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'discount_monthly',
			[
				'label' => __( 'Discount Monthly', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( '$0.00', 'nut-widgets' ),
				'default' => "Discount",
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'discount_annually',
			[
				'label' => __( 'Discount Annually', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( '$0.00', 'nut-widgets' ),
				'default' => "Discount",
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'discount_biennially',
			[
				'label' => __( 'Discount Biennially', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( '$0.00', 'nut-widgets' ),
				'default' => "Discount",
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'discount_triennially',
			[
				'label' => __( 'Discount Triennially', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( '$0.00', 'nut-widgets' ),
				'default' => "Discount",
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'hr4',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'order_btn_text',
			[
				'label' => __( 'Order Button Text', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Button Text', 'nut-widgets' ),
				'default' => " Start Now",
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'order_link_monthly',
			[
				'label' => __( 'Order Link(Monthly)', 'nut-widgets' ),
				'type' => Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'nut-widgets' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'order_link_annually',
			[
				'label' => __( 'Order Link(Annually)', 'nut-widgets' ),
				'type' => Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'nut-widgets' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'order_link_biennially',
			[
				'label' => __( 'Order Link(Biennially)', 'nut-widgets' ),
				'type' => Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'nut-widgets' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'order_link_triennially',
			[
				'label' => __( 'Order Link(Triennially)', 'nut-widgets' ),
				'type' => Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'nut-widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'hr5',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'renew_price_monthly',
			[
				'label' => __( 'Renew Price Monthly', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Renew', 'nut-widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'renew_price_annually',
			[
				'label' => __( 'Renew Price Annually', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Renew', 'nut-widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'renew_price_biennially',
			[
				'label' => __( 'Renew Price Biennially', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Renew', 'nut-widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'renew_price_triennially',
			[
				'label' => __( 'Renew Price Triennially', 'nut-widgets' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Renew', 'nut-widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'hr6',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'features',
			[
				'label' => __( 'Plan Features', 'nut-widgets' ),
				'type' => Controls_Manager::WYSIWYG,
				'placeholder' => __( 'Plan Features', 'nut-widgets' ),
				'default' => '<ul>
 	<li><i class="fas fa-check"></i><span>RAM: 2 GB</span></li>
 	<li><i class="fas fa-check"></i><span>CPU: 1 Core</span></li>
 	<li><i class="fas fa-check"></i><span>Storage: 40 GB SSD</span></li>
 	<li><i class="fas fa-check"></i><span>Bandwidth: 1500 GB</span></li>
</ul>',
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
						'package_name' => __( 'Package Name #1', 'nut-widgets' ),
					],
					[
						'package_name' => __( 'Package Name #2', 'nut-widgets' ),
					],
				],
				'title_field' => '{{{ package_name }}}',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'title_style',
			[
				'label' => esc_html__( 'Table Style', 'free-widgets' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Title Color', 'free-widgets' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .package_name h3' => 'color: {{VALUE}}',
				],
			]
		);

		
		$this->add_control(
			'heading_price_color',
			[
				'label' => esc_html__( 'Price Color', 'free-widgets' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .heading_price' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();


	}

/**
	 * Render widget output on the frontend.
	 
	 */

	protected function render() {

		$settings = $this->get_settings_for_display(); ?>


		<div class="group_btn simple_table_group_btn">
			<ul>
				<li class="monthly"><?php echo esc_html("Monthly"); ?></li>
				<li class="annually active"><?php echo esc_html("Yearly"); ?></li>
				<li class="biennially"><?php echo esc_html("2 Years"); ?></li>
				<li class="triennially"><?php echo esc_html("3 Years"); ?></li>
			</ul>
		</div>

		<div class="simple_table">

			<?php
        	if ( $settings['list'] ) :
				foreach (  $settings['list'] as $item ) : ?>

		    <div class="table_column simple_table_column">
		    	<div class="package_name">
		    		<h3><?php echo $item['package_name']?></h3>
		    	</div>

		    	<div class="heading_price_wrap">
		    		<div class="heading_price price_default"><?php echo $item['heading_price_annually']?></div>
			    	<div class="heading_price price_monthly"><?php echo $item['heading_price_monthly']?></div>
			    	<div class="heading_price price_annually"><?php echo $item['heading_price_annually']?></div>
			    	<div class="heading_price price_biennially"><?php echo $item['heading_price_biennially']?></div>
			    	<div class="heading_price price_triennially"><?php echo $item['heading_price_triennially']?></div>
		    	</div>

				<?php if (!empty($item['total_price_annually'])): ?>
		    	<div class="total_price_wrap">
		    		<div class="total_price total_price_default"><?php echo $item['total_price_annually']?></div>
		    		<div class="total_price total_price_monthly"><?php echo $item['total_price_monthly']?></div>
		    		<div class="total_price total_price_annually"><?php echo $item['total_price_annually']?></div>
		    		<div class="total_price total_price_biennially"><?php echo $item['total_price_biennially']?></div>
		    		<div class="total_price total_price_triennially"><?php echo $item['total_price_triennially']?></div>
		    	</div>
		    	<?php endif; ?>

				<?php if (!empty($item['discount_annually'])): ?>
		    	<div class="discount_text_wrap">
		    		<div class="discount_text discount_default"><?php echo $item['discount_annually']?></div>
		    		<div class="discount_text discount_monthly"><?php echo $item['discount_monthly']?></div>
		    		<div class="discount_text discount_annually"><?php echo $item['discount_annually']?></div>
		    		<div class="discount_text discount_biennially"><?php echo $item['discount_biennially']?></div>
		    		<div class="discount_text discount_triennially"><?php echo $item['discount_triennially']?></div>
		    	</div>
		    	<?php endif; ?>

		    	<div class="btn-style2">
		          <a class="order_btn order_btn_default" href="<?php echo $item['order_link_annually']['url']; ?>"><i class="fas fa-shopping-cart"></i> <?php echo $item['order_btn_text']?></a>
		          <a class="order_btn order_btn_monthly" href="<?php echo $item['order_link_monthly']['url']; ?>"><i class="fas fa-shopping-cart"></i><?php echo $item['order_btn_text']?></a>
		          <a class="order_btn order_btn_annually" href="<?php echo $item['order_link_annually']['url']; ?>"><i class="fas fa-shopping-cart"></i><?php echo $item['order_btn_text']?></a>
		          <a class="order_btn order_btn_biennially" href="<?php echo $item['order_link_biennially']['url']; ?>"><i class="fas fa-shopping-cart"></i><?php echo $item['order_btn_text']?></a>
		          <a class="order_btn order_btn_triennially" href="<?php echo $item['order_link_triennially']['url']; ?>"><i class="fas fa-shopping-cart"></i><?php echo $item['order_btn_text']?></a>
		        </div>

				<?php if (!empty($item['renew_price_annually'])): ?>
		        <div class="renew_price_wrap">
		    		<div class="renew_price renew_price_default"><?php echo $item['renew_price_annually']?></div>
		    		<div class="renew_price renew_price_monthly"><?php echo $item['renew_price_monthly']?></div>
		    		<div class="renew_price renew_price_annually"><?php echo $item['renew_price_annually']?></div>
		    		<div class="renew_price renew_price_biennially"><?php echo $item['renew_price_biennially']?></div>
		    		<div class="renew_price renew_price_triennially"><?php echo $item['renew_price_triennially']?></div>
		    	</div>
		    	<?php endif; ?>

		    	<div class="features"><?php echo $item['features']?></div>
			  
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
		
	}

}