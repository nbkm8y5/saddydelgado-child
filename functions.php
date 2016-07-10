<?php

/**
 * Enqueue scripts and styles.
 */
function saddydelgado_child_scripts() {

  wp_enqueue_style( 'saddydelgado', get_template_directory_uri() . '/style.css', false, NULL, 'all');
  wp_enqueue_style('saddydelgado-child', get_stylesheet_directory_uri() . '/style.css', false, NULL, 'all');
  wp_enqueue_style('designer-child', get_stylesheet_directory_uri() . '/css/designer.css', false, NULL, 'all');
  wp_enqueue_style('font-awesome', get_stylesheet_directory_uri().'/css/font-awesome.css', false, NULL, 'all');

}
add_action( 'wp_enqueue_scripts', 'saddydelgado_child_scripts' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function saddydelgado_child_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Header LG', 'saddydelgado-child' ),
		'id'            => 'header-one',
		'description'   => esc_html__( 'Add widgets here please.', 'saddydelgado-child' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => esc_html__( 'Header XS', 'saddydelgado-child' ),
		'id'            => 'header-two',
		'description'   => esc_html__( 'Add widgets here please.', 'saddydelgado-child' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'saddydelgado-child' ),
		'id'            => 'footer-one',
		'description'   => esc_html__( 'Add widgets here please.', 'saddydelgado-child' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'saddydelgado-child' ),
		'id'            => 'footer-two',
		'description'   => esc_html__( 'Add widgets here please.', 'saddydelgado-child' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'saddydelgado_child_widgets_init' );

?>
