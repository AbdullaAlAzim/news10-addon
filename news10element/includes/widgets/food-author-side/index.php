<?php
namespace Elementor;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class food_lastest_author_side extends Widget_Base
{

    public function get_name()
    {
        return 'foodauthorside';
    }

    public function get_title()
    {
        return __('Food Author sidebar', 'news10');
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
            'content_section',
            [
                'label' => __('Banner', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

    

          $this->add_control(
            'user',
            [
                'label' => __('User', 'news10'),
                'type' => Controls_Manager::SELECT2,
                'options' => news10_user_list(),
                'multiple' => true,
                'label_block' => true,
             
            ]
        );

                $this->add_control(
            'website_link',
            [
                'label' => esc_html__( 'Link', 'news10' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'news10' ),
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
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



        $this->add_control(
            'post_title_color',  
            [
                'label' => __('Title Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .news10-author-profile .profile-title .title' => 'color: {{VALUE}}',
                ],
            ]
        );

           $this->add_control(
            'post_title_colorp',  
            [
                'label' => __('Content Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .news10-author-profile.widgets.news10-food-profile p' => 'color: {{VALUE}}',
                ],
            ]
        );

             $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'cttih',
                'label' => __('Content Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-author-profile.widgets.news10-food-profile p',
            ]
        );

            $this->add_control(
            'cioc_colorp',  
            [
                'label' => __('Social Icon Color', 'news10'),
                'type' => \Elementor\Controls_Manager::COLOR,    
                'selectors' => [
                    '{{WRAPPER}} .news10-food-social-link a' => 'color: {{VALUE}}',
                ],
            ]
        );

           $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'news10'),
                'selector' => '{{WRAPPER}} .news10-author-profile .profile-title .title',
            ]
        );

            $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'label' => esc_html__( 'Background', 'news10' ),
                'types' => [ 'classic', 'gradient'],
                'selector' => '{{WRAPPER}} .news10-food-profile .news10-food-btn',
            ]
        );

           

        $this->end_controls_section();
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $user = $settings['user'];
     
  
        $args = array(
      		'role__in' => array( 'author', 'subscriber', 'administrator' ),
      		'include' => $user,
      		'number' => 1

    	);
    	$posts = get_users( $args );
        ?>
  
     <!-- Latest Recipes section start  -->
    <section class="news10-food-latest-recipes-section news10-section">
        <div class="container">
            <div class="row">
                    <div class="news10-wedgets-area news10-food-wedgets-area">
                        <?php foreach($posts as $user): ?>
                        <div class="news10-author-profile widgets news10-food-profile">
                            <div class="profile-thumb">
                               <?php echo get_avatar( $user->ID, 90 ); ?>  
                            </div>
                            <div class="profile-title"> 
								<p class="title"><?php echo esc_html($user->display_name);?> </p>
                            </div>
                           <p><?php echo esc_html($user->description);?></p>

                            <div class="news10-food-social-link">
                                <?php $user_id   = $user->ID;
                                $user_meta = get_user_meta( $user_id, '_yl_pfile', true ); ?>

                            <?php foreach($user_meta['opt-repeater-1'] as $ddd): ?>  
                                <a href="<?php echo $ddd['por_link']['url']; ?>"><i class="<?php echo $ddd['por_ico']; ?>"></i></a> 
                            <?php endforeach; ?>
                            </div>
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>
                             " class="btn news10-food-btn"><?php esc_html_e('More About Me','news10'); ?></a>
                        </div>
                        <?php endforeach; ?>
                    </div>
             </div>
        </div>
    </section>
    <!-- Latest Recipes section end  -->



   <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type(new food_lastest_author_side());?>
