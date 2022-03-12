<?php

namespace Elementor;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class news10_footer extends Widget_Base
{

    public function get_name()
    {
        return 'news10-footer';
    }

    public function get_title()
    {
        return __('Footer Element', 'news10');
    }

    public function get_categories()
    {
        return ['news10element-addons'];
    }

    public function get_icon()
    {
        return 'bl_icon eicon-posts-group';
    }

    protected function _register_controls()
    {

     $this->start_controls_section(
            'sec_layout',
            [
                'label' => __('Footer Layout', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

            ]
        );

        $this->add_control(
            'layout',
            [
                'label' => __( 'Layout', 'news10' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'layout1' => [
                        'title' => __( 'Layout 1', 'news10' ),
                        'icon' => 'eicon-form-horizontal',
                    ],
                    'layout2' => [
                        'title' => __( 'Layout 2', 'news10' ),
                        'icon' => 'eicon-post-slider',
                    ],

                    'layout3' => [
                        'title' => __( 'Layout 3', 'news10' ),
                        'icon' => 'eicon-post-slider',
                    ],

                    'layout4' => [
                        'title' => __( 'Layout 4', 'news10' ),
                        'icon' => 'eicon-post-slider',
                    ],

                    'layout5' => [
                        'title' => __( 'Layout 5', 'news10' ),
                        'icon' => 'eicon-post-slider',
                    ],

                     'layout6' => [
                        'title' => __( 'Layout 6', 'news10' ),
                        'icon' => 'eicon-post-slider',
                    ],
                ],
                'default' => 'layout1',
                'toggle' => true,
            ]
        );


    $this->end_controls_section();

    $this->start_controls_section(
            'content_section',
            [
                'label' => __('Travel', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                 'condition' => [
                'layout' => 'layout1',
                ],

            ]
        );

           $this->add_control(
            'sec_style',
            [
                'label' => esc_html__( 'Travel Footer', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

         $this->add_control(
			'item_description',
			[
				'label' => esc_html__( 'Description', 'news10' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
             
				'default' => esc_html__( '<span>&copy; Copyright 2021 <a href="">news10Travel.</a> All rights reserved.</span>', 'news10' ),
			
			]
		);
          $this->add_control(
            'bgg',
            [
                'label' => __( 'Footer BG', 'news10' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
         
          $this->add_control(
            'image',
            [
                'label' => __( 'Footer image', 'news10' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
             
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
       $this->add_control(
            'icon1',
            [
                'label' => __( 'Icon 1', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
              
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'brand',
                ],
            ]
        );

        $this->add_control(
			'facebook',
			[
				'label' => esc_html__( 'facebook', 'news10' ),
				'type' => \Elementor\Controls_Manager::TEXT,
              
				'default' => esc_html__( 'facebook', 'news10' ),
				
			]
		);

        $this->add_control(
            'icon2',
            [
                'label' => __( 'Icon 2', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
              
                'default' => [
                    'value' => 'fab fa-twitter',
                    'library' => 'brand',
                ],
            ]
        );

        $this->add_control(
			'twitter',
			[
				'label' => esc_html__( 'twitter', 'news10' ),
				'type' => \Elementor\Controls_Manager::TEXT,
            
				'default' => esc_html__( 'twitter', 'news10' ),
				
			]
		);

        $this->add_control(
            'icon3',
            [
                'label' => __( 'Icon 3', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
              
                'default' => [
                    'value' => 'fab fa-instagram',
                    'library' => 'brand',
                ],
            ]
        );

           $this->add_control(
			'instagram',
			[
				'label' => esc_html__( 'instagram', 'news10' ),
				'type' => \Elementor\Controls_Manager::TEXT,
             
				'default' => esc_html__( 'instagram', 'news10' ),
				
			]
		);

        $this->add_control(
            'icon4',
            [
                'label' => __( 'Icon 4', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
              
                'default' => [
                    'value' => 'fab fa-youtube',
                    'library' => 'brand',
                ],
            ]
        );

         $this->add_control(
			'youtube',
			[
				'label' => esc_html__( 'youtube', 'news10' ),
				'type' => \Elementor\Controls_Manager::TEXT,
             
				'default' => esc_html__( 'youtube', 'news10' ),
				
			]
		);

$this->end_controls_section();

//default widget area start
          $this->start_controls_section(
            'default_wie',
            [
                'label' => __('Top Area', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                'layout' => 'layout6',
                ],
            ]
        );

        $this->add_control(
            'fo_logo',
            [
                'label' => __( 'Footer Logo', 'news10' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

         $this->add_control(
            'top_con',
            [
                'label' => esc_html__( 'Description', 'news10' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
             
                'default' => esc_html__( 'Magpie matrix economically sound value through cooperative technology task fully researched data and enterprise process improvements quality products via client-focused results.', 'news10' ),
            
            ]
        );
        
        $this->end_controls_section();

        $this->start_controls_section(
            'Mos_v',
            [
                'label' => __('Most Viewed Post', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout6',
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
            'w_n',
            [
                'label' => __('World News', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout6',
                ],
            ]
        );
     

     $repeater = new \Elementor\Repeater();
    
        $repeater->add_control(
            'menu_text', [
                'label' => __( 'Menu', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            
            ]
        );

           $repeater->add_control(
            'linkds', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'member_list',
            [
                'label' => __( 'List', 'news10' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],

                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],

                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],

                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],

                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],

                ],
                'title_field' => '{{{ member_name }}}',
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'w_n_n',
            [
                'label' => __('About Magpie', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout6',
                ],
            ]
        );
     

     $repeater = new \Elementor\Repeater();
    
        $repeater->add_control(
            'textt', [
                'label' => __( 'Menu', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            
            ]
        );

           $repeater->add_control(
            'linkk', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'member_listt',
            [
                'label' => __( 'List', 'news10' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],

                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],

                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'member_name' => __( 'Menu List', 'news10' ),
                    ],

                ],
                'title_field' => '{{{ member_name }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'tags_v',
            [
                'label' => __('Tags', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout6',
                ],
            ]
        );
       $this->add_control(
            'tag',
            [
                'label' => __('Tags', 'news10'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('post_tag'),
                'label_block' => true,
                'multiple' => true,
            ]
        );
        $this->add_control(
            'show_tag',
            [
                'label' => esc_html__('Show Tags', 'news10'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__('5', 'news10'),
            ]
        );


    $this->end_controls_section();


    $this->start_controls_section(
            'fornm',
            [
                'label' => __('Form', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout6',
                ],
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


         $this->start_controls_section(
            'B_foo',
            [
                'label' => __('Bottom Footer', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout6',
                ],
            ]
        );


           $this->add_control(
            'cop_right',
            [
                'label' => esc_html__( 'Copyright Text', 'news10' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
             
                'default' => wp_kses_post( '2021 © All rights reserved by <a href="https://themeforest.net/user/news10_theme/portfolio">news10</a>', 'news10' ),
            
            ]
        );

        $this->end_controls_section();

        //default widget area end

        //Tech widget area start
      $this->start_controls_section(
            'sdd_wie',
            [
                'label' => __('Section BG', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                          'condition' => [
                    'layout' => 'layout2',
                ],
            ]
        );

        $this->add_control(
            'se_bg',
            [
                'label' => __( 'Footer BG', 'news10' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

          $this->end_controls_section();


          $this->start_controls_section(
            'tech_wie',
            [
                'label' => __('Top Area', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                          'condition' => [
                    'layout' => 'layout2',
                ],
            ]
        );


        $this->add_control(
            'fo_logoo',
            [
                'label' => __( 'Footer Logo', 'news10' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );



         $this->add_control(
            'top_conn',
            [
                'label' => esc_html__( 'Description', 'news10' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
             
                'default' => esc_html__( 'Magpie matrix economically sound value through cooperative technology task fully researched data and enterprise process improvements quality products via client-focused results.', 'news10' ),
            
            ]
        );
        
         $this->end_controls_section();

$this->start_controls_section(
            'Mos_v_v',
            [
                'label' => __('Most Viewed Post', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout2',
                ],
            ]
        );
        $this->add_control(
            'posts_per_page2',
            [
                'label' => __('Posts Per Page', 'news10'),
                'type' => Controls_Manager::NUMBER,
                'default' => 3,
            ]
        );
         $this->end_controls_section();

    $this->start_controls_section(
            'wse_n',
            [
                'label' => __('World News', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout2',
                ],
            ]
        );
     
     $repeater = new \Elementor\Repeater();
    
    $repeater->add_control(
            'texxt', [
                'label' => __( 'Menu', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            
            ]
        );

        $repeater->add_control(
            'linnk', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'membeer_list',
            [
                'label' => __( 'List', 'news10' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_namee' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'member_namee' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'member_namee' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'member_namee' => __( 'Menu List', 'news10' ),
                    ],

                    [
                        'member_namee' => __( 'Menu List', 'news10' ),
                    ],

                    [
                        'member_namee' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'member_namee' => __( 'Menu List', 'news10' ),
                    ],

                    [
                        'member_namee' => __( 'Menu List', 'news10' ),
                    ],

                    [
                        'member_namee' => __( 'Menu List', 'news10' ),
                    ],

                ],
                'title_field' => '{{{ member_namee }}}',
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'wm_n_n',
            [
                'label' => __('About Magpie', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout2',
                ],
            ]
        );
     

     $repeater = new \Elementor\Repeater();
    
        $repeater->add_control(
            'texttm', [
                'label' => __( 'Menu', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            
            ]
        );

           $repeater->add_control(
            'linkkm', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'mmember_listt',
            [
                'label' => __( 'List', 'news10' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'mmember_name' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'mmember_name' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'mmember_name' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'mmember_name' => __( 'Menu List', 'news10' ),
                    ],

                    [
                        'mmember_name' => __( 'Menu List', 'news10' ),
                    ],

                    [
                        'mmember_name' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'mmember_name' => __( 'Menu List', 'news10' ),
                    ],

                ],
                'title_field' => '{{{ mmember_name }}}',
            ]
        );

        $this->end_controls_section();

    $this->start_controls_section(
            'tagsg_v',
            [
                'label' => __('Tags', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout2',
                ],
            ]
        );
       $this->add_control(
            'tagg',
            [
                'label' => __('Tags', 'news10'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('post_tag'),
                'label_block' => true,
                'multiple' => true,
            ]
        );
        $this->add_control(
            'show_tagg',
            [
                'label' => esc_html__('Show Tags', 'news10'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__('5', 'news10'),
            ]
        );


    $this->end_controls_section();

        $this->start_controls_section(
            'ffornm',
            [
                'label' => __('Form', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout2',
                ],
            ]
        );


           $this->add_control(
            'fform',
            [
                'label' => __('Form Shortcode', 'news10'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );

        $this->end_controls_section();

    $this->start_controls_section(
            'Bc_foo',
            [
                'label' => __('Bottom Footer', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout2',
                ],
            ]
        );


           $this->add_control(
            'ccop_right',
            [
                'label' => esc_html__( 'Copyright Text', 'news10' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
             
                'default' => wp_kses_post( '2021 © All rights reserved by <a href="https://themeforest.net/user/news10_theme/portfolio">news10</a>', 'news10' ),
            
            ]
        );

        $this->end_controls_section();
        //Tech widget area end


        //news widget start

      $this->start_controls_section(
            'ndd_wie',
            [
                'label' => __('News Widget', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                          'condition' => [
                    'layout' => 'layout5',
                ],
            ]
        );

  
        $this->add_control(
            'nfo_logoo',
            [
                'label' => __( 'Footer Logo', 'news10' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

           $this->add_control(
            'abou_ccc',
            [
                'label' => esc_html__( 'Copyright Text', 'news10' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
             
                'default' => wp_kses_post( 'Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdiet eu, iaculis a sem, Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdiet eu, iaculis a sem...', 'news10' ),
            
            ]
        );


        $this->add_control(
            'contact_n',
            [
                'label' => esc_html__( 'Contact us:', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'contact@yoursite.com', 'news10' ),
                
            ]
        );

        $this->add_control(
            'call_n',
            [
                'label' => esc_html__( 'Call us', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '+11 52698 12478 003', 'news10' ),
                
            ]
        );


        $this->add_control(
            'icon11',
            [
                'label' => __( 'Icon', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                 
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'brand',
                ],
            ]
        );
          $this->add_control(
            'link11', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
            
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

          $this->add_control(
            'icon22',
            [
                'label' => __( 'Icon', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                
                'default' => [
                    'value' => 'fab fa-twitter',
                    'library' => 'brand',
                ],
            ]
        );

            $this->add_control(
            'link22', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
            
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
             $this->add_control(
            'icon33',
            [
                'label' => __( 'Icon', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                 
                'default' => [
                    'value' => 'fab fa-youtube',
                    'library' => 'brand',
                ],
            ]
        );
        $this->add_control(
            'link33', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
            
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'icon44',
            [
                'label' => __( 'Icon', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                
                'default' => [
                    'value' => 'fab fa-instagram',
                    'library' => 'brand',
                ],
            ]
        );
        $this->add_control(
            'link44', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
          
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
          $this->end_controls_section();


          $this->start_controls_section(
            'nMos_v_v',
            [
                'label' => __('Most Viewed Post', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout5',
                ],
            ]
        );
        $this->add_control(
            'nposts_per_page2',
            [
                'label' => __('Posts Per Page', 'news10'),
                'type' => Controls_Manager::NUMBER,
                'default' => 3,
            ]
        );
         $this->end_controls_section();

             $this->start_controls_section(
            'ntagsg_v',
            [
                'label' => __('Tags', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout5',
                ],
            ]
        );
       $this->add_control(
            'ntagg',
            [
                'label' => __('Tags', 'news10'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('post_tag'),
                'label_block' => true,
                'multiple' => true,
            ]
        );
        $this->add_control(
            'nshow_tagg',
            [
                'label' => esc_html__('Show Tags', 'news10'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__('5', 'news10'),
            ]
        );
        $this->end_controls_section();


       $this->start_controls_section(
            'nffornm',
            [
                'label' => __('Form', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout5',
                ],
            ]
        );


    $this->add_control(
            'nfform',
            [
                'label' => __('Form Shortcode', 'news10'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );

        $this->end_controls_section();

         $this->start_controls_section(
            'nBc_foo',
            [
                'label' => __('Bottom Footer', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                       'condition' => [
                    'layout' => 'layout5',
                ],
            ]
        );


           $this->add_control(
            'nccop_right',
            [
                'label' => esc_html__( 'Copyright Text', 'news10' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
             
                'default' => wp_kses_post( '2021 © All rights reserved by <a href="https://themeforest.net/user/news10_theme/portfolio">news10</a>', 'news10' ),
            
            ]
        );

        $this->end_controls_section();
        //news widget end


        //Food widget Start

        $this->start_controls_section(
            'fdndd_wie',
            [
                'label' => __('Food Widget', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                          'condition' => [
                    'layout' => 'layout3',
                ],
            ]
        );

         $this->add_control(
            'fdnfo_logoo',
            [
                'label' => __( 'Footer Logo', 'news10' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

    $repeater = new \Elementor\Repeater();
    
        $repeater->add_control(
            'fdtextt', [
                'label' => __( 'Menu', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            
            ]
        );

           $repeater->add_control(
            'fdlinkk', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'fdmember_listt',
            [
                'label' => __( 'List', 'news10' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'fdmember_name' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'fdmember_name' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'fdmember_name' => __( 'Menu List', 'news10' ),
                    ],
                    [
                        'fdmember_name' => __( 'Menu List', 'news10' ),
                    ],

                    [
                        'fdmember_name' => __( 'Menu List', 'news10' ),
                    ],

                ],
                'title_field' => '{{{ fdmember_name }}}',
            ]
        );


            $this->add_control(
            'fdicon11',
            [
                'label' => __( 'Icon', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                 
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'brand',
                ],
            ]
        );
          $this->add_control(
            'fdlink11', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
            
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

          $this->add_control(
            'fdicon22',
            [
                'label' => __( 'Icon', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                
                'default' => [
                    'value' => 'fab fa-twitter',
                    'library' => 'brand',
                ],
            ]
        );

            $this->add_control(
            'fdlink22', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
            
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
             $this->add_control(
            'fdicon33',
            [
                'label' => __( 'Icon', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                 
                'default' => [
                    'value' => 'fab fa-instagram',
                    'library' => 'brand',
                ],
            ]
        );
        $this->add_control(
            'fdlink33', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
            
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

            $this->add_control(
            'fdcop_right',
            [
                'label' => esc_html__( 'Copyright Text', 'news10' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
             
                'default' => wp_kses_post( '&copy; 2021 news10 Fashion News. All Rights Reserved. Theme by <a href="">news10Theme</a>', 'news10' ),
            
            ]
        );

    $this->end_controls_section();
     //Food widget end


    //fasion widget start

      $this->start_controls_section(
            'fsndd_wie',
            [
                'label' => __('Fasion Widget', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                          'condition' => [
                    'layout' => 'layout4',
                ],
            ]
        );

  
        $this->add_control(
            'fsnfo_logoo',
            [
                'label' => __( 'Footer Logo', 'news10' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

           $this->add_control(
            'fsitem_description',
            [
                'label' => esc_html__( 'Description', 'news10' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
             
                'default' => esc_html__( 'Your source for the lifestyle news. This demo is crafted specifically to exhibit the use of the theme as a lifestyle site. Visit our main page for more', 'news10' ),
            
            ]
        );



           $this->add_control(
            'fssicon11',
            [
                'label' => __( 'Icon', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                 
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'brand',
                ],
            ]
        );
          $this->add_control(
            'fsslink11', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
            
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

          $this->add_control(
            'fssicon22',
            [
                'label' => __( 'Icon', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                
                'default' => [
                    'value' => 'fab fa-twitter',
                    'library' => 'brand',
                ],
            ]
        );

            $this->add_control(
            'fsslink22', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
            
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
             $this->add_control(
            'fssicon33',
            [
                'label' => __( 'Icon', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                 
                'default' => [
                    'value' => 'fab fa-instagram',
                    'library' => 'brand',
                ],
            ]
        );
        $this->add_control(
            'fsslink33', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
            
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

         $this->add_control(
            'nposts_per_page3',
            [
                'label' => __('Posts Per Page', 'news10'),
                'type' => Controls_Manager::NUMBER,
                'default' => 3,
            ]
        );

    $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'fssmember_name',
            [
                'label' => __( 'Name', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Gallery Images', 'news10' ),
            ]
        );
        $repeater->add_control(
            'fsslink', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'fssmember_photo', [
                'label' => __( 'Photo', 'news10' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'fssmember_list',
            [
                'label' => __( 'List', 'news10' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'fssmember_name' => __( 'Instagram Images', 'news10' ),
                    ],
                    [
                        'fssmember_name' => __( 'Instagram Images', 'news10' ),
                    ],
                    [
                        'fssmember_name' => __( 'Instagram Images', 'news10' ),
                    ],
                    [
                        'fssmember_name' => __( 'Instagram Images', 'news10' ),
                    ],

                    [
                        'fssmember_name' => __( 'Instagram Images', 'news10' ),
                    ],

                    [
                        'fssmember_name' => __( 'Instagram Images', 'news10' ),
                    ],

                ],
                'title_field' => '{{{ fssmember_name }}}',
            ]
        );

          $this->add_control(
            'fsscop_right',
            [
                'label' => esc_html__( 'Copyright Text', 'news10' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
             
                'default' => wp_kses_post( '&copy; 2021 news10 Fashion News. All Rights Reserved. Theme by <a href="">news10Theme</a>', 'news10' ),
            
            ]
        );

    $this->end_controls_section();

    //fasion widget end


    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        //default footer start
         $per_page = $settings['posts_per_page'];
         $popularpost  = new \WP_Query(array(
            'posts_per_page' =>  $per_page,
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
        ));

        $tax_args = array(
            'taxonomy' => 'post_tag',
            'number' => $settings['show_tag'],
            'include' => $settings['tag'],
        );
        $categories = get_terms($tax_args);
       //default footer end

       //tech footer start
         $per_page = $settings['posts_per_page2'];
         $popularpost2  = new \WP_Query(array(
            'posts_per_page' =>  $per_page,
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
        ));

        $tax_argss = array(
            'taxonomy' => 'post_tag',
            'number' => $settings['show_tagg'],
            'include' => $settings['tagg'],
        );
        $categories = get_terms($tax_argss);
        //tech footer end

        //news footer start
         $nper_page = $settings['nposts_per_page2'];
         $npopularpost2  = new \WP_Query(array(
            'posts_per_page' =>  $nper_page,
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
        ));

        $tax_argssn = array(
            'taxonomy' => 'post_tag',
            'number' => $settings['nshow_tagg'],
            'include' => $settings['ntagg'],
        );
        $categoriesn = get_terms($tax_argssn);
        //news footer end


        //fasion footer start

          $fsper_page = $settings['nposts_per_page3'];
         $npopularpost3  = new \WP_Query(array(
            'posts_per_page' =>  $fsper_page,
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
        ));

        //fasion footer end
        include dirname(__FILE__). '/' . $settings['layout']. '.php';
    }

    protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new news10_footer());
?>