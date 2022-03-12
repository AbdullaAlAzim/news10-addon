<?php

namespace Elementor;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class fasion_cat_sidebar extends Widget_Base
{
    public function get_name()
    {
        return 'fasioncatsidebar';
    }

    public function get_title()
    {
        return __('fasion Sidebar Category', 'news10');
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
                'label' => __('Sidebar Category', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'cat',
            [
                'label' => __('Category', 'news10'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('category'),
                'label_block' => true,
                'multiple' => true,
            ]
        );
        $this->add_control(
            'show_cat',
            [
                'label' => esc_html__('Show Category', 'news10'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__('6', 'news10'),
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
                    '{{WRAPPER}} .news10-fashion-wedgets .heading-title h4, {{WRAPPER}} .news10-fashion-wedgets a:hover' => 'color: {{VALUE}}',
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
        $tax_args = array(
            'taxonomy' => 'category',
            'number' => $settings['show_cat'],
            'include' => $settings['cat'],
        );
        $categories = get_terms($tax_args);

    ?>
   <div class="widgets news10-wedgets-categories news10-fashion-wedgets">
        <div class="heading-title">
            <h4><?php esc_html_e('Categories','news10'); ?></h4>
        </div>
        <ul>
        <?php
            foreach($categories as $category) :
            ?>
            <li><a href="<?php echo get_term_link($category->slug, 'category') ?>"><span><i class="fal fa-angle-right"></i> <?php echo esc_html($category->name ); ?></span><?php echo $category->count; ?></a></li>
             <?php endforeach; ?>
    
        </ul>
    </div>
<?php 
      
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new fasion_cat_sidebar());
?>