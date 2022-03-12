<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class tech_popular_news extends Widget_Base {

    public function get_name() {
        return 'techpoplarnews';
    }
 
    public function get_title() {
        return __('Tech Popular News', 'news10');
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
                'label' => __('Tech Popular News', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
             
                'default' => __( 'Most Popular', 'news10' ),
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
                'selector' => '{{WRAPPER}} .card .news10-card-body .news10-text .news10-item-text, {{WRAPPER}} .news10-news-list li .news10-list-text .news10-item-text',
            ]
        );

        $this->add_control(
            'post_inhaa_color',
            [
                'label' => __('Meta Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .card .news10-card-body .news10-text .news10-item-text, {{WRAPPER}} .news10-news-list li .news10-list-text .news10-item-text' => 'color: {{VALUE}}',
                ],
            ]
        );
   
        $this->add_control(
            'post_title_color',    
            [
                'label' => __('Title Color', 'news10'),    
                'type' => \Elementor\Controls_Manager::COLOR,             
                'selectors' => [
                    '{{WRAPPER}} .news10-card-body .news10-text h4, {{WRAPPER}} .news10-title .news10-title-text h2, {{WRAPPER}} .news10-most-popular-section .news-tab .nav-pills a, {{WRAPPER}} .news10-news-list li .news10-list-text h4 a' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-card-body .news10-text h4, {{WRAPPER}} .news10-title .news10-title-text h2, {{WRAPPER}} .news10-most-popular-section .news-tab .nav-pills a',
            ]
        );


        $this->end_controls_section();
        
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $per_page = $settings['posts_per_page'];
       $popularpost  = new \WP_Query(array(
        'posts_per_page' =>  $per_page,
        'meta_key' => 'post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC'

    )); 
   
      ?>
   <!-- news10 Most Popular Start -->
            <div class="news10-most-popular-section news10-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="news10-title d-flex justify-content-between">
                                <div class="news10-title-text">
                                    <h2><?php esc_html_e ($settings['title']); ?>
                                </h2>
                                </div>
                                <div class="newss10-slide-arrow">
                                    <div class="newss10-prev-btn round" id="mostpopular-prev"><i class="fal fa-chevron-left"></i></div>
                                    <div class="newss10-next-btn round" id="mostpopular-next"><i class=" fal fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="news10-mostpopular-slide swiper-container">
                                <div class="swiper-wrapper">
                               <?php 
                                if($popularpost->have_posts()) : while($popularpost->have_posts()) : $popularpost->the_post();?>

                                    <div class="swiper-slide">
                                        <div class="card news10-big-post news10-mostpopular-card mt-lg-30 m-0">
                                            <div class="news10-post-img">
                                                   <?php 
                                                  if (has_post_thumbnail()) {
                                                 the_post_thumbnail('news10-point-770-426');
                                                   }
                                                ?>
                                                <span class="news10-tag-parpul"><?php news10_loop_category(); ?></span>
                                            </div>
                                            <div class="card-body news10-card-body">
                                                <div class="news10-text">
                                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                    <ul>
                                                        <li>
                                                            <span class="news10-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12.007" height="13.414" viewBox="0 0 12.007 13.414">
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
                               endwhile; endif;
                               wp_reset_query();
                               ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="news-tab">
                                <ul class="nav nav-pills justify-content-between mt-0" id="pills-tab" role="tablist">
                            <?php $categories = get_categories(['taxonomy' => 'category',]); 
                                  $i = 0;
                                foreach ($categories as $cat) {
                                  $i++;
                                  $class = $i == 1 ? 'active' : '';
                                    echo '<li class="nav-item">
                                        <a class="'. $class.'" href="#'.$cat->name.'" data-bs-toggle="pill">'.$cat->name.'</a>

                                        </li>';
                                    
                                    }

                                ?>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">

                                <?php $i = 0;  foreach ($categories as $cat): $i++;  ?>
                                <div class="tab-pane fade show <?php if($i == 1) echo "active"; ?>" id="<?php echo $cat->name?>" role="tabpanel" aria-labelledby="all-news-tab">
                                        <div class="news10-news-list">
                                            <ul>
                                            <?php 
                                                $sermons_member = new \WP_Query(array(
                                                'post_type'     => 'post',
                                                    'tax_query' => array(
                                                  array(
                                                      'taxonomy' => 'category',
                                                      'field'    => 'slug',
                                                      'terms'    => $cat->slug,
                                                  ),
                                              ),
                                               
                                              )
                                            );
                                             ?>
                                      <?php
                                       $loop = 0; 

                                      if($sermons_member->have_posts()) : while($sermons_member->have_posts()) : $sermons_member->the_post();
                                         $loop++;

                                                if($loop==1){
                                                $color = 'news10-tag-green';
                                                }elseif($loop==2){
                                                $color = 'news10-tag-red';
                                                }elseif($loop==3){
                                                $color = 'news10-tag-blue';
                                                }else{
                                                $color = 'news10-tag-blue';
                                                }
                                                ?>

                                                <li>
                                                    <div class="news10-list-img">
                                                    <?php 
                                                      if (has_post_thumbnail()) {
                                                     the_post_thumbnail();
                                                       }
                                                    ?>
                                                    </div>
                                                    <div class="news10-list-text">

                                                         <span class="<?php echo  $color; ?>"><?php news10_loop_tags(); ?></span>
                                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                        <ul>
                                                            <li>
                                                                <span class="news10-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.007" height="13.414" viewBox="0 0 12.007 13.414">
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
                                                                <span class="news10-item-text">April 7, 2021</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>

                                            <?php
                                               endwhile; endif;
                                               wp_reset_query();
                                               ?>
                                            </ul>
                                        </div>
                                    </div>

                           <?php endforeach; ?>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- news10 Most Popular End -->
    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new tech_popular_news() );
?>