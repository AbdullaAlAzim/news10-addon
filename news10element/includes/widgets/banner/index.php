<?php
namespace Elementor;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class news10_banner extends Widget_Base
{

    public function get_name()
    {
        return 'news10-banner';
    }

    public function get_title()
    {
        return __('Travel Banner', 'news10');
    }

    public function get_categories()
    {
        return ['news10element-addons'];
    }

    public function get_keywords() 
    {
        return [ 'travel', 'banner', 'slider' ];
    }

    public function get_icon()
    {
        return 'bl_icon eicon-slider-full-screen';
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'content_strection',
            [
                'label' => __('Travel Banner', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

       
        $this->add_control(
            'query_type',
            [
                'label' => __('Query type', 'news10'),
                'type' => Controls_Manager::SELECT,
                'default' => 'individual',
                'options' => [
                    'category' => __('Category', 'news10'),
                    'individual' => __('Individual', 'news10'),
                ],
            ]
        );

        $this->add_control(
            'cat_query',
            [
                'label' => __('Category', 'news10'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('category'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type' => 'category',
                ],
            ]
        );

        $this->add_control(
            'id_query',
            [
                'label' => __('Posts', 'news10'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_posts('post'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type' => 'individual',
                ],
            ]
        );
        $this->add_control(
            'posts_per_page',
            [
                'label' => __('Posts Per Page', 'news10'),
                'type' => Controls_Manager::NUMBER,
                'default' => 3,
            ]
        );
     
    $this->end_controls_section();


    $this->start_controls_section(
            'contessnt_section',
            [
                'label' => __( 'Social Icon', 'news10' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        
        $repeater = new \Elementor\Repeater();
         $repeater->add_control(
            'social',
            [
                'label' => __( 'Title', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Title', 'news10' ),
            ]
           );

        $repeater->add_control(
            'link', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
    
     
        $this->add_control(
            'sociual_list',
            [
                'label' => __( 'Social', 'news10' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'social' => __( 'INSTAGRAM', 'news10' ),
                    ],
                    [
                        'social' => __( 'FACEBOOK ', 'news10' ),
                    ],
                    [
                        'social' => __( 'TWITTER', 'news10' ),
                    ],

                    [
                        'social' => __( 'FLICKR', 'news10' ),
                    ],
                     [
                        'social' => __( 'LINKEDIN', 'news10' ),
                    ],
                ],
                'title_field' => '{{{ social }}}',
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
                'selector' => '{{WRAPPER}} .news10-banner-content .news10-author a',
            ]
        );

        $this->add_control(
            'post_inhaa_color',
            [
                'label' => __('Meta Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news10-banner-content .news10-author a, {{WRAPPER}} .news10-banner-content .news10-author span' => 'color: {{VALUE}}',
                ],
            ]
        );
   
        $this->add_control(
            'post_title_color',    
            [
                'label' => __('Title Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,        
                'selectors' => [
                    '{{WRAPPER}} .news10-banner-content h2' => 'color: {{VALUE}}',
                ],
            ]
        );

          $this->add_control(
            'post_title_hover',    
            [
                'label' => __('Title hover', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,        
                'selectors' => [
                    '{{WRAPPER}} .news10-banner-content h2:hover a' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-banner-content h2',
            ]
        );


           $this->add_control(
            'post_des_color',
            [
                'label' => __('Excerpt Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news10-banner-content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttihexc',
                'label' => __('Excerpt Typography', 'news10'),
                'selector' => '.news10-banner-content p',
            ]
        );

          $this->add_control(
            'sat_bg',
            [
                'label' => esc_html__( 'Sidebar BG Color', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sidebar_bgg',
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .news10-bannar-siderbar, {{WRAPPER}} .news10-bannar-siderbar .search-bar',
            ]
        );

           $this->add_control(
            'navi_c',
            [
                'label' => esc_html__( 'category Btn color', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'cat_bgg',
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .news10-ctg-btn',
            ]
        );


         $this->add_control(
            'navi_a',
            [
                'label' => esc_html__( 'Navigation Arrow color', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'navi_a_color',
            [
                'label' => __('Navaigation Arrow Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .travel-navii' => 'color: {{VALUE}}',
                ],
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

        $settings = $this->get_settings_for_display();

        $per_page = $settings['posts_per_page'];
        $cat = $settings['cat_query'];
        $id = $settings['id_query'];


        if ($settings['query_type'] == 'category') {
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => $per_page,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => $cat,
                    ),
                ),
            );
        }

        if ($settings['query_type'] == 'individual') {
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => $per_page,
                'post__in' => $id,
                'orderby' => 'post__in'
            );
        }

        $wp_query = new \WP_Query($query_args); ?>
    <div class="news10-banner-section">
        <div class="swiper-container news10-banner-slider-wraper">
            <div class="swiper-wrapper">
                 <?php 
                    if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();?>
                <div class="swiper-slide">
                    <div class="news10-tranvel-banner-wrapper news10-data-background news10-section" data-background="<?php the_post_thumbnail_url(); ?>">
                        <div class="container">
                            <div class="news10-banner-content">
                                <div class="banner-content-inner">
                                    <span class="news10-ctg-btn btn"><?php news10_loop_category(); ?></span>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <?php if(has_excerpt()):?>
                                  <?php the_excerpt(); ?>
                                  <?php endif; ?>
                                    <div class="news10-author">
                                        <span><?php esc_html_e('by :','news10'); ?> <?php the_author(); ?> <?php esc_html_e('|','news10'); ?></span>
                                       <span><?php the_time('M j, Y');?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
               endwhile;
               wp_reset_postdata();
              endif; 
                 ?>
            </div>
            <div class="banner-slide-arrow">
                <div class="slide-prev-btn travel-navii" id="banner-prev"><i class="fal fa-chevron-left"></i></div>
                <div class="slide-next-btn travel-navii" id="banner-next"><i class=" fal fa-chevron-right"></i></div>
            </div>
        </div>
        </div>
        <div class="news10-bannar-siderbar">
            <div class="social-link-wrapper">
                <ul class="news10-social-link">
                     <?php if(($settings['sociual_list']) ): foreach ($settings['sociual_list'] as $members):?>
                    <li><a href="<?php echo $members['link']['url']; ?>"><?php echo $members['social']; ?></a></li>
                     <?php endforeach; endif; ?>
                </ul>
            </div>
            <div class="search-bar">
                <i class="fal fa-search"></i>
            </div>
        </div>
    </div>
     <?php 
   
    }
}

Plugin::instance()->widgets_manager->register_widget_type(new news10_banner());
?>