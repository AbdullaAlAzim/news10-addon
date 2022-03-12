<?php

namespace Elementor;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class blog_sidebar_cate extends Widget_Base
{
    public function get_name()
    {
        return 'sidebar-cate';
    }

    public function get_title()
    {
        return __('Blog sidebar category', 'news10');
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
                'label' => __('Blog sidebar category', 'news10'),
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
                'default' => esc_html__('5', 'news10'),
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

   <div class="widgets category-link">
        <div class="news10-title">
            <div class="news10-title-text">
                <h2><?php esc_html_e('Category','news10'); ?></h2>
            </div>
        </div>
        <ul>
        	 <?php
            foreach($categories as $category) :
            ?>
            <li><a href="<?php echo get_term_link($category->slug, 'category') ?>"><?php echo esc_html($category->name ); ?></a></li>
             <?php endforeach; ?>
            
        </ul>
    </div>

<?php 
      
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new blog_sidebar_cate());
?>