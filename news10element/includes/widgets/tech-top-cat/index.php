<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class tech_top_news_cat extends Widget_Base {

    public function get_name() {
        return 'topnewscat';
    }
 
    public function get_title() {
        return __('Tech Top Categories', 'news10');
    }

    public function get_icon() {
        return 'bl_icon eicon-form-horizontal';
    }

    public function get_categories() {
        return ['news10element-addons'];
    }
    protected function _register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Tech Top Categories', 'gesus'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'cat',
            [
                'label' => __('Category', 'gesus'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('category'),
                'label_block' => true,
                'multiple' => true,
            ]
        );
        $this->add_control(
            'show_cat',
            [
                'label' => esc_html__('Show Category', 'gesus'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__('5', 'gesus'),
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
                    '{{WRAPPER}} .news10-title-border-none .news10-title-text h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-title-border-none .news10-title-text h2',
            ]
        );
        $this->add_control(
            'bg',
            [
                'label' => __('BG Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news10-top-categories-section .news10-card-img a' => 'background: {{VALUE}}',
                ],
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
     <section class="news10-top-categories-section news10-slide news10-section">
                <div class="container">
                    <div class="news10-title-border-none">
                        <div class="news10-title-text">
                            <h2><?php esc_html_e('Top Categories','news10'); ?></h2>
                        </div>

                        <div class="newss10-slide-arrow">
                            <div class="newss10-prev-btn round" id="topcategories-prev"><i class="fal fa-chevron-left"></i></div>
                            <div class="newss10-next-btn round" id="topcategories-next"><i class=" fal fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="news10-news-categories-slideer swiper-container">
                        <div class="swiper-wrapper">

                              <?php
                                foreach($categories as $category) :
                                    $metadata = get_term_meta($category->term_id, 'posts_de_text', true);
                                ?>
                            <div class="swiper-slide">
                                <div class="card news10-card-img">
                                      <?php if(isset($metadata['uplod'])): ?>
                                       <img src="<?php  echo esc_url($metadata['uplod']); ?>">
                                     <?php endif; ?>
                                    <div class="card-body news10-card-body">
                                        <a href="post-archive.html">
                                            <span><?php echo $category->name; ?></span>
                                            <span><?php echo $category->count; ?> posts</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                             <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- news10 Top Categories End -->
    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new tech_top_news_cat() );
?>