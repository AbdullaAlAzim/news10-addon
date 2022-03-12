<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class news10_destination extends Widget_Base {

    public function get_name() {
        return 'news10-brand';
    }
 
    public function get_title() {
        return __('news10 Destinations', 'news10');
    }

    public function get_icon() {
        return 'bl_icon eicon-post';
    }

    public function get_categories() {
        return ['news10element-addons'];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'contentds_section',
            [
                'label' => __( 'Content', 'news10' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Destinations Name', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Destinations', 'news10' ),
            ]
        );
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
        $repeater->add_control(
            'trip', [
                'label' => __('Trip Duration', 'news10'),
                'type' => Controls_Manager::TEXT,
                 'default' => __( '10 Days Trip', 'gesus' ),
              
            ]
        );

        $repeater->add_control(
            'icon1',
            [
                'label' => __( 'Icon 1', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'brand',
                ],
            ]
        );

        $repeater->add_control(
            'icon2',
            [
                'label' => __( 'Icon 2', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'brand',
                ],
            ]
        );

        $repeater->add_control(
            'icon3',
            [
                'label' => __( 'Icon 3', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'brand',
                ],
            ]
        );

        $repeater->add_control(
            'icon4',
            [
                'label' => __( 'Icon 4', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'brand',
                ],
            ]
        );

        $repeater->add_control(
            'icon5',
            [
                'label' => __( 'Icon 5', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'brand',
                ],
            ]
        );
        $this->add_control(
            'brand_list',
            [
                'label' => __( 'Destinations List', 'news10' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Rome, Italty', 'news10' ),
                    ],
                    [
                        'title' => __( 'London, UK', 'news10' ),
                    ],
                    [
                        'title' => __( 'Full Europe', 'news10' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();
        
        $this->start_controls_section(
            'section_settings',
            [
                'label' => __( 'General', 'news10' ),  
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'post_title_color',
            [
                'label' => __( 'Title Color', 'news10' ),  
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news10-card .news10-title a, {{WRAPPER}} .news10-card span, {{WRAPPER}} .mann-section-heading h6, {{WRAPPER}} .mann-section-heading h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(), 
            [
                'name' => 'ttih',
                'label' => __( 'Title Typography', 'news10' ), 
                'selector' => '{{WRAPPER}} .news10-card .news10-title a, {{WRAPPER}} .news10-card span, {{WRAPPER}} .mann-section-heading h6, {{WRAPPER}} .mann-section-heading h2',
            ]
        );

         $this->add_control(
            'post_ico',
            [
                'label' => __( 'Icon Color', 'news10' ),  
                'type' => \Elementor\Controls_Manager::COLOR,   
                'selectors' => [
                    '{{WRAPPER}} .news10-card .news10-review li, {{WRAPPER}} .news10-card span i' => 'color: {{VALUE}}',
                ],
            ]
        );
 
        $this->end_controls_section();

    }
        
    protected function render(){

        $settings = $this->get_settings();
      ?>
       <!-- Most popular start  -->
    <div class="news10-most-popular-section news10-section">
        <div class="container">
            <div class="news10-section-title-center mann-section-heading">
                 <h6><?php esc_html_e('Most popular','news10'); ?></h6>
                <h2><?php esc_html_e('Top Destinations','news10'); ?></h2>
            </div>
            <div class="row">
            <?php if( !empty($settings['brand_list']) ): foreach ($settings['brand_list'] as $des):?>
                <div class="col-lg-4 col-md-6">
                    <div class="card news10-card news10-effect-wraper">
                        <a href="" class="news10-card-thumb news10-hover-effect">
                            <?php echo get_that_image($des['image']); ?>
                        </a>
                          <div class="card-body news10-card-body">
                            <div class="news10-title">
                                <a href=""><?php echo $des['title']; ?></a>
                                <ul class="news10-review">
                           
                                    
                                    <li><?php \Elementor\Icons_Manager::render_icon( $des['icon1'], [ 'aria-hidden' => 'true' ] ); ?></li>
                                    <li><?php \Elementor\Icons_Manager::render_icon( $des['icon2'], [ 'aria-hidden' => 'true' ] ); ?></li>
                                    <li><?php \Elementor\Icons_Manager::render_icon( $des['icon3'], [ 'aria-hidden' => 'true' ] ); ?></li>
                                    <li><?php \Elementor\Icons_Manager::render_icon( $des['icon4'], [ 'aria-hidden' => 'true' ] ); ?></li>
                                    <li><?php \Elementor\Icons_Manager::render_icon( $des['icon5'], [ 'aria-hidden' => 'true' ] ); ?></li>
                                  
                                </ul>
                            </div>
                            <?php if(!empty($des['trip'])): ?>
                            <span><i class="fas fa-location-arrow"></i><?php echo $des['trip']; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; 
             wp_reset_postdata(); 
             endif; ?>
             
            </div>
        </div>
    </div>
    <!-- Most popular end  -->

    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register( new news10_destination() );