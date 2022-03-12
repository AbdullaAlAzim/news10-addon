<?php

namespace Elementor;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class travel_blog extends Widget_Base
{

    public function get_name()
    {
        return 'news10-travel';
    }

    public function get_title()
    {
        return __('Travel Blog', 'news10');
    }

    public function get_categories()
    {
        return ['news10element-addons'];
    }

     public function get_keywords() 
    {
        return [ 'travel', 'blog'];
    }

    public function get_icon()
    {
        return 'bl_icon eicon-posts-group';
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'contenttb_section',
            [
                'label' => __('Travel Blog', 'news10'),
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
            'content_sstysidebar',
            [
                'label' => __('Video post', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
                'default' => 1,
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
                'selector' => '{{WRAPPER}} .news10-ctg-card .author-post .author',
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
        $this->add_control(
            'post_title_color',    
            [
                'label' => __('Title Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,        
                'selectors' => [
                    '{{WRAPPER}} .news10-card .news10-title a' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-card .news10-title a',
            ]
        );

    
        $this->add_control(
            'ca_c',
            [
                'label' => esc_html__( 'Category color', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
    
         $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'ca_bgg',
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .news10-ctg-card .news10-card-thumb .travel-btn',
            ]
        );
     

    $this->end_controls_section();

//widget style area
     $this->start_controls_section(
            'wie_con_sty',
            [
                'label' => __('Widget Style', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
  


        $this->add_control(
            'wee_post_title_color',      
            [
                'label' => __('Title Color', 'news10'),     
                'type' => \Elementor\Controls_Manager::COLOR,        
                'selectors' => [
                    '{{WRAPPER}} .widgets .heading-title h4, {{WRAPPER}} .news10-author-profile .profile-title, {{WRAPPER}} .news10-single-post .title' => 'color: {{VALUE}}',

                ],

               
            ]
        );

            $this->add_control(
            'auth_con_color',
            [
                'label' => __('Content Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .widgets.news10-author-profile p' => 'color: {{VALUE}}',
                ],
            ]
        );

         $this->add_control(
            'wee_post_title_hover',      
            [
                'label' => __('Hover Color', 'news10'),   
                'type' => \Elementor\Controls_Manager::COLOR,          
                'selectors' => [
                    '{{WRAPPER}} .news10-single-post .title:hover, {{WRAPPER}} .news10-wedgets-categories a:hover' => 'color: {{VALUE}}',

                ],

               
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),   
            [
                'name' => 'wee_post_title_boder',
                'label' => esc_html__( 'Border', 'plugin-name' ),
                'selector' => '{{WRAPPER}} widgets .heading-title, {{WRAPPER}} .widgets .heading-title::after',
            ]
        );



    $this->end_controls_section();

  //author box widget start
         $this->start_controls_section(
            'wie_section',
            [
                'label' => __('Author', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


          $this->add_control(
            'userr',
            [
                'label' => __('User', 'news10'),
                'type' => Controls_Manager::SELECT2,
                'options' => news10_user_list(),
                'multiple' => true,
                'label_block' => true,
             
            ]
        );
           $this->add_control(
            'user_numberr',
            [
                'label' => __('User Number', 'news10'),
                'type' => Controls_Manager::NUMBER,
                'default' => 1,
            ]
        );

    //author box widget start
  
        $this->end_controls_section();
//recent psot start
         $this->start_controls_section(
            'travell_section',
            [
                'label' => __('Recent Posts', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'trvquery_type',
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
            'trvcat_query',
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
            'trvid_query',
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
            'trvposts_per_page',
            [
                'label' => __('Posts Per Page', 'news10'),
                'type' => Controls_Manager::NUMBER,
                'default' => 3,
            ]
        );
        $this->end_controls_section();
        //recent psot end

        //categpry widget
      $this->start_controls_section(
            'catt_section',
            [
                'label' => __('Category', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'caat',
            [
                'label' => __('Category', 'news10'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('category'),
                'label_block' => true,
                'multiple' => true,
            ]
        );
        $this->add_control(
            'show_caat',
            [
                'label' => esc_html__('Show Category', 'news10'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__('3', 'news10'),
            ]
        );
        $this->end_controls_section();


        //instagram gallery

         $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Instagram Gallery', 'news10' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

         $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Destinations', 'news10' ),
            ]
        );

    

        $repeater = new \Elementor\Repeater();
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

          $repeater->add_control(
            'insta',
            [
                'label' => __( 'Write The Text', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,

                 'default' => __( 'Follow Me', 'news10' ),
            ]
        );

           $repeater->add_control(
            'insta_lnk',
            [
                'label' => __( 'Image Link', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,

                 'default' => __( 'Follow Me', 'news10' ),
            ]
        );
     
     
        $this->add_control(
            'instagram_list',
            [
                'label' => __( 'Destinations List', 'news10' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'news10', 'news10' ),
                    ],
                    [
                        'title' => __( 'news10', 'news10' ),
                    ],
                    [
                        'title' => __( 'news10', 'news10' ),
                    ],

                     [
                        'title' => __( 'news10', 'news10' ),
                    ],

                     [
                        'title' => __( 'news10', 'news10' ),
                    ],

                     [
                        'title' => __( 'news10', 'news10' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();



    $this->start_controls_section(
            'fornm',
            [
                'label' => __('Form', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
              
            ]
        );


           $this->add_control(
            'form',
            [
                'label' => __('Form Shortcode', 'news10'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        //for author
        $user = $settings['userr'];
        $user_number =  $settings['user_numberr'];
  
        $args = array(
            'role__in' => array( 'author', 'subscriber', 'administrator' ),
            'include' => $user,
            'number' => $user_number

        );
        $posts = get_users( $args );

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

    //recent psot widget
    $trvposts_per_page = $settings['trvposts_per_page'];
        $cat = $settings['cat_query'];
        $id = $settings['id_query'];


        if ($settings['query_type'] == 'category') {
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => $trvposts_per_page,
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
                'posts_per_page' => $trvposts_per_page,
                'post__in' => $id,
                'orderby' => 'post__in'
            );
        }

        //category

             $tax_args = array(
            'taxonomy' => 'category',
            'number' => $settings['show_caat'],
            'include' => $settings['caat'],
        );
        $categories = get_terms($tax_args);

  $trvwp_query = new \WP_Query($query_args); ?>


    <!-- news secton start  -->
    <div class="news10-news-section news10-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="news10-news-categories-area">
                        <div class="row protfoli_inner">
                            <?php 
                            $loop = 0;
                                 if($wp_query->have_posts()) : while($wp_query->have_posts()) :
                                  $wp_query->the_post();
                                  $loop++;?>
                            <div class="col-md-6 grid-item">
                                <div class="card news10-card news10-ctg-card news10-effect-wraper mt-0">
                                    <div class="news10-card-thumb news10-hover-effect">
                                        <?php 
                                          if (has_post_thumbnail()) {
                                         the_post_thumbnail('full');
                                           }

                                        ?>
                                        <span class="btn news10-ctg-btn travel-btn"><?php news10_loop_category() ?></span>
                                        <div class="news10-like-comment">
                                            <?php echo like_it_button_html('');?>
                                            <a href="" class="btn news10-ctg-btn"><i class="fal fa-comment"></i><?php comments_popup_link('0K','1K','%K');?></a>

                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="author-post">
                                            <span class="author"><?php esc_html_e('by :','news10'); ?> <?php the_author(); ?> |</span>
                                           <span class="author"><?php echo get_the_time('M j, Y');?></span>

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
                            <?php if($wp_query_1->have_posts()) : while($wp_query_1->have_posts()) :
                            $wp_query_1->the_post(); ?>
                             
                            <div class="col-md-12 grid-item">
                                <div class="card news10-card news10-ctg-card news10-effect-wraper ">
                                    <div class="news10-card-thumb news10-hover-effect news10-video">
                                        <?php 
                                          if (has_post_thumbnail()) {
                                         the_post_thumbnail('full');
                                           }

                                        ?>
                                        <div class="news10-like-comment">
                                            <a href="" class="btn news10-ctg-btn"><?php echo like_it_button_html('');?></a>
                                            <a href="" class="btn news10-ctg-btn"><i class="fal fa-comment"></i><?php comments_popup_link('0K','1K','%K');?></a>
                                        </div>
                                         <?php 
                                            $meta_sermon = get_post_meta(get_the_ID(), '_postsmeta', true);
                                             ?>
                                       <a class="play_btn" href="<?php echo esc_url($meta_sermon['video_post']['url']); ?>" data-lity><i class="fas fa-play"></i></a>
                                    </div>
                                    <div class="card-body news10-card-body text-center">
                                        <div class="author-post text-center">
                                            <span class="author">by : <?php the_author(); ?> |</span>
                                            <span class="author"><?php echo get_the_time('M j, Y');?></span>
                                        </div>
                                        <div class="news10-title justify-content-center">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <p><?php echo wp_trim_words(get_the_excerpt(), 15)?></p>
                                    </div>
                                </div>
                            </div>
                          <?php 
                            endwhile; 
                            wp_reset_postdata();
                            endif;    
                         ?>
                        </div>
                        <div class="news10-news-more">
                            <a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="btn news10-btn"><?php esc_html_e('Load More','news10') ?></a>


                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="news10-wedgets-area ">
                         <?php foreach($posts as $user): ?>
                        <div class="widgets news10-author-profile">
                            <div class="profile-thumb">
                                <?php echo get_avatar( $user->ID, 90 ); ?>  
                            </div>
                            <div class="profile-title">
                                <a class="title" href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php echo esc_html($user->display_name);?> </a>
                               
                            </div>
                            <p><?php echo esc_html($user->description);?></p>
                        </div>
                         <?php endforeach; ?>

                        <div class="widgets news10-wedgets-recent-post">
                            <div class="heading-title">
                                <h4><?php esc_html_e('Recent Post','news10'); ?></h4>
                            </div>

                              <?php 
                        if($trvwp_query->have_posts()) : while($trvwp_query->have_posts()) : $trvwp_query->the_post();?>
                            <div class="news10-single-post news10-effect-wraper">
                                <a href="" class="post-thumb news10-hover-effect">
                                    <?php 
                                      if (has_post_thumbnail()) {
                                     the_post_thumbnail('news10-point-80-80');
                                       }
                                    ?>
                                </a>

                                <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                            </div>
                            <?php 
                           endwhile;
                           wp_reset_postdata();
                            endif; 
                             ?>
                        </div>
                        <div class="widgets news10-wedgets-categories">
                            <div class="heading-title">
                                <h4><?php esc_html_e('Categories','news10'); ?></h4>
                            </div>
                            <ul>
                            <?php
                            foreach($categories as $category) :
                                ?>
                                <li><a href="<?php echo get_term_link($category->slug, 'category') ?>"><span><i class="fal fa-angle-right"></i><?php echo esc_html($category->name ); ?></span><?php echo esc_html($category->count ); ?></a></li>
                                 <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="widgets news10-wedgets-instagram">
                            <div class="heading-title">
                                <h4><?php esc_html_e('Instagram','news10'); ?></h4>
                            </div>
                            <div class="news10-instagram-wraper">
                                
                             <?php if(($settings['instagram_list']) ): foreach ($settings['instagram_list'] as $members):?>
                                 <div class="news10-effect-wraper ctg-items">
                                    <a href="<?php echo ($members['insta_lnk']); ?>" class="news10-hover-effect">
                                    <?php echo get_that_image($members['image']); ?> 
                                    </a>
                                </div>
                                 <?php endforeach; endif; ?>
                            </div>
                           
                        </div>
                        <div class="widgets news10-wedgets-newsletter">
                            <div class="heading-title">
                                <h4>Newsletter</h4>
                            </div>
                            <p>Enter your email address below to subscribe to my newsletter</p>
                            <form >
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email Address" aria-describedby="emailHelp">
                                <button class="btn theme-btn">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news secton end  -->
  
       
    <?php 
   
    }
}

Plugin::instance()->widgets_manager->register(new travel_blog());
?>