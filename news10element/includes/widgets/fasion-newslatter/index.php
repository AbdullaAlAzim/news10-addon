<?php
namespace Elementor;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class fasion_newsletter_wid_side extends Widget_Base
{

    public function get_name()
    {
        return 'Newsletterfasion';
    }

    public function get_title()
    {
        return __('Fashion Newsletter sidebar', 'news10');
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
                'label' => __('Newsletter', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

         
        $this->add_control(
            'title',
            [
                'label' => __( 'Newsletter', 'news10' ),
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

    protected function render()
    {

        $settings = $this->get_settings_for_display();

        ?>
     <div class="widgets news10-wedgets-newsletter news10-fashion-wedgets">
        <div class="heading-title">
            <h4><?php esc_html_e('Newsletter','news10'); ?></h4>
        </div>
        <p><?php esc_html_e('Enter your email address below to subscribe to my newsletter','news10'); ?></p>
        <form>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email Address" aria-describedby="emailHelp">
            <button class="btn theme-btn">Subscribe Now</button>
        </form>
    </div>
<?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type(new fasion_newsletter_wid_side());?>
