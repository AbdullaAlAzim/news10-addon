<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class news10_food_ban extends Widget_Base {

    public function get_name() {
        return 'news10foodbanner';
    }
 
    public function get_title() {
        return __('Food Banner', 'news10');
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
                'label' => __('Food Banner', 'news10'),
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
            'condsd_section',
            [
                'label' => __( 'Front Image', 'news10' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        
        $repeater = new \Elementor\Repeater();
         $repeater->add_control(
            'imagess',
            [
                'label' => __( 'Banner Front Image', 'news10' ),
                  'type' => \Elementor\Controls_Manager::MEDIA,
            
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
           );

        $this->add_control(
            'image_list',
            [
                'label' => __( 'Front Image', 'news10' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'image' => __( 'image', 'news10' ),
                    ],
                    [
                        'image' => __( 'image ', 'news10' ),
                    ],
                    [
                        'image' => __( 'image', 'news10' ),
                    ],

               
                ],
                'title_field' => '{{{ image }}}',
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
                'selector' => '{{WRAPPER}} .post-author-date span',
            ]
        );

        $this->add_control(
            'post_inhaa_color',
            [
                'label' => __('Meta Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,      
                'selectors' => [
                    '{{WRAPPER}} .post-author-date span' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_control(
            'post_title_color',  
            [
                'label' => __('Title Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .news10-food-banner-left-content .banner-title' => 'color: {{VALUE}}',
                ],
            ]
        );

           $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-food-banner-left-content .banner-title',
            ]
        );


            $this->add_control(
            'post_subtitle_color',  
            [
                'label' => __('Content Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .news10-food-banner-left-content p' => 'color: {{VALUE}}',
                ],
            ]
        );

           $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'subttih',
                'label' => __('Content Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-food-banner-left-content p',
            ]
        );


      $this->add_control(
            'post_slider_na',  
            [
                'label' => __('Slider Navigation Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .news10-food-banner-wrapper .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'color: {{VALUE}}',
                ],
            ]
        );

      $this->add_control(
            'more_options',
            [
                'label' => esc_html__( 'Navigation Arrow color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'label' => esc_html__( 'Background', 'news10' ),
                'types' => [ 'classic'],
                'selector' => '{{WRAPPER}} .news10-food-banner-wrapper .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active:after',
            ]
        );
 
        $this->end_controls_section();
        
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $cat = $settings['cat_query'];
        $id = $settings['id_query'];
        $per_page = $settings['posts_per_page'];


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
     $wp_query = new \WP_Query($query_args);
        
      ?>
      <!-- banner section start -->
    <section class="news10-food-banner-section">
        <div class="news10-food-banner-wrapper swiper-container">
            <div class="swiper-wrapper">
               <?php 
                    if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();?>
                <div class="swiper-slide">
                    <div class="banner-content-wrapper news10-data-background" data-background="<?php the_post_thumbnail_url(); ?>">
                        <div class="container">
                            <div class="news10-food-banner-left-content">
                                <div class="news10-meta-info news10-food-meta">
                                    <div class="post-author-date">
                                        <span class="author"><?php esc_html_e('by :','news10'); ?> <?php the_author(); ?> <?php esc_html_e('|','news10'); ?></span>
                                          <span class="date"><?php the_time('M j, Y');?></span>
                                    </div>
                               
                                </div>
                                <a href="<?php the_permalink(); ?>" class="banner-title"><?php the_title(); ?></a>
                               <?php echo '<p>' . wp_trim_words( get_the_content(), 20, '' );'</p>'; ?>
                            </div>
                             <?php if(($settings['image_list']) ): foreach ($settings['image_list'] as $members):?>
                            <div class="banner-thumb">
                                   <?php echo get_that_image($members['imagess']); ?>
                            </div>
                              <?php endforeach; endif; ?>
                        </div>
                    </div>
                </div>
                <?php 
               endwhile;
               wp_reset_postdata();
                endif; 
                 ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="news10-food-banner-left">
            <div class="news10-bannar-siderbar news10-fashion-news-sidebar">
                <div class="social-link-wrapper">
                    <ul class="news10-social-link">
                        <?php if(($settings['sociual_list']) ): foreach ($settings['sociual_list'] as $members):?>
                    <li><a href="<?php echo $members['link']['url']; ?>"><?php echo $members['social']; ?></a></li>
                     <?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new news10_food_ban() );
?>