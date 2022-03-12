<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class news10_fasion_ban extends Widget_Base {

    public function get_name() {
        return 'news10fasionbanner';
    }
 
    public function get_title() {
        return __('Fasion Banner', 'news10');
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
                'label' => __('Fashion Banner', 'news10'),
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
                'default' => 1,
            ]
        );

         $this->add_control(
            'asc_dsc',
            [
                'label' => esc_html__( 'Order', 'news10' ),
                'type' => Controls_Manager::SELECT,
                'default'   => 'DESC',
                'options'   => [
                    'ASC'     => esc_html__( 'ASC', 'news10' ),
                    'DESC'     => esc_html__( 'DESC', 'news10' ),
                ],
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
                'selector' => '{{WRAPPER}} .post-category-items .post-item-thumb .post-content .post-author-date span, {{WRAPPER}} .post-category-items .post-item-thumb .post-content .post-review a, {{WRAPPER}} .post-author-date span, {{WRAPPER}} .news10-post-categories .post-content .post-review a, {{WRAPPER}} .news10-post-categories .post-content .post-review a span',
            ]
        );

        $this->add_control(
            'post_inhaa_color',
            [
                'label' => __('Meta Color', 'news10'), 
                'type' => \Elementor\Controls_Manager::COLOR,      
                'selectors' => [
                    '{{WRAPPER}} .post-category-items .post-item-thumb .post-content .post-author-date span, {{WRAPPER}} .post-category-items .post-item-thumb .post-content .post-review a, {{WRAPPER}} .post-author-date span, {{WRAPPER}} .news10-post-categories .post-content .post-review a, {{WRAPPER}} .news10-post-categories .post-content .post-review a span' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_control(
            'post_title_color',  
            [
                'label' => __('Title Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .post-category-items .post-item-thumb .post-content .post-title, {{WRAPPER}} .post-author-date span, {{WRAPPER}} .news10-post-categories .post-content .post-title' => 'color: {{VALUE}}',
                ],
            ]
        );

           $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .post-category-items .post-item-thumb .post-content .post-title, {{WRAPPER}} .post-author-date span, {{WRAPPER}} .news10-post-categories .post-content .post-title',
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
        $asc_dsc = $settings['asc_dsc'];


        if ($settings['query_type'] == 'category') {
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => $per_page,
                'order' =>  $asc_dsc,
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
                'order' =>  $asc_dsc,
                'post__in' => $id,
                'orderby' => 'post__in'
            );
        }
     $wp_query = new \WP_Query($query_args);
 
      ?>
    
    <!-- post categories section start   -->
    <div class="news10-post-categories-section pb-0">
        <div class="news10-post-categories-wrapper">
            <div class="row">
                <div class="col-lg-6">
                   <?php
                        $main_args = array(
                             'post_type' => 'post',
                             'posts_per_page' => 1,
                        );
                        $the_main_loop = new \WP_Query($main_args);
                        if($the_main_loop->have_posts()) : while($the_main_loop->have_posts()) : $the_main_loop->the_post(); 
                        ?> 
                    <div class="post-category-items news10-effect-wraper">
                        <div class="post-item-thumb news10-hover-effect">
                           <?php 
                              if (has_post_thumbnail()) {
                             the_post_thumbnail('news10-point-815-891');
                               }

                            ?>
                            <div class="post-content">
                                <div class="news10-meta-info">
                                    <div class="post-author-date">
                                        
                                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><span class="author">by : <?php the_author(); ?> |</span></a>
                                        <span class="date"><?php the_time('M j, Y');?></span>
                                    </div>
                                    <div class="post-review">
                                          <?php echo like_it_button_html('');?>
                                        <a href=""><span><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines
                                            "></i></span><?php comments_popup_link('0K','1K','%K');?></a>
                                            
                                    </div>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                                 <?php echo '<p>' . wp_trim_words( get_the_content(), 20, '' );'</p>'; ?>
                            </div>
                        </div>
                    </div>
                    <?php 
                   endwhile;
                   wp_reset_postdata();
                    endif; 
                 ?>
                </div>
                <div class="col-lg-6">
                    <div class="news10-cetegoris-top-slide swiper-container">
                        <div class="swiper-wrapper">
                             <?php 
                    if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();?>
                            <div class="swiper-slide">
                                <div class="news10-post-categories news10-effect-wraper">
                                    <div class="post-item-thumb news10-hover-effect">
                                        <?php 
                                          if (has_post_thumbnail()) {
                                         the_post_thumbnail();
                                           }
                                        ?>
                                    </div>
                                    <div class="post-content">
                                        <div class="news10-meta-info">
                                            <div class="post-author-date">
                                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><span class="author">by : <?php the_author(); ?> |</span></a>
                                                <span class="date"><?php the_time('M j, Y');?></span>
                                            </div>
                                            <div class="post-review">

                                                 <?php echo like_it_button_html('');?>
                                                <a href="<?php echo get_permalink();?>"><span><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines
                                                    "></i></span><?php comments_popup_link('0K','1K','%K');?></a>
                                            </div>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                                      <?php echo '<p>' . wp_trim_words( get_the_content(), 20, '' );'</p>'; ?>
                                    </div>
                                </div>
                            </div>
                             <?php 
                               endwhile;
                               wp_reset_postdata();
                                endif; 
                             ?>
                          
                        </div>
                    </div>
                    <div class="swiper-slide-arrow-wraper">
                        <div class="fashion-slide-arrow">
                            <div class="slide-prev-btn" id="banner-prev"><i class="fal fa-chevron-left"></i></div>
                            <div class="slide-next-btn" id="banner-next"><i class=" fal fa-chevron-right"></i></div>
                        </div>
                        <div class="news10-post-catergori-slide-progress">
                            <div class="swiper-progress-bar">
                                <span class="slide_progress-bar"></span>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- post categories section end   -->

    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new news10_fasion_ban() );
?>