<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class news10_instagram_follow extends Widget_Base {

    public function get_name() {
        return 'instagramfollow';
    }
 
    public function get_title() {
        return __('instagram follow', 'news10');
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
                'label' => __( 'instagram follow', 'news10' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


            $this->add_control(
            'posts_per_sldie',
            [
                'label' => __('Posts Per Slide', 'gesus'),
                'type' => Controls_Manager::NUMBER,
                'default' => 6,
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
            'content_sty',
            [
                'label' => __('Style', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'sld_hover',
            [
                'label' => esc_html__( 'Slider Hover Color', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

       $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'label' => esc_html__( 'Background', 'news10' ),
                'types' => [ 'classic', 'gradient'],
                'selector' => '{{WRAPPER}} .news10-food-instagram-follow-items::before',
            ]
        );

         $this->add_control(
            'sld_btnhover',
            [
                'label' => esc_html__( 'Slider Button Color', 'news10' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

       $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'abackground',
                'label' => esc_html__( 'Background', 'news10' ),
                'types' => [ 'classic', 'gradient'],
                'selector' => '{{WRAPPER}} .news10-food-instagram-follow-items .follow:hover',
            ]
        );


        $this->end_controls_section();
        
    }
    protected function render(){
        $settings = $this->get_settings();
        $posts_per_sldie = [
            'slider_key'=> $settings['posts_per_sldie'],
            //'slider_keyy'=> $settings['posts_per_sldie2']
        ];

      ?>

    <!-- instagram Follow start  -->
    <section class="news10-food-instagram-follow" data-news10='<?php echo wp_json_encode($posts_per_sldie);?>'>
        <div class="news10-food-instagram-follow-wrapper swiper-container">
            <div class="swiper-wrapper">
                 <?php if(($settings['instagram_list']) ): foreach ($settings['instagram_list'] as $members):?>
                <div class="swiper-slide news10-food-instagram-follow-items">
                    <?php echo get_that_image($members['image']); ?>  
                    <a href="<?php echo ($members['insta_lnk']); ?>" class="follow"><i class="fab fa-instagram"></i><?php echo ($members['insta']); ?></a>
                </div>
                 <?php endforeach; endif; ?>
             
            </div>
        </div>
    </section>
    <!-- instagram Follow end  -->
    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new news10_instagram_follow() );