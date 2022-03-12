<?php

namespace Elementor;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class blog_sidebar_search extends Widget_Base
{
    public function get_name()
    {
        return 'sidebar-search';
    }

    public function get_title()
    {
        return __('blog sidebar search', 'news10');
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
                'label' => __('Search', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __('Title', 'news10'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Search', 'news10'),
            ]
        );
  
        $this->end_controls_section();

    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $unique_id = esc_attr( uniqid( 'search-form-' ) );
        ?>   

      <div class="widgets news10-search-widgets">
        <div class="news10-title">
            <div class="news10-title-text">
                <h2><?php echo $settings['title']; ?></h2>
            </div>
        </div>
        <form class="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="input-group">
                <input type="search" id="<?php echo esc_attr($unique_id); ?>"  name="s" value="<?php echo get_search_query(); ?>" class="form-control" placeholder="Search ...">
                <button type="submit" class="d-btn"><svg viewBox="0 0 511.999 511.999"><path d="M508.874,478.708L360.142,329.976c28.21-34.827,45.191-79.103,45.191-127.309c0-111.75-90.917-202.667-202.667-202.667 S0,90.917,0,202.667s90.917,202.667,202.667,202.667c48.206,0,92.482-16.982,127.309-45.191l148.732,148.732 c4.167,4.165,10.919,4.165,15.086,0l15.081-15.082C513.04,489.627,513.04,482.873,508.874,478.708z M202.667,362.667 c-88.229,0-160-71.771-160-160s71.771-160,160-160s160,71.771,160,160S290.896,362.667,202.667,362.667z"></path></svg></button>
            </div>
        </form>
    </div>
    
<?php 
      
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new blog_sidebar_search());
?>