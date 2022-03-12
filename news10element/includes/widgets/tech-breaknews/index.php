<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class tech_break_news extends Widget_Base {

    public function get_name() {
        return 'breaknews';
    }
 
    public function get_title() {
        return __('Tech Break News', 'news10');
    }

    public function get_icon() {
        return 'bl_icon eicon-nowrap';
    }

    public function get_categories() {
        return ['news10element-addons'];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Breaking News', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'sectitle',
            [
                'label' => __( 'Title', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
             
                'default' => __( 'News & Blogs', 'news10' ),
            ]
        );

      $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Brand Name', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'news10', 'news10' ),
            ]
        );
    
    
        $this->add_control(
            'brand_list',
            [
                'label' => __( 'Brand List', 'news10' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'news10', 'news10' ),
                    ],
                    [
                        'title' => __( 'news10', 'news10' ),
                    ],
                    [
                        'title' => __( 'news10', 'news10' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
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
                    '{{WRAPPER}} .news10-slide-title h6, {{WRAPPER}} .breaking-news-wrapper p' => 'color: {{VALUE}}',
                ],
            ]
        );

          $this->add_control(
            'post_title_ico',
            [
                'label' => __('Icon Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .news10-breaking-news-section .news10-slide-title .icon svg' => 'fill: {{VALUE}}',
                ],
            ]
        );

            $this->add_control(
            'post_title_shadow',
            [
                'label' => __('Shadow Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .news10-breaking-news-section .news10-slide-title::before' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-slide-title h6',
            ]
        );
 

        $this->add_control(
            'navi_c',
            [
                'label' => esc_html__( 'Navigation Arrow color', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
    
         $this->add_control(
            'navi_color',
            [
                'label' => __('Navaigation Arrow Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .travel-navii' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'navi_bgg',
            [
                'label' => esc_html__( 'Navigation BG color', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'testi_sub_bg',
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .travel-navii',
            ]
        );

      $this->add_control(
            'navi_h',
            [
                'label' => esc_html__( 'Navigation hover color', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
          $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'navi_hover_bg',
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .travel-navii:hover',
            ]
        );

 
        $this->end_controls_section();
        
    }
    protected function render()
    {
        $settings = $this->get_settings();
 
        
      ?>
	     <!-- news10 Breaking News Start -->
            <div class="news10-breaking-news-section news10-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-xl-2">
                            <div class="news10-slide-title">
                                <span class="icon"><svg viewBox="0 0 512 512"> <path d="M422.7,278.3c-0.1-3.8-2.2-7.3-5.6-9.2l-123.4-65.6l104.6-147c3.3-4.9,2-11.6-2.9-14.8c-3.3-2.3-7.7-2.4-11.2-0.5 L94.6,224.3c-5.1,3-6.8,9.6-3.8,14.6c1,1.7,2.4,3.1,4.2,4l121.6,64.6L116,457.1c-3.1,5-1.7,11.6,3.3,14.8c3.4,2.1,7.6,2.2,11.1,0.3 l287.3-184.4C420.9,285.7,422.9,282.1,422.7,278.3L422.7,278.3z"/></svg></span>
                                <?php if(!empty($settings['sectitle'])): ?>
                                <h6><?php esc_html_e( $settings['sectitle'] ); ?></h6>
                            <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-9 col-xl-10 ">
                            <div class="breaking-news-wrapper">
                                <div class="news10-slide-text swiper-container">
                                    <div class="swiper-wrapper">
                            <?php if( !empty($settings['brand_list']) ): foreach ($settings['brand_list'] as $des):?>
                                <p class="swiper-slide"><?php echo esc_html($des['title']); ?></p>
                                <?php endforeach; 
                             wp_reset_postdata(); 
                             endif; ?>
                                    </div>
                                </div>
                                <div class="newss10-slide-arrow">
                                    <div class="newss10-prev-btn travel-navii" id="breakingnews-prev"><i class="fal fa-chevron-left"></i></div>
                                    <div class="newss10-next-btn travel-navii" id="breakingnews-next"><i class=" fal fa-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- news10 Breaking News End -->
    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new tech_break_news() );
?>