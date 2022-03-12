<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class fasion_sidebar_gallery_insgram extends Widget_Base {

    public function get_name() {
        return 'instagram-sidebar-gallery-fasion';
    }

    public function get_title() {
        return __( 'Fasion Sidebar Gallery', 'news10' );
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
                'label' => __( 'Content', 'news10' ),
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


            $this->start_controls_section(
            'content_sty',
            [
                'label' => __('Style', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'post_title_color',  
            [
                'label' => __('Title Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .news10-fashion-wedgets .heading-title h4' => 'color: {{VALUE}}',
                ],
            ]
        );


           $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-fashion-wedgets .heading-title h4',
            ]
        );

            $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => esc_html__( 'Border', 'news10' ),
                'selector' => '{{WRAPPER}} .news10-fashion-wedgets .heading-title:after',
            ]
        );
 
        $this->end_controls_section();
     
    }

    protected function render() {
       $settings = $this->get_settings_for_display();?>
         <div class="widgets news10-wedgets-instagram news10-fashion-wedgets">
            <div class="heading-title">
                <h4><?php esc_html_e('Instagram','news10'); ?></h4>
            </div>
            <div class="news10-instagram-wraper">
                  <?php if( !empty($settings['member_list']) ): foreach ($settings['member_list'] as $service):?>
                <div class="news10-effect-wraper ctg-items">
                    <a <?php echo get_that_link($service['link']); ?> class="news10-hover-effect">
                        <?php echo get_that_image($service['member_photo']); ?>
                    </a>
                </div>
                <?php endforeach; 
                  wp_reset_postdata(); 
              endif; ?>
            </div>
           
        </div>
     
   <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new fasion_sidebar_gallery_insgram() );
?>