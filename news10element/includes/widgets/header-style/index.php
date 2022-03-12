<?php 
namespace Elementor;

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly


class news10_nav_builder extends Widget_Base {

    public function get_name() {
        return 'header-style';
    }

    public function get_title() {
        return __('Header Style', 'news10');
    }

    public function get_icon() {
        return 'bl_icon eicon-nav-menu';
    }

    public function get_categories() {
        return array('news10-header');
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Main Nav', 'news10' ),
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
                        'icon' => 'eicon-form-horizontal',
                    ],

                     'layout3' => [
                        'title' => __( 'Layout 3', 'news10' ),
                        'icon' => 'eicon-form-horizontal',
                    ],

                     'layout4' => [
                        'title' => __( 'Layout 4', 'news10' ),
                        'icon' => 'eicon-form-horizontal',
                    ],

                     'layout5' => [
                        'title' => __( 'Layout 5', 'news10' ),
                        'icon' => 'eicon-form-horizontal',
                    ],
              
                ],
                'default' => 'layout1',
                'toggle' => true,
            ]
        );


            $this->add_control(
            'icon',
            [
                'label' => __( 'Section Background', 'news10' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
           
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'icoon',
            [
                'label' => __( 'Advertisement', 'news10' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                  'condition' => [
                    'layout' => 'layout2',
                ],
           
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        
        $this->add_control(
            'main_nav',
            [
                'label' => __('Main Menu', 'news10'),
                'type' => Controls_Manager::SELECT2,
                'options' =>  king_menu_select_choices(),
                'multiple' => false,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'main_m_nav',
            [
                'label' => __('Mobile Menu', 'news10'),
                'type' => Controls_Manager::SELECT2,
                'options' =>  king_menu_select_choices(),
                'multiple' => false,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'icon1',
            [
                'label' => __( 'Icon', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                     'layout' => ['layout2','layout5'],
                ],     
                'default' => [
                    'value' => 'fab fa-twitter',
                    'library' => 'brand',
                ],
            ]
        );
          $this->add_control(
            'link1', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                'condition' => [
                     'layout' => ['layout2','layout5'],
                ],
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

          $this->add_control(
            'icon2',
            [
                'label' => __( 'Icon', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                     'layout' => ['layout2','layout5'],
                ],     
                'default' => [
                    'value' => 'fab fa-twitter',
                    'library' => 'brand',
                ],
            ]
        );

            $this->add_control(
            'link2', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                'condition' => [
                     'layout' => ['layout2','layout5'],
                ],
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
             $this->add_control(
            'icon3',
            [
                'label' => __( 'Icon', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                     'layout' => ['layout2','layout5'],
                ],     
                'default' => [
                    'value' => 'fab fa-twitter',
                    'library' => 'brand',
                ],
            ]
        );
        $this->add_control(
            'link3', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                'condition' => [
                     'layout' => ['layout2','layout5'],
                ],
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'icon4',
            [
                'label' => __( 'Icon', 'news10' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                     'layout' => ['layout2','layout5'],
                ],     
                'default' => [
                    'value' => 'fab fa-twitter',
                    'library' => 'brand',
                ],
            ]
        );
        $this->add_control(
            'link4', [
                'label' => __('Link', 'news10'),
                'type' => Controls_Manager::URL,
                'condition' => [
                     'layout' => ['layout2','layout5'],
                ],
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
            'menu_style',
            [
                'label' => __( 'Main Menu', 'news10' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'nav_color',
            [
                'label' => __( 'Color', 'news10' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navigation-main-area ul > li a, 
                    {{WRAPPER}} .navigation-main-area ul > .dropdown:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'nav_fonts',
                'label' => __( 'Typography', 'news10' ),
                'selector' => '{{WRAPPER}} .navigation-main-area ul > li a',
            ]
        );
        $this->add_responsive_control(
            'sdpda',
            [
                'label' =>   esc_html__('Item Padding', 'thepack'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .navigation-main-area ul > li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_responsive_control(
            'sdpd',
            [
                'label' =>   esc_html__('Item Margin', 'thepack'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .navigation-main-area ul > li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'sub_menu_style',
            [
                'label' => __( 'Sub Menu', 'news10' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sub_color',
            [
                'label' => __( 'Color', 'news10' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navigation-main-area ul > li .dropdown-menu > li > a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'hsub_color',
            [
                'label' => __( 'Hover Color', 'news10' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navigation-main-area ul > li .dropdown-menu > li > a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'sub_fonts',
                'label' => __( 'Typography', 'news10' ),
                'selector' => '{{WRAPPER}} .navigation-main-area ul > li .dropdown-menu > li > a',
            ]
        );
        $this->add_control(
            'droph',
            [
                'label' => __( 'DropDown Hover BG', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'dropbgh',
                'label' => __( 'Main BG', 'news10' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .navigation-main-area ul > li a:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => __( 'Menu Border', 'news10' ),
                'selector' => '{{WRAPPER}} .navigation-main-area ul > li .dropdown-menu li',
            ]
        );
        $this->add_responsive_control(
            'dropwi',
            [
                'label' => __( 'DropDown Width', 'news10' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 100,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .navigation-main-area ul > li .dropdown-menu' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'drop',
            [
                'label' => __( 'DropDown BG', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'dropbg',
                'label' => __( 'Main BG', 'news10' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .navigation-main-area ul > li .dropdown-menu',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'droborder',
                'label' => __( 'Main Border', 'news10' ),
                'selector' => '{{WRAPPER}} .navigation-main-area ul > li .dropdown-menu',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'mobile_style',
            [
                'label' => __( 'Mobile Menu', 'news10' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'm_color',
            [
                'label' => __( 'Main Color', 'news10' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mobile_menu_content .mobile-main-navigation .navbar-nav > li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'm_fonts',
                'label' => __( 'Main Typography', 'news10' ),
                'selector' => '{{WRAPPER}} .mobile_menu_content .mobile-main-navigation .navbar-nav > li a',
            ]
        );
        $this->add_control(
            's_color',
            [
                'label' => __( 'Sub Color', 'news10' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mobile_menu .mobile_menu_content .mobile-main-navigation .navbar-nav .dropdown-menu li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 's_fonts',
                'label' => __( 'Sub Typography', 'news10' ),
                'selector' => '{{WRAPPER}} .mobile_menu .mobile_menu_content .mobile-main-navigation .navbar-nav .dropdown-menu li a',
            ]
        );
        $this->add_control(
            'tgcolor',
            [
                'label' => __( 'Toggle Color', 'news10' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mobile_menu_button' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tgbg',
            [
                'label' => __( 'Mobile Menu BG', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'tbg',
                'label' => __( 'Main BG', 'news10' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .mobile_menu_content',
            ]
        );
        $this->end_controls_section();

    }
        
    protected function render() 
    {

        $settings = $this->get_settings();
        $main_menu = $settings['main_nav'];
        $mobile_menu = $settings['main_m_nav'];
         include dirname(__FILE__). '/' . $settings['layout']. '.php';

      }

      protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}
Plugin::instance()->widgets_manager->register_widget_type( new news10_nav_builder() );