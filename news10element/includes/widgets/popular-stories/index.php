<?php

namespace Elementor;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class popular_stories extends Widget_Base
{

    public function get_name()
    {
        return 'news10-stroies';
    }

    public function get_title()
    {
        return __('stroies', 'news10');
    }

    public function get_categories()
    {
        return ['news10element-addons'];
    }

     public function get_keywords() 
    {
        return [ 'Stories', 'travel', 'popular', 'stories' ];
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
                'label' => __('Popular Stories', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Stories', 'news10' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Info', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Popular Stories', 'news10' ),
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
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'BG Image', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'news10', 'news10' ),
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

    
       
        $this->end_controls_section();

        $this->start_controls_section(
            'content_sty',
            [
                'label' => __('Style', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'post_inhaa_color',
            [
                'label' => __('Meta Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news10-ctg-card .author-post .author' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttihiaai',
                'label' => __('Meta Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-ctg-card .author-post .author',
            ]
        );
        $this->add_control(
            'post_title_color',
            [
                'label' => __('Title Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .mann-section-heading h6, {{WRAPPER}} .mann-section-heading h2, {{WRAPPER}} .news10-card .news10-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .mann-section-heading h6, {{WRAPPER}} .mann-section-heading h2, {{WRAPPER}} .news10-card .news10-title a',
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

        $wp_query = new \WP_Query($query_args);
     

        ?>

    <!-- Popular Stories start  -->
    <div class="news10-popular-stories-section news10-section">
        <div class="container">
            <div class="news10-section-title-center mann-section-heading">
                <h6><?php esc_html_e($settings['title']); ?></h6>
                <h2><?php esc_html_e($settings['info']); ?></h2>
            </div>
            <div class="row">
            	<?php 
                    if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();?>
                <div class="col-lg-4 col-md-6">
                    <div class="card news10-card news10-ctg-card news10-effect-wraper news10-sm-card">
                        <div class="news10-card-thumb news10-hover-effect">
                            <?php 
                              if (has_post_thumbnail()) {
                             the_post_thumbnail('news10-point-170-126');
                               }

                            ?>
                        </div>
                        <div class="card-body ">
                             <div class="author-post">       
                                 <span class="author"><?php esc_html_e('by :','news10'); ?><?php the_author(); ?><?php esc_html_e('|','news10'); ?></span>
                                <span class="author"><?php the_time(); ?></span>
                            </div>
                             
                            <div class="news10-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
        </div>
    </div>
    <!-- Popular Stories end  -->
        <?php 
    }

 
}

Plugin::instance()->widgets_manager->register(new popular_stories());
?>