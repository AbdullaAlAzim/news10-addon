<?php

namespace Elementor;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class food_cat2 extends Widget_Base
{
    public function get_name()
    {
        return 'foodcat2';
    }

    public function get_title()
    {
        return __('Food Category Two', 'news10');
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
                'label' => __('Food Category Two', 'news10'),
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
            'content_sty',
            [
                'label' => __('Style', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttihiaai',
                'label' => __('Meta Typography', 'news10'),  
                'selector' => '.food-categories-items:hover',
            ]
        );

        $this->add_control(
            'post_inhaa_color',
            [
                'label' => __('Meta Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,      
                'selectors' => [
                    '{{WRAPPER}} .food-categories-items:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

       $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'label' => esc_html__( 'Section Background', 'news10' ),
                'types' => [ 'classic', 'gradient'],
                'selector' => '{{WRAPPER}} .news10-food-categories-section',
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
   <!-- food categories section start  -->
    <section class="news10-food-categories-section news10-section">
        <div class="container">
            <div class="news10-food-categories-wraper">
                <div class="row">
                      <?php if($categories !=''): foreach($categories as $category):
                    $metadata = get_term_meta($category->term_id, 'posts_de_text', true);
                    ?>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <a href="<?php echo get_term_link($category->term_id, 'category'); ?>" class="food-categories-items news10-effect-wraper mb-sm-30">
                            <span class="news10-hover-effect">
                                 <?php if(isset($metadata['uplod'])): ?>
                                <img src="<?php  echo esc_url($metadata['uplod']); ?>">
                                <?php endif; ?>
                            </span>
                            <span><?php echo esc_html($category->name ); ?></span>
                        </a>
                    </div>
                    <?php endforeach; 
                   wp_reset_postdata(); 
                  endif; ?>
                 
                </div>
            </div>
        </div>
    </section>
    <!-- food categories section end  -->
<?php 
      
    }

     protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}
Plugin::instance()->widgets_manager->register_widget_type(new food_cat2());
?>