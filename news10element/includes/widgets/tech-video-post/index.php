<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class tech_video_news extends Widget_Base {

    public function get_name() {
        return 'videonewstech';
    }
 
    public function get_title() {
        return __('Tech Video News', 'news10');
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
                'label' => __('Tech Video News', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'News & Blogs', 'news10' ),
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


        $this->add_control(
            'query_type_1',
            [
                'label' => __('Query type', 'news10'),
                'type' => Controls_Manager::SELECT,
                'default' => 'individual_1',
                'options' => [
                    'category_1' => __('Category', 'news10'),
                    'individual_1' => __('Individual', 'news10'),
                ],
            ]
        );

        $this->add_control(
            'cat_query_1',
            [
                'label' => __('Category', 'news10'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('category'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type_1' => 'category_1',
                ],
            ]
        );

        $this->add_control(
            'id_query_1',
            [
                'label' => __('Posts', 'news10'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_posts('post'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type_1' => 'individual_1',
                ],
            ]
        );
        $this->add_control(
            'posts_per_page_1',
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
                'selector' => '{{WRAPPER}} .card.news10-default-post .news10-text .news10-item-text',
            ]
        );

        $this->add_control(
            'post_inhaa_color',
            [
                'label' => __('Meta Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .card.news10-default-post .news10-text .news10-item-text' => 'color: {{VALUE}}',
                ],
            ]
        );
   
        $this->add_control(
            'post_title_color',    
            [
                'label' => __('Title Color', 'news10'),   
                'type' => \Elementor\Controls_Manager::COLOR,       
                'selectors' => [
                    '{{WRAPPER}} .news10-title-center .news10-title-text h2, {{WRAPPER}} .news10-video-news-section .big-card .news10-text h4' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-title-center .news10-title-text h2, {{WRAPPER}} .news10-video-news-section .big-card .news10-text h4',
            ]
        );

          $this->add_control(
            'post_title_hover',    
            [
                'label' => __('Title hover', 'news10'),    
                'type' => \Elementor\Controls_Manager::COLOR,         
                'selectors' => [
                    '{{WRAPPER}} .card .news10-card-body .news10-text h4 a:hover, {{WRAPPER}} .news10-news-list li .news10-list-text a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => esc_html__( 'Border', 'news10' ),
                'selector' => '{{WRAPPER}} .news10-title-center::after',
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

//seconsecond
$per_page_1 = $settings['posts_per_page_1'];
$cat_1 = $settings['cat_query_1'];
$id_1 = $settings['id_query_1'];

if ($settings['query_type_1'] == 'category_1') {
    $query_args_1 = array(
        'post_type' => 'post',
        'posts_per_page' => $per_page_1,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $cat_1,
            ),
        ),
    );
}

if ($settings['query_type_1'] == 'individual_1') {
    $query_args_1 = array(
        'post_type' => 'post',
        'posts_per_page' => $per_page_1,
        'post__in' => $id_1,
        'orderby' => 'post__in'
    );
}

$wp_query_1 = new \WP_Query($query_args_1);
        
?>
   
<!-- news10 Video News Start -->
<div class="news10-video-news-section news10-section">
    <div class="container">
        <div class="news10-title-center d-flex justify-content-between align-center">
            <div class="newss10-prev-btn round" id="video1-prev"><i class="fal fa-chevron-left"></i></div>
            <div class="news10-title-text d-flex align-center">
                <div class="news10-title-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30.082" height="19.339" viewBox="0 0 30.082 19.339">
                        <g id="video-camera" transform="translate(0 -85.333)">
                          <g id="Group_1529" data-name="Group 1529" transform="translate(0 85.333)">
                            <path id="Path_4265" data-name="Path 4265" d="M29.573,87.642a1.075,1.075,0,0,0-1.045-.047l-7.04,3.521V88.556a3.223,3.223,0,0,0-3.223-3.223H3.223A3.223,3.223,0,0,0,0,88.556v12.892a3.223,3.223,0,0,0,3.223,3.223H18.264a3.223,3.223,0,0,0,3.223-3.223V98.889l7.04,3.526a1.074,1.074,0,0,0,1.555-.967V88.556A1.074,1.074,0,0,0,29.573,87.642ZM10.744,99.3a4.3,4.3,0,1,1,4.3-4.3A4.3,4.3,0,0,1,10.744,99.3Z" transform="translate(0 -85.333)" fill="#ee0015"/>
                          </g>
                        </g>
                      </svg>
                </div>
                <h2>Video News</h2>
            </div>
            <div class="newss10-next-btn round" id="video1-next"><i class=" fal fa-chevron-right"></i></div>
        </div>
        <div class="news10-video-news-slide swiper-container">
            <div class="swiper-wrapper">
            	 <?php if($wp_query_1->have_posts()) : while($wp_query_1->have_posts()) :
                $wp_query_1->the_post(); ?>
                <div class="swiper-slide">
                    <div class="card news10-default-post big-card">
                        <div class="news10-post-img">
                            <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/Y58NknTo1LQ">
                                <svg viewBox="0 0 163.861 163.861"><path d="M34.857,3.613C20.084-4.861,8.107,2.081,8.107,19.106v125.637c0,17.042,11.977,23.975,26.75,15.509L144.67,97.275 c14.778-8.477,14.778-22.211,0-30.686L34.857,3.613z"/> </svg>
                            </a>
                             <?php 
                              if (has_post_thumbnail()) {
                             the_post_thumbnail('news10-point-510-283');
                               }

                            ?>
                        </div>
                        <div class="card-body news10-card-body">
                            <div class="news10-text">
                                <h4><a href="archive-details.html"><?php the_title(); ?></a></h4>
                                <ul>
                                    <li>
                                        <span class="news10-icon"><svg xmlns="http://www.w3.org/2000/svg" width="12.007" height="13.414" viewBox="0 0 12.007 13.414">
                                            <g id="user" transform="translate(-24.165)">
                                              <g id="Group_466" data-name="Group 466" transform="translate(26.687)">
                                                <g id="Group_465" data-name="Group 465" transform="translate(0)">
                                                  <path id="Path_845" data-name="Path 845" d="M114.274,0a3.483,3.483,0,1,0,3.483,3.483A3.492,3.492,0,0,0,114.274,0Z" transform="translate(-110.791)" fill="#888"/>
                                                </g>
                                              </g>
                                              <g id="Group_468" data-name="Group 468" transform="translate(24.165 7.215)">
                                                <g id="Group_467" data-name="Group 467" transform="translate(0)">
                                                  <path id="Path_846" data-name="Path 846" d="M36.147,250.375a3.247,3.247,0,0,0-.35-.639,4.329,4.329,0,0,0-3-1.886.641.641,0,0,0-.441.106,3.712,3.712,0,0,1-4.38,0,.571.571,0,0,0-.441-.106,4.3,4.3,0,0,0-3,1.886,3.743,3.743,0,0,0-.35.639.323.323,0,0,0,.015.289,6.067,6.067,0,0,0,.411.608,5.778,5.778,0,0,0,.7.791,9.112,9.112,0,0,0,.7.608,6.936,6.936,0,0,0,8.274,0,6.685,6.685,0,0,0,.7-.608,7.021,7.021,0,0,0,.7-.791,5.329,5.329,0,0,0,.411-.608A.26.26,0,0,0,36.147,250.375Z" transform="translate(-24.165 -247.841)" fill="#888"/>
                                                </g>
                                              </g>
                                            </g>
                                          </svg>
                                          </span>
                                        <span class="news10-item-text"><?php the_author(); ?></span>
                                    </li>
                                    <li>
                                        <span class="news10-icon"><svg viewBox="0 0 512 512"><path d="M347.216,301.211l-71.387-53.54V138.609c0-10.966-8.864-19.83-19.83-19.83c-10.966,0-19.83,8.864-19.83,19.83v118.978 c0,6.246,2.935,12.136,7.932,15.864l79.318,59.489c3.569,2.677,7.734,3.966,11.878,3.966c6.048,0,11.997-2.717,15.884-7.952 C357.766,320.208,355.981,307.775,347.216,301.211z"></path><path d="M256,0C114.833,0,0,114.833,0,256s114.833,256,256,256s256-114.833,256-256S397.167,0,256,0z M256,472.341 c-119.275,0-216.341-97.066-216.341-216.341S136.725,39.659,256,39.659c119.295,0,216.341,97.066,216.341,216.341 S375.275,472.341,256,472.341z"></path></svg></span>
                                        <span class="news10-item-text"><?php the_time('M j, Y');?></span>
                                    </li>
                                </ul>
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
        <div class="row">


             <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) :
                $wp_query->the_post(); ?>
            <div class="col-lg-3 col-md-6">
                <div class="card news10-default-post">
                    <div class="news10-post-img">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/Y58NknTo1LQ">
                            <svg viewBox="0 0 163.861 163.861"><path d="M34.857,3.613C20.084-4.861,8.107,2.081,8.107,19.106v125.637c0,17.042,11.977,23.975,26.75,15.509L144.67,97.275 c14.778-8.477,14.778-22.211,0-30.686L34.857,3.613z"/> </svg>
                        </a>
                           <?php 
                              if (has_post_thumbnail()) {
                             the_post_thumbnail('news10-point-240-140');
                               }

                            ?>
                    </div>
                    <div class="card-body news10-card-body">
                        <div class="news10-text">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <ul>
                                <li>
                                    <span class="news10-icon"><svg viewBox="0 0 512 512"><path d="M347.216,301.211l-71.387-53.54V138.609c0-10.966-8.864-19.83-19.83-19.83c-10.966,0-19.83,8.864-19.83,19.83v118.978 c0,6.246,2.935,12.136,7.932,15.864l79.318,59.489c3.569,2.677,7.734,3.966,11.878,3.966c6.048,0,11.997-2.717,15.884-7.952 C357.766,320.208,355.981,307.775,347.216,301.211z"></path><path d="M256,0C114.833,0,0,114.833,0,256s114.833,256,256,256s256-114.833,256-256S397.167,0,256,0z M256,472.341 c-119.275,0-216.341-97.066-216.341-216.341S136.725,39.659,256,39.659c119.295,0,216.341,97.066,216.341,216.341 S375.275,472.341,256,472.341z"></path></svg></span>
                                    <span class="news10-item-text"><?php the_time('M j, Y');?></span>
                                </li>
                            </ul>
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
<!-- news10 Video News End -->

    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new tech_video_news() );
?>