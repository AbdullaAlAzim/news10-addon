<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor image widget.
 *
 * Elementor widget that displays an image into the page.
 *
 * @since 1.0.0
 */
class Widget_News10_breadcrumb extends Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve image widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'news10-breadcrumb';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve image widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'News10 Breadcrumb', 'news10' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve image widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'bl_icon eicon-image';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the image widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * @since 2.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'news10-header' ];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the widget belongs to.
	 *
	 * @since 2.1.0
	 * @access public
	 *
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'breadcrumb' ];
	}

	/**
	 * Register image widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 3.1.0
	 * @access protected
	 */
	protected function register_controls() {
		$this->start_controls_section(
			'section_image',
			[
				'label' => esc_html__( 'Site breadcrumb', 'news10' ),
			]
		);

        $this->add_control(
            'custom_breadcrumb_upload',
            [
                'label' => __( 'Choose Custom breadcrumb', 'news10' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

		$this->add_responsive_control(
			'align',
			[
				'label' => esc_html__( 'Alignment', 'news10' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'news10' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'news10' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'news10' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}}' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

	}


	/**
	 * Render image widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

        if (is_home() && get_option('page_for_posts') ) {
            $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full');
            $url = $img[0];
        } else {
            if ( $settings['custom_breadcrumb_upload']['id'] ) {
                $url = $settings['custom_breadcrumb_upload']['url'];
            } else {
                $url = get_the_post_thumbnail_url();
            }
        }
        $arg = [
            'cat' => '<span class="niotitle">'.esc_html__('Category','news10').'</span>',
            'tag' => '<span  class="niotitle">'.esc_html__('Tag','news10').'</span>',
            'author' => '<span  class="niotitle">'.esc_html__('Author','news10').'</span>',
            'year' => '<span  class="niotitle">'.esc_html__('Year','news10').'</span>',
            'notfound' => '<span  class="niotitle">'.esc_html__('Not found','news10').'</span>',
            'search' => '<span  class="niotitle">'.esc_html__('Search for','news10').'</span>',
            'marchive' => '<span  class="niotitle">'.esc_html__('Monthly archive','news10').'</span>',
            'yarchive' => '<span  class="niotitle">'.esc_html__('Yearly archive','news10').'</span>',
        ];

        if (is_home() && get_option('page_for_posts')  ) {
            $title = 'Blog';
        } elseif (is_front_page()){
            $title = 'Front Page';
        }else {
            $title = get_the_title();
        }
        ?>
        <!-- Start of bredcrumb  section
	============================================= -->
        <section class="news-inner-page-banner" data-background="<?php echo esc_url($url); ?>">
            <div class="container">
                <h1 class="news-page-title"><?php echo esc_html($title); ?></h1>
                <div class="news-pagination ul-li">
                    <?php news10_unit_breadcumb();?>
                </div>
            </div>
        </section>
        <!-- End of breadcrumb section
            ============================================= -->
        <?php

	}

	/**
	 * Render image widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 2.9.0
	 * @access protected
	 */
	protected function content_template() {	}
}
Plugin::instance()->widgets_manager->register_widget_type( new Widget_News10_breadcrumb() );