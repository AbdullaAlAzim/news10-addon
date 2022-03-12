<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class inner_sidebar_gallery extends Widget_Base {

    public function get_name() {
        return 'inner-sidebarr-gallery';
    }

    public function get_title() {
        return __( 'Inner Sidebar Gallery', 'news10' );
    }
    public function get_categories() {
        return [ 'news10element-addons' ];
    }
    public function get_icon() {
        return 'bl_icon eicon-person';
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Inner Sidebar Gallery', 'news10' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'member_name',
            [
                'label' => __( 'Name', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Gallery Images', 'news10' ),
            ]
        );
        $repeater->add_control(
            'link', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'member_photo', [
                'label' => __( 'Photo', 'news10' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'member_list',
            [
                'label' => __( 'List', 'news10' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_name' => __( 'Gallery Images', 'news10' ),
                    ],
                    [
                        'member_name' => __( 'Gallery Images', 'news10' ),
                    ],
                    [
                        'member_name' => __( 'Gallery Images', 'news10' ),
                    ],
                    [
                        'member_name' => __( 'Gallery Images', 'news10' ),
                    ],

                    [
                        'member_name' => __( 'Gallery Images', 'news10' ),
                    ],

                    [
                        'member_name' => __( 'Gallery Images', 'news10' ),
                    ],

                ],
                'title_field' => '{{{ member_name }}}',
            ]
        );
     
        $this->end_controls_section();
     
    }

    protected function render() {
       $settings = $this->get_settings_for_display();?>
    <div class="widgets widgets-gallery">
        <div class="news10-title">
            <div class="news10-title-text">
                <h2><?php esc_html_e('Gallery','gesus'); ?></h2>
            </div>
        </div>
            <ul>
            	 <?php if(($settings['member_list']) ): foreach ($settings['member_list'] as $members):?>
                <li>
                    <a <?php echo get_that_link($members['link']); ?>><?php echo get_that_image($members['member_photo']); ?> </a>
                </li>
                <?php endforeach; endif; ?>
            </ul>
    </div>
     
   <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new inner_sidebar_gallery() );
?>