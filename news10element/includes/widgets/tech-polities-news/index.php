<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class news10_polyties_blog extends Widget_Base {

    public function get_name() {
        return 'news10polyblog';
    }
 
    public function get_title() {
        return __('Politics Blogs', 'news10');
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
            'title',
            [
                'label' => __( 'Title', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                  'condition' => [
                    'layout' => 'layout1',
                ],
                'default' => __( 'News & Blogs', 'news10' ),
            ]
        );

    
        $this->add_control(
            'info',
            [
                'label' => __( 'Info', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                   'condition' => [
                    'layout' => 'layout1',
                ],
                'default' => __( 'NEWS & BLOGS', 'news10' ),
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
                'label'   => esc_html__( 'Order', 'news10' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'DESC',
                'options' => [
                    'ASC'  => esc_html__( 'ASC', 'news10' ),
                    'DESC' => esc_html__( 'DESC', 'news10' ),
                   
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
                    '{{WRAPPER}} .news10-title-center .news10-title-text h2, {{WRAPPER}} .politics-big-card .card-body .news10-text h4' => 'color: {{VALUE}}',
                ],
            ]
        );

          $this->add_control(
            'post_title_hover',    
            [
                'label' => __('Title hover', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,        
                'selectors' => [
                    '{{WRAPPER}} .card .news10-card-body .news10-text h4 a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-banner-content h2',
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
        
      ?>
        <!-- news10 Politics News Start -->
            <section class="politics-news news10-section">
                <div class="container">
                    <div class="news10-title-center">
                        <div class="news10-title-text">
                            <h2><?php esc_html_e('Politics News','news10'); ?></h2>
                        </div>
                    </div>
                    <div class="politics-top-big">
                        <div class="row">
                             <?php 
                              $loop = 0;
                                 if($wp_query->have_posts()) : while($wp_query->have_posts()) :
                                  $wp_query->the_post();
                                $loop++;
                                   if($loop==1){
                                    $cls = 'col-lg-6';
                                  
                                }elseif($loop==2){
                                    $cls = 'col-lg-6';
                                  
                                }else{
                                     $cls = 'col-lg-4 col-md-6';
                                }
                                ?>
                            <div class="<?php echo $cls; ?>">
                                <div class="card news10-default-post politics-big-card">
                                    <div class="news10-post-img">
                                         <?php 
                                          if (has_post_thumbnail()) {
                                         the_post_thumbnail('full');
                                           }
                                        ?>
                                    </div>
                                    <div class="card-body news10-card-body">
                                        <div class="news10-text">
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <ul>
                                                <li>
                                                    <span class="news10-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14.485" height="16.182" viewBox="0 0 14.485 16.182">
                                                        <g id="user" transform="translate(-24.165)">
                                                          <g id="Group_466" data-name="Group 466" transform="translate(27.207)">
                                                            <g id="Group_465" data-name="Group 465" transform="translate(0)">
                                                              <path id="Path_845" data-name="Path 845" d="M114.993,0a4.2,4.2,0,1,0,4.2,4.2A4.213,4.213,0,0,0,114.993,0Z" transform="translate(-110.791)" fill="#888"/>
                                                            </g>
                                                          </g>
                                                          <g id="Group_468" data-name="Group 468" transform="translate(24.165 8.704)">
                                                            <g id="Group_467" data-name="Group 467" transform="translate(0)">
                                                              <path id="Path_846" data-name="Path 846" d="M38.619,250.9a3.918,3.918,0,0,0-.422-.771,5.222,5.222,0,0,0-3.614-2.275.773.773,0,0,0-.532.128,4.478,4.478,0,0,1-5.284,0,.688.688,0,0,0-.532-.128,5.185,5.185,0,0,0-3.614,2.275,4.516,4.516,0,0,0-.422.771.39.39,0,0,0,.018.349,7.318,7.318,0,0,0,.5.734,6.97,6.97,0,0,0,.844.954,11,11,0,0,0,.844.734,8.367,8.367,0,0,0,9.981,0,8.065,8.065,0,0,0,.844-.734,8.47,8.47,0,0,0,.844-.954,6.429,6.429,0,0,0,.5-.734A.313.313,0,0,0,38.619,250.9Z" transform="translate(-24.165 -247.841)" fill="#888"/>
                                                            </g>
                                                          </g>
                                                        </g>
                                                      </svg>
                                                      </span>
                                                    <span class="news10-item-text"><?php the_author(); ?></a></span>
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

                </div>
            </section>
            <!-- news10 Politics News End -->

    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new news10_polyties_blog() );
?>