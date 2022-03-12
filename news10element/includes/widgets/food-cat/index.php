<?php

namespace Elementor;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class news10_food_cat extends Widget_Base
{

    public function get_name()
    {
        return 'news10-foodcat';
    }

    public function get_title()
    {
        return __('Food Category', 'news10');
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
                'label' => __('Food Category', 'news10'),
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
                'selector' => '{{WRAPPER}} .post-author-date span, {{WRAPPER}} .news10-food-meta .post-review a, {{WRAPPER}} .news10-food-meta .post-review a span',
            ]
        );

        $this->add_control(
            'post_inhaa_color',
            [
                'label' => __('Meta Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,      
                'selectors' => [
                    '{{WRAPPER}} .post-author-date span, {{WRAPPER}} .news10-food-meta .post-review a, {{WRAPPER}} .news10-food-meta .post-review a span' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_control(
            'post_title_color',  
            [
                'label' => __('Title Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .news10-food-card .news10-food-card-body .card-title' => 'color: {{VALUE}}',
                ],
            ]
        );


        

           $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-food-card .news10-food-card-body .card-title',
            ]
        );


       $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'label' => esc_html__( 'Background', 'plugin-name' ),
                'types' => [ 'classic', 'gradient'],
                'selector' => '{{WRAPPER}} .news10-food-categories-wrapper .swiper-pagination .swiper-pagination-bullet:after',
            ]
        );

            $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => esc_html__( 'Slider Navigation Color', 'plugin-name' ),
                'selector' => '{{WRAPPER}} .news10-food-categories-wrapper .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active',
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
       <section class="news10food-categories-section news10-section">
        <div class="container">
            <div class="news10-food-categories-wrapper swiper-container">
                <div class="swiper-wrapper">
                	<?php 
                    if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();?>

                    <div class="swiper-slide">
                        <div class="card news10-food-card news10-effect-wraper">
                            <a href="" class="card-thumb news10-hover-effect">
                             <?php 
                              if (has_post_thumbnail()) {
                             the_post_thumbnail('news10-point-558-328');
                               }

                            ?>
                                <span class="food-ctg-top"><?php news10_loop_category(); ?></span>
                            </a>
                            <div class="card-body news10-food-card-body">
                                <div class="news10-meta-info news10-food-meta">
                                    <div class="post-author-date">
                                        <span class="author">by : <?php the_author(); ?> |</span>
                                        <span class="date"><?php the_time('M j, Y');?></span>
                                    </div>
                                    <div class="post-review">
                                      
                                          <?php echo like_it_button_html('');?>
                                        <span><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines
                                            "></i></span><?php comments_popup_link('0K','1K','%K');?>

                                    </div>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="card-title"><?php the_title(); ?></a>
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
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
   <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type(new news10_food_cat());?>
