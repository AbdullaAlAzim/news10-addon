<?php
/*
Plugin Name: News10 Addon
Plugin URI: https://unikforce.com/
Description: News10 Addon.
Author: UnikForce IT
Author URI: https://unikforce.com
Version: 1.0.0
*/

if ( ! defined( 'ABSPATH' ) ) exit;
define( 'NEWS10_VERSION', '1.0.0' );
define( 'NEWS10_PLUG_DIR', dirname(__FILE__).'/' );
define('NEWS10_PLUG_URL', plugin_dir_url(__FILE__));
define('NEWS10_DEMO_FILES', plugin_dir_url(__FILE__). 'vendor/demo/data/xml/');
define('NEWS10_DEMO_SLIDER', plugin_dir_path(__FILE__). 'vendor/demo/data/xml/');

function cs_framework_init_check() {

    if( ! function_exists( 'cs_framework_init' ) && ! class_exists( 'CSFramework' ) ) {
         
          require_once NEWS10_PLUG_DIR .'/vendor/codestar-framework/codestar-framework.php';
          require_once NEWS10_PLUG_DIR .'/vendor/configstar/customiser.php';
          require_once NEWS10_PLUG_DIR .'/vendor/configstar/pagemeta.php';
          require_once NEWS10_PLUG_DIR . '/vendor/configstar/postmeta.php';
          require_once NEWS10_PLUG_DIR .'/vendor/configstar/profile.php';
          require_once NEWS10_PLUG_DIR .'/vendor/admin-pages/admin.php';
          require_once NEWS10_PLUG_DIR . '/vendor/demo/includes/demo-importer.php';

    }
 
    if( ! class_exists( 'News10Element_Elementor_Addons' ) ) {
        require_once NEWS10_PLUG_DIR .'/news10element/index.php';
        require_once NEWS10_PLUG_DIR. '/helper/customiser-extra.php';
        require_once NEWS10_PLUG_DIR. '/helper/cpt.php';
    }

}

add_action( 'plugins_loaded', 'cs_framework_init_check' );

function news10element_footer_select($type='') {

        $type = $type ? $type :'elementor_library';
        global $post;
        $args = array('numberposts' => -1,'post_type' => $type,);
        $posts = get_posts($args);  
        $categories = array(
        ''  => __( 'Select', 'news10' ),
        );
        foreach ($posts as $pn_cat) {
            $categories[$pn_cat->ID] = get_the_title($pn_cat->ID);
        }
        return $categories;   
}


if (class_exists('ELEMENTOR')){
    add_action( 'template_redirect', function() {
        $instance = \Elementor\Plugin::$instance->templates_manager->get_source( 'local' );
        remove_action( 'template_redirect', [ $instance, 'block_template_frontend' ] );
    }, 9 );
}

?>