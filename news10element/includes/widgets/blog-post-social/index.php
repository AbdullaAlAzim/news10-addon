<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class news10_social_ico extends Widget_Base {

    public function get_name() {
        return 'news10socialicon';
    }
 
    public function get_title() {
        return __('blog social icon', 'news10');
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
                'label' => __( 'blog social icon', 'news10' ),
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
            'member_name',
            [
                'label' => __('Name', 'gesus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Social Icons', 'gesus'),
            ]
        );
      $repeater->add_control(
            'url1',
            [
                'label' => __('Link 1', 'gesus'),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

       $repeater->add_control(
            'icon1',
            [
                'label' => __( 'Icon', 'gesus' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-twitter',
                    'library' => 'brand',
                ],
            ]
        );

      $this->add_control(
            'member_list',
            [
                'label' => __('Social Icons', 'gesus'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_name' => __('Facebook', 'gesus'),
                    ],
                    [
                        'member_name' => __('Twitter', 'gesus'),
                    ],
                    [
                        'member_name' => __('Instagram', 'gesus'),
                    ],
                    [
                        'member_name' => __('Youtube', 'gesus'),
                    ],
                ],
                'title_field' => '{{{ member_name }}}',
            ]
        );
     
        $this->end_controls_section();
        
    }
    protected function render(){
        $settings = $this->get_settings();
      ?>

      <div class="widgets social-media">
            <div class="news10-title">
                <div class="news10-title-text">
                    <h2><?php esc_html_e('Social Media','news10'); ?></h2>
                </div>
            </div>
            <ul>

            	<?php if(($settings['member_list']) ): foreach ($settings['member_list'] as $members):?>
                <li>
                    <a <?php echo get_that_link($members['url1']); ?>><?php  \Elementor\Icons_Manager::render_icon( $members['icon1']); ?>                	
                </a>
                </li>
                 <?php endforeach; endif; ?>
                
            </ul>
        </div
    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new news10_social_ico() );