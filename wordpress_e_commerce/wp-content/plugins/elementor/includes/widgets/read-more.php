<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor HTML widget.
 *
 * Elementor widget that insert a custom HTML code into the page.
 *
 */
class Widget_Read_More extends Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Read More widget name.
	 *
	 * @since 2.4.0
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
	 * Retrieve Read More widget title.
	 *
	 * @since 2.4.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Read More', 'elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Read More widget icon.
	 *
	 * @since 2.4.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-post-excerpt';
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the widget belongs to.
	 *
	 * @since 2.4.0
	 * @access public
	 *
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'read', 'more', 'tag', 'excerpt' ];
	}

	/**
	 * Register HTML widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'section_title',
			[
				'label' => __( 'Read More', 'elementor' ),
			]
		);

		$default_link_text = apply_filters( 'elementor/widgets/read_more/default_link_text', __( 'Continue reading', 'elementor' ) );

		$this->add_control(
			'theme_support',
			[
				'type' => Controls_Manager::RAW_HTML,
				'raw' => sprintf( __( 'Note: This widget only affects themes that use `%s` in archive pages.', 'elementor' ), 'the_content' ),
				'content_classes' => 'elementor-panel-alert elementor-panel-alert-warning',
			]
		);

		$this->add_control(
			'link_text',
			[
				'label' => __( 'Read More Text', 'elementor' ),
				'placeholder' => $default_link_text,
				'default' => $default_link_text,
			]
		);

		$this->end_controls_section();
	}

	/**
	 * Render Read More widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @access protected
	 */
	protected function render() {
		printf( '<!--more %s-->', $this->get_settings_for_display( 'link_text' ) );
	}

	/**
	 * Render Read More widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 2.9.0
	 * @access protected
	 */
	protected function content_template() {
		?>
		<!--more {{ settings.link_text }}-->
		<?php
	}
}
