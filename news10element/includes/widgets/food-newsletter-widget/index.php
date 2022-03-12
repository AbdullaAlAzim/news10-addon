<?php
namespace Elementor;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class food_newsletter_wid_side extends Widget_Base
{

    public function get_name()
    {
        return 'Newsletter';
    }

    public function get_title()
    {
        return __('Food Newsletter sidebar', 'news10');
    }

    public function get_categories()
    {
        return ['news10element-addons'];
    }

    public function get_icon()
    {
        return 'bl_icon eicon-posts-group';
    }

 

    protected function _register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Banner', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

         
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
              
                'default' => __( 'News & Blogs', 'news10' ),
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
                    '{{WRAPPER}} .news10-food-wedgets-area .widgets .heading-title h4' => 'color: {{VALUE}}',
                ],
            ]
        );

           $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-food-wedgets-area .widgets .heading-title h4',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => esc_html__( 'Title Border', 'news10' ),
                'selector' => '{{WRAPPER}} .news10-food-wedgets-area .widgets .heading-title:after',
            ]
        );

            $this->add_control(
            'more_options',
            [
                'label' => esc_html__( 'Button Color', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

            $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'label' => esc_html__( 'Background', 'news10' ),
                'types' => [ 'classic', 'gradient'],
                'selector' => '{{WRAPPER}} .news10-food-wedgets-newsletter .theme-btn',
            ]
        );

        $this->end_controls_section();


    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();

        ?>
    <div class="news10-food-wedgets-area">
         <div class="widgets news10-wedgets-newsletter news10-food-wedgets-newsletter">
            <div class="heading-title">
                <h4><?php esc_html_e('Newsletter','news10'); ?></h4>
            </div>
            <p><?php esc_html_e('Enter your email address below to subscribe to my newsletter','news10'); ?></p>
            <form>
                <?php echo do_shortcode('[contact-form-7 id="1013" title="sidebar-newsletter"]'); ?>
                
            </form>
        </div>
     </div>
   <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type(new food_newsletter_wid_side());?>
