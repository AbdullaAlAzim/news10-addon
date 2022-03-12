<?php
namespace Elementor;
if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly
class news10_news_gadget extends Widget_Base {

    public function get_name() {
        return 'news10gadget';
    }
 
    public function get_title() {
        return __('New From Gadgets', 'news10');
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
                'label' => __('Gadgets', 'news10'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'news10' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
             
                'default' => __( 'Trending News', 'news10' ),
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

         $this->add_control(
            'asc_dsc',
            [
                'label' => esc_html__( 'Order', 'news10' ),
                'type' => Controls_Manager::SELECT,
                'default'   => 'DESC',
                'options'   => [
                    'ASC'     => esc_html__( 'ASC', 'news10' ),
                    'DESC'     => esc_html__( 'DESC', 'news10' ),
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
        $asc_dsc = $settings['asc_dsc'];



        if ($settings['query_type'] == 'category') {
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => $per_page,
                'order' =>  $asc_dsc,
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
                'order' =>  $asc_dsc,
                'post__in' => $id,
               
            );
        }
     $wp_query = new \WP_Query($query_args);

      ?>
<section class="news10-new-from-gadgets news10-section" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/gallry-slide/bg.jpg">
    <div class="container-fluid">
        <div class="title-center">
            <h2>New From Gadgets</h2>
        </div>
        <div class="news10-gadgets-slide-wraper swiper-container">
            <div class="swiper-wrapper">

                 <?php 
                    if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();?>
                <div class="swiper-slide">
                    <div class="card news10-card-img">
                        <?php 
                              if (has_post_thumbnail()) {
                             the_post_thumbnail('news10-point-270-422');
                               }
                            ?>
                        <div class="card-body news10-card-body">
                            <div class="news10-text">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <ul>
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
                   endwhile;
                   wp_reset_postdata();
                    endif; 
                 ?>
            
            </div>
        </div>
    </div>
</section>
    <?php 
   
    }
}
Plugin::instance()->widgets_manager->register_widget_type( new news10_news_gadget() );
?>