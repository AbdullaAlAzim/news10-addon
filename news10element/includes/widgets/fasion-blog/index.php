<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class news10_fasion_blog extends Widget_Base {

    public function get_name() {
        return 'news10fasionblog';
    }
 
    public function get_title() {
        return __('Fashion Blogs', 'news10');
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
                'label' => __('Fashion Blogs', 'news10'),
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

        $this->add_control(
            'asc_dsc',
            [
                'label'   => esc_html__( 'Order', 'ultimate-post-kit' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'DESC',
                'options' => [
                    'ASC'  => esc_html__( 'ASC', 'ultimate-post-kit' ),
                    'DESC' => esc_html__( 'DESC', 'ultimate-post-kit' ),
                   
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
        $asc_dsc = $settings['asc_dsc'];
        if ($settings['query_type'] == 'category') {
            $query_args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => $per_page,
                 'order' => $asc_dsc,   
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
                'order' => $asc_dsc,

            );
        }
     $wp_query = new \WP_Query($query_args);
        
      ?>
    <section class="news10-section">
        <div class="container">
            <div class="row">

                <?php 
                    if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();?>
                <div class="col-lg-3 col-sm-6">
                    <div class="news10-sm-post-categories news10-effect-wraper">
                        <a href="" class="post-thumb news10-hover-effect">
                           <?php 
                              if (has_post_thumbnail()) {
                             the_post_thumbnail('news10-point-270-160');
                               }
                            ?>
                        </a>
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
                <?php 
                   endwhile;
                   wp_reset_postdata();
                    endif; 
                 ?>
               
            </div>
        </div>
    </section>

    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new news10_fasion_blog() );
?>