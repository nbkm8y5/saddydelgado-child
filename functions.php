<?php

/**
 * Enqueue scripts and styles.
 */
function saddydelgado_child_scripts() {

  wp_enqueue_style( 'saddydelgado', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style('saddydelgado-child', get_stylesheet_directory_uri() . '/style.css');
  wp_enqueue_style('designer-child', get_stylesheet_directory_uri() . '/css/designer.css');
  wp_enqueue_style('fontface-child', get_stylesheet_directory_uri() . '/css/fontface.css');

}
add_action( 'wp_enqueue_scripts', 'saddydelgado_child_scripts' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function saddydelgado_child_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Header', 'saddydelgado-child' ),
		'id'            => 'header',
		'description'   => esc_html__( 'Add widgets here please.', 'saddydelgado-child' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'saddydelgado_child_widgets_init' );

?>
