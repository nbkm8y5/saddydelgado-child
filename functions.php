<?php

/**
 * Enqueue scripts and styles.
 */
function saddydelgado_child_scripts()
{

    wp_enqueue_style('saddydelgado', get_template_directory_uri() . '/style.css', false, NULL, 'all');
    wp_enqueue_style('designer-child', get_stylesheet_directory_uri() . '/css/designer.css', false, NULL, 'all');
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css', false, NULL, 'all');
    wp_enqueue_style('saddydelgado-child', get_stylesheet_directory_uri() . '/style.css', false, NULL, 'all');
    wp_enqueue_style('josefin', 'https://fonts.googleapis.com/css?family=Josefin+Sans:400,600', false);

}

add_action('wp_enqueue_scripts', 'saddydelgado_child_scripts', 999);

// This theme uses wp_nav_menu() in several locations.
function register_nav_menus_child()
{
    register_nav_menus(array(
        'footer' => esc_html__('Footer', 'saddydelgado-child'),

    ));
}
add_action('init', 'register_nav_menus_child');


/**
 * Deregister plugin styles
 */
function deregister_plugin_styles_scripts()
{
//    wp_deregister_style('select2');
}

add_action('wp_print_styles', 'deregister_plugin_styles_scripts', 100);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function saddydelgado_child_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Header LG', 'saddydelgado-child'),
        'id' => 'header-one',
        'description' => esc_html__('Add widgets here please.', 'saddydelgado-child'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
    'name' => esc_html__('Header SM MD', 'saddydelgado-child'),
    'id' => 'header-three',
    'description' => esc_html__('Add widgets here please.', 'saddydelgado-child'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
));
    register_sidebar(array(
        'name' => esc_html__('Header XS', 'saddydelgado-child'),
        'id' => 'header-two',
        'description' => esc_html__('Add widgets here please.', 'saddydelgado-child'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer One', 'saddydelgado-child'),
        'id' => 'footer-one',
        'description' => esc_html__('Add widgets here please.', 'saddydelgado-child'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Two', 'saddydelgado-child'),
        'id' => 'footer-two',
        'description' => esc_html__('Add widgets here please.', 'saddydelgado-child'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'saddydelgado_child_widgets_init');

?>
