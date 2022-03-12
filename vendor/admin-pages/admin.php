<?php
function news10_welcome_page(){
    require_once 'news10-welcome.php';
}
function ae_demo_importer_function(){
    admin_url( 'admin.php?page=ae-demo-importer' );
}
add_action( 'admin_menu', 'news10_admin_meu' );
function news10_admin_meu() {
    // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
    add_menu_page( 'News10', 'News10', 'administrator', 'news10-admin-menu', 'news10_welcome_page', 'dashicons-smiley', 2 );
    add_submenu_page('news10-admin-menu', 'Theme Options', 'Theme Options', 'manage_options', 'customize.php' );
    add_submenu_page( 'news10-admin-menu', esc_html__( 'Demo Importer', 'news10' ), esc_html__( 'Demo Importer', 'news10' ), 'administrator', 'ae-demo-importer',  'ae_demo_importer_function');
}