<?php 

        require('class-wp-bootstrap-navwalker.php') ;
/* 
 * function my_theme_enqueue_styles() {
 * wp_enqueue_style("my-bootstrap", get_template_directory_uri() . '/css/bootstrap.min.css') ;
*/

function my_theme_enqueue_styles() {
    
    wp_enqueue_style("bootstrap-css", get_template_directory_uri() . '/css/bootstrap.min.css') ;
    wp_enqueue_style("fontawesome-css", get_template_directory_uri() . '/css/fontawesome.min.css') ;
    wp_enqueue_style("main", get_template_directory_uri() . '/css/main.css') ;


}


function my_theme_enqueue_scripts() {
    
    wp_deregister_script('jquery') ;
    wp_enqueue_script('jquery', includes_url('/js/jquery/jquery.js') , false , '', true ) ;

    wp_enqueue_script('jquery') ;
    wp_enqueue_script("bootstrap-js", get_template_directory_uri() . '/js/bootstrap.min.js' , array() , false , true) ;
    wp_enqueue_script("main-js", get_template_directory_uri() . '/js/main.js' , array() , false , true) ;


    wp_enqueue_script("html5shiv", get_template_directory_uri() . '/js/html5shiv.js' ) ;
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9') ;
    wp_enqueue_script("respond", get_template_directory_uri() . '/js/respond.min.js' ) ;
    wp_script_add_data('respond', 'conditional', 'lt IE 9') ;

}

add_action('wp_enqueue_scripts','my_theme_enqueue_styles') ;
add_action('wp_enqueue_scripts','my_theme_enqueue_scripts') ;


function my_theme_reqister_nav_menu() {
    // register_nav_menu('bootstrap_menu', __('Navigation Bar')) ;

    register_nav_menus(array(
        'bootstrap_menu'=> 'Navigation Bar',
        'footer_menu'=> 'Footer Menu',
    )) ; 

} 

function my_theme_bootstrap_menu() {

wp_nav_menu(array(
    'theme_location'=> 'bootstrap_menu',
    'menu_class'=> 'navbar navbar-right',
    'container'=> false,
    'walker'=> new WP_Bootstrap_Navwalker(),
    'depth'=> 2,
)); 

} 

add_action('init','my_theme_bootstrap_menu') ;
