<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class news10_news_bann_technology extends Widget_Base {

    public function get_name() {
        return 'news10newstechnology';
    }
 
    public function get_title() {
        return __('Technology news', 'news10');
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
                'label' => __('Technology Blog One', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
             
                'default' => __('Latest Technology Today', 'news10' ),
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
                'default' => 4,
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
            'content_section1',
            [
                'label' => __('Technology Blog Two', 'gesus'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'query_type1',
            [
                'label' => __('Query type', 'gesus'),
                'type' => Controls_Manager::SELECT,
                'default' => 'individual1',
                'options' => [
                    'category1' => __('Category', 'gesus'),
                    'individual1' => __('Individual', 'gesus'),
                ],
            ]
        );

        $this->add_control(
            'cat_query1',
            [
                'label' => __('Category', 'gesus'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('post_cat'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type1' => 'category1',
                ],
            ]
        );

        $this->add_control(
            'id_query1',
            [
                'label' => __('Posts', 'gesus'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_posts('post'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type1' => 'individual1',
                ],
            ]
        );
        $this->add_control(
            'posts_per_page1',
            [
                'label' => __('Posts Per Page', 'gesus'),
                'type' => Controls_Manager::NUMBER,
                'default' => 2,
            ]
        );


         $this->add_control(
            'asc_dsc1',
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
               
            );
        }
     $wp_query = new \WP_Query($query_args);


     //2nd loop

       $per_page1 = $settings['posts_per_page1'];
        $cat1 = $settings['cat_query1'];
        $id1 = $settings['id_query1'];
        $asc_dsc1 = $settings['asc_dsc1'];


        if ($settings['query_type1'] == 'category1') {
            $query_args1 = array(
                'post_type' => 'post',
                'posts_per_page' => $per_page1,
                'order' =>  $asc_dsc1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'post_cat',
                        'field' => 'term_id',
                        'terms' => $cat1,
                    ),
                ),
            );
        }

        if ($settings['query_type1'] == 'individual1') {
            $query_args1 = array(
                'post_type' => 'post',
                'posts_per_page' => $per_page1,
                'order' =>  $asc_dsc1,
                'post__in' => $id1,
                
            );
        }

        $wp_query1 = new \WP_Query($query_args1);

      ?>
            <section class="news10-latest-technology news10-section">
                <div class="container">
                    <div class="tech-news-title">
                        <div class="news10-title-line">
                            <?php if($settings['title'] !=''):?>
                            <h2><?php esc_html_e( $settings['title'] ); ?></h2>
                            <?php endif; ?>
                        </div>
                        <div class="newss10-slide-arrow">
                            <div class="newss10-prev-btn round" id="technology-prev"><i class="fal fa-chevron-left"></i></div>
                            <div class="newss10-next-btn round" id="technology-next"><i class=" fal fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="swiper-container news10-row-slide">
                        <div class="swiper-wrapper">
                         <?php 
                            if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();?>        
                            <div class="swiper-slide">
                                <div class="card news10-default-post">
                                    <div class="news10-post-img">
                                         <?php 
                                          if (has_post_thumbnail()) {
                                         the_post_thumbnail('news10-point-270-183');
                                           }
                                        ?>
                                    </div>
                                    <div class="card-body news10-card-body">
                                        <div class="news10-text">
                                            <ul>
                                                <li>
                                                    <span class="news10-tag-parpul v2"><?php news10_loop_category(); ?></span>
                                                </li>
                                                <li>
                                                    <span class="news10-icon"><svg viewBox="0 0 512 512"><path d="M347.216,301.211l-71.387-53.54V138.609c0-10.966-8.864-19.83-19.83-19.83c-10.966,0-19.83,8.864-19.83,19.83v118.978 c0,6.246,2.935,12.136,7.932,15.864l79.318,59.489c3.569,2.677,7.734,3.966,11.878,3.966c6.048,0,11.997-2.717,15.884-7.952 C357.766,320.208,355.981,307.775,347.216,301.211z"></path><path d="M256,0C114.833,0,0,114.833,0,256s114.833,256,256,256s256-114.833,256-256S397.167,0,256,0z M256,472.341 c-119.275,0-216.341-97.066-216.341-216.341S136.725,39.659,256,39.659c119.295,0,216.341,97.066,216.341,216.341 S375.275,472.341,256,472.341z"></path></svg></span>
                                                    <span class="news10-item-text"><?php the_time('M j, Y');?></span>
                                                </li>
                                            </ul>
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
                               <?php 
                        if($wp_query1->have_posts()) : while($wp_query1->have_posts()) : $wp_query1->the_post();?>
                        <div class="col-lg-6">
                            <div class="card news10-default-post mb-0">
                                <div class="news10-post-img">
                                  <?php 
                                          if (has_post_thumbnail()) {
                                         the_post_thumbnail('news10-point-570-299');
                                           }
                                        ?>
                                </div>
                                <div class="card-body news10-card-body pb-0">
                                    <div class="news10-text">
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
                                                <span class="news10-item-text"><?php echo get_the_author()?></span>
                                            </li>
                                            <li>
                                                <span class="news10-icon"><svg viewBox="0 0 512 512"><path d="M347.216,301.211l-71.387-53.54V138.609c0-10.966-8.864-19.83-19.83-19.83c-10.966,0-19.83,8.864-19.83,19.83v118.978 c0,6.246,2.935,12.136,7.932,15.864l79.318,59.489c3.569,2.677,7.734,3.966,11.878,3.966c6.048,0,11.997-2.717,15.884-7.952 C357.766,320.208,355.981,307.775,347.216,301.211z"></path><path d="M256,0C114.833,0,0,114.833,0,256s114.833,256,256,256s256-114.833,256-256S397.167,0,256,0z M256,472.341 c-119.275,0-216.341-97.066-216.341-216.341S136.725,39.659,256,39.659c119.295,0,216.341,97.066,216.341,216.341 S375.275,472.341,256,472.341z"></path></svg></span>
                                                <span class="news10-item-text"><?php the_time('M j, Y');?></span>
                                            </li>
                                        </ul>
                                        <h4><a href="#"><?php the_title(); ?></a></h4>
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
            </section>
    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new news10_news_bann_technology() );
?>