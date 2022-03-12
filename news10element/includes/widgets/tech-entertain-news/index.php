<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class news10_entertain_news extends Widget_Base {

    public function get_name() {
        return 'news10entertain';
    }
 
    public function get_title() {
        return __('Entertain News', 'news10');
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
                'label' => __('Entertain News', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'title1',
            [
                'label' => __( 'Title', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
             
                'default' => __( 'News & Blogs', 'news10' ),
            ]
        );

    
        $this->add_control(
            'title2',
            [
                'label' => __( 'Sidebar Title', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
             
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


    $this->end_controls_section();


    $this->start_controls_section(
            'links_section',
            [
                'label' => __('Social Links', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


      $this->add_control(
            'social',
            [
                'label' => esc_html__( 'Social Share Link', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

       $this->add_control(
            'link1', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                  'placeholder' => esc_html__( 'https://your-link.com', 'news10' ),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
           $this->add_control(
            'tit1',
            [
                'label' => __( 'Facebook', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,
             
                'default' => __( 'Facebook', 'news10' ),
            ]
        );

        $this->add_control(
            'link2', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                  'placeholder' => esc_html__( 'https://your-link.com', 'news10' ),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

                $this->add_control(
            'tit2',
            [
                'label' => __( 'instagram', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,
             
                'default' => __( 'instagram', 'news10' ),
            ]
        );


        $this->add_control(
            'link3', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                  'placeholder' => esc_html__( 'https://your-link.com', 'news10' ),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

             $this->add_control(
            'tit3',
            [
                'label' => __( 'twitter', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,
             
                'default' => __( 'twitter', 'news10' ),
            ]
        );

        $this->add_control(
            'link4', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                  'placeholder' => esc_html__( 'https://your-link.com', 'news10' ),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

             $this->add_control(
            'tit4',
            [
                'label' => __( 'youtube', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,
             
                'default' => __( 'youtube', 'news10' ),
            ]
        );

    $this->add_control(
            'asds',
            [
                'label' => esc_html__( 'Advertisement Image & Link', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


      $this->add_control(
            'ads_title',
            [
                'label' => __( 'Advertisment title', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,
             
                'default' => __( 'Awesome News & Blog Theme For Your Next Project', 'news10' ),
            ]
        );

    $this->add_control(
            'ads_img',
            [
                'label' => __( 'Section Background', 'news10' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
           
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

             $this->add_control(
            'ads_lnks', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                  'placeholder' => esc_html__( 'https://your-link.com', 'news10' ),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
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
     
        if ($settings['query_type'] == 'category') {
            $query_args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
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
               

            );
        }
     $wp_query = new \WP_Query($query_args);
        
      ?>
   
             <!-- news10 Entertainment News Start -->
            <div class="news10-entertainment-news news10-slide-section news10-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="news10-title d-flex justify-content-between">
                                <div class="news10-title-text">
                                    <h2>
                                    <?php esc_html_e($settings['title1']); ?>
                                </h2>
                                </div>
                                <div class="newss10-slide-arrow">
                                    <div class="newss10-prev-btn round" id="entertainment-prev"><i class="fal fa-chevron-left"></i></div>
                                    <div class="newss10-next-btn round" id="entertainment-next"><i class=" fal fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="entertainment-slide-wrapper swiper-container">
                                <div class="swiper-wrapper">
                    <?php 
                    if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();?>
                                    <div class="swiper-slide">
                                        <div class="news10-left-content">
                                            <div class="card news10-default-post">
                                                <div class="news10-post-img">
                                                <?php 
                                                  if (has_post_thumbnail()) {
                                                 the_post_thumbnail('news10-point-370-205');
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
                                    </div>
                                     <?php 
                                       endwhile;
                                       wp_reset_postdata();
                                      endif; 
                                         ?>
                                </div>
                            </div>
                 
                           
                                    <div class="news10-news-list">
                                        <ul class="news10enterlst">
                                             <?php 
                                        if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();?>
                                            <li>
                                                <div class="news10-list-img">
                                                    <?php 
                                                  if (has_post_thumbnail()) {
                                                 the_post_thumbnail('news10-point-127-98');
                                                   }
                                                ?>
                                                </div>
                                                <div class="news10-list-text">
                                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                    <ul>
                                                        <li>
                                                            <span class="news10-icon"><svg viewBox="0 0 512 512"><path d="M347.216,301.211l-71.387-53.54V138.609c0-10.966-8.864-19.83-19.83-19.83c-10.966,0-19.83,8.864-19.83,19.83v118.978 c0,6.246,2.935,12.136,7.932,15.864l79.318,59.489c3.569,2.677,7.734,3.966,11.878,3.966c6.048,0,11.997-2.717,15.884-7.952 C357.766,320.208,355.981,307.775,347.216,301.211z"></path><path d="M256,0C114.833,0,0,114.833,0,256s114.833,256,256,256s256-114.833,256-256S397.167,0,256,0z M256,472.341 c-119.275,0-216.341-97.066-216.341-216.341S136.725,39.659,256,39.659c119.295,0,216.341,97.066,216.341,216.341 S375.275,472.341,256,472.341z"></path></svg></span>
                                                            <span class="news10-item-text"><?php the_time('M j, Y');?></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <?php 
                                       endwhile;
                                       wp_reset_postdata();
                                      endif; 
                                         ?>
                                          
                                        </ul>
                                    </div>

                            
                        </div>
                        <div class="col-lg-4">
                            <div class="news10-title">
                                <div class="news10-title-text">
                                    <h2>
                                    <?php  esc_html_e($settings['title2']); ?>
                                </h2>
                                </div>
                            </div>
                            <div class="news10-stay-connected">
                                <div class="row news10-s-follower">
                                    <div class="col-sm-6">
                                        <div class="follower-btn news10-facebook">
                                            <a href="<?php esc_html_e($settings['link1']['url']); ?>">
                                                <div class="news10-icon">
                                                    <svg viewBox="0 0 155.139 155.139"><path d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184 c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452 v20.341H37.29v27.585h23.814v70.761H89.584z"></path></svg>
                                                </div>
                                                <div class="news10-text">
                                                    <div class="news10-f-text"><?php esc_html_e($settings['tit1']); ?></div>
                                                   
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="follower-btn news10-instagram">
                                            <a href="<?php esc_html_e($settings['link2']['url']);?>">
                                                <div class="news10-icon">
                                                    <svg viewBox="0 0 511 511.9"><path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0"></path><path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0"></path><path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0"></path></svg>
                                                </div>
                                                <div class="news10-text">
                                                    <div class="news10-f-text"><?php esc_html_e($settings['tit2']); ?></div>
                                                  
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="follower-btn news10-twitter">
                                            <a href="<?php  esc_html_e($settings['link3']['url']); ?>">
                                                <div class="news10-icon">
                                                    <svg viewBox="0 0 512 512"><path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016 c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992 c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056 c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152 c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792 c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44 C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568 C480.224,136.96,497.728,118.496,512,97.248z"></path></svg>
                                                </div>
                                                <div class="news10-text">
                                                    <div class="news10-f-text"><?php esc_html_e($settings['tit3']); ?></div>
                                                  
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="follower-btn news10-youtube">
                                            <a href="<?php esc_html_e($settings['link4']['url']); ?>">
                                                <div class="news10-icon">
                                                    <svg viewBox="-21 -117 682.66672 682"><path d="m626.8125 64.035156c-7.375-27.417968-28.992188-49.03125-56.40625-56.414062-50.082031-13.703125-250.414062-13.703125-250.414062-13.703125s-200.324219 0-250.40625 13.183593c-26.886719 7.375-49.03125 29.519532-56.40625 56.933594-13.179688 50.078125-13.179688 153.933594-13.179688 153.933594s0 104.378906 13.179688 153.933594c7.382812 27.414062 28.992187 49.027344 56.410156 56.410156 50.605468 13.707031 250.410156 13.707031 250.410156 13.707031s200.324219 0 250.40625-13.183593c27.417969-7.378907 49.03125-28.992188 56.414062-56.40625 13.175782-50.082032 13.175782-153.933594 13.175782-153.933594s.527344-104.382813-13.183594-154.460938zm-370.601562 249.878906v-191.890624l166.585937 95.945312zm0 0"/></svg>
                                                </div>
                                                <div class="news10-text">
                                                    <div class="news10-f-text"><?php  esc_html_e($settings['tit4']); ?></div>
                                                  
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="entertainment-add-wrapper">
                            
                                      <?php echo  get_that_image($settings['ads_img']); ?>
                                    <div class="add-content">  
                                        <p><?php esc_html_e($settings['ads_title']); ?></p>
                                        <a href="<?php esc_attr_e ($settings['ads_lnks']['url']); ?>" class="btn buy-btn"><?php esc_html_e('Buy Now ','news10') ?><span><svg xmlns="http://www.w3.org/2000/svg" width="9.036" height="13.233" viewBox="0 0 9.036 13.233">
                                            <path id="Path_4286" data-name="Path 4286" d="M3097.58-672l5.818,5.606-5.818,5.453" transform="translate(-3096.539 673.08)" fill="none" stroke="#fff" stroke-width="3"/>
                                        </svg>
                                        </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- news10 Entertainment News End -->

    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new news10_entertain_news() );
?>