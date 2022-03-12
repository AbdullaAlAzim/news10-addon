<?php

namespace Elementor;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class food_subs extends Widget_Base
{

    public function get_name()
    {
        return 'news10-foodsubscriber';
    }

    public function get_title()
    {
        return __('Food subscriber', 'news10');
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
                'label' => __('Food subscriber', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __( 'Shortcode', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            
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
            'sld_hover',
            [
                'label' => esc_html__( 'Button Hover Color', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

 

       $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'nabackground',
                'label' => esc_html__( 'Background', 'news10' ),
                'types' => [ 'classic', 'gradient'],
                'selector' => '{{WRAPPER}} .news10-food-subscribe-form .subscribe-btn:hover',
            ]
        );


        $this->end_controls_section();



    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();

       ?>
   <!-- Subscribe section start  -->
    <section class="news10-food-subscribe-section news10-data-background" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/img3.png">
        <div class="container ">
            <div class="news10-food-subscribe-wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <div class="news10-subscribe-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img4.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form class="news10-food-subscribe-form">
                            <input type="email" class="form-control" placeholder="Enter Email Address" id="subscribe">
                            <button class="btn subscribe-btn">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe section end  -->
   <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type(new food_subs());?>
