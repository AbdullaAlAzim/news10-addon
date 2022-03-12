<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class fasion_blog_two extends Widget_Base {

    public function get_name() {
        return 'news10blogtwo';
    }
 
    public function get_title() {
        return __('Fashion Blog Two', 'news10');
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
                'label' => __('Banner', 'news10'),
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
                'selector' => '{{WRAPPER}} .post-category-items .post-item-thumb .post-content .post-author-date span,  {{WRAPPER}} .post-author-date span, {{WRAPPER}} .news10-post-categories .post-content .post-review a, {{WRAPPER}} .news10-post-categories .post-content .post-review a span',
            ]
        );

        $this->add_control(
            'post_inhaa_color',
            [
                'label' => __('Meta Color', 'news10'), 
                'type' => \Elementor\Controls_Manager::COLOR,   
                'selectors' => [
                    '{{WRAPPER}} .post-category-items .post-item-thumb .post-content .post-author-date span,  {{WRAPPER}} .post-author-date span, {{WRAPPER}} .news10-post-categories .post-content .post-review a, {{WRAPPER}} .news10-post-categories .post-content .post-review a span' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_control(
            'post_title_color',    
            [
                'label' => __('Title Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .news10-featured-categorie .news10-ctg-content .title, {{WRAPPER}} .news10-post-categories .post-content .post-title, {{WRAPPER}}' => 'color: {{VALUE}}',
                ],
            ]
        );

           $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-featured-categorie .news10-ctg-content .title, {{WRAPPER}} .news10-post-categories .post-content .post-title',
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
    
 
 <section class="news10-section pt-0">

        <div class="container">
            <div class="row">
        
                      <?php 
                    if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();?>
                    <div class="news10-post-categories news10-effect-wraper fashion-blog-ctg">
                        <div class="post-item-thumb news10-hover-effect">
                        <?php 
                              if (has_post_thumbnail()) {
                             the_post_thumbnail('news10-point-770-321');
                               }
                            ?>
                        </div>
                        <div class="post-content">
                            <div class="news10-meta-info">
                                <div class="post-author-date">
                                    <span class="author">by : <?php the_author(); ?> |</span>
                                    <span class="date"><?php the_time('M j, Y');?></span>
                                </div>
                                  <div class="post-review">
                                        <?php echo like_it_button_html('');?>
                                        <a href="<?php echo get_permalink(); ?>"><span><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines
                                            "></i></span><?php comments_popup_link('0K','1K','%K');?></a>
                                    </div>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                             <?php echo '<p>' . wp_trim_words( get_the_content(), 20, '' );'</p>'; ?>
                        </div>
                    </div>
                    <?php 
                   endwhile;
                   wp_reset_postdata();
                    endif; 
                 ?>
                 
                <div class="button-wrapper">
                    <a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="btn border-btn"><?php esc_html_e('Load More','news10'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new fasion_blog_two() );
?>