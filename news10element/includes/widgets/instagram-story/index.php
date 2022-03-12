<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class news10_instagram extends Widget_Base {

    public function get_name() {
        return 'news10-instagram';
    }
 
    public function get_title() {
        return __('instagram Story', 'news10');
    }

    public function get_icon() {
        return 'bl_icon eicon-form-horizontal';
    }

    public function get_categories() {
        return ['news10element-addons'];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Instagram Story', 'news10' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

         $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Destinations', 'news10' ),
            ]
        );

            $this->add_control(
            'subtitle',
            [
                'label' => __( 'Sub Title', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Sub Title', 'news10' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'news10' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
     
        $this->add_control(
            'instagram_list',
            [
                'label' => __( 'instagram List', 'news10' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'instagram', 'news10' ),
                    ],
                    [
                        'title' => __( 'instagram', 'news10' ),
                    ],
                    [
                        'title' => __( 'instagram', 'news10' ),
                    ],

                     [
                        'title' => __( 'instagram', 'news10' ),
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
                    '{{WRAPPER}} .mann-section-heading h6, {{WRAPPER}} .mann-section-heading h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .mann-section-heading h6, {{WRAPPER}} .mann-section-heading h2',
            ]
        );
        $this->add_control(
            'post_title_overlay',
            [
                'label' => __('Slider Overlay Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .news10-effect-overlay .news10-hover-effect-overlay::before' => 'background: {{VALUE}}',
                ],
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

            $this->add_control(
            'slider_hover',
            [
                'label' => esc_html__( 'Slider hover color', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
          $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_hover_bg',
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .news10-effect-overlay .news10-hover-effect-overlay::before',
            ]
        );
 
        $this->end_controls_section();
    }
    protected function render(){
        $settings = $this->get_settings();
      ?>
  <!-- Instagram Story start  -->
    <div class="news10-instagram-story-section news10-section pb-0">
        <div class="container d-flex justify-content-between align-items-end news10-instagram-heading">
            <div class=" mann-section-heading mb-0 ">
                 <h6><?php echo $settings['title'];?></h6>
                <h2><?php echo $settings['subtitle'];?></h2>
            </div>
            <div class="instra-slider-arrow">
                <div class="slide-prev-btn travel-navii" id="instra-prev"><i class="fal fa-chevron-left"></i></div>
                <div class="slide-next-btn travel-navii" id="instra-next"><i class=" fal fa-chevron-right"></i></div>
            </div>
        </div>
        <div class="swiper-container news10-instagram-wrapper">
            <div class="swiper-wrapper">
               <?php if( !empty($settings['instagram_list']) ): foreach ($settings['instagram_list'] as $service):?>
                <div class="swiper-slide">
                    <div class="news10-effect-overlay">
                        <a href="" class="instagram-thumb news10-hover-effect-overlay">
                           <?php echo  get_that_image($service['image']) ?>
                            <span><i class="fab fa-instagram"></i></span>
                        </a>
                    </div>
                </div>
                  <?php endforeach; 
                  wp_reset_postdata(); 
              endif; ?>
            </div>
        </div>
    </div>
    <!-- Instagram Story end  -->
    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new news10_instagram() );