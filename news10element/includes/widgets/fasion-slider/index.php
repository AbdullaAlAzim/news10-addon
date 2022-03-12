<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class news10_fasion_slider extends Widget_Base {

    public function get_name() {
        return 'news10fasionslider';
    }
 
    public function get_title() {
        return __('Fasion Slider', 'news10');
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
                'label' => __('Fasion Slider', 'news10'),
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

      $this->add_control(
            'img', [
                'label' => __( 'Left blob shape One', 'gesus' ),
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

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),  
            [
                'name' => 'ttihiaai',
                'label' => __('Meta Typography', 'news10'), 
                'selector' => '{{WRAPPER}} .news10-fashion-testimonials-content .content-wrapper .news10-meta-info .post-author-date span, {{WRAPPER}} .fashion-ctg',
            ]
        );

        $this->add_control(
            'post_inhaa_color',
            [
                'label' => __('Meta Color', 'news10'), 
                'type' => \Elementor\Controls_Manager::COLOR,      
                'selectors' => [
                    '{{WRAPPER}} .news10-fashion-testimonials-content .content-wrapper .news10-meta-info .post-author-date span, {{WRAPPER}} .fashion-ctg' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_control(
            'post_title_color',    
            [
                'label' => __('Title Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .news10-fashion-testimonials-content .content-wrapper .title' => 'color: {{VALUE}}',
                ],
            ]
        );


           $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-fashion-testimonials-content .content-wrapper .title',
            ]
        );

            $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'label' => esc_html__( 'Button BG', 'news10' ),
                'types' => [ 'classic', 'gradient'],
                'selector' => '{{WRAPPER}} .fashion-btn:hover',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => esc_html__( 'Border', 'news10' ),
                'selector' => '{{WRAPPER}} .fashion-btn',
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
    
 <section class="news10-section p-0" >
        <div class="news10-fashion-testimonials-section news10-data-background" data-background="<?php echo  ($settings['img']['url']); ?>">
            <div class="container">
                <div class="maaa-testimonials-wrapper swiper-container">
                    <div class="swiper-wrapper">
                        <?php  if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();?>
                        <div class="swiper-slide">
                            <div class="news10-fashion-testimonials-content">
                                <div class="content-wrapper">
                                    <div class="news10-meta-info">
                                        <a href="" class="fashion-ctg"><?php news10_loop_category(); ?></a>
                                        <div class="post-author-date">
                                            <span class="author"><?php esc_html_e('by :','news10'); ?> <?php the_author(); ?> |</span>
                                            <span class="date"><?php the_time('M j, Y');?></span>
                                        </div>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                                    <a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="btn fashion-btn"><?php esc_html_e('Read More','news10'); ?></a>
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
                        <div class="slide-prev-btn" id="testimonial-prev"><i class="fal fa-chevron-left"></i></div>
                        <div class="slide-next-btn" id="testimonial-next"><i class=" fal fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new news10_fasion_slider() );
?>