<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class news10_news_ads extends Widget_Base {

    public function get_name() {
        return 'news10ads';
    }
 
    public function get_title() {
        return __('Advertisement', 'news10');
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
                'label' => __('Advertisement', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

      $this->add_control(
            'img', [
                'label' => __( 'Advertisement Image', 'gesus' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

           $this->add_control(
            'link', [
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
        
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();

 
      ?>
      <!-- news10 Adds Banner Start -->
        <div class="news10-adds-banner p-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="news10-add">
                            <a href="<?php echo get_that_link($settings['link']); ?>"><?php echo  get_that_image($settings['img']); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- news10 Adds Banner End -->
    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new news10_news_ads() );
?>