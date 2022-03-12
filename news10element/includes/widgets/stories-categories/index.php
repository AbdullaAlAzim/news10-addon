<?php

namespace Elementor;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class news10_cat extends Widget_Base
{
    public function get_name()
    {
        return 'news10-cat';
    }

    public function get_title()
    {
        return __('news10 Category', 'news10');
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
                'label' => __('Travel news Category', 'news10'),
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
                'default' => esc_html__('3', 'news10'),
            ]
        );
        $this->end_controls_section();


         $this->start_controls_section(
            'content_styr',
            [
                'label' => __('Style', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        


        $this->add_control(
            'post_btn_color',
            [
                'label' => __('Button Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news10-card .news10-card-thumb .white-btn' => 'color: {{VALUE}}',
                ],
            ]
        );

            $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttihexc',
                'label' => __('Button Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-card .news10-card-thumb .white-btn',
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

   <!-- stories categories start  -->
    <div class="news10-stories-categories-section news10-section pt-0">
        <div class="container">
            <div class="row">
                <?php if($categories !=''): foreach($categories as $category):
                    $metadata = get_term_meta($category->term_id, 'posts_de_text', true);
                    ?>
                <div class="col-lg-4">
                    <div class="card news10-card news10-ctg-card news10-effect-wraper mt-0">
                        <a href="<?php echo get_term_link($category->term_id, 'category'); ?>" class="news10-card-thumb news10-hover-effect">
                        	  <?php if(isset($metadata['uplod'])): ?>
                            <img src="<?php  echo esc_url($metadata['uplod']); ?>">
                              <?php endif; ?>
                            <span class="btn white-btn"><?php echo esc_html($category->name ); ?></span>
                        </a>
                    </div>
                </div>
                   <?php endforeach; 
                   wp_reset_postdata(); 
                  endif; ?>
            </div>
        </div>
    </div>
    <!-- stories categories end  -->
<?php 
      
    }

     protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}
Plugin::instance()->widgets_manager->register_widget_type(new news10_cat());
?>