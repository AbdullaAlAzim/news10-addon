<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class news10_fasion_trending extends Widget_Base {

    public function get_name() {
        return 'news10trendingnews';
    }
 
    public function get_title() {
        return __('Fashion Trending News', 'news10');
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
                'label' => __('Trending News', 'news10'),
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
                'selector' => '{{WRAPPER}} .post-category-items .post-item-thumb .post-content .post-author-date span, {{WRAPPER}} .post-author-date span, {{WRAPPER}} .fashion-ctg, {{WRAPPER}} .fashion-ctg:after',
            ]
        );

        $this->add_control(
            'post_inhaa_color',
            [
                'label' => __('Meta Color', 'news10'), 
                'type' => \Elementor\Controls_Manager::COLOR,      
                'selectors' => [
                    '{{WRAPPER}} .post-category-items .post-item-thumb .post-content .post-author-date span,  {{WRAPPER}} .post-author-date span, {{WRAPPER}} .fashion-ctg, {{WRAPPER}} .fashion-ctg:after' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_control(
            'post_title_color',    
            [
                'label' => __('Title Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .news10-news-categories-post .news10-post-content .title, {{WRAPPER}} .news10-sm-post-categories .news10-post-content .title' => 'color: {{VALUE}}',
                ],
            ]
        );

           $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-news-categories-post .news10-post-content .title, {{WRAPPER}} .news10-sm-post-categories .news10-post-content .title',
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
    
 
    <!-- Trending News start   -->
    <div class="news10-trending-news-section news10-section">
        <div class="container">
            <div class="news10-fashion-header text-center">
                <h2 class="heading-title bg-white2"><?php esc_html_e('Trending News','news10'); ?></h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="swiper-container news10-trending-news-slide-wraper">
                        <div class="swiper-wrapper">

                            <?php  if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();?>
                            <div class="swiper-slide">
                                <div class="news10-news-categories-post news10-effect-wraper">
                                    <div class="post-thumb news10-hover-effect">
                                         <?php 
                                          if (has_post_thumbnail()) {
                                         the_post_thumbnail('news10-point-570-540');
                                           }
                                        ?>
                                        <div class="news10-post-content">
                                            <div class="news10-meta-info">
                                                <span class="fashion-ctg"><?php news10_loop_category(); ?></span>
                                                <div class="post-author-date">
                                                    <span class="author">by : <?php the_author(); ?> |</span>
                                                    <span class="date"><?php the_time('M j, Y');?></span>
                                                </div>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
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

                        <div class="fashion-slide-arrow">
                            <div class="slide-prev-btn" id="ctgNews-prev"><i class="fal fa-chevron-left"></i></div>
                            <div class="slide-next-btn" id="ctgNews-next"><i class=" fal fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                     <?php  if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();?>
                    <div class="news10-sm-post-categories news10-effect-wraper news10-small-post-categories">
                        <a href="" class="post-thumb news10-hover-effect">
                            <?php 
                              if (has_post_thumbnail()) {
                             the_post_thumbnail('news10-point-270-160');
                               }
                            ?>
                        </a>
                        <div class="news10-post-content">
                            <div class="news10-meta-info">
                                <span class="fashion-ctg"><?php news10_loop_category();?></span>
                                <div class="post-author-date">
                                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"> <span class="author">by : <?php the_author(); ?> |</span></a>
                                    <span class="date"><?php the_time('M j, Y');?></span>
                                </div>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                            <?php echo '<p>' . wp_trim_words( get_the_content(), 6, '' );'</p>'; ?>
                        </div>
                    </div>
                     <?php 
                       endwhile;
                       wp_reset_postdata();
                        endif; 
                     ?>
                 
                </div>
            </div>
        </div>
    </div>
    <!-- Trending News end   -->

    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new news10_fasion_trending() );
?>